@extends('layouts.app-home')
@section('page-header')
  <div class="page-header-image" data-parallax="true" style="background-image: url('/images/bg-perpus-its.jpg');">
  </div>
  <div class="container">
      <div class="content-center brand">
          {{--<img class="n-logo" src="./assets/img/now-logo.png" alt="">--}}
          <img class="pb-3" src="{{asset('/images/logo_its.png')}}" style="max-height: 150px;" alt="">
          <h2>Inter-Loan Library</h2>
          <h4>Layanan Peminjaman Buku Terpercaya Untuk Masyarakat Dan Mahasiswa Institut Teknologi Sepuluh Nopember.</h4>
      </div>
  </div>
@endsection
@section('content')

@endsection
