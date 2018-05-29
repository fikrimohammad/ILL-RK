@extends('layouts.app-admin')
@section('page-header')
    Halaman Pengelolaan Kebijakan Ruang Baca
@endsection
@section('content')
    <div class="pb-4">
        <a class="btn btn-info" href="{{route('policy.edit')}}" role="button">
            <i class="c-white ti-pencil-alt pr-1"></i>Sunting Kebijakan
        </a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4>Kebijakan Ruang Baca Saat Ini</h4>
                <div class="mT-20">
                    <table class="table" border="0">
                        <tbody>
                        <tr>
                            <th>Kelipatan Denda per Hari</th>
                            <td>Rp. 1000,00</td>
                        </tr>
                        <tr>
                            <th>Durasi Peminjaman Buku</th>
                            <td>2 hari</td>
                        </tr>
                        <tr>
                            <th>Durasi Peminjaman Tugas Akhir</th>
                            <td>1 hari</td>
                        </tr>
                        <tr>
                            <th>Batas Maksimal Pengajuan Perpanjangan Peminjaman Buku</th>
                            <td>H - 24 jam Sebelum Pengembalian Buku</td>
                        </tr>
                        <tr>
                            <th>Batas Maksimal Pengajuan Perpanjangan Peminjaman Tugas Akhir</th>
                            <td>H - 12 jam Sebelum Pengembalian Tugas Akhir</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection