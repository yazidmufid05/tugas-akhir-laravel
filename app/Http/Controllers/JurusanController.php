<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Jurusan; 

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ar_jurusan = Jurusan::all();

        return view('jurusan.index', compact('ar_jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
        ]);

        Jurusan::create($request->all());

        return redirect()->route('jurusan.index')
            ->with('success', 'Data jurusan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $jurusan = Jurusan::find($id);

        return view('jurusan.show', compact('jurusan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jurusan = Jurusan::find($id);

        return view('jurusan.edit', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string',
        ]);

        $jurusan = Jurusan::find($id);
        $jurusan->update($request->all());

        return redirect()->route('jurusan.index')
            ->with('success', 'Data jurusan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jurusan = Jurusan::find($id);
        $jurusan->delete();

        return redirect()->route('jurusan.index')
            ->with('success', 'Data jurusan deleted successfully.');
    }
}
