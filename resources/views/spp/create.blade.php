@extends('layouts.dashboard')

@section('content')
    <div class="page-inner mt--3">
        <form action="{{ route('spp.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="tahun_15483">Tahun</label>
                <input type="text" class="form-control @error('tahun_15483') is-invalid @enderror" id="tahun_15483"
                    name="tahun_15483" placeholder="Masukan tahun" value="{{ old('tahun_15483') }}" required autofocus>
                @error('tahun_15483')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nominal_15483">Nominal</label>
                <input type="text" class="form-control @error('nominal_15483') is-invalid @enderror" id="nominal_15483"
                    name="nominal_15483" placeholder="Masukan nominal" value="{{ old('nominal_15483') }}" required>
                @error('nominal_15483')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            

            <div class="row justify-content-end">
                <a href="{{ route('spp.index') }}" class="btn btn-sm btn-round btn-danger mx-1">Kembali</a>
                <button type="submit" class="btn btn-sm btn-round btn-success mx-1">Submit</button>
            </div>
        </form>
    </div>
@endsection
