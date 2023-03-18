@extends('layouts.dashboard')

@section('content')
    <div class="page-inner mt--3">
        <form action="{{ route('kelas.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="id_kelas_15483">ID Kelas</label>
                <input type="text" class="form-control @error('id_kelas_15483') is-invalid @enderror" id="id_kelas_15483"
                    name="id_kelas_15483" placeholder="Masukan id kelas" value="{{ old('id_kelas_15483') }}" required autofocus>
                @error('id_kelas_15483')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nama_kelas_15483">Nama Kelas</label>
                <input type="text" class="form-control @error('nama_kelas_15483') is-invalid @enderror" id="nama_kelas_15483"
                    name="nama_kelas_15483" placeholder="Masukan Nis" value="{{ old('nama_kelas_15483') }}" required>
                @error('nama_kelas_15483')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="row justify-content-end">
                <a href="{{ route('kelas.index') }}" class="btn btn-sm btn-round btn-danger mx-1">Kembali</a>
                <button type="submit" class="btn btn-sm btn-round btn-success mx-1">Submit</button>
            </div>
        </form>
    </div>
@endsection
