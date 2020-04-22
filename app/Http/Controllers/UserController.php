<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        //
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
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
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
            'nama' => 'required',
            'email' => 'required|unique:users,email,' . $id
        ];

        $rulesMessages = [
            'required' => 'Wajib diisi!',
            'email.unique' => 'Email sudah pernah dipakai!'
        ];

        $this->validate($request, $rules, $rulesMessages);

        $user = User::find($id);
        $data = [
            'nama' => $request->nama,
            'email' => $request->email
        ];
        $user->update($data);

        Alert::success('Data berhasil diubah!', 'Sukses');
        return redirect()->route('dashboard');
    }

    public function reset($id)
    {
        if (auth()->user()->id == $id) {
            $user = User::find($id);
            return view('admin.user.reset', compact('user'));
        }
        return redirect()->route('dashboard');
    }

    public function resetpassword(Request $request, $id)
    {
        if (auth()->user()->id == $id) {
            $user = User::find($id);
            if (Hash::check($request->oldpassword, $user->password)) {
                $user->password = bcrypt($request->newpassword);
                $user->update();
                Alert::success('Password berhasil diubah!', 'Sukses');
                return redirect()->route('dashboard');
            }
            else {
                return redirect()->route('user.reset', $id)->with('error', 'Password lama anda salah!');
            }
            return $user;
        }
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
