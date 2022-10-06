<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cup extends Model
{
    protected $fillable = [
        'cup_id',
        'name',
        'country'
    ];
    use HasFactory;
}
