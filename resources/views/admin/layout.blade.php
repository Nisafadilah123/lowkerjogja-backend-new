<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
    <title> @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('templates/dist/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/dist/modules/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('templates/dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css')}}">

    <link rel="stylesheet" href="{{ asset('templates/dist/css/demo.css')}}">
    <link rel="stylesheet" href="{{ asset('templates/dist/css/style.css')}}">

    {{-- <link rel="stylesheet" href="{{ asset('templates/dist/modules/bootstrap/css/bootstrap.css') }}"> --}}

    <link rel="stylesheet" href="{{ asset('templates/dist/modules/bootstrap/css/bootstrap.css') }}">


    {{-- sweet alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    {{-- datatables --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('templates/DataTables/media/css/jquery.dataTables.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/DataTables/media/css/dataTables.bootstrap.css') }}">

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
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
                        <li class="{{ Request::is('admin') ? 'active':'' }}">
                            <a href="{{ url('/admin') }}"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
                        </li>

                        <li class="menu-header">Menu</li>
                        <li class="{{ Request::is('company') ? 'active' : '' }}">
                            <a href="{{ url('/company') }}"><i class="fa fa-building"></i><span>Perusahaan</span></a>

                        </li>
                        <li class="{{ Request::is('jobs') ? 'active' : '' }}">
                            <a href="{{ url('/jobs') }}"><i class="fa fa-briefcase"></i><span>Karir</span></a>
                        </li>
                        <li class="{{ Request::is('candidat') ? 'active' : '' }}">
                            <a href="{{ url('/candidat') }}"><i class="fa fa-users"></i><span>Kandidat</span></a>
                        </li>
                        <li class="{{ Request::is('users') ? 'active' : '' }}">
                            <a href="{{ url('/users') }}"><i class="fa fa-user"></i><span>Pengguna</span></a>
                        </li>
                </aside>
            </div>
        </div>
    </div>
            @yield('container')

            <script src="{{ asset('templates/dist/modules/jquery.min.js') }}"></script>
            <script src="{{ asset('templates/dist/modules/popper.js')}}"></script>
            <script src="{{ asset('templates/dist/modules/tooltip.js')}}"></script>
            <script src="{{ asset('templates/dist/modules/bootstrap/js/bootstrap.min.js')}}"></script>
            <script src="{{ asset('templates/dist/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
            <script src="{{ asset('templates/dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js')}}"></script>
            <script src="{{ asset('templates/dist/js/sa-functions.js')}}"></script>

            <script src="{{ asset('templates/dist/js/scripts.js')}}"></script>
            <script src="{{ asset('templates/dist/js/custom.js')}}"></script>
            <script src="{{ asset('templates/dist/js/demo.js')}}"></script>

            {{-- js datatables --}}
            <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
            <script rel="stylesheet" href="{{ asset('templates/DataTables/media/js/jquery.dataTables.js') }}"></script>
            <script rel="stylesheet" href="{{ asset('templates/DataTables/media/js/jquery.dataTables.min.js') }}"></script>

            @include('sweetalert::alert')

            @stack('script-addon')
            {{-- nah kalau yield ini isi nya sesuai sama isi section nya kalau stack itu kaya di kumpulin gitu. --}}
            @yield('script')
</body>

</html>
