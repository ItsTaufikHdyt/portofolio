@extends('portfolio::layouts.app')
@section('main-content')
<div>

    <!-- ======= Header ======= -->
    <header id="header" class="header-tops">
        <div class="container">

            <h1 class="font-home">Taufik Hidayat</h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
            <h2 class="font-home">I'm a passionate <span>Fullstack Developer</span> from Indonesia</h2>

            <nav class="nav-menu d-none d-lg-block font-home">
                <ul>
                    <li class="active"><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#resume">Resume</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav><!-- .nav-menu -->

            <div class="social-links font-home">
                <a href="https://docs.google.com/document/d/1GcB6sVjVks3Scr5clVtqgiXN-GHLaYnPmqvG9Amgwvk/edit?usp=sharing" target="_blank" class="cv"><i class="icofont-ui-file"></i></a>
                <a href="https://github.com/Taufikhdyt17" target="_blank" class="github"><i class="icofont-github"></i></a>
                <a href="https://www.linkedin.com/in/taufikhdyt17" target="_blank" class="linkedin"><i class="icofont-linkedin"></i></a>
                <a href="https://www.facebook.com/Taufikhdyt17" target="_blank" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="https://www.instagram.com/taufik_hdyt17" target="_blank" class="instagram"><i class="icofont-instagram"></i></a>
            </div>

        </div>
    </header><!-- End Header -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <!-- ======= About Me ======= -->
        <div class="about-me container">

            <div class="section-title">
                <h2>About</h2>
                <p>Learn more about me</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="{{asset('portfolios/assets/img/me.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>Fullstack &amp; Developer</h3>
                    <p class="font-italic">
                        {{$about->desc}}
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <!-- <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> </li> -->
                                <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> {{$about->website}}</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> {{$about->phone}}</li>
                                <li><i class="icofont-rounded-right"></i> <strong>City:</strong> City : {{$about->city}}</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> {{$about->age}}</li>
                                <!-- <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> Master</li> -->
                                <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> {{$about->email}}</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> @if($about->freelance == 1)Available @elseIf($about->freelance == 2) Not Available @endif</li>
                            </ul>
                        </div>
                    </div>
                    <!-- <p>
                Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
              </p> -->
                </div>
            </div>

        </div><!-- End About Me -->

        <!-- ======= Counts ======= -->
        <div class="counts container">

            <div class="row">

                <!-- <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="icofont-simple-smile"></i>
            <span data-toggle="counter-up">232</span>
            <p>Happy Clients</p>
          </div>
        </div> -->

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="count-box">
                        <i class="icofont-document-folder"></i>
                        <span data-toggle="counter-up">{{$projects}}</span>
                        <p>Projects</p>
                    </div>
                </div>

                <!-- <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="icofont-live-support"></i>
            <span data-toggle="counter-up">1,463</span>
            <p>Hours Of Support</p>
          </div>
        </div> -->

                <!-- <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="icofont-users-alt-5"></i>
            <span data-toggle="counter-up">15</span>
            <p>Hard Workers</p>
          </div>
        </div> -->

            </div>

        </div>
        <!-- End Counts -->

        <!-- ======= Skills  ======= -->
        <!-- <div class="skills container">
    
          <div class="section-title">
            <h2>Skills</h2>
          </div>
    
          <div class="row skills-content">
    
            <div class="col-lg-6">
    
              <div class="progress">
                <span class="skill">HTML <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
    
              <div class="progress">
                <span class="skill">CSS <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
    
              <div class="progress">
                <span class="skill">JavaScript <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
    
            </div>
    
            <div class="col-lg-6">
    
              <div class="progress">
                <span class="skill">PHP <i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
    
              <div class="progress">
                <span class="skill">WordPress/CMS <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
    
              <div class="progress">
                <span class="skill">Photoshop <i class="val">55%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
    
            </div>
    
          </div>
    
        </div> -->
        <!-- End Skills -->

        <!-- ======= Interests ======= -->
        <div class="interests container">

            <div class="section-title">
                <h2>Skills</h2>
            </div>

            <div class="row">
                @forelse ($skills as $data)
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box">
                        <i class="{!!$data->icon!!}"></i>
                        <h3>{{$data->name}}</h3> |
                        <h3>
                            @if ($data->level == 1)
                            Beginner
                            @elseif($data->level == 2)
                            Intermediate
                            @elseif($data->level == 3)
                            Advanced
                            @endif</h3>
                    </div>
                </div>
                @empty

                @endforelse

            </div>

        </div>
        <!-- End Interests -->

        <!-- ======= Testimonials ======= -->
        <!-- <div class="testimonials container">
    
          <div class="section-title">
            <h2>Testimonials</h2>
          </div>
    
          <div class="owl-carousel testimonials-carousel">
    
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>
    
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
            </div>
    
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
            </div>
    
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
            </div>
    
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
            </div>
    
          </div>
    
        </div> -->
        <!-- End Testimonials  -->

    </section><!-- End About Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <h2>Resume</h2>
                <p>Check My Resume</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <h3 class="resume-title">Sumary</h3>
                    <div class="resume-item pb-0">
                        <h4>Taufik Hidayat</h4>
                        <p><em>{{$about->desc}}</em></p>
                        <p>
                        <ul>
                            <li>{{$about->city}}</li>
                            <li>{{$about->phone}}</li>
                            <li>{{$about->email}}</li>
                        </ul>
                        </p>
                    </div>

                    <h3 class="resume-title">Education</h3>
                    @forelse ($education as $data)
                    <div class="resume-item">
                        <h4>{{$data->title}}</h4>
                        <h5>{{$data->period}}</h5>
                        <p><em>{{$data->location}}</em></p>
                    </div>
                    @empty

                    @endforelse

                </div>
                <div class="col-lg-6">
                    <h3 class="resume-title">Professional Experience</h3>
                    @forelse ($experience as $data)
                    <div class="resume-item">
                        <h4>{{$data->title}}</h4>
                        <h5>{{$data->period}}</h5>
                        <p><em>{{$data->location}}</em></p>
                        <p>
                            {!!$data->desc!!}
                            <!-- <ul>
                  <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                  <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                  <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                  <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
                </ul> -->
                        </p>
                    </div>
                    @empty

                    @endforelse
                </div>
            </div>

        </div>
    </section>
    <!-- End Resume Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Services</h2>
                <p>My Services</p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-globe"></i></div>
                        <h4><a href="">Website Developer</a></h4>
                        <p>Membangun website menggunakan bahasa php dan framework laravel</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-laptop"></i></div>
                        <h4><a href="">Backend Developer</a></h4>
                        <p>Membangun restfull API menggunakan framework Laravel</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-android"></i></div>
                        <h4><a href="">Mobile Developer</a></h4>
                        <p>Membangun berbagai macam aplikasi mobile menggunakan bahasa dart dan framework flutter</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>My Works</p>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-1">Web</li>
                        <li data-filter=".filter-2">Mobile</li>
                        <li data-filter=".filter-3">Dekstop</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                @forelse ($portfolio as $data)
              
                <div class="col-lg-4 col-md-6 portfolio-item filter-{!!$data->type!!}">
                    <div class="portfolio-wrap">

                        <!-- <img src="{{asset('portfoliosss/assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt=""> -->
                        <img src="{{asset('storage/portfolios/images/'.$data->images()->first()->filename)}}" class="img-fluid" alt="">

                        <div class="portfolio-info">
                            <h4>{{$data->portfolio_title}}</h4>
                            <p> @if($data->type === 1)
                                Web
                                @elseif($data->type === 2)
                                Mobile
                                @elseif($data->type === 3)
                                Dekstop
                                @endif

                            </p>
                            <div class="portfolio-links">
                            @include('Homepage.portfolio-details')
                                <!-- <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a> -->
                                <button data-toggle="modal" data-gall="portfolioDetailsGallery" data-vbtype="iframe" data-target="#showDetails{{$data->id}}" class="btn btn-warning btn-md"><i class="bx bx-link"></i></button>
                                <!-- <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
                @empty

                @endforelse

            </div>

        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Contact Me</p>
            </div>

            <div class="row mt-2">

                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>My Address</h3>
                        <p>{{$about->city}}</p>
                    </div>
                </div>

                <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-share-alt"></i>
                        <h3>Social Profiles</h3>
                        <div class="social-links">
                            <a href="https://github.com/Taufikhdyt17" target="_blank" class="github"><i class="icofont-github"></i></a>
                            <a href="https://www.linkedin.com/in/taufikhdyt17" target="_blank" class="linkedin"><i class="icofont-linkedin"></i></a>
                            <a href="https://www.facebook.com/Taufikhdyt17" target="_blank" class="facebook"><i class="icofont-facebook"></i></a>
                            <a href="https://www.instagram.com/taufik_hdyt17" target="_blank" class="instagram"><i class="icofont-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Me</h3>
                        <p>{{$about->email}}</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Me</h3>
                        <p>{{$about->phone}}</p>
                    </div>
                </div>
            </div>

            <form action="{{route('homepage.sendMail')}}" method="post" role="form" class="php-email-form mt-4">
                @csrf
                <div class="form-row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validate"></div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validate"></div>
                </div>
                <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

        </div>
    </section>
    <!-- End Contact Section -->

</div>

@push('scripts')
@endpush
@endsection