<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class AbsensiController extends Controller
{
	public function index(){
		return view('/administrator/absensi');
	}
	public function create(){
		return view('/administrator/absensi-create');
	}
	public function save(Request $request){
		return redirect('/administrator/absensi');
	}
	public function detail($id){
		return view('/administrator/absensi-detail');
	}
	public function edit($id){
		return view('/administrator/absensi-edit');
	}
	public function update(Request $request){
		return redirect('/administrator/absensi');
	}
	public function delete($id){
		return redirect('/administrator/absensi');
	}
}
