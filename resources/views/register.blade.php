@extends('layouts.app-auth')

@section('content')

    <h4 class="fw-300 c-grey-900 mB-20">Pendaftaran Pemustaka ILL</h4>
    <form>
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="text-normal text-dark">Nama Lengkap</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="form-text text-danger">
                    <small>{{ $errors->first('name') }}</small>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('departement') ? ' has-error' : '' }}">
            <label for="name" class="text-normal text-dark">Asal Jurusan</label>
            <select id="name" type="text" class="form-control" name="departement" required autofocus>
                <option selected></option>
                <option value="051">Informatika</option>
                <option value="052">Sistem Informasi</option>
            </select>

            @if ($errors->has('name'))
                <span class="form-text text-danger">
                    <small>{{ $errors->first('name') }}</small>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="text-normal text-dark">Email</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="form-text text-danger">
                    <small>{{ $errors->first('email') }}</small>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="text-normal text-dark">Password</label>
            <input id="password" type="password" class="form-control" name="password" required>

            @if ($errors->has('password'))
                <span class="form-text text-danger">
                    <small>{{ $errors->first('password') }}</small>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="password_confirmation" class="text-normal text-dark">Konfirmasi Password</label>
            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>

        </div>

        <div class="form-group">
            <div class="peers ai-c jc-sb fxw-nw">
                <div class="peer">
                    <a href="/login">Saya sudah punya akun</a>
                </div>
                <div class="peer">
                    <button class="btn btn-primary">Daftar</button>
                </div>
            </div>
        </div>
    </form>
@endsection
