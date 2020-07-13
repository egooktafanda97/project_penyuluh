<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\akun_penyuluh;
class AkunPenyuluhController extends Controller
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
            'id_penyuluh'       => $request->input('id_penyuluh'),
            'username'      => $request->input('username'),
            'password'     => bcrypt($request->input('password'))
        ];
        $pet = new akun_penyuluh($data);
        return $pet->save();

    }

    public function update(Request $request){

    	$id = $request->input('id');
        $data = [
            'id_penyuluh'       => $request->input('id_penyuluh'),
            'username'      => $request->input('username'),
            'password'     => bcrypt(request('password'))
        ];
        $us_tani = akun_penyuluh::whereid_akun($id)->update($data);
        return $us_tani;

    }

    public function destroy(Request $request){
		$id = $request->input('id');
        $affected = \DB::table('akun_penyuluh')
              ->where('id_akun', $id)->delete();
        return $affected;
    }
}
