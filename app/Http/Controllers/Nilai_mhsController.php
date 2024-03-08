<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\NilaiMhs; 
use App\Models\Jurusan;
use App\Models\Matakuliah;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\NilaiMhsExport;

class Nilai_mhsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ar_nilai_mhs = DB::table('nilai_mhs')
            ->join('jurusan', 'jurusan.id', '=', 'nilai_mhs.jurusan_id')
            ->join('matakuliah', 'matakuliah.id', '=', 'nilai_mhs.matakuliah_id')
            ->select('nilai_mhs.*', 'jurusan.nama AS jur', 'matakuliah.nama AS mat')
            ->get();
    
        return view('nilai_mhs.index', compact('ar_nilai_mhs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ar_jurusan = Jurusan::all();
        $ar_matakuliah = Matakuliah::all();

        return view('nilai_mhs.create', compact('ar_jurusan', 'ar_matakuliah'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'nim' => 'required|string',
            'jurusan_id' => 'required|numeric',
            'kota' => 'required|string',
            'provinsi' => 'required|string',
            'matakuliah_id' => 'required|numeric',
        ]);

        NilaiMhs::create($request->all());

        return redirect()->route('nilai_mhs.index')
            ->with('success', 'Data nilai mahasiswa created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $nilaiMhs = NilaiMhs::with('jurusan', 'matakuliah')->find($id);
    
        return view('nilai_mhs.show', compact('nilaiMhs'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */public function edit($id)
    {
        $nilaiMhs = NilaiMhs::find($id);
        $ar_jurusan = DB::table('jurusan')->get();
        $ar_matakuliah = DB::table('matakuliah')->get(); 

    return view('nilai_mhs.edit', compact('nilaiMhs', 'ar_jurusan', 'ar_matakuliah'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string',
            'nim' => 'required|string',
            'jurusan_id' => 'required|numeric',
            'kota' => 'required|string',
            'provinsi' => 'required|string',
            'matakuliah_id' => 'required|numeric',
        ]);

        $nilaiMhs = NilaiMhs::find($id);
        $nilaiMhs->update($request->all());

        return redirect()->route('nilai_mhs.index')
            ->with('success', 'Data nilai mahasiswa updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $nilaiMhs = NilaiMhs::find($id);
        $nilaiMhs->delete();

        return redirect()->route('nilai_mhs.index')
            ->with('success', 'Data nilai mahasiswa deleted successfully.');
    }
    public function nilai_mhsPDF()
    {
        $ar_nilai_mhs = DB::table('nilai_mhs')
            ->join('jurusan', 'jurusan.id', '=', 'nilai_mhs.jurusan_id')
            ->join('matakuliah', 'matakuliah.id', '=', 'nilai_mhs.matakuliah_id')
            ->select('nilai_mhs.*', 'jurusan.nama AS jur', 'matakuliah.nama AS mat')
            ->get();
    
        $pdf = PDF::loadView('nilai_mhs/nilai_mhsPDF', ['ar_nilai_mhs' => $ar_nilai_mhs]);
        return $pdf->download('dataNilaiMhs.pdf');
    }
    public function nilai_mhscsv()
    {
        return Excel::download(new NilaiMhsExport, 'nilai_mhs.csv');
    }
}