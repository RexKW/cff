<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date',
        'location',
        'description',
        'type',
        'link',
        'poster1',
        'poster2',
        'poster3'
    ];
}
