@extends('frontend.index')

@section('frontend')
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg py-5" style="margin-top: 120px;">
        <div class="container" data-aos="fade-up">
            <div class="section-title text-center mb-5">
                <h2 class="text-uppercase font-weight-bold">Our Services</h2>
                <p class="text-muted" style="font-size: 20px;">We provide expert guidance to make your international education journey seamless.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="service-box p-4 text-center shadow-sm" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon mb-3">
                            <i class="fas fa-university fa-3x"></i>
                        </div>
                        <h4>Language Schools and Universities Selection</h4>
                        <p>Choosing the right language school or university is a crucial step in your academic and professional journey. We assist you in selecting the best institution that aligns with your goals, preferences, and budget.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="service-box p-4 text-center shadow-sm" data-aos="zoom-in" data-aos-delay="150">
                        <div class="icon mb-3">
                            <i class="fas fa-comments fa-3x"></i>
                        </div>
                        <h4>Interview Preparation</h4>
                        <p>A well-prepared interview can make all the difference. Our expert guidance includes mock interviews, common questions, and strategies to present yourself confidently.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="service-box p-4 text-center shadow-sm" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon mb-3">
                            <i class="fas fa-passport fa-3x"></i>
                        </div>
                        <h4>Visa Application</h4>
                        <p>Our visa experts guide you through the process, from filling out forms to preparing for interviews. We provide up-to-date visa requirements and documentation support.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="service-box p-4 text-center shadow-sm" data-aos="zoom-in" data-aos-delay="250">
                        <div class="icon mb-3">
                            <i class="fas fa-file-alt fa-3x"></i>
                        </div>
                        <h4>Application</h4>
                        <p>We provide end-to-end support in preparing and submitting your application, ensuring accuracy and completeness.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="service-box p-4 text-center shadow-sm" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon mb-3">
                            <i class="fas fa-home fa-3x"></i>
                        </div>
                        <h4>Accommodation Support</h4>
                        <p>We help you find safe, affordable housing, whether it’s university dorms, shared apartments, or homestays.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->
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
