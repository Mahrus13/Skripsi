<?php

namespace App\Http\Controllers;
use App\Models\KriteriaKetua;
use App\Models\SubKetua;
use App\Models\PivotKetua;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use App\User;

class SubKetuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ketua = KriteriaKetua::all();
        $hasil = KriteriaKetua::get();
        return view('pages.subkriteria.ketua', compact('ketua','hasil'));
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
      \Validator::make($request->all(),
      [
        'kriteriaketua_id' => 'required',
        'sub_kriteria' => 'required',
        'nilai' => 'required',
        'keterangan' => 'required'
      ]
      )->validate();
      
      $new_subketua = new SubKetua;
      $new_subketua->sub_kriteria = $request->get('sub_kriteria');
      $new_subketua->nilai = $request->get('nilai');
      $new_subketua->keterangan = $request->get('keterangan');
      $new_subketua->save();

      DB::table('pivot_ketua')->insert([
        'ketua_id' => $request->get('kriteriaketua_id'),
        'subketua_id' => $new_subketua->id
      ]);
      Alert::success('Berhasil', 'Data Sub Kriteria Berhasil Di Tambahkan');
      return response()->json($new_subketua);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $new_sub = SubKetua::find($id);
      return response()->json($new_sub);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit(Request $request)
     {
       $new_subkriteria = SubKetua::find($request->id);
       // $new_subkriteria->kode_kriteria = $request->kode_kriteria;
       $new_subkriteria->sub_kriteria = $request->sub_kriteria;
       $new_subkriteria->nilai = $request->nilai;
       $new_subkriteria->keterangan = $request->keterangan;
       $new_subkriteria->save();
       Alert::success('Berhasil', 'Data Sub Kriteria Berhasil Di Edit');
       return response()->json($new_subkriteria);
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
      $new_sub = SubKetua::findOrFail($id);
      $new_sub->delete();
      Alert::success('Berhasil', 'Data Sub Kriteria Berhasil Di Hapus');
      return response()->json();
    }
}
