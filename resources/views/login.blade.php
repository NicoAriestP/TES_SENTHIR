@extends('layouts.main_admin')
@section('container')
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center" style="margin-top: 12vh;">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block text-center pt-4"><br><img src="" width="200" height ="200"><hr><h3>SMK NEGERI PURWOSARI</h3><h6>Jl. Ngambon No.Km. 1.5, Pojok, Purwosari, Kabupaten Bojonegoro, Jawa Timur 62161 </h6></div>
                        <div class="col-lg-6" style="border:1px solid auto;background-color:lightgray;">

                            <div class="p-5" >
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4" >Selamat Datang</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="username" aria-describedby="emailHelp"
                                            placeholder="Masukkan Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="password" placeholder="Masukkan Password">
                                    </div>
                                    <a href="#" onclick="" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </a>     
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection