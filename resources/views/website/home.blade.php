<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Gabbar is king - A love calculater</title>
<meta name="description" content="Calculates the chance on a successful relationship between two couple">
<meta name="keywords" content="love,valentine,relation,relations,success,successful,happy,cool,calculate,calculator,love calculator,date">
<meta name="author" content="Naveen Khatana">
  <!-- Vendor CSS Files -->
  <link href="{{ asset('Bikin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('Bikin/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('Bikin/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ asset('Bikin/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{ asset('Bikin/assets/vendor/aos/aos.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<link rel="stylesheet" href="{{ asset('Bikin/assets/vendor/icofont/icofont/icofont.min.css')}}">
  <!-- Template Main CSS File -->
  <link href="{{ asset('Bikin/assets/css/style.css')}}" rel="stylesheet">


  <style type="text/css">
  	.calculator {
  padding: 50px 50px 20px 50px;
  text-align: center;
  margin-left: 300px;
  margin-top: 100px;
  background-color:#211717;
  width: 50%;
}

.name-box {
  padding: 12px 14px;
  width: 60%;
}

/* buttons */
.buttons {
  color: #ffd7e8;
  background-color: #007bff40;
  border: solid;
  border-color: #ffbdbd;
  cursor: pointer;
  margin: 10px 10px;
  padding: 10px 20px 10px 20px;
  position: relative;
  opacity:1;
  font-size: 1rem;
}

.buttons:hover {
  box-shadow: 5px 3px #ffbdbd;
  opacity: 1;
  color: #ee4266;
}

/* Media Query */
@media (max-width:600px) {
  .buttons{width:40%;}
  .calculator {width: 60%;
    padding: 10px 20px 10px 10px;
    margin-left: 100px;
    margin-top: 50px;
  }
}

.caluctarsec{
	 background-image: -webkit-linear-gradient(65deg, #007bff80 70%, #212121 30%);
  background-color: #c7004c;
  color: #007bff;
  font-family: 'Lobster', cursive;
}
div#Successtext {
    font-size: 28px;
    color: #dee2e6;
}

.container-cal-head{
 padding-top: 50px;
  text-align: center;
}
.animated-text-cal-head{
  font-family: 'ZCOOL KuaiLe', cursive;
  font-size: 4rem;
  background: url('https://st.depositphotos.com/1158615/1849/i/950/depositphotos_18497391-stock-photo-cubes-created-from-color-leafs.jpg') no-repeat;
  background-clip: text;
  -webkit-background-clip: text;
  color: transparent;
  animation: moveBg 50s linear infinite;
  -webkit-animation: moveBg 50s linear infinite;
}

@keyframes moveBg{
  0% {
    background-position: 0% 30%;
  }
  100% {
    background-position: 100% 50%;
  }
}

  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Gabbar is king</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{ url('/')}}">Home</a></li>
          <li><a href="{{ url('about')}}">About</a></li>
          <li><a href="{{ url('calculator')}}">Calculator</a></li>
          <li><a href="{{ url('love-calculator')}}">Love Calculator</a></li>
          <li><a href="{{ url('scientific-calculator')}}">Scientific Calculator</a></li>
          <li><a href="{{ url('loan-calculator')}}">Auto Loan Calculator</a></li>
          <li><a href="{{ url('privacy-policy')}}">Privacy Policy</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>
 @yield('contents')

 <footer id="footer">
    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">2021
          &copy; Copyright <strong><span>Gabbar is king</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed & Developed by <a href="#">Naveen Khatana</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="{{ asset('Bikin/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('Bikin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('Bikin/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('Bikin/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('Bikin/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('Bikin/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('Bikin/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{ asset('Bikin/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('Bikin/assets/js/main.js')}}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  @yield('footer-scripts')

</body>

</html>



