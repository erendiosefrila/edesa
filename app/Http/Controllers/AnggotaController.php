<?php

namespace App\Http\Controllers;

use App\Models\Kartukeluarga;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nomorkk' => 'required|max:16',
            'nama' => 'required|max:255',
            'nik' => 'required|unique:penduduks|max:16',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required',
            'agama' => 'required',
            'jeniskelamin' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'pernikahan' => 'required',
            'status' => 'required',
            'kewarganegaraan' => 'required',
            'namaayah' => 'required',
            'namaibu' => 'required',
            'kkid' => 'required'
        ]);

        Penduduk::create([
            'nomorkk' => $validatedData['nomorkk'],
            'nik' => $validatedData['nik'],
            'nama' => $validatedData['nama'],
            'tempatlahir' => $validatedData['tempatlahir'],
            'tanggallahir' => $validatedData['tanggallahir'],
            'agama' => $validatedData['agama'],
            'jeniskelamin' => $validatedData['jeniskelamin'],
            'pendidikan' => $validatedData['pendidikan'],
            'pekerjaan' => $validatedData['pekerjaan'],
            'pernikahan' => $validatedData['pernikahan'],
            'status' => $validatedData['status'],
            'kewarganegaraan' => $validatedData['kewarganegaraan'],
            'namaayah' => $validatedData['namaayah'],
            'namaibu' => $validatedData['namaibu']
        ]);

        return redirect('/penduduk/'. $validatedData['kkid'])->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function show(Penduduk $penduduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function edit(Penduduk $anggotum)
    {
        return view('edit-penduduk');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penduduk $penduduk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penduduk $penduduk)
    {
        //
    }

    public function createAnggota($anggotum)
    {
        return view('tambah-penduduk',[
            'kk' => Kartukeluarga::find($anggotum)
        ]);
    }
}
