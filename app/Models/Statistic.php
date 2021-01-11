<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;
    protected $table = 'statistics';
    public $timestamps = false;
    protected $attributes = [
        'legendary' => 0,
        'epic' => 0,
        'rare' => 0,
        'uncommon' => 0,
        'common' => 0
    ];
}
