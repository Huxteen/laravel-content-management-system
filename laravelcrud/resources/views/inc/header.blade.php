<!DOCTYPE html>
<html>
<head>
	<title>Laravel CRUD Application</title>
	<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('fa/css/font-awesome.css') }}">
	<script type="text/javascript" src="{{ url('js/jquery.js')}}"></script>
	<script type="text/javascript" src="{{ url('js/bootstrap.js')}}"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Laravel CMS App</a>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">

	    <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home </a></li>
        <li><a href="#">Create</a></li>
        
      </ul>	      
	      <form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input class="form-control" placeholder="Search" type="text">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#"><i class="fa fa-sign-out"></i>&nbsp; Logout</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>





