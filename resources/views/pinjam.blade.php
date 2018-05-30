@extends('layouts.app')
@section('content')
<div class="section section-basic">
  <div class="container pt-5">
    <div class="card tengah-tengah" >
      <div class="container">
        <div class="card-title"><h5>Form Peminjaman Buku</h5></div>
        <div class="card-body">
          <form action="">
            <h6>Informasi Peminjam</h6>
            <hr>
            <div class="form-group">
              <label for="nama_user">Nama Lengkap Pemustaka</label>
              <input type="text" name="" value="M Pandu Praadha" id="nama_user" class="form-control" disabled>
            </div>
            <div class="form-group">
              <label for="asal_user">Asal Jurusan Pemustaka</label>
              <input type="text" name="" value="Informatika" id="asal_user" class="form-control" disabled>
            </div>
            <div class="form-group">
              <label for="email_user">Email Pemustaka</label>
              <input type="text" name="" value="pandu@a.com" id="email_user" class="form-control" disabled>
            </div>
            <h6 class="pt-4">Informasi Buku</h6>
            <hr>
            <div class="form-group">
              <label for="nama_user">Judul Buku</label>
              <input type="text" name="" value="Lord Of The Rings - The Fellowship Of The Ring" id="nama_user" class="form-control" disabled>
            </div>
            <div class="form-group">
              <label for="nama_user">Asal Ruang Baca</label>
              <select class="form-control" disabled>
                <option selected value="1">Ruang Baca Sistem Informasi</option>
              </select>
            </div>
            <h6 class="pt-4">Informasi Peminjaman</h6>
            <hr>
            <div class="form-group">
              <label for="nama_user">Tanggal Mulai Peminjaman</label>
              <input class="form-control" type="date">
            </div>
            <button type="submit" class="btn btn-success btn-round btn-block mt-4">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('page-scripts')
  <script>

  </script>
@endsection
