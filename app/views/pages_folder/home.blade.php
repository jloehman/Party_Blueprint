@extends('layouts.home_master')



@section('content')

<!-- Carousel
    Change your images in the main.css file.
    ================================================== -->
    <div id="header" class="carousel slide animated fadeIn" data-ride="carousel">
      
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#header" data-slide-to="0" class="active"></li>
        <li data-target="#header" data-slide-to="1"></li>
        <li data-target="#header" data-slide-to="2"></li>
      </ol>
      
      <div class="carousel-inner">
        <div class="item one active">
          <div class="container animated fadeInUp">
            <div class="carousel-caption">
              <h1>Introducing Lava</h1>
              <p class="lead margin-40"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</em></p>
              <a class="btn-main" href="party_soiree_template/bootstrap3/multipage/about.html"><i class="icon-chevron-right"></i> More</a>
            </div>
          </div>
        </div>
        <div class="item two">
          <div class="container">
            <div class="carousel-caption">
              <h1>Built With Bootstrap</h1>
              <p class="lead margin-40"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</em></p>
              <a class="btn-main" href="party_soiree_template/bootstrap3/multipage/services.html"><i class="icon-chevron-right"></i> More</a>
            </div>
          </div>
        </div>
        <div class="item three">
          <div class="container">
            <div class="carousel-caption">
              <h1>100% Responsive</h1>
              <p class="lead margin-40"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</em></p>
              <a class="btn-main" href="party_soiree_template/bootstrap3/multipage/pricing.html"><i class="icon-chevron-right"></i> More</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control hidden-xs" href="#header" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right carousel-control hidden-xs" href="#header" data-slide="next"><i class="fa fa-angle-right"></i></a>
    </div><!-- /.carousel -->

<!--Services-->
    <section id="services" class="section">
      <div class="container">
        <div class="row text-center">
          <!--Seciton 1-->
          <div class="col-sm-4 service margin-30">
            <a href="/about">
              <i class="fa fa-heart-o fa-4x light-gray"></i>
              <h3>About</h3>
              <p>Learn more about Simple Soiree and how to use it to plan your next party in a more efficient way.</p>
            </a>
          </div>

          <!--Seciton 2-->
          <div class="col-sm-4 service margin-30">
            <a href="/contact">
              <i class="fa fa-envelope-o fa-4x light-gray"></i>
              <h3>Contact</h3>
              <p>Feel free to send us a message if you have questions, comments, or ideas. We'll be in touch as soon as possible.</p>
            </a>

          </div>
          
          <!--Seciton 3-->
          <div class="col-sm-4 service margin-30">
            <a href="/register">
              <i class="fa fa-pencil-square-o fa-4x light-gray"></i>
              <h3>Register</h3>
              <p>Register as a new user to gain access to your own party planning dashboard.</p>
            </a>

          </div>
          
        </div>
      </div>
    </section>
@stop
