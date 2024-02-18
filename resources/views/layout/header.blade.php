@section('header')
<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <!-- <h1 class="logo"><a href="index.html">BizLand<span>.</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="#" class="logo"><img width="60px" height="60px" src="{{asset('assets/img/logo_quran.png')}}" alt="">Quran</a>
        <!-- <a href="index.html" class="logo"><img width="75px" height="75px" src="{{asset('assets/img/logo/quran_karim1.png')}}" alt="">E-<span>Quran</span></a> -->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#surah">Surah</a></li>
                <li><a class="nav-link scrollto" href="#services">Juzs</a></li>
                <!-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
                {{--<li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>--}}
                <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

@endsection