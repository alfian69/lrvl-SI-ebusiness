<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class KwitansiController extends Controller
{
	public function index(){
		return view('/administrator/kwitansi');
	}
	public function create(){
		return view('/administrator/kwitansi-create');
	}
	public function save(Request $request){
		return redirect('/administrator/kwitansi');
	}
	public function detail($id){
		return view('/administrator/kwitansi-detail');
	}
	public function edit($id){
		return view('/administrator/kwitansi-edit');
	}
	public function update(Request $request){
		return redirect('/administrator/kwitansi');
	}
	public function delete($id){
		return redirect('/administrator/kwitansi');
	}
}
