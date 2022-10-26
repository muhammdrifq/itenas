<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Kelas;
use App\Models\Semester;
use App\Models\User;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {

        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        $user = User::all();
        $prodi = Prodi::all();
        $semester = Semester::all();
        $kelas = Kelas::all();
        return view('mahasiswa.create', compact('user','prodi','semester','kelas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nrp' => 'required',
            'id_kelas' => 'required',
            'id_semesters' => 'required',
            'id_prodis' => 'required',
            'id_users' => 'required',


        ]);

        $mahasiswa = new Mahasiswa();
        $mahasiswa->nrp = $request->nrp;
        $mahasiswa->id_kelas = $request->id_kelas;
        $mahasiswa->id_semesters = $request->id_semesters;
        $mahasiswa->id_prodis = $request->id_prodis;
        $mahasiswa->id_users = $request->id_users;
        $mahasiswa->save();
        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function edit($id)
    {
        $user = User::all();
        $prodi = Prodi::all();
        $semester = Semester::all();
        $kelas = Kelas::all();
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mahasiswa','kelas','semester','prodi','user'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nrp' => 'required',
            'id_kelas' => 'required',
            'id_semesters' => 'required',
            'id_prodis' => 'required',
            'id_users' => 'required',

        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->nrp = $request->nrp;
        $mahasiswa->id_kelas = $request->id_kelas;
        $mahasiswa->id_semesters = $request->id_semesters;
        $mahasiswa->id_prodis = $request->id_prodis;
        $mahasiswa->id_users = $request->id_users;
        $mahasiswa->save();
        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data berhasil diedit!');

    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);

        if (!mahasiswa::destroy($id)) {
            return redirect()->back();
        }
        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data berhasil dihapus!');

    }
}
