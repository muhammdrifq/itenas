<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\User;
use App\Models\Prodi;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {

        $dosen = Dosen::all();
        return view('dosen.index', compact('dosen'));
    }

    public function create()
    {
        $user = User::all();
        $prodi = Prodi::all();
        return view('dosen.create', compact('user','prodi'));

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nip' => 'required',
            'id_users' => 'required',
            'id_prodis' => 'required',


        ]);

        $dosen = new Dosen();
        $dosen->nip = $request->nip;
        $dosen->id_users = $request->id_users;
        $dosen->id_prodis = $request->id_prodis;
        $dosen->save();
        return redirect()->route('dosen.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosen.show', compact('dosen'));
    }

    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);
        $user = User::all();
        $prodi = Prodi::all();
        return view('dosen.edit', compact('dosen', 'user', 'prodi'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nip' => 'required',
            'id_users' => 'required',
            'id_prodis' => 'required',

        ]);

        $dosen = Dosen::findOrFail($id);
        $dosen->nip = $request->nip;
        $dosen->id_users = $request->id_users;
        $dosen->id_prodis = $request->id_prodis;
        $dosen->save();
        return redirect()->route('dosen.index')
            ->with('success', 'Data berhasil diedit!');

    }

    public function destroy($id)
    {
        $dosen = Dosen::find($id);

        if (!dosen::destroy($id)) {
            return redirect()->back();
        }
        return redirect()->route('dosen.index')
            ->with('success', 'Data berhasil dihapus!');

    }}
