<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;


class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *@return \Illuminate\Http\Response
     */
        // public function index()
        // {
        //     $dtMahasiswa = Mahasiswa::all();
        // return view ('mahasiswa.data-mahasiswa',compact('dtMahasiswa'));
        // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('mahasiswa.create-mahasiswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Sekolah::create([
            'sd' => $request->sd,
            'smp' => $request->smp,
            'sma' => $request->sma,
            'kuliah' => $request->kuliah,
            
            
        ]);

        return redirect('data-mahasiswa')->with('success', 'Data Berhasil Disimpan!');
        //dd($request->all());
    }
    public function edit($id_sek)
    {
        $datasekolah = Sekolah::find($id_sek);
        return view ('mahasiswa.edit-mahasiswa', compact('data'));
    }
}
?>