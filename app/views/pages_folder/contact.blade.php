@extends('layouts.home_master')

@section('content')

    <!--Content-->
    <section id="page-title" class="section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h3>Get In Touch</h3>
          </div>
        </div>
      </div>
    </section>

     <!--Content-->      
    <section id="content2" class="section">
      <div class="container">
        <div class="row">

     {{ Form::open(array('action' => array('HomeController@send', 'method' => 'POST'))) }}
     <div class="col-sm-4">
        <div class="control-group">  
            <div class="controls">
       {{ Form::label('name', 'Name')}}
       {{ Form::text('name',Input::old('name'), array('placeholder'=>'Name', 'class' => 'form-control'))}}
            </div>
        </div>
        <div class="control-group">  
            <div class="controls">
       {{ Form::label('email', 'Email')}}
       {{ Form::text('email',Input::old('email'), array('placeholder'=>'Email', 'class' => 'form-control'))}}
            </div>
        </div>
      </div>
      <div class="col-sm-8">
          <div class="control-group">
              <div class="controls">
       {{ Form::label('message', 'Message')}}
       {{ Form::textarea('message',Input::old('message'), array('placeholder'=>'Enter Your Message Here', 'class' => 'form-control'))}}
              </div>
          </div>
          <div class="text-right">  
              <input type="hidden" name="save" value="contact">
                  <button type="Submit" class="btn btn-default">Send</button>
              </div>
          </div>
       <!--{{ Form::submit('Send', null, array('class' => 'btn btn-default')) }}-->
       {{ Form::close() }}
     </div>
   </div>
  </section>
  <!--End of Form-->

  <!--Spacer-->
  <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h3>Meet the Team</h3>
          </div>
        </div>
      </div>
    </section>
    <!--End of Spacer-->

    <!--Content-->
    <section id="content2" class="section">
        <div class="container">
          <div class="row margin-40">

          <!--Team Member-->
          <div class="col-sm-4 margin-30">
            <div class="team-container">
              <div class="row">
                <div class="col-xs-12 team-member">
                  <img src="/party_soiree_template/bootstrap3/multipage/img/team1.jpg" class="img-responsive" alt="Title">
                </div>
              </div>
                
              <div class="row text-center">
                <div class="col-xs-8 team-info">
                  <h4><span class="white"> Mallory | <small><em>Full Stack Web Developer</em></small></span></h4>
                </div>
              
                <div class="col-xs-4 socialize">
                  <ul class="list-inline">
                    <li><a class="linkedin" href="http://www.twitter.com/themearmada" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></li>
                    <li><a class="github" href="http://www.facebook.com" target="_blank"><i class="fa fa-github fa-lg"></i></a></li>
                    </ul>
                </div>
              </div>
            </div>
          </div>

           <!--Team Member-->
          <div class="col-sm-4 margin-30">
            <div class="team-container">
              <div class="row">
                <div class="col-xs-12 team-member">
                  <img src="/party_soiree_template/bootstrap3/multipage/img/team2.jpg" class="img-responsive" alt="Title">
                </div>
              </div>
                
              <div class="row text-center">
                <div class="col-xs-8 team-info">
                  <h4><span class="white"> Jason | <small><em>Full Stack Web Developer</em></small></span></h4>
                </div>
              
                <div class="col-xs-4 socialize">
                  <ul class="list-inline">
                    <li><a class="linkedin" href="http://www.twitter.com/themearmada" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></li>
                    <li><a class="github" href="http://www.facebook.com" target="_blank"><i class="fa fa-github fa-lg"></i></a></li>
                    </ul>
                </div>
              </div>
            </div>
          </div>

          <!--Team Member-->
          <div class="col-sm-4 margin-30">
            <div class="team-container">
              <div class="row">
                <div class="col-xs-12 team-member">
                  <img src="/party_soiree_template/bootstrap3/multipage/img/team3.jpg" class="img-responsive" alt="Title">
                </div>
              </div>
                
              <div class="row text-center">
                <div class="col-xs-8 team-info">
                  <h4><span class="white"> Lindsey | <small><em>Full Stack Web Developer</em></small></span></h4>
                </div>
              
                <div class="col-xs-4 socialize">
                  <ul class="list-inline">
                    <li><a class="linkedin" href="http://www.twitter.com/themearmada" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></li>
                    <li><a class="github" href="http://www.facebook.com" target="_blank"><i class="fa fa-github fa-lg"></i></a></li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
          
        </div><!--End Team Member Row-->
      </div>
    </section>
   

 <!--  <form role="form" action="{{{ action('HomeController@send') }}}" method="POST" >
    <div class="col-lg-6">
      <div class="well well-sm"><strong><i class="glyphicon glyphicon-ok form-control-feedback"></i> Required Field</strong></div>
      <div class="form-group">
        <label for="name">Your Name</label>
        <div class="input-group">
          <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
        <label for="email">Your Email</label>
        <div class="input-group">
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required  >
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <div class="input-group"
>
          <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
        <label for="InputReal">What is 4+3?</label>
        <div class="input-group">
          <input type="text" class="form-control" name="InputReal" id="InputReal" required>
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
    </div>
  </form>
  <hr class="featurette-divider hidden-lg">
  <div class="col-lg-5 col-md-push-1">
  </div>
</div>

</div>-->
@stop