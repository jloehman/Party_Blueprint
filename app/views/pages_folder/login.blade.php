@extends('layouts.home_master')

@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SignIn - WSnippets</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
 
   </head>
 
  <body>
 
    <div class="container">
 
     <form class="form-signin">
        
        <div class="main">    
 
        <input type="text" class="form-control" placeholder="Email" autofocus>
        <input type="password" class="form-control" placeholder="Password">
 
        Are you a business? <a href=""> Get started here</a>
        <span class="clearfix"></span>    
        </div>
        <div class="login-footer">
        <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <div class="left-section">
                                <a href="">Forgot your password?</a>
                        </div>
                        <div class="col-xs-6 col-md-6 pull-right">
                            <button type="submit" class="btn btn-large btn-danger pull-right">Login</button>
                        </div>
                    </div>
 
        </div>
      </form>
    </div> 
  </body>
</html>

@stop