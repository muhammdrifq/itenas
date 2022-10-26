@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header" style="background-color: rgba(253, 117, 41, 0.98); color: #000000;">
                        Data kelas
                    </div>
                    <div class="card-body" style="background-color: rgba(253, 152, 79, 0.57);">
                        <form action="{{ route('kelas.update', $kelas->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">NIP</label>
                                <select name="id_dosens" class="form-control @error('id_dosens') is-invalid @enderror"
                                    readonly>
                                    @foreach ($dosen as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $kelas->id_dosens ? 'selected' : '' }}>
                                            {{ $data->nip }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_dosens')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Kelas</label>
                                <input type="text" class="form-control  @error('nama_kls') is-invalid @enderror"
                                    name="nama_kls" value="{{ $kelas->nama_kls }}">
                                @error('nama_kls')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Prodi</label>
                                <select name="id_prodis" class="form-control @error('id_prodis') is-invalid @enderror"
                                    readonly>
                                    @foreach ($prodi as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $kelas->id_prodis ? 'selected' : '' }}>
                                            {{ $data->nama }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_prodis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-light" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

