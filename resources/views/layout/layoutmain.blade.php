<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/img/logo1.png') }}" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.11.1/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.11.1/firebase-firestore-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.11.1/firebase-auth-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.11.1/firebase-messaging-compat.js"></script>
</head>
<body>
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <i class="bi bi-list toggle-sidebar-btn"></i>
            <a href="{{ route('dashboard') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/img/logoheader.png') }}" alt="">
            </a>
        </div>
        <nav class="header-nav ms-auto" id="notifikasi">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown" id="notificationDropdown">
                        <i class="bi bi-bell"></i>
                        <span id="notificationCount" class="badge bg-danger badge-number" style="display: none;"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications" id="notificationList">
                        <li class="notification-item-template" style="display: none;">
                            <div style="display: flex; align-items: center; padding-bottom: 15px; margin-top: -10px;">
                                <i class="bi bi-exclamation-circle text-warning" style="margin-right: 10px;"></i>
                                <div style="padding-left: 10px;">
                                    <h4>Gedung H</h4>
                                    <p class="notificationMessage">Toilet Gedung H Kotor, Segera Bersihkan</p>
                                    <p class="waktu notificationTime"></p>
                                    <button class="btn btn-link remove-notification">Hapus</button>
                                </div>
                            </div>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="notification-empty-template" style="display: none;">
                            <p class="text-center p-3">Tidak ada notifikasi</p>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <a class="icon" href="#" id="logoutBtn">
            <i class="bi bi-box-arrow-right"></i>
            <span>Log Out</span>
        </a>
    </header>
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link {{ \Route::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-heading">Toilet</li>
            <li class="nav-item">
                <a class="nav-link {{ \Route::is('gedungh') ? 'active' : '' }}" href="{{ route('gedungh') }}">
                    <i class='bi bi-house'></i>
                    <span>Gedung H</span>
                </a>
            </li>
        </ul>
    </aside>
    <main class="main" id="main">
        @yield('content')
    </main>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        const loginUrl = @json(route('login'));
        const dashboardUrl = @json(route('dashboard'));
    </script>
    <script>
        window.addEventListener('load', function () {
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
            const auth = firebase.auth();

            const monitoringRef = db.collection('gedungh').doc('monitoring');

            const notificationCount = document.getElementById('notificationCount');
            const notificationList = document.getElementById('notificationList');
            const notificationDropdown = document.getElementById('notificationDropdown');
            const logoutBtn = document.getElementById('logoutBtn');

            if (logoutBtn) {
                logoutBtn.addEventListener('click', function (e) {
                    e.preventDefault();
                    firebase.auth().signOut().then(function () {
                        localStorage.setItem('isLoggedIn', 'false');
                        window.location.href = loginUrl;
                    }).catch(function (error) {
                        console.error('Error during sign out:', error);
                    });
                });
            }

            function checkLoginStatus() {
                const isLoggedIn = localStorage.getItem('isLoggedIn') === 'true';
                if (!isLoggedIn) {
                    window.location.href = loginUrl;
                }
            }

            window.addEventListener('popstate', checkLoginStatus);
            checkLoginStatus();

            let notificationData = JSON.parse(localStorage.getItem('notificationData')) || [];
            let lastNotificationTime = 0;

            function renderNotifications() {
                notificationList.querySelectorAll('.notification-item, .notification-empty').forEach(item => item.remove());
                if (notificationData.length === 0) {
                    const noNotificationItem = document.querySelector('.notification-empty-template').cloneNode(true);
                    noNotificationItem.classList.remove('notification-empty-template');
                    noNotificationItem.classList.add('notification-empty');
                    noNotificationItem.style.display = 'block';
                    notificationList.appendChild(noNotificationItem);
                } else {
                    notificationData.forEach((notification, index) => {
                        const newNotificationItem = document.querySelector('.notification-item-template').cloneNode(true);
                        newNotificationItem.classList.remove('notification-item-template');
                        newNotificationItem.classList.add('notification-item');
                        newNotificationItem.style.display = 'block';
                        newNotificationItem.querySelector('.notificationMessage').innerText = notification.message;
                        newNotificationItem.querySelector('.notificationTime').innerText = notification.time;
                        newNotificationItem.querySelector('.remove-notification').addEventListener('click', function () {
                            removeNotification(index);
                        });
                        notificationList.appendChild(newNotificationItem);
                    });
                }
            }

            function clearOldNotifications() {
                const currentDate = new Date().toDateString();
                notificationData = notificationData.filter(notification => new Date(notification.date).toDateString() === currentDate);
                localStorage.setItem('notificationData', JSON.stringify(notificationData));
                renderNotifications();
                updateNotificationCount();
            }

            function updateNotificationCount() {
                notificationCount.innerText = notificationData.length;
                if (notificationData.length > 0) {
                    notificationCount.style.display = 'inline-block';
                } else {
                    notificationCount.style.display = 'none';
                }
            }

            function removeNotification(index) {
                notificationData.splice(index, 1);
                localStorage.setItem('notificationData', JSON.stringify(notificationData));
                renderNotifications();
                updateNotificationCount();
            }

            function updateNotification(data) {
                const options = { timeZone: 'Asia/Jakarta', hour12: false };
                const currentTime = new Date().toLocaleTimeString('id-ID', options);
                const now = new Date().getTime();

                if (data.Toilet && (now - lastNotificationTime >= 60000)) {
                    lastNotificationTime = now;
                    const notification = {
                        message: 'Toilet Gedung H Kotor, Segera Bersihkan',
                        time: currentTime,
                        date: new Date()
                    };
                    notificationData.unshift(notification);
                    localStorage.setItem('notificationData', JSON.stringify(notificationData));
                    renderNotifications();
                    updateNotificationCount();
                }
            }

            monitoringRef.onSnapshot(function (doc) {
                if (doc.exists) {
                    const data = doc.data();
                    updateNotification(data);
                }
            });

            notificationDropdown.addEventListener('click', function () {
                renderNotifications();
                notificationCount.style.display = 'none';
            });

            renderNotifications();
            clearOldNotifications();
            setInterval(clearOldNotifications, 24 * 60 * 60 * 1000);
        });
    </script>
</body>
</html>
