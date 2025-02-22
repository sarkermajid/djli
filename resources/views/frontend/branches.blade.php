@extends('frontend.index')

@section('frontend')
    <section id="services" class="services section-bg" style="margin-top: 80px;">
        <div class="container" data-aos="fade-up">

            <div class="row">
                @foreach ($branches as $branch)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue">
                        <img src="{{ asset($branch->image) }}" width="100%" style="border-radius: 20px; border:2px solid #EA232A; margin-bottom:10px;" alt="">
                        <h4>{{ $branch->branch_name }}</h4>
                        <address>{{ $branch->address }}</address>
                        <p>{{ $branch->director_name }} (Director)</p>
                        <P>Phone: {{ $branch->phone }}</P>
                        <p>Email: {{ $branch->email }}</p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection
