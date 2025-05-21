@extends('frontend.index')

@section('frontend')
    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us" style="margin-top: 100px;">
        <div class="container" data-aos="fade-up">
            <div class="section-title" data-aos="fade-up">
                <h2>About Us</h2>
            </div>
            <div class="row content">
                <div class="col-lg-12" data-aos="fade-right">
                    <h2>DHAKA JAPANESE LANGUAGE INSTITUTE</h2>
                    <p style="font-size: 18px;">Since 2017, We have been committed to helping students to fulfill their
                        Dreams in Japan.In view of its continuity, we established the Dhaka Japanese Language Institute. We
                        are more than a Language Institute in Dhaka. We are a team of passionate individuals who believe in
                        the power of education to transform lives. We have a skilled team who are committed to helping each
                        student fulfill their dreams with care.Our journey began with a simple vision – to help students
                        achieve their dreams of studying abroad and experiencing new cultures.
                        Over the years, we have helped thousands of students realize their potential and reach new heights
                        in their academic and personal lives.</p>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Our <strong>Team</strong></h2>
            </div>

            <div class="row">
                @foreach ($teamMembers as $teamMember)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="member-img">
                                <img src="{{ asset($teamMember->image) }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>{{ $teamMember->name }}</h4>
                                <span>{{ $teamMember->designation }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Our Team Section -->
@endsection
