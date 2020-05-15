<?php

use Illuminate\Support\Facades\DB;
$type_view = DB::table('type')->where('url', $type)->first();
$product = DB::table('produk')->where('type_id', $type_view->id)->get();
?>

@extends('main')
@section('page_name', 'Home')
@section('content')

<div class="row" style="padding: 20px;">
    <div class="col-12">
        <h4 class="a-header"> <?= $type_view->nama ?> </h4>
    </div>
    @foreach($product as $data)
        <a href="/order/{{ $data->id }}" class="a-link">
            <div class="col-3">
                <div class="product" style="background-color: #fff; padding: 10px; margin: 5px;">
                    <div class="product-image" style="text-align: center; margin: 5px;">
                        <img src="{{ url('/image/product/').'/'.$data->gambar_url }}" style="width: 200px; height: 200px; object-fit: cover; padding: 2px;">
                    </div>
                    <div class="product-text" style="margin: 5px;">
                        <?= $data->nama ?><br />
                        <p style="color: #5969f0; font-weight: bold;"><?= $data->harga ?></p>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
</div>
 
@endsection