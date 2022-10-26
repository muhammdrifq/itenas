@extends('layouts.admin')
@section('content')

<center>
    <p class="fs-1">WALCOME, COORDINATOR</p>
    <p class="fs-2">DAFTAR MAHASISWA</p>
</center>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card border-secondary">
                    <div class="card-header" style="background-color: #F69000; color: #ffffff;">
                        Data prodi
                        <a href="{{ route('prodi.create') }}" class="btn btn-sm btn-light" style="color: #000000; float: right ">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body" >
                        <div class="table-responsive" style="background-color: #ffffff; color: #000000;">
                            <table class="table align-middle" id="dataTable" >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Prodi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($prodi as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>
                                                <form action="{{ route('prodi.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('prodi.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <a href="{{ route('prodi.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-primary">
                                                        Show
                                                    </a> |
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Apakah Anda Yakin?')">Delete
                                                    </button>
                                                </form>
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
