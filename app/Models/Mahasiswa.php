<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    public $fillable = ['nrp', 'id_semesters',  'id_kelas', 'id_users', 'id_prodis'];
    public $timestamps = true;

    public function kelas()
    {

        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    public function semester()
    {

        return $this->belongsTo(Semester::class, 'id_semesters');
    }

    public function user()
    {

        return $this->belongsTo(User::class, 'id_users');
    }

    public function prodi()
    {

        return $this->belongsTo(Prodi::class, 'id_prodis');
    }

}
