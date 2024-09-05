@extends('layout.adminlayout')

@section('title', 'Login | Website Sistem Pemantauan Kondisi Toilet')

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
                <div class="card-body" style="margin-top: -20px;">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Sign In</h5>
                    <p class="text-center small">Masukan Username dan Password untuk Sign In</p>
                  </div>

                  <form id="loginForm" class="row g-3 needs-validation" novalidate>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username : </label>
                      <div class="input-group mb-3">
                        <div class="input-group-text">
                          <i class="fas fa-user"></i>
                        </div>
                        <input type="text" name="username" class="form-control" id="yourUsername" placeholder="Email" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password : </label>
                      <div class="input-group mb-3">
                        <div class="input-group-text">
                          <i class="fas fa-lock"></i>
                        </div>
                        <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Password" required>
                        <div class="input-group-text">
                          <i class="fas fa-eye-slash" id="togglePassword"></i>
                        </div>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>
                    
                    <div class="d-grid gap-2 col-6 mx-auto">
                      <button class="btn btn-success" type="submit">Log In</button>
                    </div>
                    
                    <!--<div class="col-12">
                      <p class="small mb-0">Belum memiliki akun? <a href="{{ route('register') }}">Daftar</a></p>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0"><a href="{{ route('dashboard') }}">Dashboard</a></p>
                    </div>-->
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>

    <script>
      // Konfigurasi Firebase
      const firebaseConfig = {
          apiKey: "AIzaSyCbo-Bo-IiYX7d3AeTEQOOZaMtxKGYPZuU",
          authDomain: "taranda-2f398.firebaseapp.com",
          projectId: "taranda-2f398",
          storageBucket: "taranda-2f398.appspot.com",
          messagingSenderId: "866446644214",
          appId: "1:866446644214:web:b89b7417bb9e0d5a2a6dd7",
          measurementId: "G-F3NEP5PK5M"
      };
   
      // Inisialisasi Firebase
      firebase.initializeApp(firebaseConfig);
   
      // Mendapatkan referensi objek auth
      const auth = firebase.auth();
   
      // Menangani pengiriman formulir login
      const loginForm = document.getElementById('loginForm');
      loginForm.addEventListener('submit', async (e) => {
          e.preventDefault();
          const username = loginForm.username.value;
          const password = loginForm.password.value;
          try {
              // Melakukan otentikasi dengan Firebase
              const userCredential = await auth.signInWithEmailAndPassword(username, password);
              localStorage.setItem('isLoggedIn', 'true');
              // Redirect ke halaman dashboard setelah login berhasil
              window.location.href = "{{ route('dashboard') }}";
          } catch (error) {
              console.error('Login failed:', error.message);
              // Tampilkan pesan kesalahan kepada pengguna
              alert('Login failed. Please check your email and password.');
          }
      });
   </script>
@endsection
