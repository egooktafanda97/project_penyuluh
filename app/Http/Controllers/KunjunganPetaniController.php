<?php

namespace App\Http\Controllers;

use App\kunjungan_petani;
use Illuminate\Http\Request;

class KunjunganPetaniController extends Controller
{
      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(){

    }
    public function store(Request $request){

        $data = [
            'id_penyuluh'     => $request->input('id_penyuluh'),
			'id_petani'       => $request->input('id_petani'),
			'id_wilayah'      => $request->input('id_wilayah'),
			'tanggal'         => $request->input('tanggal'),
			'waktu'           => $request->input('waktu'),
			'alamat_tambahan' => $request->input('alamat_tambahan'),
			'topik'           => $request->input('topik'),
			'masalah'         => $request->input('masalah'),
			'pemecah'         => $request->input('pemecah'),
			'status'          => "success"
        ];

// {
// 	"id_penyuluh"     :	"",
// 	"id_petani"       :	"",
// 	"id_wilayah"      :	"",
// 	"tanggal"         :	"",
// 	"waktu"           :	"",
// 	"alamat_tambahan" :	"",
// 	"topik"           :	"",
// 	"masalah"         :	"",
// 	"pemecah"         :	"",
// 	"status"          :	""
// }

        $pet = new kunjungan_petani($data);
        return $pet->save();

    }

    public function update(Request $request){

    	$id = $request->input('id');
        $data = [
            'id_penyuluh'     => $request->input('id_penyuluh'),
			'id_petani'       => $request->input('id_petani'),
			'id_wilayah'      => $request->input('id_wilayah'),
			'tanggal'         => $request->input('tanggal'),
			'waktu'           => $request->input('waktu'),
			'alamat_tambahan' => $request->input('alamat_tambahan'),
			'topik'           => $request->input('topik'),
			'masalah'         => $request->input('masalah'),
			'pemecah'         => $request->input('pemecah'),
			'status'          => "success"
        ];
        $us_tani = kunjungan_petani::whereid_kunjungan_petani($id)->update($data);
        return $us_tani;

    }

    public function destroy(Request $request){
		$id = $request->input('id');
        $affected = \DB::table('kunjungan_petani')
              ->where('id_kunjungan_petani', $id)->delete();
        return $affected;
    }
}
