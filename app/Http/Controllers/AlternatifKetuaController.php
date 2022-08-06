<?php

namespace App\Http\Controllers;
use App\Models\AlternatifKetua;
use Illuminate\Http\Request;
use Validator;
use RealRashid\SweetAlert\Facades\Alert;
class AlternatifKetuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $new_alternatif = AlternatifKetua::get();
        return view('pages.alternatif.ketua',['ketua' => $new_alternatif]);
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
        'kode_alternatif' => 'required|between:2,10',
        'nama_alternatif' => 'required|between:2,100',
        't_alternatif' => 'required',
        'tl_alternatif' => 'required',
        'alamat_alternatif' => 'required',
        'phone' => 'required|between:10,12',
        'jk_alternatif' => 'required',
        'pendidikan_alternatif' => 'required'
      ]
      )->validate();
      $alternatif = AlternatifKetua::where('kode_alternatif', $request->kode_alternatif)->first('kode_alternatif');
      if ($alternatif) {
        Alert::error('Gagal', 'Kode Alternatif Sudah Ada!');
        return response()->json('Berhasil');
      }else {
        $new_alternatif = new AlternatifKetua;
        $new_alternatif->kode_alternatif = $request->kode_alternatif;
        $new_alternatif->nama_alternatif = $request->nama_alternatif;
        $new_alternatif->t_alternatif = $request->t_alternatif;
        $new_alternatif->tl_alternatif = $request->tl_alternatif;
        $new_alternatif->alamat_alternatif = $request->alamat_alternatif;
        $new_alternatif->telp_alternatif = $request->phone;
        $new_alternatif->jk_alternatif = $request->jk_alternatif;
        $new_alternatif->pendidikan_alternatif = $request->pendidikan_alternatif;
        $new_alternatif->save();
        Alert::success('Berhasil', 'Data Alternatif Berhasil Di Tambahkan');
        return response()->json($new_alternatif);
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
      $new_alternatif = AlternatifKetua::find($id);
      return response()->json($new_alternatif);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit(Request $request)
     {
       // dd($request);
       \Validator::make($request->all(),
       [
         'kode_alternatif' => 'required|between:2,10',
         'nama_alternatif' => 'required|between:2,100',
         't_alternatif' => 'required',
         'tl_alternatif' => 'required',
         'alamat_alternatif' => 'required',
         'phone' => 'required|between:10,12',
         'jk_alternatif' => 'required',
         'pendidikan_alternatif' => 'required'
       ]
       )->validate();
       $new_alternatif = AlternatifKetua::find($request->id);
       $new_alternatif->kode_alternatif = $request->kode_alternatif;
       $new_alternatif->nama_alternatif = $request->nama_alternatif;
       $new_alternatif->t_alternatif = $request->t_alternatif;
       $new_alternatif->tl_alternatif = $request->tl_alternatif;
       $new_alternatif->alamat_alternatif = $request->alamat_alternatif;
       $new_alternatif->telp_alternatif = $request->phone;
       $new_alternatif->jk_alternatif = $request->jk_alternatif;
       $new_alternatif->pendidikan_alternatif = $request->pendidikan_alternatif;
       $new_alternatif->save();
       Alert::success('Berhasil', 'Data Alternatif Berhasil Di Edit');
       return response()->json($new_alternatif);
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
      $new_alternatif = AlternatifKetua::findOrFail($id);
      $new_alternatif->delete();
      Alert::success('Berhasil', 'Data Alternatif Berhasil Di Hapus');
      return response()->json();
    }
}
