<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Wafa Qur'an Banyumas</title>
  <!-- MDB icon -->
  <link rel="icon" href="{{ asset('images/favicon.png')}}" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{ asset('MDB/css/bootstrap.min.css')}}">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{ asset('MDB/css/mdb.min.css')}}">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="{{ asset('MDB/css/style.css')}}">

  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/theme.default.min.css')}}">

  <style>
    /* .wafamenuslider
    {
    padding:0px 30px 30px 30px;
    margin-top: -50px;
    
    }
    .owl-carousel .item1 
    {
    padding:15px 15px;
    }
    
    .owl-carousel .item1 .item1content
    {
    height:150px;
    border-radius:15px 15px 15px 15px;
    overflow:hidden;
    background-color:#C3245A;
    color:#fff;
    }
    .owl-carousel .item1 .item1cover
    {
    width:100%;height:100%;position:fixed;top:0;left:0;padding:15px 15px;opacity: 0.7;
    }
    
    .owl-carousel .item1 .item1cover:hover 
    {
    opacity: 0.9;
    }
    
    .owl-carousel .item1 .item2content
    {
    height:150px;
    border-radius:15px 15px 15px 15px;
    overflow:hidden;
    background-color:#C3245A;
    color:#fff;
    padding:15px 15px;
    }
    
    .owl-carousel .item1 .item3content
    {
    height:150px;
    width:100%;
    border-radius:15px 15px 15px 15px;
    background-color:#F6BC00;
    position: relative;
      bottom: -80px;
      right: -80px;
    transform: rotate(-40deg);
    }
    
    .owl-carousel .item1 .item4content
    {
    height:110px;
    width:100%;
    position: relative;
    top:-150px;
    display: table-cell;
    vertical-align: middle;
    }
    
    
    .owl-nav {
    display: block;
    }
    .owl-nav .owl-prev {
    position: absolute;
    left: -27px;
    top: 33%;
    border: 5px solid #fff;
    text-align: center;
    z-index: 5;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    outline: 0;
    background: #ff5e14;
    transition: all 0.3s;
    color: #fff;
    }
    .owl-nav .owl-prev span {
    font-size: 25px;
    margin-top: -6px;
    display: inline-block;
    }
    .owl-nav .owl-prev:hover {
    background: #fff;
    border-color: #ff5e14;
    color: #ff5e14;
    }
    .owl-nav .owl-next {
    position: absolute;
    right: -27px;
    top: 33%;
    border: 5px solid #fff;
    text-align: center;
    z-index: 5;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    outline: 0;
    background: #ff5e14;
    color: #fff;
    transition: all 0.3s;
    }
    .owl-nav .owl-next span {
    font-size: 25px;
    margin-top: -6px;
    display: inline-block;
    }
    .owl-nav .owl-next:hover {
    background: #fff;
    border-color: #ff5e14;
    color: #ff5e14;
    }
    
    @media only screen and (max-width: 577px) {
    .owl-nav .owl-prev {
      left: -17px !important;
    }
    .owl-nav .owl-next {
      right: -17px !important;
    }
    } */
    </style>
</head>
<body>

  <!-- Start your project here-->  
  <section id="home" >
    <!--Navbar -->
    <nav class="mb-1 navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar (pink accent-4)">
      <div class="container">
        <a class="navbar-brand" href="" style="width: 5%;">
          {{-- check --}}
          <img src="{{asset('images/logowafa.png')}} " alt="wafa logo" style="width: 100%">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
          aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Dropdown
              </a>
              <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <form class="form-inline">
                <div class="md-form my-0">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </div>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--/.Navbar -->
  </section>

  <section id="header" >
    <div class="background-jumb">
      <div class="jumbotron card card-image" >
        <div class="text-white text-center py-5 px-4">
          <div class="container">
            <div class="row">
              <div class="col text-left">
                <h2><b class="font-weight-bold">Bersama Melahirkan Ahli Al-Quran Indonesia</b></h2>
                <h6>Bersama kami mengelola sebuah lembaga pendidikan berbasis Al-Quran yang unggul, dirindukan oleh murid, dan dibanggakan oleh orang tua.</h6>
                <img src="{{asset('images/jumbotron.png')}} " alt="anak-anak">
              </div>
              <div class="col">
                <div class="row d-flex justify-content-center m-3">
                  <div class="card col-5 mx-3">
                    <div class="card-body ">
                      <img class="card-img-top grayscale" src="{{asset('images/jumb1.jpg')}}">
                    </div>
                    <h5 class="card-footer text-secondary font-weight-bold">Text 1</h5>
                  </div>
                  <div class="card col-5 mx-3">
                    <div class="card-body">
                      <img class="card-img-top grayscale" src="{{asset('images/jumb2.jpg')}}">
                    </div>
                    <h5 class="card-footer text-secondary font-weight-bold">Text 2</h5>
                  </div>
                </div>
                <div class="row d-flex justify-content-center m-3">
                  <div class="card col-5 mx-3">
                    <div class="card-body ">
                      <img class="card-img-top grayscale" src="{{asset('images/jumb3.jpg')}}">
                    </div>
                    <h5 class="card-footer text-secondary font-weight-bold">Text 3</h5>
                  </div>
                  <div class="card col-5 mx-3">
                    <div class="card-body">
                      <img class="card-img-top grayscale" src="{{asset('images/jumb4.jpg')}}">
                    </div>
                    <h5 class="card-footer text-secondary font-weight-bold">Text 4</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- <div>
            <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>Create your beautiful website with MDBootstrap</strong></h2>
            <p class="mx-5 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
              optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos. Odit sed qui, dolorum!
            </p>
            <a class="btn btn-outline-white btn-md"><i class="fas fa-clone left"></i> View project</a>
          </div> --}}
        </div>
      </div>
    </div>
  </section>
<div class="container">
  <div class="row">
    <div class="col">
      <div style="overflow:hidden; white-space:nowrap;font-size:16px;margin-bottom:10px;color:#787274;width:100%;">
        <b>Menu Populer</b>  <i class="fa fa-fw fa-angle-down" style="color:#C3245A;"></i>  
        <hr style="display:inline-block; width:100%;margin-bottom:5px;border-width: 5px;border-color:#F6BC00;">
      </div>

      <div class="owl-carousel">
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});
</script>
</div>

    <!-- End your project here-->

{{-- <script src="jquery.min.js"></script> --}}
<script src="{{asset('js/owl.carousel.min.js')}}"></script>

  <!-- jQuery -->
  <script type="text/javascript" src="{{asset('MDB/js/jquery.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('MDB/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('MDB/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('MDB/js/mdb.min.js')}}"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
