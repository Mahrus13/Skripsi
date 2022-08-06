<?php

namespace App\Http\Controllers;
use App\Models\AlternatifAnggota;
use App\Models\KriteriaAnggota;
use App\Models\PenilaianAnggota;
use App\Models\HasilNilaiAnggota;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use DB;

class PenilaianAnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alternatif = AlternatifAnggota::get();
        $kriteria = KriteriaAnggota::get();
        $penilaian = DB::table('penilaian_anggota')
                    ->join('alternatif_anggota', 'alternatif_anggota.id', '=', 'penilaian_anggota.alternatif_id')
                    ->join('users', 'users.id', '=', 'penilaian_anggota.user_id')
                    ->selectRaw('penilaian_anggota.*,alternatif_anggota.nama_alternatif,users.level,users.name')
                    ->where('user_id', '=' , Auth::user()->id)
                    ->get();
        // dd($penilaian);
        return view ('pages.penilaian.anggota',compact('alternatif','kriteria','penilaian'));
    }

    public function indexAdmin()
    {
        $alternatif = AlternatifAnggota::get();
        $kriteria = KriteriaAnggota::get();
        $jumlah = HasilNilaiAnggota::selectRaw('id')->count();
        $penilaian = DB::table('penilaian_anggota')
                    ->join('alternatif_anggota', 'alternatif_anggota.id', '=', 'penilaian_anggota.alternatif_id')
                    ->join('users', 'users.id', '=', 'penilaian_anggota.user_id')
                    ->selectRaw('penilaian_anggota.*,alternatif_anggota.nama_alternatif,users.level,users.name')
                    ->get();
        // dd($penilaian);
        return view ('pages.penilaian.adminanggota',compact('alternatif','kriteria','penilaian','jumlah'));
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
      $nilai = PenilaianAnggota::where('alternatif_id', $request->alternatif_id)->where('user_id', Auth::user()->id)->first('alternatif_id');
      if ($nilai) {
        Alert::error('Gagal', 'Data Penilaian Sudah Ada!');
        return response()->json('Berhasil');
      }else {
        $new_penilaian = new PenilaianAnggota;
        $new_penilaian->alternatif_id = $request->alternatif_id;
        $new_penilaian->user_id = Auth::user()->id;
        $new_penilaian->nilai_1 = $request->nilai_1;
        $new_penilaian->nilai_2 = $request->nilai_2;
        $new_penilaian->nilai_3 = $request->nilai_3;
        $new_penilaian->nilai_4 = $request->nilai_4;
        $new_penilaian->save();
        Alert::success('Berhasil', 'Data Penilaian Berhasil Di Tambahkan');
        return response()->json($new_penilaian);
      }

    }

    public function storeHasil(Request $request)
    {
      $max_1 = PenilaianAnggota::select('nilai_1')->where('user_id','=',2)->max('nilai_1');
      $min_1 = PenilaianAnggota::select('nilai_1')->where('user_id','=',2)->min('nilai_1');
      $max_2 = PenilaianAnggota::select('nilai_2')->where('user_id','=',2)->max('nilai_2');
      $min_2 = PenilaianAnggota::select('nilai_2')->where('user_id','=',2)->min('nilai_2');
      $max_3 = PenilaianAnggota::select('nilai_3')->where('user_id','=',2)->max('nilai_3');
      $min_3 = PenilaianAnggota::select('nilai_3')->where('user_id','=',2)->min('nilai_3');
      $max_4 = PenilaianAnggota::select('nilai_4')->where('user_id','=',2)->max('nilai_4');
      $min_4 = PenilaianAnggota::select('nilai_4')->where('user_id','=',2)->min('nilai_4');

      $max_1_ = PenilaianAnggota::select('nilai_1')->where('user_id','=',3)->max('nilai_1');
      $min_1_ = PenilaianAnggota::select('nilai_1')->where('user_id','=',3)->min('nilai_1');
      $max_2_ = PenilaianAnggota::select('nilai_2')->where('user_id','=',3)->max('nilai_2');
      $min_2_ = PenilaianAnggota::select('nilai_2')->where('user_id','=',3)->min('nilai_2');
      $max_3_ = PenilaianAnggota::select('nilai_3')->where('user_id','=',3)->max('nilai_3');
      $min_3_ = PenilaianAnggota::select('nilai_3')->where('user_id','=',3)->min('nilai_3');
      $max_4_ = PenilaianAnggota::select('nilai_4')->where('user_id','=',3)->max('nilai_4');
      $min_4_ = PenilaianAnggota::select('nilai_4')->where('user_id','=',3)->min('nilai_4');

      $max_1_1 = PenilaianAnggota::select('nilai_1')->where('user_id','=',4)->max('nilai_1');
      $min_1_1 = PenilaianAnggota::select('nilai_1')->where('user_id','=',4)->min('nilai_1');
      $max_2_1 = PenilaianAnggota::select('nilai_2')->where('user_id','=',4)->max('nilai_2');
      $min_2_1 = PenilaianAnggota::select('nilai_2')->where('user_id','=',4)->min('nilai_2');
      $max_3_1 = PenilaianAnggota::select('nilai_3')->where('user_id','=',4)->max('nilai_3');
      $min_3_1 = PenilaianAnggota::select('nilai_3')->where('user_id','=',4)->min('nilai_3');
      $max_4_1 = PenilaianAnggota::select('nilai_4')->where('user_id','=',4)->max('nilai_4');
      $min_4_1 = PenilaianAnggota::select('nilai_4')->where('user_id','=',4)->min('nilai_4');

      $a = KriteriaAnggota::get();
      $b = DB::table('penilaian_anggota')
                  ->join('alternatif_anggota', 'alternatif_anggota.id', '=', 'penilaian_anggota.alternatif_id')
                  ->join('users', 'users.id', '=', 'penilaian_anggota.user_id')
                  ->selectRaw('penilaian_anggota.*,alternatif_anggota.nama_alternatif,users.name')
                  ->get();
      $normalisasi = DB::table('kriteria_anggota')->sum('bobot_kriteria');
      foreach ($a as $key => $value) {
        $res[] = [
          'bobot_kriteria' => $value->bobot_kriteria/$normalisasi
        ];
      }
      $data_1 = $res[0];
      $data_2 = $res[1];
      $data_3 = $res[2];
      $data_4 = $res[3];

      foreach ($b as $key => $value) {
        if (($value->user_id) == 2) {
          $res_1[] =[
              'id' => $value->id,
              'alternatif_id' => $value->alternatif_id,
              'user_id' => $value->user_id,
              'nilai_1' => (($value->nilai_1 - $min_1)/($max_1 - $min_1))*$res[0]['bobot_kriteria'],
              'nilai_2' => (($value->nilai_2 - $min_2)/($max_2 - $min_2))*$res[1]['bobot_kriteria'],
              'nilai_3' => (($value->nilai_3 - $min_3)/($max_3 - $min_3))*$res[2]['bobot_kriteria'],
              'nilai_4' => (($value->nilai_4 - $min_4)/($max_4 - $min_4))*$res[3]['bobot_kriteria'],
              'created_at' => $value->created_at,
              'updated_at' => $value->updated_at,
              'nama_alternatif' => $value->nama_alternatif,
              'name' => $value->name,
          ];
        }elseif (($value->user_id) == 3) {
          $res_1[] =[
              'id' => $value->id,
              'alternatif_id' => $value->alternatif_id,
              'user_id' => $value->user_id,
              'nilai_1' => (($value->nilai_1 - $min_1_)/($max_1_ - $min_1_))*$res[0]['bobot_kriteria'],
              'nilai_2' => (($value->nilai_2 - $min_2_)/($max_2_ - $min_2_))*$res[1]['bobot_kriteria'],
              'nilai_3' => (($value->nilai_3 - $min_3_)/($max_3_ - $min_3_))*$res[2]['bobot_kriteria'],
              'nilai_4' => (($value->nilai_4 - $min_4_)/($max_4_ - $min_4_))*$res[3]['bobot_kriteria'],
              'created_at' => $value->created_at,
              'updated_at' => $value->updated_at,
              'nama_alternatif' => $value->nama_alternatif,
              'name' => $value->name,
          ];
        }else {
          $res_1[] =[
              'id' => $value->id,
              'alternatif_id' => $value->alternatif_id,
              'user_id' => $value->user_id,
              'nilai_1' => (($value->nilai_1 - $min_1_1)/($max_1_1 - $min_1_1))*$res[0]['bobot_kriteria'],
              'nilai_2' => (($value->nilai_2 - $min_2_1)/($max_2_1 - $min_2_1))*$res[1]['bobot_kriteria'],
              'nilai_3' => (($value->nilai_3 - $min_3_1)/($max_3_1 - $min_3_1))*$res[2]['bobot_kriteria'],
              'nilai_4' => (($value->nilai_4 - $min_4_1)/($max_4_1 - $min_4_1))*$res[3]['bobot_kriteria'],
              'created_at' => $value->created_at,
              'updated_at' => $value->updated_at,
              'nama_alternatif' => $value->nama_alternatif,
              'name' => $value->name,
          ];
        }
      }
      foreach ($res_1 as $key => $value) {
        $hasil[]=[
          $new_hasil = new HasilNilaiAnggota,
          $new_hasil->nama_alternatif = $value['nama_alternatif'],
          $new_hasil->nilai_1 = $value['nilai_1'],
          $new_hasil->nilai_2 = $value['nilai_2'],
          $new_hasil->nilai_3 = $value['nilai_3'],
          $new_hasil->nilai_4 = $value['nilai_4'],
          $new_hasil->save(),
        ];
      }
      Alert::success('Berhasil', 'Data Nilai Berhasil Di Hitung, Silahkan Menuju Perhitungan');
      return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $new_penilaian = PenilaianAnggota::find($id);
      return response()->json($new_penilaian);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit(Request $request)
     {
       $new_penilaian = PenilaianAnggota::find($request->id);
       // $new_penilaian->alternatif_id = $request->alternatif_id;
       $new_penilaian->user_id = Auth::user()->id;
       $new_penilaian->nilai_1 = $request->nilai_1;
       $new_penilaian->nilai_2 = $request->nilai_2;
       $new_penilaian->nilai_3 = $request->nilai_3;
       $new_penilaian->nilai_4 = $request->nilai_4;
       $new_penilaian->save();
       Alert::success('Berhasil', 'Data Penilaian Berhasil Di Edit');
       return response()->json($new_penilaian);
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
       $new_penilaian = PenilaianAnggota::findOrFail($id);
       $new_penilaian->delete();
       Alert::success('Berhasil', 'Data Penilaian Berhasil Di Hapus');
       return response()->json();
     }

     public function destroySemua()
     {
       HasilNilaiAnggota::truncate();
       Alert::success('Berhasil', 'Data Penilaian Di Perhitungan Berhasil Di Hapus');
       return response()->json();
     }
}
