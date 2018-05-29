@extends('layouts.app-admin')
@section('page-header')
    Halaman Kelola Peminjaman
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4>Historis Peminjaman</h4>
                <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead align="center">
                        <tr>
                            <th>ID Peminjaman</th>
                            <th>Nama Peminjam</th>
                            <th>Judul Buku</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0513000000008</td>
                            <td>M Pandu Praadha</td>
                            <td>The Book of Informatics</td>
                            <td>01-06-2018 08:00</td>
                            <td>02-06-2018 08:00</td>
                        </tr>
                        <tr>
                            <td>0513000000001</td>
                            <td>Mohammad Fikri</td>
                            <td>Pattern Recognition and Machine Learning</td>
                            <td>21-05-2018 08:00</td>
                            <td>23-05-2018 08:00</td>
                        </tr>
                        <tr>
                            <td>0513000000002</td>
                            <td>M Adhitya Irvansyah</td>
                            <td>Python Machine Learning</td>
                            <td>22-05-2018 08:00</td>
                            <td>24-05-2018 08:00</td>
                        </tr>
                        <tr>
                            <td>0513000000003</td>
                            <td>Tegar Satrio Utomo</td>
                            <td>Tugas Akhir : Perancangan dan Pembuatan Perangkat Lunak Untuk Pengaturan Bandwidth di Jaringan TC-net Jurusan Teknik Informatika Berbasis WEB</td>
                            <td>23-05-2018 08:00</td>
                            <td>25-05-2018 08:00</td>
                        </tr>
                        <tr>
                            <td>0513000000004</td>
                            <td>Fajar Maulana Firdaus</td>
                            <td>Biomedical Informatics: Computer Applications in Health Care and Biomedicine</td>
                            <td>24-05-2018 08:00</td>
                            <td>26-05-2018 08:00</td>
                        </tr>
                        <tr>
                            <td>0513000000005</td>
                            <td>Mohammad Fikri</td>
                            <td>The Books of Informatics</td>
                            <td>24-05-2018 08:00</td>
                            <td>26-05-2018 08:00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection