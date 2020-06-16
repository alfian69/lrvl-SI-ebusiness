<?php

?>

@extends('main')
@section('page_name', 'Home')
@section('content')
<div class="row justify-content-center">
    <div class="col-6">
    <form action="/savedaftar" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="exampleInputNama1">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Masukkan Email" name="email">
        <small id="emailHelp" class="form-text text-muted">Kami tidak akan membagikan email anda pada siapapun</small>
      </div>
      <div class="form-group">
        <label for="exampleInputUsername1">Username</label>
        <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
      </div>
      <button type="submit" class="btn btn-danger">Daftar</button>
    </form>
    </div>
</div>
 
@endsection
