<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class PesananController extends Controller
{
	public function index(){
		return view('/administrator/laporan-keuangan');
	}
	public function create(){
		return view('/administrator/laporan-keuangan-create');
	}
	public function save(Request $request){
		return redirect('/administrator/laporan-keuangan');
	}
	public function detail($id){
		return view('/administrator/laporan-keuangan-detail');
	}
	public function edit($id){
		return view('/administrator/laporan-keuangan-edit');
	}
	public function update(Request $request){
		return redirect('/administrator/laporan-keuangan');
	}
	public function delete($id){
		return redirect('/administrator/laporan-keuangan');
	}
}
