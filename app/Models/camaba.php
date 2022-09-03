<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class camaba extends Model
{
    use HasFactory;
    protected $fillable  = [
        'nama',
        'prodi1',
        'prodi2',
        'prodi3'
    ];
}
