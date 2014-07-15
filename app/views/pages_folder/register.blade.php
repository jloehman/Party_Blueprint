@extends('layouts.home_master')

@section('content') 


<form class="form-horizontal" action='' method="POST">
  <fieldset>
    <div id="legend">
<!--       <legend class="">Register</legend>
 -->    </div>
    <div class="control-group">
      <!-- First -->
      <label class="control-label"  for="first_name">First Name</label>
      <div class="controls">
        <input type="text" id="first_name" name="first name" placeholder="" class="input-xlarge">
      </div>
    </div>
    <div class="control-group">
      <!-- Last -->
      <label class="control-label"  for="last_name">Last Name</label>
      <div class="controls">
        <input type="text" id="last_name" name="last name" placeholder="" class="input-xlarge">        
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
        <p class="help-block">Please provide your E-mail</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
        <p class="help-block">Password should be at least 4 characters</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="password_confirm">Password (Confirm)</label>
      <div class="controls">
        <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
        <p class="help-block">Please confirm password</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Register</button>
      </div>
    </div>
  </fieldset>
</form>

@stop