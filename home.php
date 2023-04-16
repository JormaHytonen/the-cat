<!DOCTYPE html>
<?php
	// Ref: https://happycoding.io/tutorials/javascript/bootstrap/personal-page-bootstrap-default
?>
<html>
<head>
	<title>My Cat Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<!-- Include jQuery -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<style>
		footer a {
			text-decoration: none;
		}	
	</style>
	
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Cat Home</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.html">Cat's Life</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="cats.php">Cat Pictures</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="about.php">About</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="jumbotron">
			<h1 class="display-6">Admit it!</h1>
			<p class="lead">You just came here for the cat pictures.</p>
			<hr class="my-4">
			<p>Welcome to my Cat Page. This is just an example webpage. It uses <b>Bootstrap 5.2</b>!</p>
			<p class="lead">
				<a class="btn btn-primary btn-lg" href="cats.php" role="button">Meow</a>
			</p>
		</div>
		
		<p>&nbsp;</p>
		<footer class="bg-secondary text-center text-light">
		
		<!-- Copyright -->
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
			© 2020 Copyrights&nbsp;
			<a class="text-light" href="https://happycoding.io/tutorials/javascript/bootstrap/personal-page-bootstrap-default">Happy Coding</a>
			&nbsp;&nbsp;
			<a class="text-light" href="http://www.marijazaric.com">Marija Zaric - Template</a>
			&nbsp;&nbsp;Modified By
			<a class="text-light" href="https://datatuki.net">&nbsp;(2023) Datatuki.net, Jorma Hytönen</a>
		</div>
		<!-- Copyright -->      
		
		</footer>    
		<p>&nbsp;</p>
		
	</div>
</body>
</html>
