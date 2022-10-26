<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prodi = new Prodi();
        $prodi->nama = 'Teknik Elektro';
        $prodi->save();

        $prodi = new Prodi();
        $prodi->nama = 'Teknik Mesin';
        $prodi->save();

        $prodi = new Prodi();
        $prodi->nama = 'Magister Teknik Mesin';
        $prodi->save();

        $prodi = new Prodi();
        $prodi->nama = 'Teknik Industri';
        $prodi->save();

        $prodi = new Prodi();
        $prodi->nama = 'Magister Teknik Industri';
        $prodi->save();

        $prodi = new Prodi();
        $prodi->nama = 'Teknik Kimia';
        $prodi->save();

        $prodi = new Prodi();
        $prodi->nama = 'Informatika';
        $prodi->save();

        $prodi = new Prodi();
        $prodi->nama = 'Sistem Informasi';
        $prodi->save();
    }
}
