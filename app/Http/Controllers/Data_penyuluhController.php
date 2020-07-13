<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dataPenyuluh;
use App\wilayah;
class Data_penyuluhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $data = [
            'title'   => 'Penyuluh',
            'allData' => \App\dataPenyuluh::all(),
            'Wilayah' => \App\wilayah::where()->get(),
            'hdr'     => 'header_table',
            'ftr'     => 'footer_table',
            'ajax'    => 'ajax_penyuluh',
        ];
        return view('data_penyuluh',$data);
    }
    public function store(Request $request){
        $data = [
            'nik'       => $request->input('nik'),
            'nama'      => $request->input('nama'),
            'jekel'     => $request->input('jekel'),
            "no_hp"        => $request->input('no_hp'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tgl_lahir'    => $request->input('tgl_lahir'),
            'agama'     => $request->input('agama'),
            'alamat'    => $request->input('alamat'),
            'status'    => 'active'
        ];
// {
//             "nik"           : 
//             "nama'"         : 
//             "jekel"         :
//             "tempat_lahir"  : 
//             "tgl_lahir"     :  
//             "agama"         :
//             "alamat"        : 
//             "status"        : 
// }

        $pet = new dataPenyuluh($data);
        return $pet->save();
    }
    public function update(Request $request)
    {
        $id = $request->input('id');
         $data = [
            'nik'       => $request->input('nik'),
            'nama'      => $request->input('nama'),
            'jekel'     => $request->input('jekel'),
            "no_hp"        => $request->input('no_hp'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tgl_lahir'    => $request->input('tgl_lahir'),
            'agama'     => $request->input('agama'),
            'alamat'    => $request->input('alamat'),
            'status'    => 'active'
        ];

        $us_tani = dataPenyuluh::whereid_penyuluh($id)->update($data);
        return $us_tani;
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
       $affected = \DB::table('data_penyuluh')
              ->where('id_penyuluh', $id)->delete();
        return $affected;
    }
}
