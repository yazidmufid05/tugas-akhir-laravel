<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Matakuliah; 

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ar_matakuliah = Matakuliah::all();

        return view('matakuliah.index', compact('ar_matakuliah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('matakuliah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'nilai' => 'required|numeric',
        ]);

        Matakuliah::create($request->all());

        return redirect()->route('matakuliah.index')
            ->with('success', 'Data matakuliah created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $matakuliah = Matakuliah::find($id);

        return view('matakuliah.show', compact('matakuliah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $matakuliah = Matakuliah::find($id);
        $ar_matakuliah = DB::table('matakuliah')->get(); 
        return view('matakuliah.edit', compact('matakuliah', 'ar_matakuliah'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string',
            'nilai' => 'required|numeric',
        ]);

        $matakuliah = Matakuliah::find($id);
        $matakuliah->update($request->all());

        return redirect()->route('matakuliah.index')
            ->with('success', 'Data matakuliah updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $matakuliah = Matakuliah::find($id);
        $matakuliah->delete();

        return redirect()->route('matakuliah.index')
            ->with('success', 'Data matakuliah deleted successfully.');
    }
}
