<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trend extends Model
{
    protected $fillable =[
        'trend_id',
        'name'
    ];
    use HasFactory;
}
