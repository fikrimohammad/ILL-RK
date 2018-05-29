@extends('layouts.app-admin')
@section('page-header')
    Halaman Pengelolaan Tugas Akhir
@endsection
@section('content')
    <div class="pb-4">
        <a class="btn btn-info" href="{{route('policy.index')}}">
            <i class="c-white ti-back-right pr-1"></i>Kembali ke List Kebijakan Saat Ini
        </a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <div class="row justify-content-center">
                    <h4>Formulir Penyuntingan Kebijakan Ruang Baca</h4>
                    <div class="col-sm-10 mT-20">
                        <form>
                            <div class="form-group">
                                <label for="penalty">Kelipatan Denda per Hari</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    <input type="text" class="form-control" id="penalty" value="1000">
                                    <div class="input-group-append">
                                        <span class="input-group-text">,00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="book-loan-duration">Durasi Peminjaman Buku</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="book-loan-duration" value="2">
                                    <div class="input-group-append">
                                        <span class="input-group-text">hari</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="thesis-loan-duration">Durasi Peminjaman Tugas Akhir</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="thesis-loan-duration" value="1">
                                    <div class="input-group-append">
                                        <span class="input-group-text">hari</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="max-book-extension">Batas Maksimal Pengajuan Perpanjangan Peminjaman Buku</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="thesis-loan-duration" value="24">
                                    <div class="input-group-append">
                                        <span class="input-group-text">jam</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="max-thesis-extension">Batas Maksimal Pengajuan Perpanjangan Peminjaman Tugas Akhir</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="max-thesis-extension" value="12">
                                    <div class="input-group-append">
                                        <span class="input-group-text">jam</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <button type="submit" class="btn btn-info btn-block py-1">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection