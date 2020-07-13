<?php

namespace App\Http\Controllers;

use App\anggota_kelompok_tani;
use Illuminate\Http\Request;

class AnggotaKelompokTaniController extends Controller
{
   public function __invoke(Request $request){
     return csrf_token(); 
    }

    public function store(Request $request){
        $data = [
            'id_petani'     => request('id_petani'),
            'masuk_anggota' => request('masuk_anggota'),
            'status'        => '',
        ];

        // {
        // 	"id_anggota"	: "",	
        // 	"id_petani"		: "",
        // 	"masuk_anggota"	: ""
        // }

        $req = anggota_kelompok_tani::create($data);
        return Response($req);
    }

    public function update(Request $request){
        $id = $request->input('id');
		$data = [
            'id_petani'     => request('id_petani'),
            'masuk_anggota' => request('masuk_anggota'),
            'status'        => '',
        ];
        $affected = \DB::table('anggota_kelompok_tanis')
              ->where('id_anggota', $id)
              ->update($data);
        return $affected;

    }

    public function destroy(Request $request)
    {
       $id = $request->input('id');
       $affected = \DB::table('anggota_kelompok_tanis')
              ->where('id_anggota', $id)->delete();
        return $affected;
    }
}
