<?php

namespace App\Http\Controllers;

use App\Models\paslon;
use App\Models\suara;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pemungutanSuara extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['paslon'] = paslon::whereHas('periode', fn($q) => $q->where('tahun', Carbon::now()->format('Y'))->where('status', 'pemilihan'))->get();
        return view('pemungutanSuara.pemilihan', $data);
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
        // dd($request->paslon);
        $request->validate([
            'paslon' => 'required'
        ]);
        $suara = new suara;
        $suara->id_paslon = $request->paslon;
        $suara->id_tps = Auth::user()->id;

        $suara->save();
        toast('Suara berhasil terkirim', 'success');

        return redirect()->route('pemungutanSuara.show', $suara->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['suara'] = suara::find($id);
        return view('pemungutanSuara.terimakasih', $data);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
