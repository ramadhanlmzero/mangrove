<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Model\Kecamatan;
use App\Model\Mangrove;
use Alert;

class MangroveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mangroves = Mangrove::orderBy('tahun', 'ASC')->get();
        return view('admin.mangrove.index', compact('mangroves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatans = Kecamatan::orderBy('kecamatan', 'ASC')->get();
        return view('admin.mangrove.create', compact('kecamatans'));
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
            'luas' => 'required',
            'persentase_luas' => 'required',
            'tahun' => 'required',
            'kondisi' => 'required'
        ];

        $rulesMessages = [
            'required' => 'Wajib diisi!'
        ];

        $this->validate($request, $rules, $rulesMessages);

        $data = [
            'id' => (string) Str::uuid(),
            'kecamatan_id' => $request->kecamatan_id,
            'luas' => $request->luas,
            'persentase_luas' => $request->persentase_luas,
            'tahun' => $request->tahun,
            'kondisi' => $request->kondisi,
            'created_by' => auth()->user()->id
        ];
        Mangrove::create($data);

        Alert::success('Data berhasil disimpan!', 'Sukses');
        return redirect()->route('mangrove.index');
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
        $mangrove = Mangrove::find($id);
        $kecamatans = Kecamatan::orderBy('kecamatan', 'ASC')->get();
        return view('admin.mangrove.edit', compact('mangrove', 'kecamatans'));
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
            'luas' => 'required',
            'persentase_luas' => 'required',
            'tahun' => 'required',
            'kondisi' => 'required'
        ];

        $rulesMessages = [
            'required' => 'Wajib diisi!'
        ];

        $this->validate($request, $rules, $rulesMessages);

        $mangrove = Mangrove::find($id);
        $data = [
            'kecamatan_id' => $request->kecamatan_id,
            'luas' => $request->luas,
            'persentase_luas' => $request->persentase_luas,
            'tahun' => $request->tahun,
            'kondisi' => $request->kondisi,
        ];
        $mangrove->update($data);

        Alert::success('Data berhasil diubah!', 'Sukses');
        return redirect()->route('mangrove.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mangrove = Mangrove::find($id);
        $mangrove->delete();

        Alert::success('Data berhasil dihapus!', 'Sukses');
        return redirect()->route('mangrove.index');
    }
}
