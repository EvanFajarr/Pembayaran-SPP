@extends('layouts.dashboard')

@section('content')
    <div class="page-inner mt--3">
        <div class="row justify-content-end">
            <a href="{{ route('siswa.create') }}" class="btn btn-success btn-round mb-3">
                <i class="fa fa-plus"></i>
                Tambah siswa
            </a>
        </div>

        <!-- Table -->
        <div class="table-responsive">
            <table id="datatables" class="display table table-striped table-hover" cellspacing="0" width="100%">
                <thead class="table-primary">
                    <tr>
                        <th>Nisn</th>
                        <th>Nis</th>
                        <th>nama</th>
                        <th>kelas</th>
                        <th>Alamat</th>
                        <th>No telp</th>
                        <th>ID SPP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa as $item)
                        <tr>
                            <td>{{ $item->nisn_15483}}</td>
                            <td>{{ $item->nis_15483 }}</td>
                            <td>{{ $item->nama_15483 }}</td>
                            <td>{{ $item->kelas->nama_kelas_15483 }}</td>
                            <td>{{ $item->alamat_15483 }}</td>
                            <td>{{ $item->no_telp_15483 }}</td>
                            <td>{{ $item->spp->nominal_15483 }}</td>
                            <td>
                                <div class="form-button-action">
                                    <a href="{{ route('siswa.edit', ['siswa' => $item->nisn_15483]) }}"
                                        class="btn btn-link btn-warning" title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{url('siswa/'.$item->nisn_15483)}}"
                                        method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-link btn-danger btn-delete" title="Hapus">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
