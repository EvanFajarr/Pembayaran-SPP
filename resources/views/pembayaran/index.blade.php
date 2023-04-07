@extends('layouts.dashboard')

@section('content')
    <div class="page-inner mt--3">
        <div class="row justify-content-end">
            <a href="/pembayaran/create" class="btn btn-success btn-round mb-3">
                <i class="fa fa-plus"></i>
                Bayar
            </a>
        </div>

        <!-- Table -->
        <div class="table-responsive">
            <table id="datatables" class="display table table-striped table-hover" cellspacing="0" width="100%">
                <thead class="table-primary">
                    <tr>
                        <th>id spp</th>
                        <th>nisn</th>
                        <th>tanggal</th>
                        <th>bulan</th>
                        <th>tahun</th>
                        <th>jumlah</th>
                        {{-- @can('admin') --}}
                        {{-- <th>aksi</th> --}}
                        {{-- @endcan --}}
                       
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pembayaran as $item)
                        <tr>
                            <td>{{ $item->id_spp }}</td>
                            <td>{{ $item->nisn }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->bulan }}</td>
                            <td>{{ $item->tahun }}</td>
                            <td>{{ $item->jumlah }}</td>
                            {{-- @can('admin') --}}
                          {{-- <td>                  
                            <a href='cetak/{{ $item['id'] }}' class="btn btn-outline-danger btn-sm"><i class="bi bi-filetype-pdf">  Cetak Laporan</i></a>   
                        </td> --}}
                        
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
