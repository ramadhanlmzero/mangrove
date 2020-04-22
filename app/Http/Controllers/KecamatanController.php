<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Model\Kecamatan;
use Alert;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kecamatans = Kecamatan::orderBy('kecamatan', 'ASC')->get();
        return view('admin.kecamatan.index', compact('kecamatans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kecamatan.create');
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
            'kecamatan' => 'required'
        ];

        $rulesMessages = [
            'required' => 'Wajib diisi!'
        ];

        $this->validate($request, $rules, $rulesMessages);

        $data = [
            'id' => (string) Str::uuid(),
            'kecamatan' => $request->kecamatan,
            'created_by' => auth()->user()->id
        ];
        Kecamatan::create($data);

        Alert::success('Data berhasil disimpan!', 'Sukses');
        return redirect()->route('kecamatan.index');
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
        $kecamatan = Kecamatan::find($id);
        return view('admin.kecamatan.edit', compact('kecamatan'));
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
            'kecamatan' => 'required'
        ];

        $rulesMessages = [
            'required' => 'Wajib diisi!'
        ];

        $this->validate($request, $rules, $rulesMessages);

        $kecamatan = Kecamatan::find($id);
        $data = [
            'kecamatan' => $request->kecamatan
        ];
        $kecamatan->update($data);

        Alert::success('Data berhasil diubah!', 'Sukses');
        return redirect()->route('kecamatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kecamatan = Kecamatan::find($id);
        $kecamatan->delete();

        Alert::success('Data berhasil dihapus!', 'Sukses');
        return redirect()->route('kecamatan.index');
    }
}
