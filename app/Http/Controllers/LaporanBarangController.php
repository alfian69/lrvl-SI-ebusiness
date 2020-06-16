<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class LaporanBarangController extends Controller
{
	public function index(){
		return view('/administrator/laporan-barang');
	}
	public function create(){
		return view('/administrator/laporan-barang-create');
	}
	public function save(Request $request){
		return redirect('/administrator/laporan-barang');
	}
	public function detail($id){
		return view('/administrator/laporan-barang-detail');
	}
	public function edit($id){
		return view('/administrator/laporan-barang-edit');
	}
	public function update(Request $request){
		return redirect('/administrator/laporan-barang');
	}
	public function delete($id){
		return redirect('/administrator/laporan-barang');
	}
}
