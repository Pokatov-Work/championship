<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'img',
        'name'
    ];

    public function tournaments(){
        $this->hasMany(Tournament::class)->orderBy('created_at');
    }
}
