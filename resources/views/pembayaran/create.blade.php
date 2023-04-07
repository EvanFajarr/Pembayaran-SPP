@extends('layouts.dashboard')

@section('content')
    <div class="page-inner mt--3">
        <form action='{{ url('pembayaran') }}'method="post">
            @csrf
            <div class="form-group">
                <label for="nisn">Nisn</label>
                <select class="form-control @error('nisn') is-invalid @enderror" id="nisn"
                    name="nisn"value="{{Session::get('nisn')}}" required autofocus>
                      
                    @foreach ($siswa as $b)        
                    <option>{{ $b->nisn_15483 }} | {{ $b->nama_15483 }}</option>
                 
                    @endforeach
                @error('nisn')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal"
                    name="tanggal" placeholder="Masukan Tangal"value="{{Session::get('tanggal')}}"required autofocus>
                @error('tanggal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="bulan">Bulan Bayar</label>
                <input type="text" class="form-control @error('bulan') is-invalid @enderror" id="bulan"
                    name="bulan" placeholder="Masukan Bulan" value="{{Session::get('bulan')}}" required autofocus>
                @error('bulan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <p class="text-muted">*isi menggunakan huruf mislanya maret,april dst<p>
            </div>

            <div class="form-group">
                <label for="tahun">Tahun Bayar</label>
                <input type="text" class="form-control @error('tahun') is-invalid @enderror" id="tahun"
                    name="tahun" placeholder="Masukan Tahun" value="{{Session::get('tahun')}}" required autofocus>
                @error('tahun')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="id_spp">id_spp</label>
                <select class="form-control @error('id_spp') is-invalid @enderror" id="id_spp"
                    name="id_spp"value="{{Session::get('id_spp')}}" required autofocus>
                      
                    @foreach ($siswa as $b)        
                    <option>{{ $b->id_spp_15483 }} | {{ $b->nisn_15483 }} </option>
                 
                    @endforeach
                @error('id_spp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </select>
                <p class="text-muted">*pastikan nisn sama id spp dan nisn sama seperti diatas<p>
            </div>
{{-- 


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
            </div> --}}


            <div class="form-group">
                <label for="jumlah">jumlah Bayar</label>
                <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah"
                    name="jumlah" placeholder="Masukan jumlah" value="{{Session::get('jumlah')}}" required autofocus>
                @error('jumlah')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="row justify-content-end">
                <a href="{{ route('petugas.index') }}" class="btn btn-sm btn-round btn-danger mx-1">Kembali</a>
                <button type="submit" class="btn btn-sm btn-round btn-success mx-1">Submit</button>
            </div>
        </form>
    </div>
@endsection
