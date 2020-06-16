<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class GajiController extends Controller
{
	public function index(){
		return view('/administrator/gaji');
	}
	public function create(){
		return view('/administrator/gaji-create');
	}
	public function save(Request $request){
		return redirect('/administrator/gaji');
	}
	public function detail($id){
		return view('/administrator/gaji-detail');
	}
	public function edit($id){
		return view('/administrator/gaji-edit');
	}
	public function update(Request $request){
		return redirect('/administrator/gaji');
	}
	public function delete($id){
		return redirect('/administrator/gaji');
	}
}
