<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Container\Attributes\Auth as AttributesAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tps = User::find($request->tps);
        $cekTps =   Auth::attempt(['name' => $tps->name, 'password' => $tps->name]);
        if ($cekTps) {

            // echo 'bener';
            return redirect()->route('pemungutanSuara.index');
        } else {
            echo 'salah';
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    public function cekLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);


        $cek = Auth::attempt(['name' => $request->username, 'password' => $request->password]);

        if ($cek) {
            if (Auth::user()->level === 'admin') {
                toast('Berhasil login', 'success');

                return redirect()->route('adminPaslon.index');
            } else {
                Auth::logout();
                toast('Anda bukan admin', 'error');

                return redirect()->back();
            }
        } else {
            toast('Maaf password atau email salah', 'error');
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        $request->validate([
            'username' => 'required',

        ]);
        $user->name = $request->username;

        toast('User telah di update', 'success');
        if ($request->pw_dulu and $request->pw_baru) {

            $request->validate([
                'username' => 'required',
                'pw_dulu' => 'required',
                'pw_baru' => 'required',

            ]);

            if (Hash::check($request->pw_dulu, $user->password)) {
                $user->password = Hash::make($request->pw_baru);
            } else {
                toast('User atau password salah', 'error');
            }
        }

        $user->save();
        return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Auth::logout();

        return redirect()->route('/');
    }
}
