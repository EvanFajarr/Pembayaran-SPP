@extends('layouts.dashboard')

@section('content')
    <div class="page-inner mt--3">
        <form action="{{ route('siswa.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nisn_15483">Nisn</label>
                <input type="text" class="form-control @error('nisn_15483') is-invalid @enderror" id="nisn_15483"
                    name="nisn_15483" placeholder="Masukan Nisn" value="{{ old('nisn_15483') }}" required autofocus>
                @error('nisn_15483')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nis_15483">Nis</label>
                <input type="text" class="form-control @error('nis_15483') is-invalid @enderror" id="nis_15483"
                    name="nis_15483" placeholder="Masukan Nis" value="{{ old('nis_15483') }}" required>
                @error('nis_15483')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nama_15483">Nama</label>
                <input type="text" class="form-control @error('nama_15483') is-invalid @enderror" id="nama_15483"
                    name="nama_15483" placeholder="Masukan Nama" value="{{ old('nama_15483') }}" required>
                @error('nama_15483')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="id_kelas_15483">Kelas</label>
                <select class="form-control @error('id_kelas_15483') is-invalid @enderror" id="id_kelas_15483"
                name="id_kelas_15483" required>
                    @foreach ($kelas as $item)
                        @if ($item->id_kelas_15483 == old('id_kelas_15483'))
                            <option value="{{ $item->id_kelas_15483 }}" selected>{{ $item->nama_kelas_15483 }}</option>
                        @else
                            <option value="{{ $item->id_kelas_15483 }}">{{ $item->nama_kelas_15483 }}</option>   
                        @endif
                    @endforeach
                </select>
                @error('id_kelas_15483')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="alamat_15483">Alamat</label>
                <input type="text" class="form-control @error('alamat_15483') is-invalid @enderror" id="alamat_15483"
                    name="alamat_15483" placeholder="Masukan Alamat" value="{{ old('alamat_15483') }}" required>
                @error('alamat_15483')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="no_telp_15483">No Telp</label>
                <input type="number" class="form-control @error('no_telp_15483') is-invalid @enderror" id="no_telp_15483"
                    name="no_telp_15483" placeholder="Masukan No Telepon" value="{{ old('no_telp_15483') }}" required>
                @error('no_telp_15483')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="id_spp_15483">ID SPP</label>
                <select class="form-control @error('id_spp_15483') is-invalid @enderror" id="id_spp_15483"
                    name="id_spp_15483" required>
                    @foreach ($spp as $i)
                        @if ($i->id_spp_15483 == old('id_spp_15483'))
                            <option value="{{$i->id_spp_15483}}" selected>{{$i->nominal_15483}}</option>
                        @else
                            <option value="{{$i->id_spp_15483}}">{{$i->nominal_15483}}</option>
                        @endif
                    @endforeach
                </select>
                @error('id_spp_15483')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="row justify-content-end">
                <a href="{{ route('siswa.index') }}" class="btn btn-sm btn-round btn-danger mx-1">Kembali</a>
                <button type="submit" class="btn btn-sm btn-round btn-success mx-1">Submit</button>
            </div>
        </form>
    </div>
@endsection
