@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header" style="background-color: #F69000 ; color: #ffffff;">
                        Data prodi
                    </div>
                    <div class="card-body" style="background-color: #ffffff;">
                        <form action="{{ route('prodi.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Prodi</label>
                                <input type="text" class="form-control  @error('nama') is-invalid @enderror"
                                    name="nama">
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            

                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn rounded-pill float-right text-light bg-ligth border-none" style="background-color: #F69000; width:90px; height:40px;">
                                        {{ __('Tambah') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
