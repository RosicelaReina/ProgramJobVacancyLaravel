<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'charge',
        'salary',
        'city',
        'company',
        'typeContract',
        'title',
        'requeriments',
        'state',
        'visibility'
    ];
}
