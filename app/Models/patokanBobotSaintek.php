<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patokanBobotSaintek extends Model
{
    use HasFactory;

    protected $fillable = [
        'matematika',
        'fisika',
        'kimia',
        'biologi',
        'kesanggupan',
        'pilihan',
        'inggris',
        'ujian_lisan',
        'arab',
        'pemikiran',
        'pendanaan',
        'pendidikan_terakhir',
        'penghasilan',
    ];
}
