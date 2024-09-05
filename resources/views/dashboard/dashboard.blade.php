@extends('layout.layoutmain')

@section('title', 'Dashboard | Website Sistem Pemantauan Kondisi Toilet')

@section('content')
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="card info-card sales-card">
        <div class="card-body">
          <h5 class="card-title"><span>Selamat Datang di Website Pemantauan Kondisi Toilet Gedung Perkuliahan Unand</span> Koordinator Gedung Bersama</h5>
        </div>
      </div>
    </section>

@endsection