@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header" style="background-color: rgba(253, 117, 41, 0.98); color: #000000;">
                        Data mahasiswa
                    </div>
                    <div class="card-body" style="background-color: rgba(253, 152, 79, 0.57);">
                        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">nrp</label>
                                <select name="nrp" class="form-control @error('nrp') is-invalid @enderror"
                                    readonly>
                                    @foreach ($user as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $mahasiswa->id_users ? 'selected' : '' }}>
                                            {{ $data->nomorinduk }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('nrp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama mahasiswa</label>
                                <select name="id_users" class="form-control @error('id_users') is-invalid @enderror"
                                    readonly>
                                    @foreach ($user as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $mahasiswa->id_users ? 'selected' : '' }}>
                                            {{ $data->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_users')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kelas</label>
                                <select name="id_kelas" class="form-control @error('id_kelas') is-invalid @enderror"
                                    readonly>
                                    @foreach ($kelas as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $mahasiswa->id_kelas ? 'selected' : '' }}>
                                            {{ $data->nama_kls }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_kelas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Semester</label>
                                <select name="id_semesters" class="form-control @error('id_semesters') is-invalid @enderror"
                                    readonly>
                                    @foreach ($semester as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $mahasiswa->id_semesters ? 'selected' : '' }}>
                                            {{ $data->tingkat }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_semesters')
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
                                            {{ $data->id == $mahasiswa->id_prodis ? 'selected' : '' }}>
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


