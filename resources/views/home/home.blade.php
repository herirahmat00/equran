@extends('layout.main')
@extends('layout.header')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h1>Welcome to E-<span>Quran</span></h1>
        <h2>We are team of talented designers making websites with Bootstrap</h2>
        <div class="d-flex">
            <a href="#surah" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
    </div>
</section><!-- End Hero -->

<!-- ======= Surah Section ======= -->
<section id="surah" class="about section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Surah</h2>
            <h3>Find Out More <span>About Us</span></h3>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <img src="{{asset('assets/img/logo_quran.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                </p>
                <ul>
                    <li>
                        <i class="bx bx-store-alt"></i>
                        <div>
                            <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                            <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                        </div>
                    </li>
                    <li>
                        <i class="bx bx-images"></i>
                        <div>
                            <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                            <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                        </div>
                    </li>
                </ul>
                <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum
                </p>
            </div>
        </div>

    </div>
</section><!-- End About Section -->
@endsection
@extends('layout.footer')