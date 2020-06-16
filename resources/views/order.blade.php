<?php

?>

@extends('main')
@section('page_name', 'Home')
@section('content')
<div class="row">
    <div class="col-3">
        <img src="{{ url('/image/product/').'/'.$product->gambar_url }}" style="width: 300px;">
    </div>
    <div class="col-6">
        <h3 class="a-header">{{ $product->nama }}</h3>
        <p>Code : {{ $product->kode }}</p>
        <h5>Harga</h5>
        <p>@currency($product->harga)</p>
        <h5>Garansi External</h5>
        <?php
            if($product->garansi == null) {
                echo '<p>Garansi Tidak Tersedia</p>';
            } else {
                echo '<p>'.$product->garansi.' Bulan</p>';
            }

        ?>
        <a href="/order/detail" class="btn btn-primary">Beli Sekarang</a>
        <a href="/order/cart/{{ $product->id }}" class="btn btn-success">Tambah Ke Keranjang</a>
    </div>
</div>
 
@endsection