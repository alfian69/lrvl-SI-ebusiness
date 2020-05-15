@extends('main')
@section('page_name', 'Home')
@section('content')

<div class="row" style="background-color: #ddd; padding: 20px;">
    <!-- slide 1 -->
    <div class="col-12">
        <h4 style="color: #994556;"> Product terbaru </h4>
    </div>
    <div class="col-3">
        <div class="product" style="background-color: #fff; padding: 10px; margin: 5px;">
            <div class="product-image" style="text-align: center; margin: 5px;">
                <img src="{{ url('/image/hp.jpg') }}" style="width: 200px; height: 200px; object-fit: cover; padding: 2px;">
            </div>
            <div class="product-text" style="margin: 5px;">
                Hp Murah <br />
                <p style="color: blue; font-weight: bold;">Rp 1.000.000,00-</p>
                
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="product" style="background-color: #fff; padding: 10px; margin: 5px;">
            <div class="product-image" style="text-align: center; margin: 5px;">
                <img src="{{ url('/image/hp.jpg') }}" style="width: 200px; height: 200px; object-fit: cover; padding: 2px;">
            </div>
            <div class="product-text" style="margin: 5px;">
                Hp Murah <br />
                <p style="color: blue; font-weight: bold;">Rp 1.000.000,00-</p>
                
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="product" style="background-color: #fff; padding: 10px; margin: 5px;">
            <div class="product-image" style="text-align: center; margin: 5px;">
                <img src="{{ url('/image/hp.jpg') }}" style="width: 200px; height: 200px; object-fit: cover; padding: 2px;">
            </div>
            <div class="product-text" style="margin: 5px;">
                Hp Murah <br />
                <p style="color: blue; font-weight: bold;">Rp 1.000.000,00-</p>
                
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="product" style="background-color: #fff; padding: 10px; margin: 5px;">
            <div class="product-image" style="text-align: center; margin: 5px;">
                <img src="{{ url('/image/hp.jpg') }}" style="width: 200px; height: 200px; object-fit: cover; padding: 2px;">
            </div>
            <div class="product-text" style="margin: 5px;">
                Hp Murah <br />
                <p style="color: blue; font-weight: bold;">Rp 1.000.000,00-</p>
                
            </div>
        </div>
    </div>
</div>
<img src="{{ url('/image/index.png') }}" style="width: 100%; ">
 
@endsection