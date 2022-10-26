@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header" style="background-color: rgba(253, 117, 41, 0.98); color: #000000;">
                        Data koor
                    </div>
                    <div class="card-body" style="background-color: rgba(253, 152, 79, 0.57);">
                        <form action="{{ route('koor.update', $koor->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">nrp</label>
                                <select name="nrp" class="form-control @error('nrp') is-invalid @enderror"
                                    readonly>
                                    @foreach ($user as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $koor->id_users ? 'selected' : '' }}>
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
                                <label class="form-label">Nama koor</label>
                                <select name="id_users" class="form-control @error('id_users') is-invalid @enderror"
                                    readonly>
                                    @foreach ($user as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $koor->id_users ? 'selected' : '' }}>
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
                                <label class="form-label">Prodi</label>
                                <select name="id_prodis" class="form-control @error('id_prodis') is-invalid @enderror"
                                    readonly>
                                    @foreach ($prodi as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $koor->id_prodis ? 'selected' : '' }}>
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

