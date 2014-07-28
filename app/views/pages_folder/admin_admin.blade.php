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
            	<!--Add New Administrator-->
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
			    			<input type="hidden" name="is_admin" value="1">
			    			<button type="Submit" class="btn btn-success">Register</button>
						{{ Form::close()}}
				</div>
			</div>
            <!--Existing Administrators-->
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
					  		<td class="text-center">{{{ $user->first_name }}}</td>
					  		<td class="text-center">{{{ $user->last_name}}}</td>
					  		<td class="text-center">{{{ $user->email}}}</td>
					  		<td class="text-center">{{ Form::open(array('action' => array('AdminController@destroy', $user->id), 'method' => 'DELETE' )) }}
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
    </section>
	<section class="adminfooter">
	</section>

@stop