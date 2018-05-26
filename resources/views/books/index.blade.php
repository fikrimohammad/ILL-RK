@extends('layouts.app-admin')
@section('page-header')
    Halaman Kelola Buku
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Nomor ID</th>
                            <th>Judul Buku</th>
                            <th>Asal Ruang Baca</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection