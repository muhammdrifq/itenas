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
                    <div class="card-body" style="background-color: rgba(253, 152, 79, 0.57); color: #000000;">
                        <form action="{{ route('mahasiswa.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">NRP</label>
                                <select name="nrp" class="form-control @error('nrp') is-invalid @enderror"
                                    id="">
                                    @foreach ($user as $data)
                                        <option value="{{ $data->id }}">{{ $data->nomorinduk }}</option>
                                    @endforeach
                                </select>
                                @error('nrp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Mahasiswa</label>
                                <select name="id_users" class="form-control @error('id_users') is-invalid @enderror"
                                    id="">
                                    @foreach ($user as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
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
                                    id="">
                                    @foreach ($kelas as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_kls }}</option>
                                    @endforeach
                                </select>
                                @error('id_kelas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Prodi</label>
                                <select name="id_prodis" class="form-control @error('id_prodis') is-invalid @enderror"
                                    id="">
                                    @foreach ($prodi as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                    @endforeach
                                </select>
                                @error('id_prodis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Semester</label>
                                <select name="id_semesters" class="form-control @error('id_semesters') is-invalid @enderror"
                                    id="">
                                    @foreach ($semester as $data)
                                        <option value="{{ $data->id }}">{{ $data->tingkat }}</option>
                                    @endforeach
                                </select>
                                @error('id_semesters')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-sm btn-light" type="submit" style=" float: right ">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
