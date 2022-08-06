<?php

namespace App\Http\Controllers;
use App\Models\AlternatifKetua;
use App\Models\KriteriaKetua;
use App\Models\PenilaianKetua;
use App\Models\HasilNilai;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use DB;

class PenilaianKetuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alternatif = AlternatifKetua::get();
        $kriteria = KriteriaKetua::get();
        $users = User::get();
        $penilaian = DB::table('penilaian_ketua')
                    ->join('alternatif_ketua', 'alternatif_ketua.id', '=', 'penilaian_ketua.alternatif_id')
                    ->join('users', 'users.id', '=', 'penilaian_ketua.user_id')
                    ->selectRaw('penilaian_ketua.*,alternatif_ketua.nama_alternatif,users.level')
                    ->where('user_id', '=' , Auth::user()->id)
                    ->get();
                    // dd($penilaian);
        return view ('pages.penilaian.ketua',compact('alternatif','kriteria','penilaian','users'));
    }

    public function indexAdmin()
    {
        $alternatif = AlternatifKetua::get();
        $kriteria = KriteriaKetua::get();
        // $users = User::get();
        $jumlah = HasilNilai::selectRaw('id')->count();
        // dd($jumlah);
        $penilaian = DB::table('penilaian_ketua')
                    ->join('alternatif_ketua', 'alternatif_ketua.id', '=', 'penilaian_ketua.alternatif_id')
                    ->join('users', 'users.id', '=', 'penilaian_ketua.user_id')
                    ->selectRaw('penilaian_ketua.*,alternatif_ketua.nama_alternatif,users.level,users.name')
                    ->get();

        return view ('pages.penilaian.Adminketua', compact('alternatif','kriteria','penilaian','jumlah'));
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
      $nilai = PenilaianKetua::where('alternatif_id', $request->alternatif_id)->where('user_id', Auth::user()->id)->first('alternatif_id');
      if ($nilai) {
        Alert::error('Gagal', 'Data Penilaian Sudah Ada!');
        return response()->json('Berhasil');
      }else {
        $new_penilaian = new PenilaianKetua;
        $new_penilaian->alternatif_id = $request->alternatif_id;
        $new_penilaian->user_id = Auth::user()->id;
        $new_penilaian->nilai_1 = $request->nilai_1;
        $new_penilaian->nilai_2 = $request->nilai_2;
        $new_penilaian->nilai_3 = $request->nilai_3;
        $new_penilaian->nilai_4 = $request->nilai_4;
        $new_penilaian->nilai_5 = $request->nilai_5;
        $new_penilaian->nilai_6 = $request->nilai_6;
        $new_penilaian->nilai_7 = $request->nilai_7;
        $new_penilaian->nilai_8 = $request->nilai_8;
        $new_penilaian->save();
        Alert::success('Berhasil', 'Data Penilaian Berhasil Di Tambahkan');
        return response()->json($new_penilaian);
      }

    }

    public function storeHasil(Request $request)
    {
      $max_1 = PenilaianKetua::select('nilai_1')->where('user_id','=',2)->max('nilai_1');
      $min_1 = PenilaianKetua::select('nilai_1')->where('user_id','=',2)->min('nilai_1');
      $max_2 = PenilaianKetua::select('nilai_2')->where('user_id','=',2)->max('nilai_2');
      $min_2 = PenilaianKetua::select('nilai_2')->where('user_id','=',2)->min('nilai_2');
      $max_3 = PenilaianKetua::select('nilai_3')->where('user_id','=',2)->max('nilai_3');
      $min_3 = PenilaianKetua::select('nilai_3')->where('user_id','=',2)->min('nilai_3');
      $max_4 = PenilaianKetua::select('nilai_4')->where('user_id','=',2)->max('nilai_4');
      $min_4 = PenilaianKetua::select('nilai_4')->where('user_id','=',2)->min('nilai_4');
      $max_5 = PenilaianKetua::select('nilai_5')->where('user_id','=',2)->max('nilai_5');
      $min_5 = PenilaianKetua::select('nilai_5')->where('user_id','=',2)->min('nilai_5');
      $max_6 = PenilaianKetua::select('nilai_6')->where('user_id','=',2)->max('nilai_6');
      $min_6 = PenilaianKetua::select('nilai_6')->where('user_id','=',2)->min('nilai_6');
      $max_7 = PenilaianKetua::select('nilai_7')->where('user_id','=',2)->max('nilai_7');
      $min_7 = PenilaianKetua::select('nilai_7')->where('user_id','=',2)->min('nilai_7');
      $max_8 = PenilaianKetua::select('nilai_8')->where('user_id','=',2)->max('nilai_8');
      $min_8 = PenilaianKetua::select('nilai_8')->where('user_id','=',2)->min('nilai_8');

      $max_1_ = PenilaianKetua::select('nilai_1')->where('user_id','=',3)->max('nilai_1');
      $min_1_ = PenilaianKetua::select('nilai_1')->where('user_id','=',3)->min('nilai_1');
      $max_2_ = PenilaianKetua::select('nilai_2')->where('user_id','=',3)->max('nilai_2');
      $min_2_ = PenilaianKetua::select('nilai_2')->where('user_id','=',3)->min('nilai_2');
      $max_3_ = PenilaianKetua::select('nilai_3')->where('user_id','=',3)->max('nilai_3');
      $min_3_ = PenilaianKetua::select('nilai_3')->where('user_id','=',3)->min('nilai_3');
      $max_4_ = PenilaianKetua::select('nilai_4')->where('user_id','=',3)->max('nilai_4');
      $min_4_ = PenilaianKetua::select('nilai_4')->where('user_id','=',3)->min('nilai_4');
      $max_5_ = PenilaianKetua::select('nilai_5')->where('user_id','=',3)->max('nilai_5');
      $min_5_ = PenilaianKetua::select('nilai_5')->where('user_id','=',3)->min('nilai_5');
      $max_6_ = PenilaianKetua::select('nilai_6')->where('user_id','=',3)->max('nilai_6');
      $min_6_ = PenilaianKetua::select('nilai_6')->where('user_id','=',3)->min('nilai_6');
      $max_7_ = PenilaianKetua::select('nilai_7')->where('user_id','=',3)->max('nilai_7');
      $min_7_ = PenilaianKetua::select('nilai_7')->where('user_id','=',3)->min('nilai_7');
      $max_8_ = PenilaianKetua::select('nilai_8')->where('user_id','=',3)->max('nilai_8');
      $min_8_ = PenilaianKetua::select('nilai_8')->where('user_id','=',3)->min('nilai_8');

      $max_1_1 = PenilaianKetua::select('nilai_1')->where('user_id','=',4)->max('nilai_1');
      $min_1_1 = PenilaianKetua::select('nilai_1')->where('user_id','=',4)->min('nilai_1');
      $max_2_1 = PenilaianKetua::select('nilai_2')->where('user_id','=',4)->max('nilai_2');
      $min_2_1 = PenilaianKetua::select('nilai_2')->where('user_id','=',4)->min('nilai_2');
      $max_3_1 = PenilaianKetua::select('nilai_3')->where('user_id','=',4)->max('nilai_3');
      $min_3_1 = PenilaianKetua::select('nilai_3')->where('user_id','=',4)->min('nilai_3');
      $max_4_1 = PenilaianKetua::select('nilai_4')->where('user_id','=',4)->max('nilai_4');
      $min_4_1 = PenilaianKetua::select('nilai_4')->where('user_id','=',4)->min('nilai_4');
      $max_5_1 = PenilaianKetua::select('nilai_5')->where('user_id','=',4)->max('nilai_5');
      $min_5_1 = PenilaianKetua::select('nilai_5')->where('user_id','=',4)->min('nilai_5');
      $max_6_1 = PenilaianKetua::select('nilai_6')->where('user_id','=',4)->max('nilai_6');
      $min_6_1 = PenilaianKetua::select('nilai_6')->where('user_id','=',4)->min('nilai_6');
      $max_7_1 = PenilaianKetua::select('nilai_7')->where('user_id','=',4)->max('nilai_7');
      $min_7_1 = PenilaianKetua::select('nilai_7')->where('user_id','=',4)->min('nilai_7');
      $max_8_1 = PenilaianKetua::select('nilai_8')->where('user_id','=',4)->max('nilai_8');
      $min_8_1 = PenilaianKetua::select('nilai_8')->where('user_id','=',4)->min('nilai_8');
      // dd($max_1);
      $a = KriteriaKetua::get();
      $b = DB::table('penilaian_ketua')
                  ->join('alternatif_ketua', 'alternatif_ketua.id', '=', 'penilaian_ketua.alternatif_id')
                  ->join('users', 'users.id', '=', 'penilaian_ketua.user_id')
                  ->selectRaw('penilaian_ketua.*,alternatif_ketua.nama_alternatif,users.name')
                  ->get();
      $normalisasi = DB::table('kriteria_ketua')->sum('bobot_kriteria');
      // dd($normalisasi);
      foreach ($a as $key => $value) {
        $res[] = [
          'bobot_kriteria' => $value->bobot_kriteria/$normalisasi
        ];
      }
      $data_1 = $res[0];
      $data_2 = $res[1];
      $data_3 = $res[2];
      $data_4 = $res[3];
      $data_5 = $res[4];
      $data_6 = $res[5];
      $data_7 = $res[6];
      $data_8 = $res[7];
      // dd($b);
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
              'nilai_5' => (($value->nilai_5 - $min_5)/($max_5 - $min_5))*$res[4]['bobot_kriteria'],
              'nilai_6' => (($value->nilai_6 - $min_6)/($max_6 - $min_6))*$res[5]['bobot_kriteria'],
              'nilai_7' => (($value->nilai_7 - $min_7)/($max_7 - $min_7))*$res[6]['bobot_kriteria'],
              'nilai_8' => (($value->nilai_8 - $min_8)/($max_8 - $min_8))*$res[7]['bobot_kriteria'],
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
              'nilai_5' => (($value->nilai_5 - $min_5_)/($max_5_ - $min_5_))*$res[4]['bobot_kriteria'],
              'nilai_6' => (($value->nilai_6 - $min_6_)/($max_6_ - $min_6_))*$res[5]['bobot_kriteria'],
              'nilai_7' => (($value->nilai_7 - $min_7_)/($max_7_ - $min_7_))*$res[6]['bobot_kriteria'],
              'nilai_8' => (($value->nilai_8 - $min_8_)/($max_8_ - $min_8_))*$res[7]['bobot_kriteria'],
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
              'nilai_5' => (($value->nilai_5 - $min_5_1)/($max_5_1 - $min_5_1))*$res[4]['bobot_kriteria'],
              'nilai_6' => (($value->nilai_6 - $min_6_1)/($max_6_1 - $min_6_1))*$res[5]['bobot_kriteria'],
              'nilai_7' => (($value->nilai_7 - $min_7_1)/($max_7_1 - $min_7_1))*$res[6]['bobot_kriteria'],
              'nilai_8' => (($value->nilai_8 - $min_8_1)/($max_8_1 - $min_8_1))*$res[7]['bobot_kriteria'],
              'created_at' => $value->created_at,
              'updated_at' => $value->updated_at,
              'nama_alternatif' => $value->nama_alternatif,
              'name' => $value->name,
          ];
        }
      }
      // dd($res_1);
      foreach ($res_1 as $key => $value) {
        $hasil[]=[
          $new_hasil = new HasilNilai,
          $new_hasil->nama_alternatif = $value['nama_alternatif'],
          $new_hasil->nilai_1 = $value['nilai_1'],
          $new_hasil->nilai_2 = $value['nilai_2'],
          $new_hasil->nilai_3 = $value['nilai_3'],
          $new_hasil->nilai_4 = $value['nilai_4'],
          $new_hasil->nilai_5 = $value['nilai_5'],
          $new_hasil->nilai_6 = $value['nilai_6'],
          $new_hasil->nilai_7 = $value['nilai_7'],
          $new_hasil->nilai_8 = $value['nilai_8'],
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
      $new_penilaian = PenilaianKetua::find($id);
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
       $new_penilaian = PenilaianKetua::find($request->id);
       // $new_penilaian->alternatif_id = $request->alternatif_id;
       $new_penilaian->user_id = Auth::user()->id;
       $new_penilaian->nilai_1 = $request->nilai_1;
       $new_penilaian->nilai_2 = $request->nilai_2;
       $new_penilaian->nilai_3 = $request->nilai_3;
       $new_penilaian->nilai_4 = $request->nilai_4;
       $new_penilaian->nilai_5 = $request->nilai_5;
       $new_penilaian->nilai_6 = $request->nilai_6;
       $new_penilaian->nilai_7 = $request->nilai_7;
       $new_penilaian->nilai_8 = $request->nilai_8;
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
      $new_penilaian = PenilaianKetua::findOrFail($id);
      $new_penilaian->delete();
      Alert::success('Berhasil', 'Data Penilaian Berhasil Di Hapus');
      return response()->json();
    }

    public function destroySemua()
    {
      HasilNilai::truncate();
      Alert::success('Berhasil', 'Data Penilaian Di Perhitungan Berhasil Di Hapus');
      return response()->json();
    }
}
