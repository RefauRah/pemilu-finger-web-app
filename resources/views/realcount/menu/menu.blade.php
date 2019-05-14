@extends('realcount.base')
@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <strong class="card-title mb-3 text-center">Real Count</strong>
            </div>
            <div class="card-body text-center">
            
                <i class="fas fa-chart-pie fa-10x"></i>
                <hr>
                <a href="#">
                    <p class="text-center">Hasil Pemilihan</p>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <strong class="card-title mb-3 text-center">Pemilih</strong>
            </div>
            <div class="card-body text-center">
            <i class="fas fa-user-circle fa-10x"></i>
                <hr>
            <a href="#">
                <p class="text-center">Daftar Pemilih</p>
            </a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <strong class="card-title mb-3 text-center">Informasi</strong>
            </div>
            <div class="card-body text-center">
            <i class="far fa-envelope fa-10x"></i>
                <hr>
            <a href="#">
                <p class="text-center">Layanan Pengaduan</p>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection