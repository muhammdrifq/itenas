<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Role;
use App\Models\Prodi;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email:dns', 'unique:users'],
            'nomorinduk' => ['required', 'string', 'max:255', 'unique:users'],
            'username' => ['string', 'max:255', 'unique:users'],
            'no_tlp' => ['string', 'max:255'],
            'id_prodis' => ['required'],
            // 'foto' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]
            
        );

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'nomorinduk' => $data['nomorinduk'],
            'username' => $data['username'],
            'no_tlp' => $data['no_tlp'],
            'id_prodis' => $data['id_prodis'],
            // 'foto' => $data['foto'],
            'password' => Hash::make($data['password'])

        ]);

       
        $mahasiswa = Role::where('name', 'mahasiswa')->first();
        $user->attachRole($mahasiswa);
        return $user;
    }

    // protected function createmahasiswa(){

    //     $masis = new Mahasiswa();
    //     $masis->id_users = User::where('id');
    //     $masis->nip = User::where('nomorinduk');
    //     $masis->i

    // }
}
