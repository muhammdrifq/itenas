@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (Auth::user()->hasRole('mahasiswa'))
                        <h2>halo mahasiswa</h2>
                    @elseif (Auth::user()->hasRole('koordinator'))
                        <h2>Halo koordinator</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection