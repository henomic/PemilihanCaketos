<?php

namespace App\Http\Controllers;

use App\Models\paslon;
use App\Models\periode;
use Carbon\Carbon;
use Illuminate\Container\Attributes\Storage as AttributesStorage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage as FacadesStorage;
use Storage;

class CrudPaslon extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $periode = paslon::whereHas('periode', fn($q) => $q->where('tahun', Carbon::now()->format('Y')))->orderBy('created_at', 'desc')->first();

        $data['periode'] = periode::orderBy('tahun', 'desc')->get();
        $periodecek = periode::where('tahun', Carbon::now()->format('Y'))->first();

        $data['cek'] = 'tidak';
        if ($periodecek and $periodecek->status === 'buat' or $periodecek === null) {
            $data['cek'] = 'buat';
        }
        $data['no'] = 1;

        if ($periode and $periode->no_paslon) {

            $number = explode('-', $periode->no_paslon);
            $data['no'] += $number[1];
        }

        // dd($periode->no_paslon);

        return view('admin.paslon.indexPaslon', $data);
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

        // dd($request->nomber_paslon);
        $request->validate([
            'nomber_paslon' => 'required|string|max:255',
            'nama_ketua' => 'required|string|max:255',
            'nama_wakil' => 'required|string|max:255',
            'visi' => 'required',
            'misi' => 'required',
            'jargon' => 'required',
        ]);

        $cek_periode = periode::where('tahun', Carbon::now()->format('Y'))->first();

        $paslon = new Paslon;
        $paslon->no_paslon = $request->nomber_paslon;
        $paslon->nama_ketua = $request->nama_ketua;
        $paslon->nama_wakil = $request->nama_wakil;
        $paslon->visi = $request->visi;
        $paslon->misi = $request->misi;
        $paslon->jargon = $request->jargon;
        if (!$cek_periode) {
            $periode = new Periode;
            $periode->tahun = Carbon::now()->format('Y');
            $periode->status = 'buat';

            $periode->save();
            $paslon->id_periode = $periode->id;
        } else {
            // $cek_periode->;
            $paslon->id_periode = $cek_periode->id;
        }

        $path = $request->foto->storeAs('foto_paslon/', $request->foto->hashName(), 'public');
        $paslon->foto = $path;
        $paslon->vid = 'w';
        $paslon->save();

        toast('Paslon berhasil di tambahkan', 'success');

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
        // dd($request->nomber_paslon);
        $request->validate([
            'nomber_paslon' => 'required|string|max:255',
            'nama_ketua' => 'required|string|max:255',
            'nama_wakil' => 'required|string|max:255',
            'visi' => 'required',
            'misi' => 'required',
            'jargon' => 'required',
        ]);
        $paslon =  Paslon::find($id);
        $paslon->no_paslon = $request->nomber_paslon;
        $paslon->nama_ketua = $request->nama_ketua;
        $paslon->nama_wakil = $request->nama_wakil;
        $paslon->visi = $request->visi;
        $paslon->misi = $request->misi;
        $paslon->jargon = $request->jargon;

        if ($request->foto) {

            FacadesStorage::disk('public')->delete($paslon->foto);
            $path = $request->foto->storeAs('foto_paslon/', $request->foto->hashName(), 'public');
            $paslon->foto = $path;
        }
        $paslon->vid = 'w';
        $paslon->save();

        toast('Paslon berhasil di update', 'success');
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
