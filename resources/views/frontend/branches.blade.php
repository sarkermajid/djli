@extends('frontend.index')

@section('frontend')
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg" style="margin-top: 80px;">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue">
                        <img src="{{ asset('frontend/assets/img/slide/slide-2.jpg') }}" width="100%" style="border-radius: 20px; border:2px solid #EA232A; margin-bottom:10px;" alt="">
                        <h4>Japan Bangladesh Nihongo Center (Head Office)</h4>
                        <address>Godawnmor, highroad, bheramara, kushtia </address>
                        <p>MD: Habibur Rahman (Director)</p>
                        <P>Mobile: 01819957853</P>
                        <p>Email: jbncenter.bd@gmail.com</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue">
                        <img src="{{ asset('frontend/assets/img/slide/slide-3.jpg') }}" width="100%" style="border-radius: 20px; border:2px solid #EA232A; margin-bottom:10px;" alt="">
                        <h4>Japan Bangladesh Nihongo Center (Khulna Branch)</h4>
                        <address>Popy Nir House: 152 Basupara Main Road, Sonadanga, Khulna.</address>
                        <p>MD: Boni Israil (Director)</p>
                        <P>Mobile: 01842584304</P>
                        <p>Email: jbncenter.bd@gmail.com</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->
@endsection
