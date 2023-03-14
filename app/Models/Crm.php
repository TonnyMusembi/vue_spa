<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crm extends Model
{
    protected $fillable = [
        'crm_status',
        'name'
    ];
    use HasFactory;
}
