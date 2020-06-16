<?php

?>

@extends('main')
@section('page_name', 'Home')
@section('content')
<div class="row justify-content-center">
    <div class="col-6">
    <form action="/checkmasuk" method="post">
	  {{ csrf_field() }}
      <div class="form-group">
        <label for="exampleInputUsername1">Username</label>
        <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
      </div>
      <button type="submit" class="btn btn-outline-danger">Masuk</button>
    </div>
</div>
 
@endsection