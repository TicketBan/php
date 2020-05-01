	<!DOCTYPE html>
	<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css.style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<title></title>
	</head>
	<body>
	  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
	  <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
	  <nav class="my-2 my-md-0 mr-md-3">
	    <a class="p-2 text-dark" href="#">Features</a>
	    <a class="p-2 text-dark" href="#">Enterprise</a>
	    <a class="p-2 text-dark" href="#">Support</a>
	    <a class="p-2 text-dark" href="#">Pricing</a>
	  </nav>
	  <a class="btn btn-outline-primary" href="#">Sign up</a>
	</div>
		<div class="container mt-5">
			<h3 class="mb-5">New</h3>
			<div>
			<?
		   for($i=0; $i<5; $i++)
			?> 
               <div class="card mb-4 shadow-sm">
		      <div class="card-header">
		        <h4 class="my-0 font-weight-normal"></h4>
		      </div>
		      <div class="card-body">
		      <img = src="img/<?php each($i + 1) ?>.jpg" class="img-thumbnail">
		        <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
		        <ul class="list-unstyled mt-3 mb-4">
		          <li>10 users included</li>
		          <li>2 GB of storage</li>
		          <li>Email support</li>
		          <li>Help center access</li>
		        </ul>
		        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
		      </div>
		    </div>'
		   <? endfor:?>
		</div>
	</div>
	</body>
	</html>