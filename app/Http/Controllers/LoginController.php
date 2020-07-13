<?php

namespace App\Http\Controllers;

use App\akun_penyuluh;
use App\Adm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
    	 return view('login');
    }
    public function login(Request $req){
    	$data = [
    		"us" => $req->input('username'),
    		"ps" => $req->input('password')
    	];

    	
    	$check = explode("-", $data['us']);

    	if(!empty($check[1]) == "admin"){
    		$cek = Adm::where('username',$check[0])->first();
    	}else{
    		$cek = akun_penyuluh::where('username',$data['us'])->first();
    	}

    	if($cek){
    		if(Hash::check($data['ps'],$cek->password)){
    			$ses = [
    				"idUs_log" => !empty($check[1]) == "admin"?$cek->id:$cek->id_penyuluh,
    				"username" => !empty($check[1]) == "admin"?$check[0]:$cek->username,
    			];
    			Session::put("log",$cek);
    			return redirect('/')->with('message','Berhasil Login');
    		}	
    	}
    	
    	
    	return redirect('login.html')->with('error','Login gagal');
    	// return bcrypt("admin");

    	// $log = akun_penyuluh::where('')
    }
    public function logout(){
    	Session::forget('log');
    }
    public function test(){
    	
    }
}
