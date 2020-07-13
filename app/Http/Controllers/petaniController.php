<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petani;
class petaniController extends Controller
{
    public function index(){
    	$data = [
            'title'   => 'Petani',
    		'allData' => \App\Petani::all(),
    		'hdr'	  => 'header_table',
    		'ftr'	  => 'footer_table',
            'ajax'    => 'ajax_petani',
    	];
    	return view('data_petani',$data);
    }
    public function save_petani(Request $request){
    	$data = [
	    	'nik'		   => $request->input('nik'),
	    	'nama'		   => $request->input('nama'),
            "tempat_lahir" => $request->input('tempat_lahir'),
            "tgl_lahir"    => $request->input('tgl_lahir'),
	    	'jekel'		   => $request->input('jekel'),
            "no_hp"        => $request->input('no_hp'),
            'id_wilayah'   => $request->input('id_wilayah'),
	    	'alamat'	   => $request->input('alamat'),
	    	'j_tani'	   => $request->input('j_tani'),
	    	'status'	   => 'active',
    	];

        // {
        //     "nik"          :
        //     "nama"         :
        //     "jekel"        :
        //     "tempat_lahir" :
        //     "tgl_lahir"    :
        //     "id_wilayah"   :
        //     "alamat"       :
        //     "j_tani"       :
        //     "status"       :

        // }

    	$pet = new Petani($data);
        return $pet->save();
    }

    public function edit_petani(Request $request){
        $id = $request->input('id');
        
       $data = [
            'nik'          => $request->input('nik'),
            'nama'         => $request->input('nama'),
            'jekel'        => $request->input('jekel'),
            "no_hp"        => $request->input('no_hp'),
            "tempat_lahir" => $request->input('tempat_lahir'),
            "tgl_lahir"    => $request->input('tgl_lahir'),
            'id_wilayah'   => $request->input('id_wilayah'),
            'alamat'       => $request->input('alamat'),
            'j_tani'       => $request->input('j_tani'),
            'status'       => 'active',
        ];
        // $us_tani = Petani::whereid_petani($id)->update($data);
        $affected = \DB::table('petani')
              ->where('id_petani', $id)
              ->update($data);
        return $affected;
    }

    public function delete_petani(Request $request){
        $id = $request->input('id');
        $affected = \DB::table('petani')
              ->where('id_petani', $id)->delete();
        return $affected;
    }



    public function test(){
        // $originalArray = ["sample_id"=>"NnryjfBWJtI9ejSQrq64vHz1csO8FujPtFDi9ZGm3FwVobxzk9", "xx_xx_xxx_xxx1"=>"0", "sample2" =>"0"];
        // $hashedArray =  base64_encode(serialize($originalArray));

        // $hash =  $hashedArray;
        // $hashDecoded = unserialize(base64_decode($hash));
  
        // print_r($hashDecoded);
        
        
    }
}

