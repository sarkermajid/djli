@extends('frontend.index')

@section('frontend')
    <section id="contact" class="contact">
        <div class="container" style="margin-top: 80px;">
            <div class="row mt-5 justify-content-center" data-aos="fade-up">
                <div class="col-lg-12">
                    <form action="{{ route('submitBook') }}" method="POST" role="form" class="form-design">
                        @csrf
                        <div class="row">
                            <div style="text-align:center; padding-bottom:20px;">
                                <img src="{{ asset('frontend/assets/img/LOGO DJLI.png') }}" style="width:80px;" alt="">
                            </div>
                            <h3 class="text-center mb-5" style="color: #EA232A">
                                DHAKA JAPANESE LANGUAGE INSTITUTE CONSULTATION FORM
                            </h3>
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="col-md-12 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="NAME" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group mt-3">
                                <input type="text" class="form-control" name="city" id="city" placeholder="CITY" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group mt-3">
                                <input type="text" class="form-control" name="qualification" id="qualification"
                                    placeholder="LAST QUALIFICATION" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group mt-3">
                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="PHONE"
                                    pattern="[0-9]{11}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 form-group mt-3">
                                <input type="text" class="form-control" id="booking_date" name="booking_date"
                                placeholder="DATE OF BOOKING" onfocus="(this.type='date')"
                                onblur="if(!this.value) this.type='text';">
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-primary">BOOK NOW</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $(".alert").fadeOut("slow");
            }, 3000); // 3 seconds
        });
    </script>
@endsection
