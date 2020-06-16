<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class MenuController extends Controller
{
	public function index(){
    	return view('home');
	}
	public function produk($type){
		return view('produk',['type' => $type]);
    	// return view('produk');
	}
	public function contact(){
    	return view('contact-us');
	}
	public function privacypolicy(){
    	return view('privacy-policy');
	}
	public function faq(){
    	return view('faq');
	}
	public function servicecenter(){
    	return view('service-center');
	}
	public function about(){
    	return view('about');
	}
}
