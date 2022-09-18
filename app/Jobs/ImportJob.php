<?php

namespace App\Jobs;

use App\Models\Tournament;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class ImportJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $path = storage_path() . "\app\import\import_tournament\\file\\";
        $this->logResult('Data_tournament.log', $path);
        $files = scandir($path);
        unset($files[0]);
        unset($files[1]);

        if (!empty($files)) {
            try {
//                $userId = User::first()->id;
                $fileName = array_shift($files);

                $openFile = file_get_contents($path . $fileName);
                $dataTournaments = json_decode($openFile, true);

                foreach ($dataTournaments as $tournament) {
                    $checkBaseTournament = Tournament::where('name', $tournament['Name'])->first();

                    $this->logResult('Data_tournament.log', $tournament);


                    if (!empty($checkBaseTournament)) {
//                        $dataEmployeeBase = $checkBaseTournament->data;

                        $checkBaseTournament['name'] = $tournament['Name'];
                        $checkBaseTournament['description'] = $tournament['Description'];
                        $checkBaseTournament['date_start'] = $tournament['DateStart'];
                        $checkBaseTournament['prize_fund'] = $tournament['PrizeFund'];

//                        unset($checkBaseTournament->data);
//                        $checkBaseTournament->data = $dataEmployeeBase;
//dd($checkBaseTournament);
                        DB::transaction(function () use ($checkBaseTournament) {
                            $checkBaseTournament->save();
                            $this->logResult('Update_tournament.log', $checkBaseTournament->toArray());
                        });

                    } else {

                        $newTournamentObj = new Tournament([
                            'game_id' => 1,
                            'name' => $tournament['Name'],
                            'description' => $tournament['Description'],
                            'date_start' => $tournament['DateStart'],
                            'player' => 0,
                            'prize_fund' => $tournament['PrizeFund'],
                            'image_path' => 'default-image.jpg',
                        ]);
//                        $newTournamentObj->setAttribute('created_by', $userId);
//                        dd($newTournamentObj);
                        $newTournamentObj->save();
                        $this->logResult('New_tournament.log', $newTournamentObj->toArray());
                    }

                }

                unlink($path . $fileName);

                //print_r($fileName);

            } catch (\Exception $e) {
                $this->logResult('Error.log', $e);
            }
        }
    }

    /**
     * Логирование данных импорта
     * @param $fileName
     * @param $data
     */
    public function logResult($fileName, $data)
    {
        $path = storage_path() . "\app\import\import_tournament\log\\" . $fileName;

        file_put_contents(
            $path,
            print_r($data, true),
            FILE_APPEND
        );
    }
}
