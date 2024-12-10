<?php

namespace App\Http\Controllers;

use App\Models\periode;
use Illuminate\Http\Request;

class adminCreatePeriode extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        // return view('admin.periode.indexPeriode');
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
        //
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
        $periode = periode::with(['paslon', 'paslon.suara'])->find($id);
        if ($request->param === 'hapus') {
            $periode->delete();
        } elseif ($request->param === 'anulir') {
            foreach ($periode->paslon as $value) {
                $value->suara()->delete();
            }
            $periode->status = 'buat';
            $periode->save();
        } else {

            $periode->status = $request->param;
            $periode->save();
        }
        toast('Status berhasil di update', 'success');
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
