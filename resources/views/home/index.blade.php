@extends('layouts.home')

@section('content')

<h1> History Pembayaran  {{ auth()->guard('siswa')->user()->nama_15483 }}</h1>

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
                          
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

