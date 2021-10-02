<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
    <title> @yield('title')</title>

    <link rel="stylesheet" href="/template/dist/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/template/dist/modules/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/template/dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

    <link rel="stylesheet" href="/template/dist/modules/summernote/summernote-lite.css">
    <link rel="stylesheet" href="/template/dist/modules/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/template/dist/css/demo.css">
    <link rel="stylesheet" href="/template/dist/css/style.css">
    <link rel="stylesheet" href="/template/dist/css/style.css">
    <link rel="stylesheet" href="/template/dist/css/style.css">
    {{-- sweet alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right ml-3">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
                            <i class="ion ion-android-person d-lg-none"></i>
                            <div class="d-sm-none d-lg-inline-block ">Hi, {{ auth()->user()->name }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Logout') }}
                                </x-jet-dropdown-link>
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        {{-- <a href="{{url ('/')}}"></a> --}}
                        <a href="{{url ('/')}}">Admin Lowkerjogja</a>
                    </div>
                    <div class="sidebar-user">
                        <div class="sidebar-user-details">
                            <div class="user-name">{{ auth()->user()->name }}</div>
                            {{-- <div class="user-role">
                                Administrator
                            </div> --}}
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="active">
                            <a href="{{ url('/admin') }}"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
                        </li>

                        <li class="menu-header">Menu</li>
                        <li>
                            <a href="{{ url('/company') }}"><i class="fa fa-building"></i><span>Perusahaan</span></a>

                        </li>
                        <li>
                            <a href="{{ url('/jobs') }}"><i class="fa fa-briefcase"></i><span>Karir</span></a>
                        </li>
                        <li>
                            <a href="{{ url('/kandidat') }}"><i class="fa fa-users"></i><span>Kandidat</span></a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-user"></i><span>Pengguna</span></a>
                        </li>
                </aside>
            </div>
            @yield('container')

            <script src="/template/dist/modules/jquery.min.js"></script>
            <script src="/template/dist/modules/popper.js"></script>
            <script src="/template/dist/modules/tooltip.js"></script>
            <script src="/template/dist/modules/bootstrap/js/bootstrap.min.js"></script>
            <script src="/template/dist/modules/nicescroll/jquery.nicescroll.min.js"></script>
            <script src="/template/dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
            <script src="/template/dist/js/sa-functions.js"></script>

            <script src="/template/dist/modules/chart.min.js"></script>
            <script src="/template/dist/modules/summernote/summernote-lite.js"></script>

            <script>
                var ctx = document.getElementById("myChart").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                        datasets: [{
                            label: 'Statistics',
                            data: [460, 458, 330, 502, 430, 610, 488],
                            borderWidth: 2,
                            backgroundColor: 'rgb(87,75,144)',
                            borderColor: 'rgb(87,75,144)',
                            borderWidth: 2.5,
                            pointBackgroundColor: '#ffffff',
                            pointRadius: 4
                        }]
                    },
                    options: {
                        legend: {
                            display: false
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    stepSize: 150
                                }
                            }],
                            xAxes: [{
                                gridLines: {
                                    display: false
                                }
                            }]
                        },
                    }
                });

                var ctx = document.getElementById("myChart2").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                        datasets: [{
                            label: 'Statistics',
                            data: [460, 458, 330, 502, 430, 610, 488],
                            borderWidth: 2,
                            backgroundColor: 'rgb(87,75,144)',
                            borderColor: 'rgb(87,75,144)',
                            borderWidth: 2.5,
                            pointBackgroundColor: '#ffffff',
                            pointRadius: 4
                        }]
                    },
                    options: {
                        legend: {
                            display: false
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    stepSize: 150
                                }
                            }],
                            xAxes: [{
                                ticks: {
                                    display: false
                                },
                                gridLines: {
                                    display: false
                                }
                            }]
                        },
                    }
                });
            </script>
            <script src="/template/dist/js/scripts.js"></script>
            <script src="/template/dist/js/custom.js"></script>
            <script src="/template/dist/js/demo.js"></script>
            <script src="/template/js/dropify.min.js"></script>
            <script src="/template/js/ckeditor/ckeditor.js">
            </script>
            <script>
                var konten = document.getElementById("konten");
                CKEDITOR.replace(konten, {
                    language: 'en-gb'
                });
                CKEDITOR.config.allowedContent = true;
            </script>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            @include('sweetalert::alert')
</body>

</html>