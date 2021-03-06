@extends('layouts.app-admin')
@section('page-header')
    Halaman Pengelolaan Buku
@endsection
@section('content')
    <div class="pb-4">
        <a class="btn btn-info" href="{{route('books.index')}}" role="button">
            <i class="c-white ti-back-right pr-1"></i>Kembali ke List Buku
        </a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <div class="row justify-content-center">
                    <h4>Formulir Penyuntingan Data Bibiliografi Buku</h4>
                    <div class="col-sm-10 mT-20">
                        <form>
                            <div class="form-group">
                                <label for="title">Judul Buku</label>
                                <input type="text" class="form-control" id="title" value="The Books of Informatics">
                            </div>
                            <div class="form-group">
                                <label for="isbn">ISBN</label>
                                <input type="text" class="form-control" id="isbn" value="9780170130448">
                            </div>
                            <div class="form-group">
                                <label for="call_num">No. Panggil Buku</label>
                                <input type="text" class="form-control" id="call_num" value="0511000000001">
                            </div>
                            <div class="form-group">
                                <label for="class_num">No. Klasifikasi Buku</label>
                                <input type="text" class="form-control" id="class_num" value="000.32">
                            </div>
                            <div class="form-group">
                                <label for="class_code">Kode Klasifikasi Buku</label>
                                <input type="text" class="form-control" id="class_code" value="Pig, B">
                            </div>
                            <div class="form-group">
                                <label for="stock">Stok</label>
                                <input type="text" class="form-control" id="stock" value="3">
                            </div>
                            <div class="form-group">
                                <label for="author">Pengarang</label>
                                <input type="text" class="form-control" id="author" value="Diarmuid Pigott">
                            </div>
                            <div class="form-group">
                                <label for="publisher">Penerbit</label>
                                <input type="text" class="form-control" id="publisher" value="Cengage Learning">
                            </div>
                            <div class="form-group">
                                <label for="publication_year">Tahun Terbit</label>
                                <input type="text" class="form-control" id="publication_year" value="2007">
                            </div>
                            <div class="form-group">
                                <label for="book_cover">Cover Buku</label>
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