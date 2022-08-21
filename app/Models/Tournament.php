<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected $fillable = [
      'game_id',
      'name',
      'date_start',
      'player',
      'prize_fund',
    ];

    /**
     * @param $id
     * @return mixed
     */
    public static function getTournamentCategoryGame($id)
    {
        return self::select()
            ->where('game_id',$id)
            ->get()
            ->toArray();
    }

    public function games()
    {
       return $this->belongsTo(Game::class);
    }
}
