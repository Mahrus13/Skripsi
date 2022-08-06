<?php

namespace App\Http\Controllers;
use App\Models\HasilNilai;
use App\Models\HasilNilaiAnggota;
use App\Models\Periodeketua;
use App\Models\PeriodeAnggota;
use App\Models\RiwayatKetua;
use App\Models\RiwayatAnggota;
use Illuminate\Http\Request;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class LaporanKetuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumlah = HasilNilai::selectRaw('id')->count();
        $hasil = HasilNilai::groupBy('nama_alternatif')
        ->selectRaw("nama_alternatif, sum(nilai_1) as total_1, sum(nilai_2) as total_2, sum(nilai_3) as total_3, sum(nilai_4) as total_4, sum(nilai_5) as total_5, sum(nilai_6) as total_6, sum(nilai_7) as total_7, sum(nilai_8) as total_8, (sum(nilai_1) + sum(nilai_2) + sum(nilai_3) + sum(nilai_4) + sum(nilai_5) + sum(nilai_6) + sum(nilai_7) + sum(nilai_8)) as total_nilai")
        ->orderBy('total_nilai','desc')
        ->orderBy('total_2','desc')
        ->orderBy('total_3','desc')
        ->orderBy('total_1','desc')
        ->orderBy('total_5','desc')
        ->orderBy('total_6','desc')
        ->orderBy('total_4','desc')
        ->orderBy('total_8','desc')
        ->orderBy('total_7','desc')
        ->get();
        return view('pages.laporan.ketua',compact('hasil','jumlah'));
    }

    public function indexAnggota()
    {
        $jumlah = HasilNilaiAnggota::selectRaw('id')->count();
        $hasil = HasilNilaiAnggota::groupBy('nama_alternatif')
        ->selectRaw("nama_alternatif, sum(nilai_1) as total_1, sum(nilai_2) as total_2, sum(nilai_3) as total_3, sum(nilai_4) as total_4, (sum(nilai_1) + sum(nilai_2) + sum(nilai_3) + sum(nilai_4)) as total_nilai")
        ->orderBy('total_nilai','desc')
        ->orderBy('total_1','desc')
        ->orderBy('total_2','desc')
        ->orderBy('total_3','desc')
        ->orderBy('total_4','desc')
        ->get();
        // dd($hasil);
        return view('pages.laporan.anggota',compact('hasil','jumlah'));
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
          'periode' => 'required'
        ]
        )->validate();
        $periode = Periodeketua::where('periode', $request->periode)->first('periode');
        if ($periode) {
          Alert::error('Gagal', 'Tahun Periode Sudah Ada!');
          return response()->json('Berhasil');
        }else {
          $new_periode = new Periodeketua;
          $new_periode->periode = $request->get('periode');
          $new_periode->save();

          $a =  HasilNilai::groupBy('nama_alternatif')->selectRaw("nama_alternatif, sum(nilai_1) as total_1, sum(nilai_2) as total_2, sum(nilai_3) as total_3, sum(nilai_4) as total_4, sum(nilai_5) as total_5, sum(nilai_6) as total_6, sum(nilai_7) as total_7, sum(nilai_8) as total_8, (sum(nilai_1) + sum(nilai_2) + sum(nilai_3) + sum(nilai_4) + sum(nilai_5) + sum(nilai_6) + sum(nilai_7) + sum(nilai_8)) as total_nilai")->get();

          foreach ($a as $key => $value) {
            $hasil[] = [
              $new_riwayat = new RiwayatKetua,
              $new_riwayat->periode_id = $new_periode->id,
              $new_riwayat->nama_alternatif = $value['nama_alternatif'],
              $new_riwayat->nilai_1 = $value['total_1'],
              $new_riwayat->nilai_2 = $value['total_2'],
              $new_riwayat->nilai_3 = $value['total_3'],
              $new_riwayat->nilai_4 = $value['total_4'],
              $new_riwayat->nilai_5 = $value['total_5'],
              $new_riwayat->nilai_6 = $value['total_6'],
              $new_riwayat->nilai_7 = $value['total_7'],
              $new_riwayat->nilai_8 = $value['total_8'],
              $new_riwayat->jumlah = $value['total_nilai'],
              $new_riwayat->save(),
            ];
          }
          Alert::success('Berhasil', 'Data Nilai Berhasil Di Simpan');
          return response()->json($new_riwayat);
        }
    }

    public function storeAnggota(Request $request)
    {
        \Validator::make($request->all(),
        [
          'periode' => 'required|min:4'
        ]
        )->validate();
        $periode = PeriodeAnggota::where('periode', $request->periode)->first('periode');
        if ($periode) {
          Alert::error('Gagal', 'Tahun Periode Sudah Ada!');
          return response()->json('Berhasil');
        }else {
          $new_periode = new PeriodeAnggota;
          $new_periode->periode = $request->get('periode');
          $new_periode->save();

          $a =  HasilNilaiAnggota::groupBy('nama_alternatif')->selectRaw("nama_alternatif, sum(nilai_1) as total_1, sum(nilai_2) as total_2, sum(nilai_3) as total_3, sum(nilai_4) as total_4, (sum(nilai_1) + sum(nilai_2) + sum(nilai_3) + sum(nilai_4)) as total_nilai")->get();

          foreach ($a as $key => $value) {
            $hasil[] = [
              $new_riwayat = new RiwayatAnggota,
              $new_riwayat->periode_id = $new_periode->id,
              $new_riwayat->nama_alternatif = $value['nama_alternatif'],
              $new_riwayat->nilai_1 = $value['total_1'],
              $new_riwayat->nilai_2 = $value['total_2'],
              $new_riwayat->nilai_3 = $value['total_3'],
              $new_riwayat->nilai_4 = $value['total_4'],
              $new_riwayat->jumlah = $value['total_nilai'],
              $new_riwayat->save(),
            ];
          }
          Alert::success('Berhasil', 'Data Nilai Berhasil Di Simpan');
          return response()->json($new_riwayat);
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
