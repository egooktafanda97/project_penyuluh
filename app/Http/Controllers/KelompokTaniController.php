<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kelompokTani;
class KelompokTaniController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request){
     return csrf_token(); 
    }

    public function store(Request $request){
        $data = [
            'id_penyuluh'       => request('id_penyuluh'),
            'nama_kelompok'     => request('nama_kelompok'),
            'nama_ketua'        => request('nama_ketua'),
            'id_wilayah'        => request('id_wilayah'),
        ];
// {
//     'id_penyuluh'   : "",
//     'nama_kelompok' : "",
//     'nama_ketua'    : "",
//     'id_wilayah'    : ""
// }

        $req = kelompokTani::create($data);
        return Response($req);
    }

    public function update(Request $request){
        $id = $request->input('id');

        $data = [
            'id_penyuluh'       => request('id_penyuluh'),
            'nama_kelompok'     => request('nama_kelompok'),
            'nama_ketua'        => request('nama_ketua'),
            'id_wilayah'        => request('id_wilayah'),
        ];

        $affected = \DB::table('kelompok_tani')
              ->where('id_kelompoktani', $id)
              ->update($data);
        return $affected;

    }

    public function destroy(Request $request)
    {
       $id = $request->input('id');
       $affected = \DB::table('kelompok_tani')
              ->where('id_kelompoktani', $id)->delete();
        return $affected;
    }
}
