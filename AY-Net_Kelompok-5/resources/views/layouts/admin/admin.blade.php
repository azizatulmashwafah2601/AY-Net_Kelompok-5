<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta
            content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"
            name="viewport"
        />
        <title>@yield('titlePage')</title>

        @include('Includes.admin.style')

    </head>

    <body>
        <!--*******************
            Preloader start
        ********************-->
        <!-- <div id="preloader">
            <div class="waviy">
            <span style="--i:1">L</span>
            <span style="--i:2">o</span>
            <span style="--i:3">a</span>
            <span style="--i:4">d</span>
            <span style="--i:5">i</span>
            <span style="--i:6">n</span>
            <span style="--i:7">g</span>
            <span style="--i:8">.</span>
            <span style="--i:9">.</span>
            <span style="--i:10">.</span>
            </div>
        </div> -->
        <!--*******************
            Preloader end
        ********************-->
        <div id="main-wrapper">
            <!--**********************************
                Nav header start
            ***********************************-->
            <div class="nav-header">
                <a href="{{ route('admin') }}" class="brand-logo">
                    <img class="logo-abbr" src="{{url('frontend/images/logo-ay.png')}}" width="100" height="47">
                </a>
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="line"></span><span class="line"></span><span class="line"></span>
                    </div>
                </div>
            </div>
            <!--**********************************
                Nav header end
            ***********************************-->
            @include('Includes.admin.navbar')
                    
            @include('Includes.admin.sidebar')

            @yield('content')
                    
            @include('Includes.admin.footer')
        </div>
            @include('Includes.admin.script')
    </body>
</html>