<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::all();
        return view('grades.index', compact('grades'));
    }

    public function create()
    {
        return view('grades.create');
    }

    public function store (Request $request)
    {
        $request->validate([
            'grade' => 'required',
            'amount' => 'required',
        ]);

        Grade::create($request->all());

        return redirect()->route('grade.index')->with('success', 'Berhasil menambahkan.');
    }

    public function edit(Grade $grade)
    {
   return view('grades.edit', compact('grade'));
    }

    public function destroy(Grade $grade)
    {
        $grade->delete();
       return redirect()->route('grades.index')->with('success','Kelas Berhasil Dihapus');
    }

}


    