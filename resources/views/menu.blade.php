<?php
use Illuminate\Support\Facades\DB;
      // mengirim data pegawai ke view index
    $type = DB::table('type')->get();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <a class="navbar-brand" href="#">
    <!-- <img src="https://untag-sby.ac.id/assets/edu/extra-images/logo_2.png" style="width: 100px;"> -->
    <h4>Nusantara</h4></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/home">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Produk
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php 
           foreach ($type as $data) {
            echo '
              <a class="dropdown-item" href="/produk/'.$data->url.'">'.$data->nama.'</a>
            ';
             
           }
          ?>
          <!-- <div class="dropdown-divider"></div> -->
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/contact-us">Contact Us</a>
          <a class="dropdown-item" href="/faq">FAQ</a>
          <a class="dropdown-item" href="/privacy-policy">Privacy Policy</a>
          <a class="dropdown-item" href="/service-center">Service Center</a>
          <!-- <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="">Something else here</a> -->
        </div>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>