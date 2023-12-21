<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    use HasFactory;
    protected $table ='Relations';
    protected $fillable =[
        'mahasiswa_npm','dosen_nidn','matakuliah_kode','status',
    ];
}
