<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body class="app">

        @include('include.spinner')

        <div>
            <!-- #Left Sidebar ==================== -->
        @include('include.sidebar-user')

        <!-- #Main ============================ -->
            <div class="page-container">

            <!-- ### $Topbar ### -->
            @include('include.topbar-user')

            <!-- ### $App Screen Content ### -->
                <main class='main-content bgc-grey-100'>
                    <div id='mainContent'>
                        <div class="container-fluid">

                            <h4 class="c-grey-900 mT-10 mB-30">@yield('page-header')</h4>

                            @include('include.message')
                            @yield('content')

                        </div>
                    </div>
                </main>

                <!-- ### $App Screen Footer ### -->
                <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
                    <span>Copyright © 2018 Designed by <a href="https://colorlib.com" target='_blank' title="Colorlib">Colorlib</a> and Kelompok 10 Rekayasa Kebutahan. All rights reserved.</span>
                </footer>
            </div>
        </div>

        <script src="{{ asset('/js/app.js') }}"></script>

    </body>
</html>