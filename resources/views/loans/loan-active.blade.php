@extends('layouts.app-admin')
@section('page-header')
Halaman Kelola Peminjaman
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="bgc-white bd bdrs-3 p-20 mB-20">
            <h4>Peminjaman Aktif</h4>
            <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID Peminjaman</th>
                        <th>Nama Peminjam</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Status</th>
                        <th>Jumlah Denda</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>0513000000011</td>
                        <td>Tegar Satrio Utomo</td>
                        <td>Pattern Recognition and Machine Learning</td>
                        <td>27-05-2018 10:00</td>
                        <td>29-05-2018 10:00</td>
                        <td><span class="badge badge-info">Sedang Berlangsung</span></td>
                        <td>-</td>
                        <td>
                            <a href="#" class="btn btn-info"><i class="c-white ti-zoom-in pr-1"></i>Lihat</a>
                            <a href="#" class="btn btn-success"><i class="c-white ti-check pr-1"></i>Telah Mengembalikan</a>
                        </td>
                    </tr>
                    <tr>
                        <td>0513000000012</td>
                        <td>Fajar Maulana Firdaus</td>
                        <td>Python Machine Learning</td>
                        <td>27-05-2018 11:00</td>
                        <td>29-05-2018 11:00</td>
                        <td><span class="badge badge-danger">Telat Mengembalikan 2 hari</span></td>
                        <td>Rp. 2000,00</td>
                        <td>
                            <a href="#" class="btn btn-info"><i class="c-white ti-zoom-in pr-1"></i>Lihat</a>
                            <a href="#" class="btn btn-success"><i class="c-white ti-check pr-1"></i>Telah Mengembalikan</a>
                        </td>
                    </tr>
                    <tr>
                        <td>05130000000</td>
                        <td>M Pandu Praadha</td>
                        <td>The Book of Informatics</td>
                        <td>01-06-2018 08:00</td>
                        <td>02-06-2018 08:00</td>
                        <td><span class="badge badge-success">Telah Dikembalikan</span></td>
                        <td>-</td>
                        <td>
                            <a href="#" class="btn btn-info"><i class="c-white ti-zoom-in pr-1"></i>Lihat</a>
                        </td>
                    </tr>
                    <tr>
                        <td>0513000000009</td>
                        <td>Mohammad Fikri</td>
                        <td>Tugas Akhir : Perancangan dan Pembuatan Penerima Sinyal DTMF Telepon untuk Sistem Pelayanan Informasi Nilai Mahasiswa Teknik Informatika ITS</td>
                        <td>01-06-2018 08:00</td>
                        <td>02-06-2018 08:00</td>
                        <td><span class="badge badge-danger">Telat Mengembalikan 5 hari</span></td>
                        <td>Rp. 5000,00</td>
                        <td>
                            <a href="#" class="btn btn-info"><i class="c-white ti-zoom-in pr-1"></i>Lihat</a>
                            <a href="#" class="btn btn-success"><i class="c-white ti-check pr-1"></i>Telah Mengembalikan</a>
                        </td>
                    </tr>
                    <tr>
                        <td>0513000000010</td>
                        <td>M Adhitya Irvansyah</td>
                        <td>Tugas Akhir : Analisa Kualitas Layanan Virtual Class di Lingkungan FTIf ITS</td>
                        <td>02-06-2018 08:00</td>
                        <td>03-06-2018 08:00</td>
                        <td><span class="badge badge-warning">Mengajukan Perpanjangan</span></td>
                        <td>-</td>
                        <td>
                            <a href="#" class="btn btn-info"><i class="c-white ti-zoom-in pr-1"></i>Lihat</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection