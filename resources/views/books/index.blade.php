@extends('layouts.app-admin')
@section('page-header')
    Halaman Pengelolaan Buku
@endsection
@section('content')
    <div class="pb-4">
        <a class="btn btn-info" href="{{route('books.create')}}" role="button">
            <i class="c-white ti-plus pr-1"></i>Tambah Buku
        </a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead style="vertical-align: middle; text-align: center;">
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Tahun Terbit</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody style="vertical-align: middle;">
                        <tr>
                            <td>0511000000001</td>
                            <td>The Book of Informatics</td>
                            <td>Diarmuid Pigott</td>
                            <td>2007</td>
                            <td>
                                <a href="{{route('books.show', 1)}}" class="btn btn-info"><i class="c-white ti-zoom-in pr-1"></i>Lihat</a>
                                <a href="{{route('books.edit', 1)}}" class="btn btn-success"><i class="c-white ti-pencil-alt pr-1"></i>Sunting</a>
                                <a href="#" class="btn btn-danger"><i class="c-white ti-trash pr-1"></i>Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>0511000000002</td>
                            <td>Python for Informatics: Exploring Information</td>
                            <td>Charles Severance</td>
                            <td>2013</td>
                            <td>
                                <a href="#" class="btn btn-info"><i class="c-white ti-zoom-in pr-1"></i>Lihat</a>
                                <a href="#" class="btn btn-success"><i class="c-white ti-pencil-alt pr-1"></i>Sunting</a>
                                <a href="#" class="btn btn-danger"><i class="c-white ti-trash pr-1"></i>Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>0511000000003</td>
                            <td>Biomedical Informatics: Computer Applications in Health Care and Biomedicine</td>
                            <td>Edward H. Shortliffe</td>
                            <td>2006</td>
                            <td>
                                <a href="#" class="btn btn-info"><i class="c-white ti-zoom-in pr-1"></i>Lihat</a>
                                <a href="#" class="btn btn-success"><i class="c-white ti-pencil-alt pr-1"></i>Sunting</a>
                                <a href="#" class="btn btn-danger"><i class="c-white ti-trash pr-1"></i>Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>0511000000004</td>
                            <td>Python Machine Learning</td>
                            <td>Sebastian Raschka</td>
                            <td>2015</td>
                            <td>
                                <a href="#" class="btn btn-info"><i class="c-white ti-zoom-in pr-1"></i>Lihat</a>
                                <a href="#" class="btn btn-success"><i class="c-white ti-pencil-alt pr-1"></i>Sunting</a>
                                <a href="#" class="btn btn-danger"><i class="c-white ti-trash pr-1"></i>Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>0511000000005</td>
                            <td>Pattern Recognition and Machine Learning</td>
                            <td>Christopher Bishop</td>
                            <td>2006</td>
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