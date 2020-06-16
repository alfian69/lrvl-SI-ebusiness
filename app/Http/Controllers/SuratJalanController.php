<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class SuratJalanController extends Controller
{
	public function index(){
		return view('/administrator/surat-jalan');
	}
	public function create(){
		return view('/administrator/surat-jalan-create');
	}
	public function save(Request $request){
		return redirect('/administrator/surat-jalan');
	}
	public function detail($id){
		return view('/administrator/surat-jalan-detail');
	}
	public function edit($id){
		return view('/administrator/surat-jalan-edit');
	}
	public function update(Request $request){
		return redirect('/administrator/surat-jalan');
	}
	public function delete($id){
		return redirect('/administrator/surat-jalan');
	}
}
