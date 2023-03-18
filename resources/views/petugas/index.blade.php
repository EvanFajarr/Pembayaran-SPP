@extends('layouts.dashboard')

@section('content')
    <div class="page-inner mt--3">
        <div class="row justify-content-end">
            <a href="{{ route('petugas.create') }}" class="btn btn-success btn-round mb-3">
                <i class="fa fa-plus"></i>
                Tambah Petugas
            </a>
        </div>

        <!-- Table -->
        <div class="table-responsive">
            <table id="datatables" class="display table table-striped table-hover" cellspacing="0" width="100%">
                <thead class="table-primary">
                    <tr>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($petugas as $item)
                        <tr>
                            <td>{{ $item->nama_petugas_15483 }}</td>
                            <td>{{ $item->username_15483 }}</td>
                            <td>{{ $item->level_15483 }}</td>
                            <td>
                                <div class="form-button-action">
                                    <a href="{{url('petugas/'.$item->id_petugas_15483.'/edit')}}"
                                        class="btn btn-link btn-warning" title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{url('petugas/'.$item->id_petugas_15483)}}"
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
