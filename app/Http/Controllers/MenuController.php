<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class MenuController extends Controller
{
	public function index(){
    	return view('home');
	}
	public function produk(){
    	return view('produk');
	}
	public function contact(){
    	return view('contact-us');
	}
	public function about(){
    	return view('about');
	}
}