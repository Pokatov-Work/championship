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

    public function games(){
        $this->belongsTo(Game::class);
    }
}
