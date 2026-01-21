<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Other Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pbminfotech-base-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    @stack('styles')


    <!-- Custom Dashboard CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .dashboard-container {
            min-height: 100vh;
        }

        .sidebar {
            width: 280px;
            background: #fff;
            min-height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            border-right: 1px solid #eee;
        }

        .main-content {
            margin-left: 280px;
            width: calc(100% - 280px);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .nav-link {
            color: #636363;
            padding: 12px 20px;
            border-radius: 8px;
            margin-bottom: 5px;
            display: flex;
            align-items: center;
            font-weight: 500;
        }

        .nav-link:hover,
        .nav-link.active {
            background-color: #f0f0f0;
            color: #000;
        }

        .nav-link i {
            width: 24px;
            margin-right: 10px;
        }

        @media (max-width: 991px) {
            .sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
                width: 100%;
            }
        }
    </style>
</head>

<body class="font-sans antialiased">
    <div class="d-flex dashboard-container">
        <!-- Sidebar -->
        @include('layouts.partials.sidebar')

        <!-- Main Content Area -->
        <div class="main-content">
            <!-- Topbar -->
            @include('layouts.partials.topbar')

            <!-- Page Heading -->
            @hasSection('header')
                <header class="bg-white shadow-sm">
                    <div class="container-fluid py-3">
                        @yield('header')
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="flex-grow-1 p-4">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    @stack('scripts')
</body>

</html>