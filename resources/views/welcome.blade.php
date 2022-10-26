<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/6/6c/Logo_itenas_copy.jpg">
    <title>Kewirausahaan ITENAS</title>
    <style>
        .body{
            background-image: url("image/bg2.png");
            background-size:cover;
        }
        .footer{
        width: 100%;
        padding-left: 10px;
        line-height: 50px;
        position: absolute;
        bottom: 0px;
        }

        .bg-dark{
            color: black;
        }
        .form-textbox {

        border : 0px solid #000000;

        border-bottom-width : 1px;

        background-color : transparent;

        }


    </style>
</head>
@if (Auth::user() && Auth::user()->hasRole('mahasiswa'))
    <script>window.location= '/mahasiswa'</script>

@elseif (auth::user() && Auth::user()->hasRole('koordinator'))
<script>window.location= '/koordinator'</script>
    
@endif

<body class="">
    
    <div class="body">
        <!-- NAVBAR -->
        <nav class="navbar ">
            <a class="navbar-brand" href="#">
                <img src="image/logo_itenas_black.png"
                    height="40" alt="" style="margin-left: 30px; margin-top: 10px;">
            </a>

            <ul class="nav justify-content-end">
                <li class="nav-item max-h-3">
                    <a class="nav-link text-dark" href="#">HOME</a>
                </li>
                <li class="nav-item max-h-3">
                    <a class="nav-link text-dark" href="{{ route('register') }}">REGISTRASI</a>
                </li>

                <li class="nav-item bg-light rounded-pill">
                    <a class="nav-link text-dark" href="#" data-toggle="modal" data-target="#directtomodal">LOGIN</a>
                </li>



            </ul>
        </nav>

        {{-- MODAL --}}
        <div class="modal fade" id="directtomodal">
            <div class="modal-dialog">
                <div class="modal-content" style="margin-top:130px; background-image:url('image/bg_modal.svg')">
                    <div style="margin-left: auto; margin-right:auto; margin-top:20px;">
                        <h3 class="modal-title" id="exampleModalLabel">Selamat Datang</h3>
                        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> --}}
                    </div>
                    <div class="modal-body">

                        <form action="{{ route('login') }}" method="post">
                            @csrf

                            <div class="row mb-3" style="margin-left: 40px;">
                                <img src="icon/profile-user-svgrepo-com.svg" width="30px;" style="margin-left: 10px;">
                                {{-- <label for="email" class="col-md-4 col-form-label text-md-end"></label> --}}

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-textbox @error('email') is-invalid @enderror" name="email" style="width:300px; margin-left:10px;" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3" style="margin-left: 40px;">
                                <img src="icon/lock-svgrepo-com.svg" width="30px;" style="margin-left: 10px;">

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-textbox @error('password') is-invalid @enderror" name="password" style="width:300px; margin-left:10px;" value="{{ old('password') }}" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-5">
                                    <div class="form-check">
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" style="color: #7F7F7F" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="nav-item rounded-pill" style="background-color: #FC8E22; width:100px; height:50px;">
                                        {{ __('Login') }}
                                    </button>


                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- End MODAL --}}

        <div class="container p-5">
            <div class="row">
                <div class="col">
                    <br>
                    <h5 class="text-center text-info">
                        MEDIA PAMERAN HARI KEWIRAUSAHAAN<br>
                        MAHASISWA ITENAS BANDUNG
                    </h5>
                    <br>
                    <strong class="text-warning">M</strong>edia untuk memamerkan atau mempromosikan ide bisnis yang digagas mahasiswa
                    Itenas Bandung yang mengikuti kuliah kewirausahaan. Ide bisnis tersebut disusun dalam bentuk
                    proposal rencana bisnis dan dipamerkan di media ini dalam bentuk poster ide bisnis serta poster
                    Business Model Canvas.
                    <br>
                    <br>
                    <strong class="text-warning">S</strong>elain memamerkan ide bisnisnya, melalui media ini mahasiswa juga bisa melihat ide bisnis yang
                    digagas kelompok lain, memberikan saran/masukan bagi ide bisnis mahasiswa lain, serta melakukan benchmarking
                    untuk ide bisnis yang sejenis.
                </div>
                <div class="col">
                    <img src="image/picture_1.jpg"
                        alt="poster itenas" width="100%;" >
                </div>
            </div>
        </div>

    </div>

    {{-- FOOTER --}}
    <footer class="text-center text-lg-start text-white" style="background-color: black">
        <div class="container p-1">
            <h2 class="text-uppercase" style="margin-top: 30px;">ABOUT US</h2>

        </div>
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <div class="col-1">

                </div>
                <!--Grid column-->
                <div class="col-auto">
                    <h5 class="text-light">Sumber Informasi Akademik</h5>
                    <br>

                    {{-- content --}}
                    <p>
                    <a href="#" style="color:white">Carrier Development Center</a><br>
                    <a href="#" style="color:white">Kalender Akademik Sarjana</a><br>
                    <a href="#" style="color:white">Kalender Akademik Magister</a><br>
                    <a href="#" style="color:white">SISFO SKK</a><br>
                    <a href="#" style="color:white">Kemahasiswaan ITENAS</a>
                    </p>

                    {{-- End Content --}}

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-auto">
                    <h5 class="text-light">Sumber Informasi Institut</h5>
                    <br>

                    {{-- content --}}
                    <p>
                    <a href="#" style="color:white">UPT Perpustakaan</a><br>
                    <a href="#" style="color:white">UPT Teknologi Informasi</a><br>
                    <a href="#" style="color:white">Biro Akademik</a><br>
                    <a href="#" style="color:white">Biro Keuangan</a><br>
                    <a href="#" style="color:white">Biro Kemahasiswaan</a>
                    </p>

                    {{-- End Content --}}

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-auto">
                    <h5 class="text-light">Link</h5>
                    <br>

                    {{-- content --}}
                    <p>
                        <a href="#" style="color:white">ITENAS e-Magazine</a><br>
                        <a href="#" style="color:white">Jurnal Online</a><br>
                        <a href="#" style="color:white">Repository</a><br>
                        <a href="#" style="color:white">e-Book</a><br>
                        <a href="#" style="color:white">Download</a>
                        </p>


                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5>Ikuti Kami</h5>
                    <br>
                    <div class="row">
                        <div class="col">
                            <a href="#">
                                <img src="icon/icon_fb.svg" style="width: 17%;">
                            </a>

                            <a href="#">
                                <img src="icon/icon_ig.svg" style="margin-left: 3px; width:21%;">
                            </a>

                            <a href="#">
                                <img src="icon/icon_twt.svg" style="width: 20%;">
                            </a>
                        </div>

                    </div>

                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            This Website is under development.
        </div>
        <!-- Copyright -->
    </footer>

    {{-- script js --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
