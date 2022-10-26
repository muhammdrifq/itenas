<?php

namespace App\Http\Controllers;

use App\Models\Semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    public function index()
    {

        $semester = Semester::all();
        return view('semester.index', compact('semester'));
    }

    public function create()
    {
        return view('semester.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tingkat' => 'required',


        ]);

        $semester = new Semester();
        $semester->tingkat = $request->tingkat;
        $semester->save();
        return redirect()->route('semester.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        $semester = Semester::findOrFail($id);
        return view('semester.show', compact('semester'));
    }

    public function edit($id)
    {
        $semester = semester::findOrFail($id);
        return view('semester.edit', compact('semester'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'tingkat' => 'required',

        ]);

        $semester = Semester::findOrFail($id);
        $semester->tingkat = $request->tingkat;
        $semester->save();
        return redirect()->route('semester.index')
            ->with('success', 'Data berhasil diedit!');

    }

    public function destroy($id)
    {
        $semester = Semester::find($id);

        if (!semester::destroy($id)) {
            return redirect()->back();
        }
        return redirect()->route('semester.index')
            ->with('success', 'Data berhasil dihapus!');

    }
}
