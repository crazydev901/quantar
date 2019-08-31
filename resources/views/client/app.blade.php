<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <meta name="csrf-token" content="{{ csrf_token() }}" />
   <title>Quantar</title>
   <link href="{{asset('front/img/favicon.png')}}" rel="icon" type="image/png">

   <!-- Bootstrap core CSS -->
   <link href="{{asset('front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

   <!-- Custom fonts for this template -->
   <link href="{{asset('front/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

   <link href="{{asset('front/css/client/layout.css')}}" rel="stylesheet">
   @yield('componentcss')

</head>
<body id="page-top">

<!-- Navigation -->
<div class="s-layout">
    <div class="s-layout__sidebar">
        <a class="s-sidebar__trigger" href="#0">
            <!-- <i class="fa fa-bars"></i> -->
            <img src="{{asset('front/img/bars.svg')}}" alt="" class="bars" onclick="barsClicked()">
            <img src="{{asset('front/img/black-logo.svg')}}" alt="" class="mobile-logo">
        </a>
        <nav class="s-sidebar__nav">
            <a class="s-sidebar_logo" href="#0">
                <i class="fas fa-square" style="color: #5E81F4"></i>
                <img src="{{asset('front/img/black-logo.svg')}}" alt="">
            </a>
            <ul>
                <li>
                    <a class="s-sidebar__nav-link {{ Request::path() ==  'client/dashboard' ? 's-sidebar__nav-active' : ''  }}" href="/client/dashboard">
                        <i class="fas fa-chart-bar"></i><em>Create a campaign</em>
                    </a>
                </li>
                <li>
                    <a class="s-sidebar__nav-link {{ Request::path() ==  'client/my-campaigns' ? 's-sidebar__nav-active' : ''  }}" href="/client/my-campaigns">
                        <i class="fas fa-clipboard"></i><em>My campaigns</em>
                    </a>
                </li>
                <li>
                    <a class="s-sidebar__nav-link {{ Request::path() ==  'client/more-info' ? 's-sidebar__nav-active' : ''  }}" href="/client/more-info">
                        <i class="fas fa-edit"></i><em>More information</em>
                    </a>
                </li>
                <li>
                    <a class="s-sidebar__nav-link {{ Request::path() ==  'client/account-details' ? 's-sidebar__nav-active' : ''  }}" href="/client/account-details">
                        <i class="fas fa-cog"></i><em>Account details</em>
                    </a>
                </li>
                <li>
                    <a class="s-sidebar__nav-link {{ Request::path() ==  'client/contact' ? 's-sidebar__nav-active' : ''  }}" href="/client/contact">
                        <i class="fas fa-info-circle"></i><em>Contact us</em>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <main class="s-layout__content">
    @yield("content")
    </main>
</div>
<!-- Bootstrap core JavaScript -->
<script src="{{asset('front/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('front/js/client_sidebar.js')}}"></script>
@yield("script")
</body>

</html>
