<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Model\Kecamatan;
use App\Model\Sampel;
use Alert;

class SampelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sampels = Sampel::orderBy('nama', 'ASC')->get();
        return view('admin.sampel.index', compact('sampels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatans = Kecamatan::all();
        return view('admin.sampel.create', compact('kecamatans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'kecamatan_id' => 'required',
            'ph_air' => 'required',
            'salinitas' => 'required',
            'kadar_air' => 'required',
            'nitrogen' => 'required',
            'pasir' => 'required',
            'lanau' => 'required',
            'lempung' => 'required',
            'nama' => 'required'
        ];

        $rulesMessages = [
            'required' => 'Wajib diisi!'
        ];

        $this->validate($request, $rules, $rulesMessages);

        $data = [
            'id' => (string) Str::uuid(),
            'kecamatan_id' => $request->kecamatan_id,
            'ph_air' => $request->ph_air,
            'salinitas' => $request->salinitas,
            'kadar_air' => $request->kadar_air,
            'nitrogen' => $request->nitrogen,
            'pasir' => $request->pasir,
            'lanau' => $request->lanau,
            'lempung' => $request->lempung,
            'nama' => $request->nama,
            'created_by' => auth()->user()->id
        ];
        Sampel::create($data);

        Alert::success('Data berhasil disimpan!', 'Sukses');
        return redirect()->route('sampel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sampel = Sampel::find($id);
        $kecamatans = Kecamatan::all();
        return view('admin.sampel.edit', compact('sampel', 'kecamatans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'kecamatan_id' => 'required',
            'ph_air' => 'required',
            'salinitas' => 'required',
            'kadar_air' => 'required',
            'nitrogen' => 'required',
            'pasir' => 'required',
            'lanau' => 'required',
            'lempung' => 'required',
            'nama' => 'required'
        ];

        $rulesMessages = [
            'required' => 'Wajib diisi!'
        ];

        $this->validate($request, $rules, $rulesMessages);

        $sampel = Sampel::find($id);
        $data = [
            'kecamatan_id' => $request->kecamatan_id,
            'ph_air' => $request->ph_air,
            'salinitas' => $request->salinitas,
            'kadar_air' => $request->kadar_air,
            'nitrogen' => $request->nitrogen,
            'pasir' => $request->pasir,
            'lanau' => $request->lanau,
            'lempung' => $request->lempung,
            'nama' => $request->nama
        ];
        $sampel->update($data);

        Alert::success('Data berhasil diubah!', 'Sukses');
        return redirect()->route('sampel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sampel = Sampel::find($id);
        $sampel->delete();

        Alert::success('Data berhasil dihapus!', 'Sukses');
        return redirect()->route('sampel.index');
    }
}
