@extends('layouts.app-user')
@section('page-header')
Daftar Peminjaman
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th colspan="2">Buku</th>
                        <th colspan="2">Waktu Peminjaman</th>
                        <th colspan="2">Status</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>Judul Buku</th>
                        <th>Asal Perpustakaan</th>
                        <th>Awal Pinjam</th>
                        <th>Jatuh Tempo</th>
                        <th>Status</th>
                        <th>Batalkan</th>
                    </tr>
                </thead>
                <tbody class="table-hover">
                    <tr>
                        <td>1</td>
                        <td>Lord of The Rings</td>
                        <td>Informatika</td>
                        <td>12 Mei 2018</td>
                        <td>15 Mei 2018</td>
                        <td><span class="badge badge-pill badge-warning lh-0 p-10">Menunggu Konfirmasi</span></td>
                        <td><button type="button" class="btn cur-p btn-outline-danger">Batalkan</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Harry Potter</td>
                        <td>T.Mesin</td>
                        <td>29 April 2018</td>
                        <td>31 April 2018</td>
                        <td><span class="badge badge-pill badge-success lh-0 p-10">Dipinjam</span></td>
                        <td><button type="button" class="btn cur-p btn-outline-danger" disabled>Batalkan</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Ajax for Begineer</td>
                        <td>PWK</td>
                        <td>1 Mei 2019</td>
                        <td>7 Mei 2019</td>
                        <td><span class="badge badge-pill badge-danger lh-0 p-10">Jatuh Tempo</span></td>
                        <td><button type="button" class="btn cur-p btn-outline-danger" disabled>Batalkan</button></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Mastering PHP</td>
                        <td>Despro</td>
                        <td>11 Januari 2018</td>
                        <td>12 Januari 2018</td>
                        <td><span class="badge badge-pill badge-info lh-0 p-10">Buku bisa diambil</span></td>
                        <td><button type="button" class="btn cur-p btn-outline-danger" disabled>Batalkan</button></td>
                    </tr>
                </tbody>
            </table>
    </div>
</div>
@endsection