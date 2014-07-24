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
            <a href="#">
              <i class="fa fa-mobile-phone fa-4x light-gray"></i>
              <h3>Mobile Responsive</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
            </a>
          </div>
          
          <!--Seciton 2-->
          <div class="col-sm-4 service margin-30">
            <a href="#">
              <i class="fa fa-thumbs-up fa-4x light-gray"></i>
              <h3>Built With Bootstrap</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
            </a>

          </div>
          
          <!--Seciton 3-->
          <div class="col-sm-4 service margin-30">
            <a href="#">
              <i class="fa fa-flag fa-4x light-gray"></i>
              <h3>Over 249 Icons</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
            </a>

          </div>
          
        </div>
      </div>
    </section>
    
    
    <!--Message Section-->
    <section id="message" class="section">
      <div class="container">
        <div class="row margin-40">
          <div class="col-sm-12 text-center">
            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.</h2>
          </div>
        </div>
        
        <div class="row">
          <div class="col-sm-12 text-center">
            <a class="more" href="about.html"><i class="fa fa-chevron-circle-right fa-2x white"></i></a>
          </div>
        </div>
      </div>
    </section>
    
    
    <!--Latest Work-->
    <section id="latest-work" class="section">
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12 margin-40">
            <h3>Latest Work</h3>
          </div>
        </div>
          
        <div class="row margin-40">
      		
      		<!--Project Thumbnail One-->
      		<div class="col-sm-4">
      			<div class="thumbs">
        			<img src="party_soiree_template/bootstrap3/multipage/img/portfolio1.jpg" class="img-responsive" alt="Image Size 430x280">
        			<a href="individual-work.html">
        				<span class="title">
        					<span><i class="fa fa-link fa-2x"></i></span>
        				</span>	
        			</a>
      			</div>
      			
      			<div class="project-title margin-30">
      		    <h4>Breakroom</h4>
      		  </div>
      		</div>
      		
      		<!--Project Thumbnail Two-->
      		<div class="col-sm-4">
      			<div class="thumbs">
        			<img src="party_soiree_template/bootstrap3/multipage/img/portfolio2.jpg" class="img-responsive" alt="Image Size 430x280">
        			<a href="individual-work.html">
        				<span class="title">
        					<span><i class="fa fa-link fa-2x"></i></span>
        				</span>	
        			</a>
      			</div>
      			
      			<div class="project-title margin-30">
      		    <h4>White Sneaker</h4>
      		  </div>
      		</div>
      		
      		<!--Project Thumbnail Three-->
      		<div class="col-sm-4">
      			<div class="thumbs">
        			<img src="party_soiree_template/bootstrap3/multipage/img/portfolio3.jpg" class="img-responsive" alt="Image Size 430x280">
        			<a href="individual-work.html">
        				<span class="title">
        					<span><i class="fa fa-link fa-2x"></i></span>
        				</span>	
        			</a>
      			</div>
      			
      			<div class="project-title margin-30">
      		    <h4>Theme Armada</h4>
      		  </div>
      		</div>
      		
      	</div><!--End Row of Work-->
          
    		<div class="row">
          <div class="col-sm-12 text-center">
            <a class="more" href="party_soiree_template/bootstrap3/multipage/3-column.html"><i class="fa fa-chevron-circle-right fa-2x gray"></i></a>
          </div>
        </div>
        
      </div>
    </section>
    
    
    <!--Testimonial Section-->
    <section id="testimonial" class="section">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 margin-30">
            <img src="party_soiree_template/bootstrap3/multipage/img/testimonial-img.png" alt="Title">
          </div>
          
          <div class="col-sm-9">
            <h2>“Lava has been an asset to our company by providing us with a cutting edge look and a web presence that shows off our work and skills.”</h2>
            <div class="testimonial-source pull-right">Jeff | Ceo - Creative Company</div>
          </div>
        </div>
      </div>
    </section>
    
    
    <!--Latest News-->
    <section id="latest-news" class="section">
      <div class="container">
        <div class="row margin-40">
          <div class="col-sm-12 text-center dark-gray">
            <h3>Latest News</h3>
          </div>
        </div>
        
        <div class="row">
          
          <!--News Article-->
          <div class="col-sm-3 text-center">
            <div class="latest-article">
            <img src="party_soiree_template/bootstrap3/multipage/img/latest-news1.jpg" class="img-responsive" alt="Title">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><br />
            <a class="more" href="party_soiree_template/bootstrap3/multipage/individual-blog.html"><i class="fa fa-chevron-circle-right fa-2x gray margin-20"></i></a>
            </div>
          </div>
          
          <!--News Article-->
          <div class="col-sm-3 text-center">
            <div class="latest-article">
            <img src="party_soiree_template/bootstrap3/multipage/img/latest-news2.jpg" class="img-responsive" alt="Title">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><br />
            <a class="more" href="party_soiree_template/bootstrap3/multipage/individual-blog.html"><i class="fa fa-chevron-circle-right fa-2x gray margin-20"></i></a>
            </div>
          </div>
          
          <!--News Article-->
          <div class="col-sm-3 text-center">
            <div class="latest-article">
            <img src="party_soiree_template/bootstrap3/multipage/img/latest-news3.jpg" class="img-responsive" alt="Title">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><br />
            <a class="more" href="party_soiree_template/bootstrap3/multipage/individual-blog.html"><i class="fa fa-chevron-circle-right fa-2x gray margin-20"></i></a>
            </div>
          </div>
          
          <!--News Article-->
          <div class="col-sm-3 text-center">
            <div class="latest-article">
            <img src="party_soiree_template/bootstrap3/multipage/img/latest-news4.jpg" class="img-responsive" alt="Title">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><br />
            <a class="more" href="party_soiree_template/bootstrap3/multipage/individual-blog.html"><i class="fa fa-chevron-circle-right fa-2x gray margin-20"></i></a>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    
    <!--Twitter Feed-->
    <section id="twitter" class="section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <i class="fa fa-twitter fa-4x gray margin-20"></i>
          </div>
        </div>
        
        <div class="row">
        
          <div class="col-sm-6">
            <blockquote class="twitter-tweet" lang="en"><p>Theme Armada New Website Launch <a href="http://t.co/YLbXUFhz5d">http://t.co/YLbXUFhz5d</a></p>&mdash; Theme Armada (@themearmada) <a href="https://twitter.com/themearmada/statuses/404968762446970880">November 25, 2013</a></blockquote>
  <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
          
          <div class="col-sm-6">
            <blockquote class="twitter-tweet" lang="en"><p>Our sites up and CSSMania <a href="http://t.co/KKaKX75WrH">http://t.co/KKaKX75WrH</a> <a href="https://twitter.com/cssmania">@cssmania</a> - Give it a vote if you like it!</p>&mdash; Theme Armada (@themearmada) <a href="https://twitter.com/themearmada/statuses/403515461158961152">November 21, 2013</a></blockquote>
  <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
          
        </div>
        
      </div>
    </section>
@stop




