@extends('frontend.index')

@section('frontend')
    <!-- ======= Notice Section ======= -->
    <section id="about-us" class="about-us" style="margin-top: 100px;">
        <div class="container" data-aos="fade-up">
            <div class="section-title" data-aos="fade-up">
                <h2>Notice Board</h2>
            </div>
            <div class="row content">
                <div class="col-lg-12" data-aos="fade-right">
                    <img src="{{ $notice->image ? asset($notice->image) : asset('frontend/assets/img/no-image.png') }}"
                        alt="" width="100%">
                    <h2>{{ $notice->title }}</h2>
                    <p style="font-size: 18px;">{{ $notice->description }}</p>
                </div>
            </div>
        </div>
    </section><!-- End Notice Section -->
@endsection
