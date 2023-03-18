@extends('layouts.dashboard')

@section('content')
    <div class="page-inner mt--3">
        <form action="{{ route('petugas.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="username_15483">Username</label>
                <input type="text" class="form-control @error('username_15483') is-invalid @enderror" id="username_15483"
                    name="username_15483" placeholder="Masukan Username" value="{{ old('username_15483') }}" required>
                @error('username_15483')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama_petugas_15483">Nama</label>
                <input type="text" class="form-control @error('nama_petugas_15483') is-invalid @enderror" id="nama_petugas_15483"
                    name="nama_petugas_15483" placeholder="Masukan Nama Lengkap" value="{{ old('nama_petugas_15483') }}" required autofocus>
                @error('nama_petugas_15483')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="level_15483">level</label>
                <select class="form-control @error('level_15483') is-invalid @enderror" id="level_15483"
                    name="level_15483"  value="{{ old('level_15483') }}" required autofocus>
                    <option value="">silahkan pilih</option>
                    <option value="admin">admin</option>
                    <option value="petugas">petugas</option>
                @error('level_15483')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </select>
            </div>


           

            <div class="row justify-content-end">
                <a href="{{ route('petugas.index') }}" class="btn btn-sm btn-round btn-danger mx-1">Kembali</a>
                <button type="submit" class="btn btn-sm btn-round btn-success mx-1">Submit</button>
            </div>
        </form>
    </div>
@endsection
