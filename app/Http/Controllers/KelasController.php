<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Dosen;
use App\Models\Prodi;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {

        $kelas = Kelas::all();
        return view('kelas.index', compact('kelas'));
    }

    public function create()
    {
        $dosen = Dosen::all();
        $prodi = Prodi::all();
        return view('kelas.create', compact('dosen','prodi'));

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_dosens' => 'required',
            'nama_kls' => 'required',
            'id_prodis' => 'required',


        ]);

        $kelas = new Kelas();
        $kelas->id_dosens = $request->id_dosens;
        $kelas->nama_kls = $request->nama_kls;
        $kelas->id_prodis = $request->id_prodis;
        $kelas->save();
        return redirect()->route('kelas.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        $kelas = kelas::findOrFail($id);
        return view('kelas.show', compact('kelas'));
    }

    public function edit($id)
    {
        $dosen = Dosen::all();
        $prodi = Prodi::all();
        $kelas = kelas::findOrFail($id);
        return view('kelas.edit', compact('kelas','dosen','prodi'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_dosens' => 'required',
            'nama_kls' => 'required',
            'id_prodis' => 'required',

        ]);

        $kelas = Kelas::findOrFail($id);
        $kelas->id_dosens = $request->id_dosens;
        $kelas->nama_kls = $request->nama_kls;
        $kelas->id_prodis = $request->id_prodis;
        $kelas->save();
        return redirect()->route('kelas.index')
            ->with('success', 'Data berhasil diedit!');

    }

    public function destroy($id)
    {
        $kelas = Kelas::find($id);

        if (!kelas::destroy($id)) {
            return redirect()->back();
        }
        return redirect()->route('kelas.index')
            ->with('success', 'Data berhasil dihapus!');

    }}
