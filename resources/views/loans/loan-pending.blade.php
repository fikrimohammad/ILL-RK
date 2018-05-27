@extends('layouts.app-admin')
@section('page-header')
    Halaman Kelola Peminjaman
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4>Permintaan Peminjaman</h4>
                <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead style="vertical-align: middle; text-align: center;">
                        <tr>
                            <th>ID Peminjaman</th>
                            <th>Nama Peminjam</th>
                            <th>Judul Buku</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Status</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0513000000011</td>
                            <td>Tegar Satrio Utomo</td>
                            <td>The Book of Informatics</td>
                            <td>28-05-2018 10:00</td>
                            <td>30-05-2018 10:00</td>
                            <td><span class="badge badge-warning">Menunggu</span></td>
                            <td>
                                <a href="#" class="btn btn-info"><i class="c-white ti-zoom-in pr-1"></i>Lihat</a>
                                <a href="#" class="btn btn-success"><i class="c-white ti-check pr-1"></i>Terima</a>
                                <a href="#" class="btn btn-danger"><i class="c-white ti-close pr-1"></i>Tolak</a>
                            </td>
                        </tr>
                        <tr>
                            <td>0513000000012</td>
                            <td>Fajar Maulana Firdaus</td>
                            <td>Python for Informatics: Exploring Information</td>
                            <td>27-05-2018 11:00</td>
                            <td>29-05-2018 11:00</td>
                            <td><span class="badge badge-warning">Menunggu</span></td>
                            <td>
                                <a href="#" class="btn btn-info"><i class="c-white ti-zoom-in pr-1"></i>Lihat</a>
                                <a href="#" class="btn btn-success"><i class="c-white ti-check pr-1"></i>Terima</a>
                                <a href="#" class="btn btn-danger"><i class="c-white ti-close pr-1"></i>Tolak</a>
                            </td>
                        </tr>
                        <tr>
                            <td>0513000000013</td>
                            <td>M Pandu Praadha</td>
                            <td>Tugas Akhir : Implementasi Radially Distributed pada Deteksi Tepi Canny menggunakan paradigma Message Passing</td>
                            <td>01-06-2018 08:00</td>
                            <td>02-06-2018 08:00</td>
                            <td><span class="badge badge-warning">Menunggu</span></td>
                            <td>
                                <a href="#" class="btn btn-info"><i class="c-white ti-zoom-in pr-1"></i>Lihat</a>
                                <a href="#" class="btn btn-success"><i class="c-white ti-check pr-1"></i>Terima</a>
                                <a href="#" class="btn btn-danger"><i class="c-white ti-close pr-1"></i>Tolak</a>
                            </td>
                        </tr>
                        <tr>
                            <td>0513000000014</td>
                            <td>Mohammad Fikri</td>
                            <td>Biomedical Informatics: Computer Applications in Health Care and Biomedicine</td>
                            <td>01-06-2018 08:00</td>
                            <td>02-06-2018 08:00</td>
                            <td><span class="badge badge-danger">Ditolak</span></td>
                            <td>
                                <a href="#" class="btn btn-info"><i class="c-white ti-zoom-in pr-1"></i>Lihat</a>
                                <a href="#" class="btn btn-success"><i class="c-white ti-check pr-1"></i>Terima</a>
                            </td>
                        </tr>
                        <tr>
                            <td>0513000000010</td>
                            <td>M Adhitya Irvansyah</td>
                            <td>Tugas Akhir : Analisa Kualitas Layanan Virtual Class di Lingkungan FTIf ITS</td>
                            <td>02-06-2018 08:00</td>
                            <td>03-06-2018 08:00</td>
                            <td><span class="badge badge-warning">Mengajukan Perpanjangan</span></td>
                            <td>
                                <a href="#" class="btn btn-info"><i class="c-white ti-zoom-in pr-1"></i>Lihat</a>
                                <a href="#" class="btn btn-success"><i class="c-white ti-check pr-1"></i>Terima</a>
                                <a href="#" class="btn btn-danger"><i class="c-white ti-close pr-1"></i>Tolak</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection