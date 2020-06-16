<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index($id)
    {
		$product = DB::table('produk')->where('id', $id)->first();
        return view('order',['product' => $product]);
    }
    public function cart($id)
    {
  //   	$user_id = null;
		// DB::table('order')->insert([
		// 	'user_id' => $user_id,
		// ]);
		// alihkan halaman ke halaman pegawai
		return redirect('home');
        // return view('cart');
        // return view('order',['product' => $product]);
    }
    public function detail()
    {
  //   	$user_id = null;
		// DB::table('order')->insert([
		// 	'produk_id' => $id,
		// 	'user_id' => $user_id,
		// ]);
		// alihkan halaman ke halaman pegawai
        return view('detail');
		// return redirect('/detail');
        // return view('order',['product' => $product]);
    }
    public function pembayaran()
    {
        return view('pembayaran');
    }
}
