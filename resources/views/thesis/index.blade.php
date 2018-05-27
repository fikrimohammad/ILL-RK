@extends('layouts.app-admin')
@section('page-header')
    Halaman Pengelolaan Tugas Akhir
@endsection
@section('content')
    <div class="pb-4">
        <a class="btn btn-info" href="{{route('thesis.create')}}" role="button">
            <i class="c-white ti-plus pr-1"></i>Tambah Tugas Akhir
        </a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Tahun Terbit</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0512000000001</td>
                            <td>Perancangan dan Pembuatan Penerima Sinyal DTMF Telepon untuk Sistem Pelayanan Informasi Nilai Mahasiswa Teknik Informatika ITS</td>
                            <td>Purno Widodo</td>
                            <td>2002</td>
                            <td>
                                <a href="#" class="btn btn-info"><i class="c-white ti-zoom-in pr-1"></i>Lihat</a>
                                <a href="#" class="btn btn-success"><i class="c-white ti-pencil-alt pr-1"></i>Sunting</a>
                                <a href="#" class="btn btn-danger"><i class="c-white ti-trash pr-1"></i>Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>0512000000002</td>
                            <td>Perancangan dan Pembuatan Perangkat Lunak Untuk Pengaturan Bandwidth di Jaringan TC-net Jurusan Teknik Informatika Berbasis WEB</td>
                            <td>Elok Sri Wahyuni</td>
                            <td>2003</td>
                            <td>
                                <a href="#" class="btn btn-info"><i class="c-white ti-zoom-in pr-1"></i>Lihat</a>
                                <a href="#" class="btn btn-success"><i class="c-white ti-pencil-alt pr-1"></i>Sunting</a>
                                <a href="#" class="btn btn-danger"><i class="c-white ti-trash pr-1"></i>Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>0512000000003</td>
                            <td>Implementasi Radially Distributed pada Deteksi Tepi Canny menggunakan paradigma Message Passing</td>
                            <td>Irwan Setiawan Kilay</td>
                            <td>2004</td>
                            <td>
                                <a href="#" class="btn btn-info"><i class="c-white ti-zoom-in pr-1"></i>Lihat</a>
                                <a href="#" class="btn btn-success"><i class="c-white ti-pencil-alt pr-1"></i>Sunting</a>
                                <a href="#" class="btn btn-danger"><i class="c-white ti-trash pr-1"></i>Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>0512000000004</td>
                            <td>Analisa Kualitas Layanan Virtual Class di Lingkungan FTIf ITS</td>
                            <td>Yusuf Nishfian A</td>
                            <td>2008</td>
                            <td>
                                <a href="#" class="btn btn-info"><i class="c-white ti-zoom-in pr-1"></i>Lihat</a>
                                <a href="#" class="btn btn-success"><i class="c-white ti-pencil-alt pr-1"></i>Sunting</a>
                                <a href="#" class="btn btn-danger"><i class="c-white ti-trash pr-1"></i>Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection