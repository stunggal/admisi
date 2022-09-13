<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ti extends Model
{
    use HasFactory;

    protected $fillable = [
        'camaba_id',
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
        'pemikiran',
        'pendanaan',
        'pendidikan_terakhir',
        'penghasilan',
        'pilihan'
    ];
}
