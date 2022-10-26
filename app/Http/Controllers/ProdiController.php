<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {

        $prodi = Prodi::all();
        return view('prodi.index', compact('prodi'));
    }

    public function create()
    {
        return view('prodi.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',


        ]);

        $prodi = new Prodi();
        $prodi->nama = $request->nama;
        $prodi->save();
        return redirect()->route('prodi.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        $prodi = Prodi::findOrFail($id);
        return view('prodi.show', compact('prodi'));
    }

    public function edit($id)
    {
        $prodi = Prodi::findOrFail($id);
        return view('prodi.edit', compact('prodi'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',

        ]);

        $prodi = Prodi::findOrFail($id);
        $prodi->nama = $request->nama;
        $prodi->save();
        return redirect()->route('prodi.index')
            ->with('success', 'Data berhasil diedit!');

    }

    public function destroy($id)
    {
        $prodi = Prodi::find($id);

        if (!prodi::destroy($id)) {
            return redirect()->back();
        }
        return redirect()->route('prodi.index')
            ->with('success', 'Data berhasil dihapus!');

    }
}
