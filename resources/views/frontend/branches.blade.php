@extends('frontend.index')

@section('frontend')
    <section id="services" class="services section-bg" style="margin-top: 100px;">
        <div class="container" data-aos="fade-up">
            <div class="section-title" data-aos="fade-up">
                <h2>Branches</h2>
            </div>
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
@endsection
