<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\Models\RiwayatKetua;
use DB;
class ArsipNilaiKetuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arsip= DB::table('riwayat_penilaian_ketua')
                  ->join('periode_ketua', 'periode_ketua.id', '=', 'riwayat_penilaian_ketua.periode_id')
                  ->orderBy('jumlah','desc')
                  ->orderBy('nilai_2','desc')
                  // ->selectRaw('penilaian_ketua.*,alternatif_ketua.nama_alternatif,users.level')
                  // ->where('user_id', '=' , Auth::user()->id)
                  ->get();
                  // dd($arsip);
        $periode = DB::table('periode_ketua')->get();
        // dd($periode);

        return view('pages.arsip.ketua',compact('arsip','periode'));
    }

    public function indexAnggota()
    {
        $arsip= DB::table('riwayat_penilaian_anggota')
                  ->join('periode_anggota', 'periode_anggota.id', '=', 'riwayat_penilaian_anggota.periode_id')
                  ->orderBy('jumlah','desc')
                  ->orderBy('nilai_1','desc')
                  // ->selectRaw('penilaian_ketua.*,alternatif_ketua.nama_alternatif,users.level')
                  // ->where('user_id', '=' , Auth::user()->id)
                  ->get();
                  // dd($arsip);
        $periode = DB::table('periode_anggota')->get();
        // dd($periode);
        return view('pages.arsip.anggota',compact('arsip','periode'));
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
        //
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
        //
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
