@extends('layouts.app-home')
@section('page-header')
  <div class="page-header-image" data-parallax="true" style="background-image: url('/images/bg-perpus-its-2.jpg');">
  </div>
  <div class="container">
      <div class="content-center brand">
          {{--<img class="n-logo" src="./assets/img/now-logo.png" alt="">--}}
          <img class="pb-3" src="{{asset('/images/logo_its.png')}}" style="max-height: 150px;" alt="">
          <h2>Koleksi Buku</h2>
          <h4>Tersedia Berbagai Macam Koleksi Mulai Dari Buku dan Tugas Akhir Dari Mahasiswa Institut Teknologi Sepuluh Nopember.</h4>
      </div>
  </div>
@endsection
@section('content')
<div class="section section-basic">
  <div class="container">
    <h4>Daftar Koleksi Buku</h4>
    <div class="kotak">
      <div class="samping">
        <!-- <div class="collapse" id="advancesearch"> -->
          <form action="" method="post">
            <input type="text" class="form-control" placeholder="Cari Judul" id="cari_judul">
            <button type="submit" name="button" class="btn btn-primary btn-simple btn-block btn-sm" >Cari</button>
          </form>
        <!-- </div> -->
        <hr>
        <button class="btn btn-neutral btn-block" type="button" data-toggle="collapse" data-target="#advancesearch">Advance Search <i class="fa fa-chevron-down fa-sm"></i></button>
        <div class="collapse" id="advancesearch">
          <form action="">
            <input type="text" class="form-control mb-3" placeholder="Judul Buku">
            <input type="text" class="form-control mb-3" placeholder="Nama Pengarang">
            <input type="text" class="form-control mb-3" placeholder="Tahun Terbit">
            <button type="submit" name="button" class="btn btn-primary btn-simple btn-block btn-sm" >Cari</button>
          </form>
          <hr>
        </div>
      </div>
      <div class="tengah">
        @for ($i = 0 ; $i < 20; $i++)

        <div class="content_box" id="ID_BUKU_1" style=" background-image: url({{asset('images/cover_jjt.jpg')}});">
          <div class="content_title">
            <span>Lord of the Rings - The Fellowship of the Ring</span>
          </div>
        </div>
        @endfor
      </div>
    </div>
  </div>
</div>
@endsection

@section('page-scripts')
  <script>
    $(function() {
      var redirectTo = function(address) {
        document.location.href = address;
      }

      $('.content_box').click(function() {
        redirectTo('{{url("/catalogue-detail")}}');
      });

      $('.content_box').hover(function() {
        $(this).find('.content_title').show();
      });
      $('.content_box').mouseleave(function() {
        $(this).find('.content_title').hide();
      });

      $('.cart').click(function() {
        redirectTo("cart.php");
      });
    })
  </script>
@endsection
