@extends('vcard::layouts.app')
@section('main-content')
<main>

    <!--- #SIDEBAR-->

    <aside class="sidebar" data-sidebar>

        <div class="sidebar-info">

            <figure class="avatar-box">
                <img src="{{asset('vcard/images/avatarprofil.png')}}" alt="Taufik Hidayat" width="80">
            </figure>

            <div class="info-content">
                <h1 class="name" title="Taufik Hidayat">Taufik Hidayat</h1>

                <p class="title">Software Engineer</p>
            </div>

            <button class="info_more-btn" data-sidebar-btn>
                <span>Show Contacts</span>

                <ion-icon name="chevron-down"></ion-icon>
            </button>

        </div>

        <div class="sidebar-info_more">

            <div class="separator"></div>

            <ul class="contacts-list">

                <li class="contact-item">

                    <div class="icon-box">
                        <ion-icon name="mail-outline"></ion-icon>
                    </div>

                    <div class="contact-info">
                        <p class="contact-title">Email</p>

                        <a href="mailto:taufikhdyt2332@gmail.com" class="contact-link">{{$about->email}}</a>
                    </div>

                </li>

                <li class="contact-item">

                    <div class="icon-box">
                        <ion-icon name="phone-portrait-outline"></ion-icon>
                    </div>

                    <div class="contact-info">
                        <p class="contact-title">Phone</p>

                        <a href="tel:+6285256637373" class="contact-link">{{$about->phone}}</a>
                    </div>

                </li>

                <li class="contact-item">

                    <div class="icon-box">
                        <ion-icon name="calendar-outline"></ion-icon>
                    </div>

                    <div class="contact-info">
                        <p class="contact-title">Age</p>

                        <time datetime="1982-06-23">{{$about->age}}</time>
                    </div>

                </li>

                <li class="contact-item">

                    <div class="icon-box">
                        <ion-icon name="location-outline"></ion-icon>
                    </div>

                    <div class="contact-info">
                        <p class="contact-title">Location</p>

                        <address>{{$about->city}}</address>
                    </div>

                </li>

            </ul>

            <div class="separator"></div>

            <ul class="social-list">
                <li class="social-item">
                    <a href="https://docs.google.com/document/d/1GcB6sVjVks3Scr5clVtqgiXN-GHLaYnPmqvG9Amgwvk/edit?usp=sharing" target="_blank" class="social-link">
                        <ion-icon name="document"></ion-icon>
                    </a>
                </li>

                <li class="social-item">
                    <a href="https://github.com/Taufikhdyt17" target="_blank" class="social-link">
                        <ion-icon name="logo-github"></ion-icon>
                    </a>
                </li>

                <li class="social-item">
                    <a href="https://www.linkedin.com/in/taufikhdyt17" target="_blank" class="social-link">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                </li>

                <li class="social-item">
                    <a href="https://www.facebook.com/Taufikhdyt17" target="_blank" class="social-link">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </li>

                <li class="social-item">
                    <a href="https://www.instagram.com/taufik_hdyt17" target="_blank" class="social-link">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>

            </ul>

        </div>

    </aside>

    <!--- #main-content-->

    <div class="main-content">

        <!--- #NAVBAR-->

        <nav class="navbar">

            <ul class="navbar-list">

                <li class="navbar-item">
                    <button class="navbar-link  active" data-nav-link>About</button>
                </li>

                <li class="navbar-item">
                    <button class="navbar-link" data-nav-link>Resume</button>
                </li>

                <li class="navbar-item">
                    <button class="navbar-link" data-nav-link>Portfolio</button>
                </li>

                <!-- <li class="navbar-item">
                    <button class="navbar-link" data-nav-link>Blog</button>
                </li> -->

                <li class="navbar-item">
                    <button class="navbar-link" data-nav-link>Contact</button>
                </li>

            </ul>

        </nav>


        <!--- #ABOUT-->

        <article class="about  active" data-page="about">
            <header>
                <h2 class="h2 article-title">About me</h2>
            </header>

            <section class="about-text">
                <p>
                    {{$about->desc}}
                </p>
            </section>


            <!--- service-->

            <section class="service">

                <h3 class="h3 service-title">What i'm doing</h3>

                <ul class="service-list">

                    <li class="service-item">

                        <div class="service-icon-box">
                            <img src="{{asset('vcard/images/icon-dev.svg')}}" alt="Web development icon" width="40">
                        </div>

                        <div class="service-content-box">
                            <h4 class="h4 service-item-title">Web development</h4>

                            <p class="service-item-text">
                                Membangun website menggunakan bahasa php dan framework laravel.
                            </p>
                        </div>

                    </li>

                    <li class="service-item">

                        <div class="service-icon-box">
                            <img src="{{asset('vcard/images/icon-app.svg')}}" alt="mobile app icon" width="40">
                        </div>

                        <div class="service-content-box">
                            <h4 class="h4 service-item-title">Mobile apps</h4>

                            <p class="service-item-text">
                                Membangun berbagai macam aplikasi mobile menggunakan bahasa dart dan framework flutter.
                            </p>
                        </div>

                    </li>

                    <li class="service-item">

                        <div class="service-icon-box">
                            <img src="{{asset('vcard/images/backend-dev.svg')}}" alt="design icon" width="40">
                        </div>

                        <div class="service-content-box">
                            <h4 class="h4 service-item-title">Backend Developer</h4>

                            <p class="service-item-text">
                                Membangun restfull API menggunakan framework Laravel.
                            </p>
                        </div>

                    </li>

                    <!-- <li class="service-item">

                        <div class="service-icon-box">
                            <img src="{{asset('vcard/images/icon-photo.svg')}}" alt="camera icon" width="40">
                        </div>

                        <div class="service-content-box">
                            <h4 class="h4 service-item-title">Photography</h4>

                            <p class="service-item-text">
                                I make high-quality photos of any category at a professional level.
                            </p>
                        </div>

                    </li> -->

                </ul>

            </section>


            <!--- testimonials-->

            <section class="testimonials">

                <h3 class="h3 testimonials-title">Testimonials</h3>

                <ul class="testimonials-list has-scrollbar">

                    <li class="testimonials-item">
                        <div class="content-card" data-testimonials-item>

                            <figure class="testimonials-avatar-box">
                                <img src="{{asset('vcard/images/avatar-1.png')}}" alt="Daniel lewis" width="60" data-testimonials-avatar>
                            </figure>

                            <h4 class="h4 testimonials-item-title" data-testimonials-title>Daniel lewis</h4>

                            <div class="testimonials-text" data-testimonials-text>
                                <p>
                                    Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                                    lot of experience
                                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                                    consectetur adipiscing
                                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                                </p>
                            </div>

                        </div>
                    </li>

                    <li class="testimonials-item">
                        <div class="content-card" data-testimonials-item>

                            <figure class="testimonials-avatar-box">
                                <img src="{{asset('vcard/images/avatar-2.png')}}" alt="Jessica miller" width="60" data-testimonials-avatar>
                            </figure>

                            <h4 class="h4 testimonials-item-title" data-testimonials-title>Jessica miller</h4>

                            <div class="testimonials-text" data-testimonials-text>
                                <p>
                                    Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                                    lot of experience
                                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                                    consectetur adipiscing
                                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                                </p>
                            </div>

                        </div>
                    </li>

                    <li class="testimonials-item">
                        <div class="content-card" data-testimonials-item>

                            <figure class="testimonials-avatar-box">
                                <img src="{{asset('vcard/images/avatar-3.png')}}" alt="Emily evans" width="60" data-testimonials-avatar>
                            </figure>

                            <h4 class="h4 testimonials-item-title" data-testimonials-title>Emily evans</h4>

                            <div class="testimonials-text" data-testimonials-text>
                                <p>
                                    Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                                    lot of experience
                                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                                    consectetur adipiscing
                                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                                </p>
                            </div>

                        </div>
                    </li>

                    <li class="testimonials-item">
                        <div class="content-card" data-testimonials-item>

                            <figure class="testimonials-avatar-box">
                                <img src="{{asset('vcard/images/avatar-4.png')}}" alt="Henry william" width="60" data-testimonials-avatar>
                            </figure>

                            <h4 class="h4 testimonials-item-title" data-testimonials-title>Henry william</h4>

                            <div class="testimonials-text" data-testimonials-text>
                                <p>
                                    Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                                    lot of experience
                                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                                    consectetur adipiscing
                                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                                </p>
                            </div>

                        </div>
                    </li>

                </ul>

            </section>


            <!--- testimonials modal-->

            <div class="modal-container" data-modal-container>

                <div class="overlay" data-overlay></div>

                <section class="testimonials-modal">

                    <button class="modal-close-btn" data-modal-close-btn>
                        <ion-icon name="close-outline"></ion-icon>
                    </button>

                    <div class="modal-img-wrapper">
                        <figure class="modal-avatar-box">
                            <img src="{{asset('vcard/images/avatar-1.png')}}" alt="Daniel lewis" width="80" data-modal-img>
                        </figure>

                        <img src="{{asset('vcard/images/icon-quote.svg')}}" alt="quote icon">
                    </div>

                    <div class="modal-content">

                        <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

                        <time datetime="2021-06-14">14 June, 2021</time>

                        <div data-modal-text>
                            <p>
                                Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                                lot of experience
                                and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                                consectetur adipiscing
                                elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                            </p>
                        </div>

                    </div>

                </section>

            </div>


            <!--- clients-->

            <section class="clients">

                <h3 class="h3 clients-title">Skills</h3>

                <ul class="clients-list has-scrollbar">
                    @forelse ($skills as $data)
                    <li class="clients-item">
                        <center>
                            <i style="font-size:60px;" class="{!!$data->icon!!}"></i>
                            <br>
                            <h3 style="color:white;">
                                @if ($data->level == 1)
                                Beginner
                                @elseif($data->level == 2)
                                Intermediate
                                @elseif($data->level == 3)
                                Advanced
                                @endif
                            </h3>
                        </center>
                    </li>
                    @empty
                    @endforelse
                    <!-- 
                    <li class="clients-item">
                        <a href="#">
                            <img src="{{asset('vcard/images/logo-2-color.png')}}" alt="client logo">
                        </a>
                    </li>

                    <li class="clients-item">
                        <a href="#">
                            <img src="{{asset('vcard/images/logo-3-color.png')}}" alt="client logo">
                        </a>
                    </li>

                    <li class="clients-item">
                        <a href="#">
                            <img src="{{asset('vcard/images/logo-4-color.png')}}" alt="client logo">
                        </a>
                    </li>

                    <li class="clients-item">
                        <a href="#">
                            <img src="{{asset('vcard/images/logo-5-color.png')}}" alt="client logo">
                        </a>
                    </li>

                    <li class="clients-item">
                        <a href="#">
                            <img src="{{asset('vcard/images/logo-6-color.png')}}" alt="client logo">
                        </a>
                    </li> -->

                </ul>

            </section>

        </article>


        <!--- #RESUME-->

        <article class="resume" data-page="resume">

            <header>
                <h2 class="h2 article-title">Resume</h2>
            </header>

            <section class="timeline">

                <div class="title-wrapper">
                    <div class="icon-box">
                        <ion-icon name="book-outline"></ion-icon>
                    </div>

                    <h3 class="h3">Education</h3>
                </div>

                <ol class="timeline-list">
                    @forelse ($education as $data)
                    <li class="timeline-item" style="color: white;">

                        <h4 class="h4 timeline-item-title">{{$data->title}}</h4>

                        <span>{{$data->period}}</span>

                        <p class="timeline-text">
                            {{$data->location}}
                        </p>

                    </li>
                    @empty

                    @endforelse

                </ol>

            </section>

            <section class="timeline">

                <div class="title-wrapper">
                    <div class="icon-box">
                        <ion-icon name="book-outline"></ion-icon>
                    </div>

                    <h3 class="h3">Experience</h3>
                </div>

                <ol class="timeline-list">
                    @forelse ($experience as $data)
                    <li class="timeline-item" style="color: white;">

                        <h4 class="h4 timeline-item-title">{{$data->title}}</h4>

                        <span>{{$data->period}}</span>

                        <p class="timeline-text" style="color:white;">
                            {!!$data->desc!!}
                        </p>

                    </li>
                    @empty

                    @endforelse
                </ol>

            </section>

            <!-- <section class="skill">

                <h3 class="h3 skills-title">My skills</h3>

                <ul class="skills-list content-card">

                    <li class="skills-item">

                        <div class="title-wrapper">
                            <h5 class="h5">Web design</h5>
                            <data value="80">80%</data>
                        </div>

                        <div class="skill-progress-bg">
                            <div class="skill-progress-fill" style="width: 80%;"></div>
                        </div>

                    </li>

                    <li class="skills-item">

                        <div class="title-wrapper">
                            <h5 class="h5">Graphic design</h5>
                            <data value="70">70%</data>
                        </div>

                        <div class="skill-progress-bg">
                            <div class="skill-progress-fill" style="width: 70%;"></div>
                        </div>

                    </li>

                    <li class="skills-item">

                        <div class="title-wrapper">
                            <h5 class="h5">Branding</h5>
                            <data value="90">90%</data>
                        </div>

                        <div class="skill-progress-bg">
                            <div class="skill-progress-fill" style="width: 90%;"></div>
                        </div>

                    </li>

                    <li class="skills-item">

                        <div class="title-wrapper">
                            <h5 class="h5">WordPress</h5>
                            <data value="50">50%</data>
                        </div>

                        <div class="skill-progress-bg">
                            <div class="skill-progress-fill" style="width: 50%;"></div>
                        </div>

                    </li>

                </ul>

            </section> -->

        </article>

        <div class="bootstrap-style">
            <!-- Modal -->
            <div class="modal fade " id="portfolio_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content rounded-15" style="background-color: #a6a6a6; border: white;">
                        <div class="modal-header">
                            <button type="button" id="closeBtn" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="background-color: hsl(240, 2%, 12%);">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4 portfolio-info text-white">

                                        <h3 style="color: white;">Project information</h3>
                                        <ul style="color: white;">
                                            <li><strong>Project Title</strong>: <span id="project_title"></span></li>
                                            <li><strong>Category</strong>: <span id="category"></li>
                                            <li><strong>Client</strong>: <span id="client"></span> </li>
                                            <li><strong>Project Date</strong>: <span id="project_date"></span></li>
                                            <li><strong>Project URL</strong>: <a id="project_url" href=""></a></li>
                                        </ul>

                                        <p style="color: white;">
                                            <span id="portfolio_desc"></span>
                                            <br>
                                            <span id="tags" class="badge bg-warning text-dark"></span>
                                        </p>

                                    </div>
                                    <div class="col-md-8 ml-auto">
                                        <div id="img" class="img">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--- #PORTFOLIO-->
        <article class="portfolio" data-page="portfolio">
            <header>
                <h2 class="h2 article-title">Portfolio</h2>
            </header>

            <section class="projects">

                <ul class="filter-list">

                    <li class="filter-item">
                        <button class="active" data-filter-btn>All</button>
                    </li>

                    <li class="filter-item">
                        <button data-filter-btn>web</button>
                    </li>

                    <li class="filter-item">
                        <button data-filter-btn>mobile</button>
                    </li>

                    <li class="filter-item">
                        <button data-filter-btn>dekstop</button>
                    </li>

                </ul>

                <div class="filter-select-box">

                    <button class="filter-select" data-select>

                        <div class="select-value" data-selecct-value>Select category</div>

                        <div class="select-icon">
                            <ion-icon name="chevron-down"></ion-icon>
                        </div>

                    </button>

                    <ul class="select-list">

                        <li class="select-item">
                            <button data-select-item>All</button>
                        </li>

                        <li class="select-item">
                            <button data-select-item>web</button>
                        </li>

                        <li class="select-item">
                            <button data-select-item>mobile</button>
                        </li>

                        <li class="select-item">
                            <button data-select-item>dekstop</button>
                        </li>

                    </ul>

                </div>

                <ul class="project-list">
                    @forelse ($portfolio as $data)

                    <li class="project-item  active" @if($data->type === 1)
                        data-filter-item data-category="web"
                        @elseif($data->type === 2)
                        data-filter-item data-category="mobile"
                        @elseif($data->type === 3)
                        data-filter-item data-category="dekstop"
                        @endif>

                        <a href="javascript:void(0)" class="btn btn-warning" id="showPortfolio" data-toggle="modal" data-target="#portfolio_modal" data-id={{$data->id}}>
                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>
                                <img src="{{asset('storage/portfolios/images/'.$data->images()->first()->filename)}}" loading="lazy">
                            </figure>

                            <h3 class="project-title">{{$data->portfolio_title}}</h3>

                            <p class="project-category">
                                @if($data->type === 1)
                                Web
                                @elseif($data->type === 2)
                                Mobile
                                @elseif($data->type === 3)
                                Dekstop
                                @endif
                            </p>
                        </a>
                    </li>

                    @empty

                    @endforelse
                </ul>

            </section>

        </article>


        <!--- #BLOG-->

        <!-- <article class="blog" data-page="blog">

            <header>
                <h2 class="h2 article-title">Blog</h2>
            </header>

            <section class="blog-posts">

                <ul class="blog-posts-list">

                    <li class="blog-post-item">
                        <a href="#">

                            <figure class="blog-banner-box">
                                <img src="{{asset('vcard/images/blog-1.jpg')}}" alt="Design conferences in 2022" loading="lazy">
                            </figure>

                            <div class="blog-content">

                                <div class="blog-meta">
                                    <p class="blog-category">Design</p>

                                    <span class="dot"></span>

                                    <time datetime="2022-02-23">Fab 23, 2022</time>
                                </div>

                                <h3 class="h3 blog-item-title">Design conferences in 2022</h3>

                                <p class="blog-text">
                                    Veritatis et quasi architecto beatae vitae dicta sunt, explicabo.
                                </p>

                            </div>

                        </a>
                    </li>

                    <li class="blog-post-item">
                        <a href="#">

                            <figure class="blog-banner-box">
                                <img src="{{asset('vcard/images/blog-2.jpg')}}" alt="Best fonts every designer" loading="lazy">
                            </figure>

                            <div class="blog-content">

                                <div class="blog-meta">
                                    <p class="blog-category">Design</p>

                                    <span class="dot"></span>

                                    <time datetime="2022-02-23">Fab 23, 2022</time>
                                </div>

                                <h3 class="h3 blog-item-title">Best fonts every designer</h3>

                                <p class="blog-text">
                                    Sed ut perspiciatis, nam libero tempore, cum soluta nobis est eligendi.
                                </p>

                            </div>

                        </a>
                    </li>

                    <li class="blog-post-item">
                        <a href="#">

                            <figure class="blog-banner-box">
                                <img src="{{asset('vcard/images/blog-3.jpg')}}" alt="Design digest #80" loading="lazy">
                            </figure>

                            <div class="blog-content">

                                <div class="blog-meta">
                                    <p class="blog-category">Design</p>

                                    <span class="dot"></span>

                                    <time datetime="2022-02-23">Fab 23, 2022</time>
                                </div>

                                <h3 class="h3 blog-item-title">Design digest #80</h3>

                                <p class="blog-text">
                                    Excepteur sint occaecat cupidatat no proident, quis nostrum exercitationem ullam corporis suscipit.
                                </p>

                            </div>

                        </a>
                    </li>

                    <li class="blog-post-item">
                        <a href="#">

                            <figure class="blog-banner-box">
                                <img src="{{asset('vcard/images/blog-4.jpg')}}" alt="UI interactions of the week" loading="lazy">
                            </figure>

                            <div class="blog-content">

                                <div class="blog-meta">
                                    <p class="blog-category">Design</p>

                                    <span class="dot"></span>

                                    <time datetime="2022-02-23">Fab 23, 2022</time>
                                </div>

                                <h3 class="h3 blog-item-title">UI interactions of the week</h3>

                                <p class="blog-text">
                                    Enim ad minim veniam, consectetur adipiscing elit, quis nostrud exercitation ullamco laboris nisi.
                                </p>

                            </div>

                        </a>
                    </li>

                    <li class="blog-post-item">
                        <a href="#">

                            <figure class="blog-banner-box">
                                <img src="{{asset('vcard/images/blog-5.jpg')}}" alt="The forgotten art of spacing" loading="lazy">
                            </figure>

                            <div class="blog-content">

                                <div class="blog-meta">
                                    <p class="blog-category">Design</p>

                                    <span class="dot"></span>

                                    <time datetime="2022-02-23">Fab 23, 2022</time>
                                </div>

                                <h3 class="h3 blog-item-title">The forgotten art of spacing</h3>

                                <p class="blog-text">
                                    Maxime placeat, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>

                            </div>

                        </a>
                    </li>

                    <li class="blog-post-item">
                        <a href="#">

                            <figure class="blog-banner-box">
                                <img src="{{asset('vcard/images/blog-6.jpg')}}" alt="Design digest #79" loading="lazy">
                            </figure>

                            <div class="blog-content">

                                <div class="blog-meta">
                                    <p class="blog-category">Design</p>

                                    <span class="dot"></span>

                                    <time datetime="2022-02-23">Fab 23, 2022</time>
                                </div>

                                <h3 class="h3 blog-item-title">Design digest #79</h3>

                                <p class="blog-text">
                                    Optio cumque nihil impedit uo minus quod maxime placeat, velit esse cillum.
                                </p>

                            </div>

                        </a>
                    </li>

                </ul>

            </section>

        </article> -->


        <!--- #CONTACT-->

        <article class="contact" data-page="contact">

            <header>
                <h2 class="h2 article-title">Contact</h2>
            </header>

            <section class="mapbox" data-mapbox>
                <figure>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127673.82165440026!2d117.43543708311138!3d0.13692806779013325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x320a0dea859e6237%3A0xd0b2a55f85356781!2sBontang%2C%20Kota%20Bontang%2C%20Kalimantan%20Timur!5e0!3m2!1sid!2sid!4v1649221436348!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </figure>
            </section>

            <section class="contact-form">

                <h3 class="h3 form-title">Contact Form</h3>

                <form action="{{route('homepage2.sendMail2')}}" method="post" class="form" data-form>
                    @csrf
                    <input type="text" name="subject" class="form-input" placeholder="Subject" required data-form-input>
                    <br>
                    <div class="input-wrapper">
                        <input type="text" name="name" class="form-input" placeholder="Full name" required data-form-input>

                        <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
                    </div>

                    <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>

                    <button class="form-btn" type="submit" disabled data-form-btn>
                        <ion-icon name="paper-plane"></ion-icon>
                        <span>Send Message</span>
                    </button>

                </form>

            </section>

        </article>

    </div>

</main>
@endsection