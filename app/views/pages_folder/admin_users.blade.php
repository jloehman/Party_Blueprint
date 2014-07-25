@extends('layouts.admin_master')

@section('content') 

 <section id="page-title" class="section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h3>USER MANAGEMENT</h3>
          </div>
        </div>
      </div>
    </section>
      
      
    <!--Content-->      
     <section id="content2">
    
      <div class="container">
       <!--  <div class="row"> -->
          
          <!--Column One-->
          <div class="col-sm-12 text-center">
            
            <!--Blog Post-->
            <article class="margin-60">
  			<h3>Existing Users</h3><br>
			<div class="table-responsive">
	  			<table class="table table-bordered table-striped table-hover">
		  	<tr>
		  		<th class="text-center">First Name</th>
		  		<th class="text-center">Last Name</th>
		  		<th class="text-center">Email</th>
		  		<th class="text-center">Creation Date</th>
		  		<th class="text-center">Action</th>
		  	</tr>
			@foreach($users as $user)
			@if($user->is_admin == false)
		  	<tr>
		  		<td>{{{ $user->first_name }}}</td>
		  		<td>{{{ $user->last_name}}}</td>
		  		<td>{{{ $user->email}}}</td>
		  		<td>{{{ $user->created_at}}}</td>
		  		<td>{{ Form::open(array('action' => array('AdminController@destroy', $user->id), 'method' => 'DELETE' )) }}
					{{ Form::submit('Delete') }}
					{{ Form::close() }}
				</td>

		  	</tr>
		  	@endif
			@endforeach
		  </table>
		</div>

		</article>
            
        </div><!--End Column One-->
          
        </div><!--End Row-->
            
                 
      <!-- </div> -->
    </section>

    <section class="adminUserFooter">
	  
	</section>

@stop