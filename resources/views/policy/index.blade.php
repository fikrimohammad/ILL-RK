@extends('layouts.app-admin')
@section('page-header')
    Halaman Kelola Kebijakan Ruang Baca
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <div class="row justify-content-center">
                    <form>
                        <div class="form-group row">
                            <label for="penalty" class="col-sm-7 offset-sm-1 col-form-label">Kelipatan Denda per Hari </label>
                            <div class="col-sm-3">
                                <input type="text" readonly class="form-control-plaintext" id="penalty" value="Rp. 1000,00">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="loan-duration" class="col-sm-7 offset-sm-1 col-form-label">Durasi Peminjaman </label>
                            <div class="col-sm-3">
                                <input type="text" readonly class="form-control-plaintext" id="loan-duration" value="2 hari">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="min-duration-loan-extension" class="col-sm-7 offset-sm-1 col-form-label">Batas Perpanjangan Peminjaman </label>
                            <div class="col-sm-3">
                                <input type="text" readonly class="form-control-plaintext" id="min-duration-loan-extension" value="H - 1 hari">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection