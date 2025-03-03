@extends('frontend.index')

@section('frontend')
    <!-- ======= Hero Section ======= -->
    <img src="{{ asset('frontend/assets/img/slide/hero-img.jpeg') }}" style="margin-top: 80px;" alt="" width="100%">
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us" style="margin-top: 30px;">
            <div class="container" data-aos="fade-up">

                <div class="row content">
                    <div class="col-lg-12" data-aos="fade-right">
                        <h2>DHAKA JAPANESE LANGUAGE INSTITUTE - ダッカ日本語学院</h2>
                        <p style="font-size: 18px;">Since 2017, We have been committed to helping students to fulfill their Dreams in Japan.In view of its continuity, we established the Dhaka Japanese Language Institute. We are more than a Language Institute in Dhaka. We are a team of passionate individuals who believe in the power of education to transform lives. We have a skilled team who are committed to helping each student fulfill their dreams with care.Our journey began with a simple vision – to help students achieve their dreams of studying abroad and experiencing new cultures. Over the years, we have helped thousands of students realize their potential and reach new heights in their academic and personal lives.</p>
                    </div>
                    <div class="col-lg-12 pt-3" data-aos="fade-right">
                        <h3>Book a Free Consultation 📞</h3>
                        <p>Take the first step toward your dream of studying in Japan! Our expert team is here to guide you through language learning, university selection, visa applications, and more—all for free.</p>
                        <p><i class="ri-check-double-line"></i> Personalized Guidance</p>
                        <p><i class="ri-check-double-line"></i> Expert Advice on Study & Visa Process</p>
                        <p><i class="ri-check-double-line"></i>Hassle-Free Application Support</p>
                        <a href="{{ route('bookNow') }}" class="btn mb-4" style="border:1px solid #EA232A; background-color:#EA232A; color:white; width:200px; padding:10px;">Free Consultancy</a>
                    </div>
                    <div class="col-lg-12" data-aos="fade-right">
                        <h3>Why Apply Online?</h3>
                        <p>Applying online offers a hassle-free and efficient process to kickstart your journey toward studying in Japan. Here’s why you should apply online today:</p>
                        <p><i class="ri-check-double-line"></i> Convenience – Apply from anywhere, anytime, without visiting our office.</p>
                        <p><i class="ri-check-double-line"></i> Faster Processing – Submitting your application online speeds up the review process.</p>
                        <p><i class="ri-check-double-line"></i> 24/7 Accessibility – Get access to application status updates and important information anytime.</p>
                        <p><i class="ri-check-double-line"></i> Personalized Support – Our team is available to assist you throughout the application process.</p>
                        <p><i class="ri-check-double-line"></i> Error-Free Submission – Our guided online application minimizes mistakes and ensures completeness.</p>
                        <p><i class="ri-check-double-line"></i> Data Security – Your personal information is protected with advanced security measures, ensuring confidentiality and privacy.</p>
                        <a href="{{ route('applyNow') }}" class="btn mb-4" style="border:1px solid #EA232A; background-color:#EA232A; color:white; width:200px; padding:10px;">Apply Now</a>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <section id="services" class="services section-bg" style="margin-top: 80px;">
            <div class="section-title">
                <h2>Services</h2>
              </div>
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <h4 style="color: #EA232A">Language Schools and Universities Selection</h4>
                            <p>Choosing the right language school or university is a crucial step in your academic and
                                professional journey. We assist you in selecting the best institution that aligns with your
                                goals, preferences, and budget. Our team provides detailed insights into course offerings,
                                faculty, tuition fees, scholarship opportunities, and admission requirements. Whether you're
                                looking for a short-term language program or a full-degree course, we guide you through the
                                selection process to ensure you make an informed decision.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <h4 style="color: #EA232A">Interview Preparation
                            </h4>
                            <p>A well-prepared interview can make all the difference in securing your place at a top
                                university
                                or language school. Our expert guidance includes mock interviews, commonly asked questions,
                                and
                                strategies to present yourself confidently. We focus on improving your communication skills,
                                body language, and responses to ensure you leave a lasting impression on the admission
                                panel.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <h4 style="color: #EA232A">Visa Application
                            </h4>
                            <p>Securing a student visa is an essential part of studying abroad. Our visa experts guide you through the entire process, from filling out application forms to preparing for the visa interview. We provide up-to-date information on visa requirements, required documents, and potential challenges, ensuring a smooth and stress-free application process.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <h4 style="color: #EA232A">Application
                            </h4>
                            <p>The application process can be complex and time-consuming. We provide end-to-end support in
                                preparing and submitting your application, ensuring all documents are accurate and complete.
                                Our
                                team assists with personal statements, recommendation letters, and any additional
                                requirements
                                specific to your chosen institution. With our expertise, we maximize your chances of
                                acceptance.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <h4 style="color: #EA232A">Accommodation Support
                            </h4>
                            <p>Finding the right place to stay is crucial for a comfortable study experience. We help you
                                explore different accommodation options, whether it's university dormitories, shared
                                apartments,
                                or homestays. Our team assists in finding safe, affordable, and convenient housing based on
                                your
                                budget and preferences, making your transition to a new country hassle-free.</p>
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
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-3" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <img src="{{ asset($branch->image) }}" width="100%" class="p-3" style="border-radius: 20px; border:2px solid #EA232A; margin-bottom:10px; height:350px;" alt="">
                            <h4>{{ $branch->branch_name }}</h4>
                            <address>{{ $branch->address }}</address>
                            @if($branch->director_name != null)
                            <p>Director: {{ $branch->director_name }}</p>
                            @endif
                            <P>Phone: {{ $branch->phone }}</P>
                            @if($branch->email != null)
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
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">What is the minimum requirement for student visa in japan? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                  <p>
                    You have to pass HSC/HSC equivalent exams.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Is it possible to go to Japan without learning Japanese?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    For Language program not possible.But for Undergraduate program some universities have their English program courses.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">How long does it take to learn Japanese Language course?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    6 months Course for N5 Level.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">How many levels are there in learning Japanese?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
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
@endsection
