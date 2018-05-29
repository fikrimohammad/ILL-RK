@extends('layouts.app-admin')
@section('page-header')
    Halaman Pengelolaan Buku
@endsection
@section('content')
    <div class="pb-4">
        <a class="btn btn-info" href="{{route('books.index')}}" role="button">
            <i class="c-white ti-plus pr-1"></i>Kembali ke List Buku
        </a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
            </div>
        </div>
    </div>
@endsection