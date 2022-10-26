@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header" style="background-color: #F69000; color: #ffffff;">
                        Data Prodi
                    </div>
                    <div class="card-body" style="background-color: #ffffff;">
                        <div class="mb-3">
                            <label class="form-label">Nama Prodi</label>
                            <input type="text" class="form-control" name="nama" value="{{ $prodi->nama }}" readonly>
                        </div>

                        

                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('prodi.index') }}" class="btn rounded-pill text-light bg-ligth border-none" style="background-color: #F69000; width:90px; height:40px;">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
