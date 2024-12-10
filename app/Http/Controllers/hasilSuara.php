<?php

namespace App\Http\Controllers;

use App\Models\paslon;
use App\Models\periode;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class hasilSuara extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['periode'] = periode::orderBy('tahun', 'desc')
            ->with(['paslon' => fn($q) => $q->withCount('suara as suaraPemilih')->orderBy('suaraPemilih', 'desc')])

            ->get();

        foreach ($data['periode'] as $value) {
            $value->top_paslon = $value->paslon->first();
            // echo $value->top_paslon->no_paslon;
        }





        return view('admin.hasilTampilan.periode', $data);
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
    public function show(Request $request, string $id)
    {
        $cek = $request->param ?? 'show';
        $data['hasil'] = paslon::whereHas('periode', fn($q) => $q->where('id', $id))->withCount('suara as suara')->orderBy('suara', 'desc')->groupBy('id')->get();

        $total = $data['hasil']->sum('suara');

        $data['hasil']->map(function ($q) use ($total) {
            $q->persentase = $total > 0 ? round(($q->suara / $total) * 100) : 0;
        });

        $data['total'] = $total;
        $data['top_paslon'] = $data['hasil']->sortByDesc('suara')->first();

        // dd($id);

        $data['tps'] = User::with([
            'suara',
            'suara.paslon' => fn($q) => $q
                ->withCount('suara as paslonSuara')->orderBy('paslonSuara', 'desc'),
            'suara.paslon.periode'
        ])->where('level', 'tps')->whereHas('suara.paslon.periode', fn($q) => $q->where('id_periode', $id))
            ->withCount([
                'suara as suaras' => fn($q) => $q->whereHas('paslon.periode', fn($query) => $query->where('id_periode', $id))
            ])
            ->having('suaras', '>', 0)
            ->orderBy('name', 'asc')->get();



        if ($cek === 'print') {


            $pdf = Pdf::loadView('admin.hasilTampilan.print', $data);
            return $pdf->download();
            // return view();
        }
        return view('admin.hasilTampilan.hasilPemilihan', $data);
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
