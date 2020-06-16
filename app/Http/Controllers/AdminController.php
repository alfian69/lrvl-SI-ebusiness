<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class AdminController extends Controller
{
	public function home(){
		return view('/administrator/home');
	}
	public function login(){
		return view('/administrator/masuk');
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
