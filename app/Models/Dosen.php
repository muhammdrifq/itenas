<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    public $fillable = ['nip', 'id_users', 'id_prodis'];
    public $timestamps = true;

    public function user()
    {

        return $this->belongsTo(User::class, 'id_users');
    }

    public function prodi()
    {

        return $this->belongsTo(Prodi::class, 'id_prodis');
    }



}
