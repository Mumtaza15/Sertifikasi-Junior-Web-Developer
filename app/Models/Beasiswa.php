<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    use HasFactory;
    protected $table = 'pendaftaran';
    protected $fillable = [
        'nama', 
        'email', 
        'handphone', 
        'semester', 
        'ipk', 
        'pilihan_beasiswa', 
        'berkas_syarat',
        'status_ajuan',
    ];
}
