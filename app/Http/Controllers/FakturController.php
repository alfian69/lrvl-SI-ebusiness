<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class FakturController extends Controller
{
	public function index(){
		return view('/administrator/faktur');
	}
	public function create(){
		return view('/administrator/faktur-create');
	}
	public function save(Request $request){
		return redirect('/administrator/faktur');
	}
	public function detail($id){
		return view('/administrator/faktur-detail');
	}
	public function edit($id){
		return view('/administrator/faktur-edit');
	}
	public function update(Request $request){
		return redirect('/administrator/faktur');
	}
	public function delete($id){
		return redirect('/administrator/faktur');
	}
}
