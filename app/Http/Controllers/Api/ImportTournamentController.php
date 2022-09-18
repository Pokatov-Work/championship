<?php

namespace App\Http\Controllers\Api;


use App\Jobs\ImportJob;
use App\Models\Tournament;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImportTournamentController extends ApiController
{

    /**
     * Получение данных импорта и сохранение их в файлы
     * @param Request $request
     */
    public function getImportSave(Request $request)
    {
        $params = $request->all();
        $result = '';
        if (!empty($params)) {
            $result = $this->getSaveRequestData($params);
        }

        return $result;
    }

    public function getSaveRequestData($data)
    {
        $path = storage_path() . "\app\import\import_tournament\\file\\";
        $counter = 0;
        $fileCounter = 1;
        $currentList = [];
        foreach ($data as $item) {
            if ($counter == 10) {
                file_put_contents(
                    $path . $fileCounter . ".json",
                    print_r(json_encode($currentList), true),
                    FILE_APPEND
                );
                $currentList = [];
                $currentList[] = $item;
                $counter = 1;
                $fileCounter++;
                // Создаём задание
                ImportJob::dispatch()->onQueue('tournament');
            } else {
                $currentList[] = $item;
                $counter++;
            }
        }
        // Записываем оставщиеся
        file_put_contents(
            $path . $fileCounter . ".json",
            print_r(json_encode($currentList), true),
            FILE_APPEND
        );

        // Создаём задание
        ImportJob::dispatch()->onQueue('tournament');

        $arLog = [
            'total' => count($data),
            'fileCounter' => $fileCounter
        ];

        $this->logResult("log.json", $arLog);

        return $arLog;
    }

    /**
     * Обновление/добавление сотрудников из файла
     */
    public function getImportUpdate()
    {

        $path = storage_path() . "\app\import\import_tournament\\file\\";
        $files = scandir($path);
        unset($files[0]);
        unset($files[1]);
//if (count($files)){
//    dd($files);
//}
        dd(count($files));
//        ImportJob::dispatch()->onQueue('tournament');

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
