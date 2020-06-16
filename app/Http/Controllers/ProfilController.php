<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class ProfilController extends Controller
{
	public function index(){
    	return view('profil');
	}
	public function daftar(){
    	return view('daftar');
	}
	public function masuk(){
    	return view('masuk');
	}
	public function save(Request $request){
		$username = $request->username;
		$password = $request->password;
		DB::table('users')->insert([
			'username' => $username,
			'password' => md5($password),
			'name' => $request->nama,
			'email' => $request->email,
			'role_id' => 8,
		]);
		// return redirect('/checksave',['username' => $username, 'password' => $password]);
		return redirect('home');
	}
	public function check(Request $request){
		$username = $request->username;
		$password = $request->password;
		DB::table('users')->where([
			'username' => $username,
			'password' => md5($password)
		]);
		return redirect('home');
	}
	public function checksave($username, $password){
		DB::table('users')->where([
			'username' => $username,
			'password' => md5($password)
		]);
		return redirect('home');
	}
}
