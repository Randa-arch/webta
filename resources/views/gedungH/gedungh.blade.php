@extends('layout.layoutmain')

@section('title', 'Monitoring Gedung H | Website Sistem Pemantauan Kondisi Toilet')

@section('content')

<div class="pagetitle">
    <h1>Toilet Gedung H</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">Toilet Gedung H</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section monitoring">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-7">
        <div class="row">
          <!-- Sales Card -->
          <div class="col-12">
            <div class="card info-card kondisi-card">
              <div class="card-body">
                <h5 class="card-title">Kondisi Toilet <span>| Hari Ini</span></h5>
                <div class="d-flex align-items-center" style="padding: 20px 0px 25px 0px;">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-graph-up-arrow"></i>
                  </div>
                  <div class="ps-3">
                    <h6 id="toiletStatus">Loading...</h6>
                  </div>
                </div>
                <p><span class="text-muted small pt-2 ps-1">{{ Date::now()->format('d / m / Y') }}</span></p>
              </div>
            </div>
          </div><!-- End Sales Card -->

          <!-- Air Quality Card -->
          <div class="col-12">
            <div class="card info-card udara-card">
              <div class="card-body">
                <h5 class="card-title">Kondisi Udara <span>| Hari Ini</span></h5>
                <div class="d-flex align-items-center" style="padding: 20px 0px 25px 0px;">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-wind"></i>
                  </div>
                  <div class="ps-3">
                    <h6 id="airQualityStatus">Loading...</h6>
                  </div>
                </div>
                <p><span class="text-muted small pt-2 ps-1">{{ Date::now()->format('d / m / Y') }}</span></p>
              </div>
            </div>
          </div><!-- End Air Quality Card -->

          <!-- Customers Card -->
          <div class="col-12">
            <div class="card info-card kadar-card">
              <div class="card-body">
                <h5 class="card-title">Kadar Gas Pada Toilet </h5>
                <div class="col-xl-20">
                  <div id="amonium" class="p-3 mb-2 bg-success">
                    <div class="row">
                        <div class="col-lg-8 col-md-9 label">Amonia (Bau)</div>
                        <div class="col-lg-4 col-md-3">
                            <span class="value" id="amoniumValue">Loading...</span>
                            <span class="unit">ppm</span>
                        </div>
                    </div>
                  </div>

                  <div id="hidrogenSulfida" class="p-3 mb-2 bg-success">
                    <div class="row">
                        <div class="col-lg-8 col-md-9 label">Hidrogen Sulfida (Bau)</div>
                        <div class="col-lg-4 col-md-3">
                            <span class="value" id="hidrogenSulfidaValue">Loading...</span>
                            <span class="unit">ppm</span>
                        </div>
                    </div>
                  </div>
                    
                  <div id="karbonMonoksida" class="p-3 mb-2 bg-success">
                    <div class="row">
                        <div class="col-lg-8 col-md-9 label">Karbon Monoksida (Asap Rokok)</div>
                        <div class="col-lg-4 col-md-3">
                            <span class="value" id="karbonMonoksidaValue">Loading...</span>
                            <span class="unit">ppm</span>
                        </div>
                    </div>
                  </div>
                  <div id="suhu" class="p-3 mb-2 bg-success">
                    <div class="row">
                        <div class="col-lg-8 col-md-9 label">Suhu</div>
                        <div class="col-lg-4 col-md-3">
                            <span class="value" id="suhuValue">Loading...</span>
                            <span class="unit">°C</span>
                        </div>
                    </div>
                  </div>
                    
                  <div id="kelembapan" class="p-3 mb-2 bg-success">
                    <div class="row">
                        <div class="col-lg-8 col-md-9 label">Kelembapan</div>
                        <div class="col-lg-4 col-md-3">
                            <span class="value" id="kelembapanValue">Loading...</span>
                            <span class="unit">%</span>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Customers Card -->          
        </div>
      </div><!-- End Left side columns -->
      
      <!-- Right side columns -->
      <div class="col-lg-5">

        <!-- Recent Activity -->
        <div class="card info-card keterangan">
          <div class="card-body">
            <h5 class="card-title">Keterangan</h5>
            <div class="activity">
              <div class="activity-item d-flex">
                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                <div class="activity-content">
                    Nilai di bawah ambang batas, kondisi <span class="fw-bold text-dark"> aman</span> 
                </div>
              </div><!-- End activity item  <a href="#" class="fw-bold text-dark">explicabo officiis</a> -->
              <div class="activity-item d-flex">
                <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                <div class="activity-content">
                    Nilai sama dengan ambang batas, kondisi <span class="fw-bold text-dark"> masih sesuai standar</span>
                </div>
              </div><!-- End activity item-->
              <div class="activity-item d-flex">
                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                <div class="activity-content">
                    Nilai di atas ambang batas, kondisi <span class="fw-bold text-dark">tidak sesuai standar</span>
                </div>
              </div><!-- End activity item-->
            </div>
          </div>
        </div><!-- End Recent Activity -->

        <div class="card info-card status-card">
            <div class="card-body">
                <h5 class="card-title">Status Exhaust Fan</h5>
                <div class="d-flex align-items-center" style="padding: 10px 0px 10px 10px;">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/img/fan.png') }}" alt="" class="rounded-circle">
                    </div>
                    <div class="ps-3">
                      <h6 id="exhaustFanStatus">Loading...</h6>
                    </div>
                </div>
            </div>
        </div>

        
      </div><!-- End Right side columns -->

    </div>
    <section class="section" id="dataContainer">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Histori atau Riwayat</h5>
                        <p>Silakan pilih tanggal dari kalender untuk melihat histori atau riwayat:</p>
    
                        <!-- Kalender -->
                        <input type="date" id="calendar"  max="<?php echo date('Y-m-d'); ?>">
                        <!-- Akhir Kalender -->
    
                        <!-- Tabel untuk Riwayat -->
                            <table id="historyDataTable" class="table">
                                <thead>
                                    <tr>
                                      <th>Timestamp</th>
                                      <th>Amonia</th>
                                      <th>Hidrogen Sulfida</th>
                                      <th>Karbon Monoksida</th>
                                      <th>Suhu</th>
                                      <th>Kelembapan</th>
                                      <th>Kondisi Toilet</th>
                                      <th>Kondisi Udara</th>
                                      <th>Fan</th>
                                    </tr>
                                </thead>
                                <tbody id="historyData">
                                  <!-- Konten tabel akan ditambahkan secara dinamis di sini -->
                                </tbody>
                                
                            </table>
                            <p id="errorMessage" style="display: none; color: black;"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="module">
      const firebaseConfig = {
        apiKey: "AIzaSyCbo-Bo-IiYX7d3AeTEQOOZaMtxKGYPZuU",
        authDomain: "taranda-2f398.firebaseapp.com",
        projectId: "taranda-2f398",
        storageBucket: "taranda-2f398.appspot.com",
        messagingSenderId: "866446644214",
        appId: "1:866446644214:web:b89b7417bb9e0d5a2a6dd7",
        measurementId: "G-F3NEP5PK5M"
      };
    
      firebase.initializeApp(firebaseConfig);
    
      const db = firebase.firestore();
      const monitoringRef = db.collection('gedungh').doc('monitoring');
    
      function setGasBackground(elementId, value, threshold, coValue) {
        const gasElement = document.getElementById(elementId);
        if (gasElement) {
          {
            if (value < threshold) {
              gasElement.className = `p-3 mb-2 bg-success`;
            } else if (value >= threshold && value <= threshold * 1.5) {
              gasElement.className = `p-3 mb-2 bg-warning`;
            } else {
              gasElement.className = `p-3 mb-2 bg-danger`;
            }
          }
        }
      }
    
      function setTemperatureBackground(elementId, value) {
        const element = document.getElementById(elementId);
        if (element) {
          if (value > 20 && value < 30) {
            element.className = `p-3 mb-2 bg-success`;
          } else if (value === 20 || value === 30) {
            element.className = `p-3 mb-2 bg-warning`;
          } else {
            element.className = `p-3 mb-2 bg-danger`;
          }
        }
      }
    
      function setHumidityBackground(elementId, value) {
        const element = document.getElementById(elementId);
        if (element) {
          if (value >= 39 && value < 60) {
            element.className = `p-3 mb-2 bg-success`;
          } else if (value === 38 || value === 60) {
            element.className = `p-3 mb-2 bg-warning`;
          } else {
            element.className = `p-3 mb-2 bg-danger`;
          }
        }
      }
    
      document.addEventListener('DOMContentLoaded', async function() {
        const auth = firebase.auth();
        const historyTableBody = document.getElementById('historyData');
        const calendarInput = document.getElementById('calendar');
        const messageElement = document.getElementById('errorMessage');

        auth.onAuthStateChanged(async (user) => {
          if (user) {
            monitoringRef.onSnapshot((snapshot) => {
              if (!snapshot.empty) {
                const data = snapshot.data();
                const toiletStatus = data.Toilet ? 'Kotor' : 'Bersih';
                document.getElementById('toiletStatus').innerText = toiletStatus;

                const airQualityStatus = (data.Amonia > 3 || data.HidrogenSulfida > 2.5 || data.KarbonMonoksida > 2.5) ? 'Berbau' : 'Tidak Berbau';
                document.getElementById('airQualityStatus').innerText = airQualityStatus;

                const exhaustFanStatus = data.Exhaust ? 'ON' : 'OFF';
                document.getElementById('exhaustFanStatus').innerText = exhaustFanStatus;
                document.getElementById('amoniumValue').innerText = data.Amonia;
                setGasBackground('amonium', data.Amonia, 2.2, data.KarbonMonoksida);
                document.getElementById('hidrogenSulfidaValue').innerText = data.HidrogenSulfida;
                setGasBackground('hidrogenSulfida', data.HidrogenSulfida, 2.5, data.KarbonMonoksida);
                document.getElementById('karbonMonoksidaValue').innerText = data.KarbonMonoksida;
                setGasBackground('karbonMonoksida', data.KarbonMonoksida, 2.5, data.KarbonMonoksida);
                document.getElementById('suhuValue').innerText = data.Suhu;
                setTemperatureBackground('suhu', data.Suhu);
                document.getElementById('kelembapanValue').innerText = data.Kelembapan;
                setHumidityBackground('kelembapan', data.Kelembapan);
              }
            });

            calendarInput.addEventListener('change', async () => {
              const selectedDate = calendarInput.value;
              try {
                const dateRef = db.collection('gedungh').doc('History');
                const subCollectionRef = dateRef.collection(selectedDate);
                const querySnapshot = await subCollectionRef.get();
                historyTableBody.innerHTML = '';

                if (querySnapshot.empty) {
                  messageElement.innerText = 'Data histori tidak tersedia pada tanggal ini.';
                  messageElement.style.display = 'block';
                } else {
                  const historyData = [];
                  querySnapshot.forEach((doc) => {
                    historyData.push(doc.data());
                  });

                  historyData.sort((a, b) => {
                    const timeA = a.Jam.split(':').map(Number);
                    const timeB = b.Jam.split(':').map(Number);
                    const dateA = new Date(0, 0, 0, timeA[0], timeA[1], timeA[2]);
                    const dateB = new Date(0, 0, 0, timeB[0], timeB[1], timeB[2]);
                    return dateA - dateB;
                  });

                  historyData.forEach((data) => {
                    const airQualityStatus = (data.Amonia > 2.7 || data.HidrogenSulfida > 2.5 || data.KarbonMonoksida > 2.5) ? 'Berbau' : 'Tidak Berbau';
                    const rowColor = (data.Toilet || airQualityStatus === 'Berbau') ? 'style="color:red"' : '';
                    const amoniaColor = data.Amonia >= 2.2 ? 'style="color:red"' : '';
                    const hidrogenSulfidaColor = data.HidrogenSulfida > 2 ? 'style="color:red"' : '';
                    const fancolor = (data.Exhaustfan === true) ? 'style="color:green"' : '';
                    const row = document.createElement('tr');
                    row.innerHTML = `
                      <td ${rowColor}>${data.Jam}</td>
                      <td ${amoniaColor}>${data.Amonia}</td>
                      <td ${hidrogenSulfidaColor}>${data.HidrogenSulfida}</td>
                      <td>${data.KarbonMonoksida}</td>
                      <td>${data.Suhu} °C</td>
                      <td>${data.Kelembapan} %</td>
                      <td ${rowColor}>${data.Toilet ? 'Kotor' : 'Bersih'}</td>
                      <td ${rowColor}>${airQualityStatus}</td>
                      <td ${fancolor}>${data.Exhaustfan ? 'ON' : 'OFF'}</td>
                    `;
                    historyTableBody.appendChild(row);
                  });

                  messageElement.style.display = 'none';
                }
              } catch (error) {
                console.error('Kesalahan saat mengambil data subkoleksi:', error);
                messageElement.innerText = 'Terjadi kesalahan saat mengambil data historis.';
                messageElement.style.display = 'block';
              }
            });
          } else {
            window.location.href = "{{ route('login') }}";
          }
        });
      });

    </script>

@endsection
