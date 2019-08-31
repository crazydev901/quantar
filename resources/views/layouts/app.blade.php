<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="Asia’s community of data scientists empowering Emerging Markets to solve their data challenges.">
    <meta name="author" content="Quantar">
    <title>{{ "Quantar"  }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="{{ asset('assets/img/brand/favicon.png') }}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('assets/vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/themify/themify-icons.css')}}">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('assets/css/argon.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animatecss/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/icomoon.css')}}">


</head>

<body>
<header class="header-global">
    @include("layouts.nav")
</header>
<main>
    @yield("content")
</main>
<footer class="footer has-cards">
    <div class="container">
        <hr>
        <div class="row align-items-center justify-content-md-between">
            <div class="col-md-6">
                <div class="copyright">
                    &copy; 2018
                    <a href="{{ url("/") }}" target="_blank">Quantar</a>.
                </div>
            </div>
            <div class="col-md-6">
                <ul class="nav nav-footer justify-content-end">
                    <li class="nav-item">
                        <a href="{{ url("/")  }}" class="nav-link" target="_blank">Quantar</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url("/#about") }}" class="nav-link" target="_blank">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("learn") }}" class="nav-link" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("competitions")  }}"
                           class="nav-link" target="_blank">Challenge</a>
                    </li>
                </ul>
            </div>
        </div>
        <a id="mkdf-back-to-top" href="#" class="on">
				<span class="mkdf-btt-wrapper">
					<svg class="mkdf-btt-svg-top" x="0px" y="0px" viewBox="0 0 40 40"
                         style="enable-background:new 0 0 40 40;" xml:space="preserve">
						<g class="mkdf-arrow">
							<path d="M20,30L20,30c-0.6,0-1-0.4-1-1V13c0-0.6,0.4-1,1-1h0c0.6,0,1,0.4,1,1v16C21,29.6,20.6,30,20,30z"></path>
							<path d="M26.4,16.4l-5.7-5.7c-0.4-0.4-1-0.4-1.4,0l-5.7,5.7c-0.4,0.4-0.4,1,0,1.4c0.4,0.4,1,0.4,1.4,0l4.9-4.9l4.9,4.9   c0.4,0.4,1,0.4,1.4,0C26.8,17.4,26.8,16.8,26.4,16.4z"></path>
						</g>
					</svg>
				</span>
        </a>
    </div>
</footer>
<!-- Core -->
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }} "></script>
<script src="{{ asset('assets/vendor/popper/popper.min.js') }} "></script>
<script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }} "></script>
<script src="{{ asset('assets/vendor/headroom/headroom.min.js') }} "></script>
<script src="{{ asset('assets/vendor/wowjs/dist/wow.min.js') }} "></script>
{{--<script src="https://cdn.alloyui.com/3.0.1/aui/aui-min.js"></script>--}}
<!-- Argon JS -->
<script src="{{ asset('assets/js/argon.js') }} "></script>
<script src="{{ asset('assets/js/scrolling-nav.js') }} "></script>

<script>
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 600) {
                $('#mkdf-back-to-top').fadeIn();
            }
            else {
                $('#mkdf-back-to-top').fadeOut();
            }
        });
        $("#mkdf-back-to-top").click(function (e) {
            e.preventDefault();
            $('body,html').animate({scrollTop: 0}, 800, 'swing');
        });
    });

    $('#toggle-widget .content').hide();
    $('#toggle-widget h2:first').addClass('active').next().slideDown('slow');
    $('#toggle-widget h2').on("click", function () {
        if ($(this).next().is(':hidden')) {
            $('#toggle-widget h2').removeClass('active').next().slideUp('slow');
            $(this).toggleClass('active').next().slideDown('slow');
        }
    });
    // $('.counter').counterUp({
    //     delay: 10,
    //     time: 1000
    // });

    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    });

    <!-- Скрипт плавного открытия и закрытия блока -->
        $(document).ready(function() {
            $("#trigger").toggle(function() {
                    // Отображаем скрытый блок
                    $("#box").fadeIn(); // fadeIn - плавное появление
                    return false; // не производить переход по ссылке
                },
                function() {
                    // Скрываем блок
                    $("#box").fadeOut(); // fadeOut - плавное исчезновение
                    return false; // не производить переход по ссылке
                }); // end of toggle()
        }); // end of ready()

    // $(document).ready(function(){
    //     $('.spoiler_links').on('click',(function(){
    //         $('.spoiler_body').toggle();
    //     }));
    // });
</script>

<script>
    YUI().use(
        'aui-pagination',
        function (Y) {
            new Y.Pagination(
                {
                    after: {
                        changeRequest: function (event) {
                            console.log(
                                'page:', event.state.page,
                                'getOffsetPageNumber:', this.getOffsetPageNumber()
                            );
                        }
                    },
                    boundingBox: '#jspagination',
                    offset: 999,
                    page: 1,
                    strings: {
                        next: '»',
                        prev: '«'
                    },
                    total: 5
                }
            ).render();
        }
    );
</script>
@yield("scripts")
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5946792a3d7c0e25"></script>
</body>

</html>
