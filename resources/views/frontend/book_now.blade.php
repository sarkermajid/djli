@extends('frontend.index')

@section('frontend')
<section id="contact" class="contact">
    <div class="container" style="margin-top: 80px;">
      <div class="row mt-5 justify-content-center" data-aos="fade-up">
        <div class="col-lg-12">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
                <div style="text-align:center; padding-bottom:20px;">
                    <img src="{{ asset('frontend/assets/img/LOGO DJLI.png') }}" style="width:80px;" alt="">
                </div>
              <h3 class="text-center mb-5" style="color: #EA232A">DHAKA JAPANESE LANGUAGE INSTITUTE CONSULTATION FORM</h3>
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
                    <input type="text" class="form-control" name="qualification" id="qualification" placeholder="LAST QUALIFICATION" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group mt-3">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="PHONE" required>
                </div>
            </div>
            <div class="text-center mt-5"><button type="submit">BOOK NOW</button></div>
          </form>
        </div>

      </div>

    </div>
  </section>


@endsection
