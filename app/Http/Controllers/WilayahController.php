<?php

namespace App\Http\Controllers;

use App\wilayah;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){


    }
    public function store(Request $request){
        $data = [
            'id_penyuluh'       => $request->input('id_penyuluh'),
            'nama_desa'      => $request->input('nama_desa'),
            'nama_dusun'     => $request->input('nama_dusun'),
            "desc"        => $request->input('desc'),
        ];

 
// {
        // "id_penyuluh"	:
        // "nama_desa"		:
        // "nama_dusun"	:
        // "desc"			:

// }

        $exe = new wilayah($data);
        return $exe->save();
    }
    public function update(Request $request)
    {
        $id = $request->input('id');
         $data = [
            'id_penyuluh'       => $request->input('id_penyuluh'),
            'nama_desa'      => $request->input('nama_desa'),
            'nama_dusun'     => $request->input('nama_dusun'),
            "desc"        => $request->input('desc'),
        ];

        $exe = wilayah::whereid_wilayah($id)->update($data);
        return $exe;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       $id = $request->input('id');
       $affected = \DB::table('wilayah')
              ->where('id_wilayah', $id)->delete();
        return $affected;
    }
}
