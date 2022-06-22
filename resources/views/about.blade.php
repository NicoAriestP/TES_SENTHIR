@extends('layouts.main')

@section('container')
<section class="bg-light shadow-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 my-4">
                <h6 class="font-weight-normal">HUBUNGI KAMI</h6>
                <div class="borderSuccess"></div>
                <ul class="list-unstyled ">
                    <li class="nav-item">Jl. Surabaya-Cepu no 10 Bojonegoro, Jawatimur 60123</li>
                    <li class="nav-item"><span class="font-weight-bold">Telepon :</span> +62 83832108514</li>
                    <li class="nav-item"><span class="font-weight-bold">Email :</span> nicoariestputra@gmail.com</li>
                </ul>
            </div>
            <div class="col-md-6 my-4">
                <h6 class=" font-weight-normal">INFO KAMI</h6>
                <div class="borderSuccess"></div>
                <p class="">Silahkan masukan alamat email anda untuk berlangganan informasi dari kami. Anda dapat berhenti sewaktu waktu</p>
                <div class="form-group">
                    <input type="text rounded" class="form-control" >
                </div>
                <button class="btn btn-success rounded my-2">Subscribe</button>
            </div>
        </div>
    </div>
</section>
@endsection
