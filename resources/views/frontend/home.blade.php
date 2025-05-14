@extends('frontend.index')

@section('frontend')
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="2000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner" role="listbox">
                @foreach ($sliders as $key => $slider)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                        style="background-image: url('{{ asset($slider->image) }}');"></div>
                @endforeach
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        </div>
    </section><!-- End Hero -->


    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us" style="margin-top: 30px;">
            <div class="container" data-aos="fade-up">

                <div class="row content">
                    <div class="col-lg-12" data-aos="fade-right">
                        <h2>DHAKA JAPANESE LANGUAGE INSTITUTE - ダッカ日本語学院</h2>
                        <p style="font-size: 18px;">Since 2017, We have been committed to helping students to fulfill their
                            Dreams in Japan.In view of its continuity, we established the Dhaka Japanese Language Institute.
                            We are more than a Language Institute in Dhaka. We are a team of passionate individuals who
                            believe in the power of education to transform lives. We have a skilled team who are committed
                            to helping each student fulfill their dreams with care.Our journey began with a simple vision –
                            to help students achieve their dreams of studying abroad and experiencing new cultures. Over the
                            years, we have helped thousands of students realize their potential and reach new heights in
                            their academic and personal lives.</p>
                    </div>
                    <div class="col-lg-12 pt-3" data-aos="fade-right">
                        <h3>Book a Free Consultation <img src="{{ asset('frontend/assets/img/support.gif') }}"
                                alt="" width="80"></h3>
                        <p>Take the first step toward your dream of studying in Japan! Our expert team is here to guide you
                            through language learning, university selection, visa applications, and more—all for free.</p>
                        <p><i class="ri-check-double-line"></i> Personalized Guidance</p>
                        <p><i class="ri-check-double-line"></i> Expert Advice on Study & Visa Process</p>
                        <p><i class="ri-check-double-line"></i>Hassle-Free Application Support</p>
                        <a href="{{ route('bookNow') }}" class="btn mb-4 btn-grad">Free
                            Consultancy</a>
                    </div>
                    <div class="col-lg-12" data-aos="fade-right">
                        <h3>Why Apply Online?</h3>
                        <p>Applying online offers a hassle-free and efficient process to kickstart your journey toward
                            studying in Japan. Here’s why you should apply online today:</p>
                        <p><i class="ri-check-double-line"></i> Convenience – Apply from anywhere, anytime, without visiting
                            our office.</p>
                        <p><i class="ri-check-double-line"></i> Faster Processing – Submitting your application online
                            speeds up the review process.</p>
                        <p><i class="ri-check-double-line"></i> 24/7 Accessibility – Get access to application status
                            updates and important information anytime.</p>
                        <p><i class="ri-check-double-line"></i> Personalized Support – Our team is available to assist you
                            throughout the application process.</p>
                        <p><i class="ri-check-double-line"></i> Error-Free Submission – Our guided online application
                            minimizes mistakes and ensures completeness.</p>
                        <p><i class="ri-check-double-line"></i> Data Security – Your personal information is protected with
                            advanced security measures, ensuring confidentiality and privacy.</p>
                        <a href="{{ route('applyNow') }}" class="btn mb-4  btn-grad">Apply
                            Now</a>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->


        <section id="services" class="services section-bg py-5" style="margin-top: 80px;">
            <div class="container" data-aos="fade-up">
                <div class="section-title text-center mb-5">
                    <h2 class="text-uppercase font-weight-bold">Our Services</h2>
                    <p class="text-muted" style="font-size: 20px;">We provide expert guidance to make your international
                        education journey seamless.</p>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="service-box p-4 text-center shadow-sm" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon mb-3">
                                <i class="fas fa-university fa-3x"></i>
                            </div>
                            <h4>Language Schools and Universities Selection</h4>
                            <p>Choosing the right language school or university is a crucial step in your academic and
                                professional journey. We assist you in selecting the best institution that aligns with your
                                goals, preferences, and budget.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="service-box p-4 text-center shadow-sm" data-aos="zoom-in" data-aos-delay="150">
                            <div class="icon mb-3">
                                <i class="fas fa-comments fa-3x"></i>
                            </div>
                            <h4>Interview Preparation</h4>
                            <p>A well-prepared interview can make all the difference. Our expert guidance includes mock
                                interviews, common questions, and strategies to present yourself confidently.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="service-box p-4 text-center shadow-sm" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon mb-3">
                                <i class="fas fa-passport fa-3x"></i>
                            </div>
                            <h4>Visa Application</h4>
                            <p>Our visa experts guide you through the process, from filling out forms to preparing for
                                interviews. We provide up-to-date visa requirements and documentation support.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="service-box p-4 text-center shadow-sm" data-aos="zoom-in" data-aos-delay="250">
                            <div class="icon mb-3">
                                <i class="fas fa-file-alt fa-3x"></i>
                            </div>
                            <h4>Application</h4>
                            <p>We provide end-to-end support in preparing and submitting your application, ensuring accuracy
                                and completeness.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="service-box p-4 text-center shadow-sm" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon mb-3">
                                <i class="fas fa-home fa-3x"></i>
                            </div>
                            <h4>Accommodation Support</h4>
                            <p>We help you find safe, affordable housing, whether it’s university dorms, shared apartments,
                                or homestays.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="services section-bg">
            <div class="section-title">
                <h2>Branches</h2>
            </div>
            <div class="container" data-aos="fade-up">

                <div class="row">
                    @foreach ($branches as $branch)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-3" data-aos="zoom-in"
                            data-aos-delay="100">
                            <div class="icon-box iconbox-blue">
                                <img src="{{ asset($branch->image) }}" width="100%" class="p-3"
                                    style="border-radius: 20px; border:2px solid #EA232A; margin-bottom:10px; height:350px;"
                                    alt="">
                                <h4>{{ $branch->branch_name }}</h4>
                                <address>{{ $branch->address }}</address>
                                @if ($branch->director_name != null)
                                    <p>Director: {{ $branch->director_name }}</p>
                                @endif
                                <P>Phone: {{ $branch->phone }}</P>
                                @if ($branch->email != null)
                                    <p>Email: {{ $branch->email }}</p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                data-bs-target="#faq-list-1">What is the minimum requirement for student visa in japan? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    You have to pass HSC/HSC equivalent exams.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-2" class="collapsed">Is it possible to go to Japan without
                                learning Japanese?<i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    For Language program not possible.But for Undergraduate program some universities have
                                    their English program courses.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-3" class="collapsed">How long does it take to learn Japanese
                                Language course?<i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    6 months Course for N5 Level.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-4" class="collapsed">How many levels are there in learning
                                Japanese?<i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    5 Levels, Start from N5 beginers and then N4,N3,N2,N1.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

    </main><!-- End #main -->


    <style>
        .service-box {
            background: #fff;
            border-radius: 10px;
            transition: all 0.4s ease-in-out;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        .service-box:hover {
            transform: translateY(-5px);
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.2);
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }

        .service-box:hover .icon i {
            transform: scale(1.2);
            color: #EA232A;
        }

        .service-box:hover h4 {
            color: #EA232A;
        }

        .service-box::after {
            content: "";
            position: absolute;
            width: 50px;
            height: 50px;
            background: rgba(255, 87, 34, 0.1);
            top: -10px;
            left: -10px;
            border-radius: 50%;
            transition: all 0.4s ease-in-out;
        }

        .service-box:hover::after {
            width: 300px;
            height: 300px;
            top: -50px;
            left: -50px;
        }

        .icon i {
            transition: all 0.3s ease-in-out;
            color: #6c757d;
        }

        .text-muted {
            font-size: 14px;
            line-height: 1.6;
        }

        h4 {
            font-weight: 600;
            transition: color 0.3s ease-in-out;
        }
    </style>
@endsection
