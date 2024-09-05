@extends('layout.adminlayout')

@section('title', 'Register | Website Sistem Pemantauan Kondisi Toilet')

@section('content')
    <div class="container">
        <div class="headerlogo">
            <a href="https://www.unand.ac.id/" style="text-align: left; text-decoration: none" ><img src="{{ asset('assets/img/unand.png') }}" alt="logounand"></a>
        </div>
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container" style="margin-top: -70px">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">

                <div class="title" style="text-align: center">
                    <div class="judul1">
                      <i><h1>WEBSITE</h1></i>
                    </div>
                    <div class="judul2">
                      <h3>Sistem Monitoring Kondisi Toilet Gedung Perkuliahan UNAND </h3>
                    </div>
                  </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Buat Akun</h5>
                    <p class="text-center small">Masukan data untuk membuat akun</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Nama :</label>
                      <input type="text" name="name" class="form-control" id="yourName" placeholder="Nama" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email :</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" placeholder="Email" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username : </label>
                      <input type="text" name="username" class="form-control" id="yourUsername" placeholder="Username" required>
                      <div class="invalid-feedback">Please choose a username.</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password : </label>
                      <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Password" required>
                        <div class="input-group-text">
                          <i class="fas fa-eye-slash" id="togglePassword"></i>
                        </div>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-success" type="submit" href="{{ route('dashboard') }}">Buat Akun</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Sudah memiliki akun? <a href="{{ route('login') }}">Sign In</a></p>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
@endsection
