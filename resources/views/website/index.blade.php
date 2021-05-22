@extends('website.home')
@section('contents')

<style type="text/css">
	#hero{
		 background-image: url("{{ asset('Bikin/assets/img/calculator-banner.jpg')}}");
		  background-repeat: no-repeat;
		    background-size: cover;
		      background-position: center;


	}
</style>
<!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
      <h1 style="background-color: yellow">Free Online Calculators</h1>
      <h2 style="color:gold">Online calculators for quick calculations</h2>
      <a href="#services" class="btn-get-started scrollto">Calculate Something</a>
      <img src="" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150">
    </div>

  </section><!-- End Hero -->

  <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Calculators</h2>
          <p>Online calculators for quick calculations along with 4 calculators on math, finance, love, and many more and such types of comming soon...</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxs-calculator"></i></div>
              <h4 class="title"><a href="{{ url('calculator')}}">Calculator</a></h4>
              <p class="description">The use of this simple daily use calculator for math with subtraction,addition, division and multiplication</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-heart"></i></div>
              <h4 class="title"><a href="{{ url('love-calculator')}}">Love Calculator</a></h4>
              <p class="description">Calculate your love percentage with you and your parter name</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bxs-bank"></i></div>
              <h4 class="title"><a href="{{ url('loan-calculator')}}">Loan Calculator</a></h4>
              <p class="description">The use of this calculator for basic calculations of loan eg. auto loans,personal loans and student loans.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-book-reader"></i></div>
              <h4 class="title"><a href=""><a href="{{ url('scientific-calculator')}}">Scientific Calculator</a></a></h4>
              <p class="description">The use of this calculator for calculations of such type to perform as you would on a physical calculator.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->
@endsection


@section('footer-scripts')


@endsection