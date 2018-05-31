@extends('layouts.app-user')
@section('page-header')
History Peminjaman
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Judul Buku</th>
                        <th>Asal Jurusan</th>
                        <th>Tanggal Peminjaman</th>
                </thead>
                <tbody class="table-hover">
                    <tr>
                        <td>1</td>
                        <td>Hacking secret book</td>
                        <td>Informatika</td>
                        <td>13 Desember 2017</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Percy Jackson</td>
                        <td>T.Elektro</td>
                        <td>5 Februari 2018</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Kalkulus</td>
                        <td>Matematika</td>
                        <td>20 April 2018</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Naruto</td>
                        <td>Perpustakaan Pusat</td>
                        <td>15 Januari 2017</td>
                    </tr>
                </tbody>
            </table>
    </div>
</div>
@endsection