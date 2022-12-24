<?php

namespace App\Http\Controllers;

use App\Models\Kartukeluarga;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('penduduk', [
            'penduduk' => Kartukeluarga::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah-kk');
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
            'nomorkk' => 'required|unique:kartukeluargas|max:16',
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
            'namaibu' => 'required'
        ]);

        Kartukeluarga::create([
            'nomorkk' => $validatedData['nomorkk'],
            'nama' => $validatedData['nama']
        ]);

        Penduduk::create($validatedData);

        return redirect('/penduduk')->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kartukeluarga  $kartukeluarga
     * @return \Illuminate\Http\Response
     */
    public function show(Kartukeluarga $penduduk)
    {

        return view('detailkk',[
            'kk' => $penduduk,
            'penduduk' => Penduduk::where('nomorkk', $penduduk->nomorkk)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kartukeluarga  $kartukeluarga
     * @return \Illuminate\Http\Response
     */
    public function edit(Kartukeluarga $kartukeluarga)
    {
        return view('edit-penduduk');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kartukeluarga  $kartukeluarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kartukeluarga $kartukeluarga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kartukeluarga  $kartukeluarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kartukeluarga $penduduk)
    {   
        $data = Penduduk::where('nomorkk', $penduduk->nomorkk)->get();
        foreach($data as $d){
            Penduduk::destroy($d->id);
        }

        Kartukeluarga::destroy($penduduk->id);

        return redirect('penduduk')->with('success', 'Data Berhasil Dihapus!');

    }
}
