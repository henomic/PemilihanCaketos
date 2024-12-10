<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TpsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['tps'] = User::where('level', 'tps')->orderByRaw("
        CASE 
        WHEN 
        status ='aktif' THEN 1
ELSE 2
 END
        ")->orderBy('created_at', 'asc')->get();
        $tps = User::where('level', 'tps')->orderBy('created_at', 'desc')->first();
        $data['noTps'] = 1;
        if ($tps) {

            $no = explode('-', $tps);
            $data['noTps'] +=   (int)$no[1];
        }

        return view('admin.tps.indexTps', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama_tps' => 'required|unique:users,name'
        ]);

        $user = new User;
        $user->name = $request->nama_tps;
        $user->level = 'tps';
        $user->status = 'aktif';
        $user->password = Hash::make($request->nama_tps);
        $user->save();
        toast('data TPS berhasil di tambahkan');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $request->validate([
            'param' => 'required'
        ]);
        $user =        User::find($id);
        $user->status = $request->param;
        $user->save();
        toast('Berhasil di update', 'success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
