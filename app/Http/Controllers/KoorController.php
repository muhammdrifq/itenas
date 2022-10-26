<?php

namespace App\Http\Controllers;

use App\Models\Koor;
use App\Models\User;
use App\Models\Prodi;
use Illuminate\Http\Request;

class KoorController extends Controller
{
    public function index()
    {

        $koor = Koor::all();
        return view('koor.index', compact('koor'));
    }

    public function create()
    {
        $user = User::all();
        $prodi = Prodi::all();
        return view('koor.create', compact('user','prodi'));

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nrp' => 'required',
            'id_users' => 'required',
            'id_prodis' => 'required',


        ]);

        $koor = new Koor();
        $koor->nrp = $request->nrp;
        $koor->id_users = $request->id_users;
        $koor->id_prodis = $request->id_prodis;
        $koor->save();
        return redirect()->route('koor.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        $koor = Koor::findOrFail($id);
        return view('koor.show', compact('koor'));
    }

    public function edit($id)
    {
        $user = User::all();
        $prodi = Prodi::all();
        $koor = Koor::findOrFail($id);
        return view('koor.edit', compact('koor','prodi','user'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nrp' => 'required',
            'id_users' => 'required',
            'id_prodis' => 'required',

        ]);

        $koor = Koor::findOrFail($id);
        $koor->nrp = $request->nrp;
        $koor->id_users = $request->id_users;
        $koor->id_prodis = $request->id_prodis;
        $koor->save();
        return redirect()->route('koor.index')
            ->with('success', 'Data berhasil diedit!');

    }

    public function destroy($id)
    {
        $koor = Koor::find($id);

        if (!koor::destroy($id)) {
            return redirect()->back();
        }
        return redirect()->route('koor.index')
            ->with('success', 'Data berhasil dihapus!');

    }
}
