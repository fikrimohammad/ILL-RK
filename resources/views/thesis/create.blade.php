@extends('layouts.app-admin')
@section('page-header')
    Halaman Pengelolaan Tugas Akhir
@endsection
@section('content')
    <div class="pb-4">
        <a class="btn btn-info" href="{{route('thesis.index')}}" role="button">
            <i class="c-white ti-back-right pr-1"></i>Kembali ke List Tugas Akhir
        </a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <div class="row justify-content-center">
                    <h4>Formulir Pengisian Data Bibiliografi Tugas Akhir</h4>
                    <div class="col-sm-10 mT-20">
                        <form>
                            <div class="form-group">
                                <label for="title">Judul TA</label>
                                <input type="text" class="form-control" id="title">
                            </div>
                            <div class="form-group">
                                <label for="call_num">No. Panggil TA</label>
                                <input type="text" class="form-control" id="call_num">
                            </div>
                            <div class="form-group">
                                <label for="class_num">No. Klasifikasi TA</label>
                                <input type="text" class="form-control" id="class_num">
                            </div>
                            <div class="form-group">
                                <label for="class_code">Kode Klasifikasi TA</label>
                                <input type="text" class="form-control" id="class_code">
                            </div>
                            <div class="form-group">
                                <label for="stock">Stok</label>
                                <input type="text" class="form-control" id="stock">
                            </div>
                            <div class="form-group">
                                <label for="author">Pengarang</label>
                                <input type="text" class="form-control" id="author">
                            </div>
                            <div class="form-group">
                                <label for="publisher">Penerbit</label>
                                <input type="text" class="form-control" id="publisher">
                            </div>
                            <div class="form-group">
                                <label for="publication_year">Tahun Terbit</label>
                                <input type="text" class="form-control" id="publication_year">
                            </div>
                            <div class="form-group">
                                <label for="book_cover">Cover TA</label>
                                <input type="file" class="form-control" id="book_cover">
                            </div>
                            <div class="pt-2">
                                <button type="submit" class="btn btn-info btn-block py-1">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection