@extends('layouts.app')
@section('content')
<div class="section section-basic">
  <div class="container">
    <h4>Detail Bibliografi Buku</h4>
    <div class="buku_box">
      <img src="{{asset('images/cover_jjt.jpg')}}" alt="" class="content_image">
      <div class="content_details">
        <h4>LORD OF THE RINGS - THE FELLOWSHIP OF THE RING</h4>
        <table class="tabel_detail">
          <tr>
            <td>Pengarang</td>
            <td>: J.R.R. Tolkien</td>
          </tr>
          <tr>
            <td>Penerbit</td>
            <td>: Allen & Unwin</td>
          </tr>
          <tr>
            <td>Tahun Terbit</td>
            <td>: 1954</td>
          <tr>
          </tr>
            <td>ISBN</td>
            <td>: 9788373191723</td>
          </tr>
          <tr>
            <td>No. Klasifikasi Buku</td>
            <td>: 000.32</td>
          <tr>
          </tr>
            <td>Kode Klasifikasi Buku</td>
            <td>: Tol, L</td>
          </tr>
        </table>
        <hr>
        <div class="stok">
          <span>Stok</span>
          <span class="badge badge-success">tersedia</span>
        </div>
        <br>
        <a class="btn btn-primary btn-lg btn-block" href="{{url('/loan')}}">Pinjam</a>

      </div>
      <div class="owner_list">
      </div>
    </div>

  </div>
</div>
@endsection

@section('page-scripts')
  <script>

  </script>
@endsection
