@extends('layouts.home_master')
 -->@section('content')
 <h1>ABOUT PAGE</h1>
    <!--Content-->
    <section id="content1" class="section">
      <div class="container">
        <div class="row">
          <div class="col-sm-7">
            <h3>About</h3>
            <p class="lead">See who we are</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br />
            <div class="margin-30">
              <a class="btn-main" href="party_soiree_template/bootstrap3/multipage/contact.php"><i class="icon-chevron-right"></i> Contact Us</a>
            </div>
          </div>
          
          <div class="col-sm-5">
            <iframe src="http://player.vimeo.com/video/65902068?title=0&amp;byline=0&amp;portrait=0&amp;color=ff755a" width="100%" height="350" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
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
      </div>
    </section>
  <!--Content-->      
    <section id="content2" class="section">
      <div class="container">
        <div class="row">
          
          <div class="col-sm-6 progress-container margin-30">
            <!--First Column - To change progress value make sure to adjust bar width and field value to the same amount-->
            <h3>Our Skills</h3>
            <div class="display-none" id="progress">
              <div class="bar-one">
                    <div class="progress">
                      <span class="field">Concepts</span>
                        <span class="field-value fade-in">60%</span>
                        <div style="width: 60%;" class="bar"></div>
                    </div>
                </div>
                
                
                <div class="bar-two">
                    <div class="progress">
                      <span class="field">Design</span>
                        <span class="field-value fade-in">75%</span>
                        <div style="width: 75%;" class="bar"></div>
                    </div>
                </div>
                
                <div class="bar-three">
                    <div class="progress">
                      <span class="field">Awesome!</span>
                        <span class="field-value fade-in">100%</span>
                        <div style="width: 100%;" class="bar"></div>
                    </div>
                </div>
            </div><!--End Progress Container-->          
        </div>
                  
                  <div class="col-sm-5 col-sm-offset-1 margin-30">
                    <h3>Company Stats</h3>
                      
                      <!--Stat-->
                      <div class="row stat">
                        <div class="col-sm-2">
                          <i class="fa fa-coffee fa-3x light-gray"></i>
                        </div>
                        <div class="col-sm-10">
                          <h4>108 Monthly Cups of Coffee</h4>
                        </div>
                      </div>
                      
                      <!--Stat-->
                      <div class="row stat">
                        <div class="col-sm-2">
                          <i class="fa fa-group fa-3x light-gray"></i>
                        </div>
                        <div class="col-sm-10">
                          <h4>Over 300 Happy Clients since 2011</h4>
                        </div>
                      </div>
                      
                      <!--Stat-->
                      <div class="row stat">
                        <div class="col-sm-2">
                          <i class="fa fa-headphones fa-3x light-gray"></i>
                        </div>
                        <div class="col-sm-10">
                          <h4>Over 11,000 Songs In Our Library</h4>
                        </div>
                      </div>
                      
                  </div>
                </div><!--End Row-->
                
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