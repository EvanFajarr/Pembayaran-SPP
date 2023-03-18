@extends('layouts.dashboard')

@section('content')
    <div class="page-inner mt--3">
        <div class="row justify-content-end">
            <a href="{{ route('spp.create') }}" class="btn btn-success btn-round mb-3">
                <i class="fa fa-plus"></i>
                Tambah spp
            </a>
        </div>

        <!-- Table -->
        <div class="table-responsive">
            <table id="datatables" class="display table table-striped table-hover" cellspacing="0" width="100%">
                <thead class="table-primary">
                    <tr>
                        <th>Tahun</th>
                        <th>Nominal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($spp as $item)
                        <tr>
                            <td>{{ $item->tahun_15483}}</td>
                            <td>{{ $item->nominal_15483 }}</td>
                            
                            <td>
                                <div class="form-button-action">
                                    <a href="{{ url('spp/'.$item->id_spp_15483.'/edit') }}"
                                        class="btn btn-link btn-warning" title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{url('spp/'.$item->id_spp_15483)}}"
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
