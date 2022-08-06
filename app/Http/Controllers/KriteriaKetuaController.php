<?php

namespace App\Http\Controllers;
use App\Models\KriteriaKetua;
use App\User;
use Validator;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class KriteriaKetuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ketua = kriteriaKetua::get();
        return view('pages.kriteria.ketua',compact('ketua'));
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
        'kode_kriteria' => 'required|between:2,10',
        'nama_kriteria' => 'required|between:2,100',
        'bobot_kriteria' => 'required|between:2,10'
      ]
      )->validate();
      $kriteria = KriteriaKetua::where('kode_kriteria', $request->kode_kriteria)->first('kode_kriteria');
      if ($kriteria) {
        Alert::error('Gagal', 'Kode Kriteria Sudah Ada!');
        return response()->json('Berhasil');
      }else {
        $new_kriteria = new KriteriaKetua;
        $new_kriteria->kode_kriteria = $request->kode_kriteria;
        $new_kriteria->nama_kriteria = $request->nama_kriteria;
        $new_kriteria->bobot_kriteria = $request->bobot_kriteria;
        $new_kriteria->save();
        Alert::success('Berhasil', 'Data Kriteria Berhasil Di Tambahkan');
        return response()->json($new_kriteria);
      }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $new_kriteria = KriteriaKetua::find($id);
      return response()->json($new_kriteria);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
      \Validator::make($request->all(),
      [
        'kode_kriteria' => 'required|between:2,10',
        'nama_kriteria' => 'required|between:2,100',
        'bobot_kriteria' => 'required|between:2,10'
      ]
      )->validate();
      $new_kriteria = KriteriaKetua::find($request->id);
      $new_kriteria->kode_kriteria = $request->kode_kriteria;
      $new_kriteria->nama_kriteria = $request->nama_kriteria;
      $new_kriteria->bobot_kriteria = $request->bobot_kriteria;
      $new_kriteria->save();
      Alert::success('Berhasil', 'Data Kriteria Berhasil Di Edit');
      return response()->json($new_kriteria);
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
      $new_kriteria = KriteriaKetua::findOrFail($id);
      $new_kriteria->delete();
      Alert::success('Berhasil', 'Data Kriteria Berhasil Di Hapus');
      return response()->json();
    }
}
