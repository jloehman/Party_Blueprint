@extends('layouts.admin_master')

@section('content') 
	<!--Content-->
    <section id="page-title" class="section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center belle">
            <h3>ADMIN MANAGEMENT</h3>
          </div>
        </div>
      </div>
    </section>
      
      
    
       <section id="content2">
      	<div class="container">
        <div class="row margin-40">
            <!--Blog Post-->
            <div class="col-sm-6 col-sm-offset-3 text-center signup">
              <h3>Create A New Admin</h3><br>
              	{{ Form::open(array('action' => 'AdminController@store')) }}
              	<div class="control-group">
        			<div class="controls">
			    {{ Form::label('first_name', 'First Name') }}
			    {{ Form::text('first_name', Input::old('first_name'), array('placeholder'=>'First Name', 'class' =>'form-control')) }}
			    	</div>
			    </div>
			    <div class="control-group">
        			<div class="controls">
        				<div class="input-prepend">
			    {{ Form::label('last_name', 'Last Name') }}
			    {{ Form::text('last_name', Input::old('last_name'), array('placeholder'=>'Last Name', 'class' =>'form-control')) }}
			  			</div>
			  		</div>
			  	</div>
			  	<div class="control-group">
        			<div class="controls">
        				<div class="input-prepend">
			    {{ Form::label('email', 'Email') }}
			    {{ Form::text('email', Input::old('email'), array('placeholder'=>'Email', 'class' =>'form-control')) }}
			    		</div>
			    	</div>
			    </div>
			    <div class="control-group">
        			<div class="controls">
        				<div class="input-prepend">
			    {{ Form::label('password', 'Password')}}
			    {{ Form::password('password', array('placeholder'=>'Password', 'class' => 'form-control'))}}
			    		</div>
			    	</div>
			    </div>
			    <!-- {{ Form::label('password_confirm', 'Confirm Password:')}}
			        {{ Form::password('password_confirm', array('class' => 'form-control'))}}
			    <br> -->
			    <!-- {{ Form::hidden('is_admin', null, array('value'=>true)) }} -->
			    <input type="hidden" name="is_admin" value="1">
			    <button type="Submit" class="btn btn-success">Register</button>

			    {{ Form::close()}}
			</div>
		</div>
              
            </article>
            
            <!--Blog Post-->
            <article class=" margin-60">
              <div class="col-sm-12 text-center adminbottom">
              	<h3>Existing Admins</h3><br>
			<div class="table-responsive">
	  			<table class="table table-bordered table-striped table-hover">
		  	<tr>
		  		<th class="text-center">First Name</th>
		  		<th class="text-center">Last Name</th>
		  		<th class="text-center">Email</th>
		  		<th class="text-center">Action</th>
		  	</tr>
			@foreach($users as $user)
			@if($user->is_admin == true)
		  	<tr>
		  		<td>{{{ $user->first_name }}}</td>
		  		<td>{{{ $user->last_name}}}</td>
		  		<td>{{{ $user->email}}}</td>
		  		<td>{{ Form::open(array('action' => array('AdminController@destroy', $user->id), 'method' => 'DELETE' )) }}
					{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
					{{ Form::close() }}
				</td>

		  	</tr>
			@endif
			@endforeach
		  		</table>
				</div>
         
            </article>
            
          </div><!--End Column One-->
          
      
            
                 
      <!-- </div> -->
    </section>




		   <!--  {{ Form::open(array('action' => 'AdminController@store')) }}
		    {{ Form::label('first_name', 'First Name') }}
		    {{ Form::text('first_name', Input::old('first_name'), array('placeholder'=>'First Name', 'class' =>'form-control')) }}
		    <br>

		    {{ Form::label('last_name', 'Last Name') }}
		    {{ Form::text('last_name', Input::old('last_name'), array('placeholder'=>'Last Name', 'class' =>'form-control')) }}
		    <br>

		    {{ Form::label('email', 'Email') }}
		    {{ Form::text('email', Input::old('email'), array('placeholder'=>'Email', 'class' =>'form-control')) }}
		    <br>
		    {{ Form::label('password', 'Password')}}
		    {{ Form::password('password', array('placeholder'=>'Password', 'class' => 'form-control'))}}
		    <br> -->
		    <!-- {{ Form::label('password_confirm', 'Confirm Password:')}}
		        {{ Form::password('password_confirm', array('class' => 'form-control'))}}
		    <br> -->
		    <!-- {{ Form::hidden('is_admin', null, array('value'=>true)) }} -->
		    <!-- <input type="hidden" name="is_admin" value="1">
		    <button type="Submit" class="btn btn-default">Register</button>

		    {{ Form::close()}}
		</div> -->
	<!-- 	<div class="col-md-6">
			<h1>Existing Admins</h1>
			<div class="table-responsive">
	  			<table class="table table-bordered table-striped">
		  	<tr>
		  		<th>First Name</th>
		  		<th>Last Name</th>
		  		<th>Email</th>
		  	</tr>
			@foreach($users as $user)
			@if($user->is_admin == true)
		  	<tr>
		  		<td>{{{ $user->first_name }}}</td>
		  		<td>{{{ $user->last_name}}}</td>
		  		<td>{{{ $user->email}}}</td>
		  		<td>{{ Form::open(array('action' => array('AdminController@destroy', $user->id), 'method' => 'DELETE' )) }}
					{{ Form::submit('Delete') }}
					{{ Form::close() }}
				</td>

		  	</tr>
			@endif
			@endforeach
		  </table>
		</div>


		</div>
	</div>
</div>
</body>
</html>
 -->

<section class="adminfooter">
	  
	</section>



@stop