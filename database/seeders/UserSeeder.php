<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //  ROLE

        //Koordinator
        $rolekoor = new role();
        $rolekoor->name = 'koordinator';
        $rolekoor->display_name = 'koor';
        $rolekoor->description = '-';
        $rolekoor->save();

        //Dosen
        $roledosen = new role();
        $roledosen->name = 'dosen';
        $roledosen->display_name = 'dosen';
        $roledosen->description = '-';
        $roledosen->save();

        //Mahasiswa
        $rolemasis = new role();
        $rolemasis->name = 'mahasiswa';
        $rolemasis->display_name = 'mahasiswa';
        $rolemasis->description = '-';
        $rolemasis->save();


        // USER KOOR
        $koordinator = new User();
        $koordinator->name = 'kooritenas';
        $koordinator->nomorinduk = '1001';
        $koordinator->username = 'kooritenas';
        $koordinator->email = 'koor@itenas.com';
        $koordinator->no_tlp = '-';
        $koordinator->foto= '-';
        $koordinator->password=Hash::make('kooritenas1');
        $koordinator->save();
        $koordinator->attachRole($rolekoor);

        
    }

}
