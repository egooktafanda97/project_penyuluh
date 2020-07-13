<?php

namespace App\Http\Controllers;

use App\kunjungan_kel_tani;
use Illuminate\Http\Request;

class KunjunganKelTaniController extends Controller{
     public function __invoke(Request $request){
     return csrf_token(); 
    }

    public function store(Request $request){
        $data = [
            'id_kelompoktani' => $request->input('id_kelompoktani'),
            'id_penyuluh' 	  => $request->input('id_penyuluh'),
			'id_wilayah' 	  => $request->input('id_wilayah'),
			'tempat'		  => $request->input('tempat'),
			'tanggal'		  => $request->input('tanggal'),
			'waktu'			  => $request->input('waktu'),
			'alamat_tambahan' => $request->input('alamat_tambahan'),
			'topik'			  => $request->input('topik'),
			'masalah'		  => $request->input('masalah'),
			'pemecah'		  => $request->input('pemecah'),
			'laki_laki'		  => $request->input('laki_laki'),
			'perampuan'		  => $request->input('perampuan'),
			'status' 		  => 'success'
        ];
// {
// 		"id_kelompoktani"		: "",			
// 		"id_wilayah"			: "",		
// 		"tempat"				: "",	
// 		"tanggal"				: "",	
// 		"waktu"					: "",
// 		"alamat_tambahan"		: "",			
// 		"topik"					: "",
// 		"masalah"				: "",	
// 		"pemecah"				: "",	
// 		"laki_laki"				: "",	
// 		"perampuan"				: ""	
// }
        $req = kunjungan_kel_tani::create($data);
        return Response($req);
    }


    public function update(Request $request){
        $id = $request->input('id');

       $data = [
            'id_kelompoktani' => request('id_kelompoktani'),
            'id_penyuluh' 	  => $request->input('id_penyuluh'),
			'id_wilayah' 	  => request('id_wilayah'),
			'tempat'		  => request('tempat'),
			'tanggal'		  => request('tanggal'),
			'waktu'			  => request('waktu'),
			'alamat_tambahan' => request('alamat_tambahan'),
			'topik'			  => request('topik'),
			'masalah'		  => request('masalah'),
			'pemecah'		  => request('pemecah'),
			'laki_laki'		  => request('laki_laki'),
			'perampuan'		  => request('perampuan'),
			'status' 		  => 'success'
        ];

        $affected = \DB::table('kunjungan_kel_tani')
              ->where('id_kunjungan', $id)
              ->update($data);
        return $affected;

    }

    public function destroy(Request $request)
    {
       $id = $request->input('id');
       $affected = \DB::table('kunjungan_kel_tani')
              ->where('id_kunjungan', $id)->delete();
        return $affected;
    }
}
