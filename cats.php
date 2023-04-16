<!DOCTYPE html>
<html>
<head>
	<title>Cat Pictures! 🐈</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<!-- Include jQuery -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<style>
		img {
			width:75%;		
		}
		footer a {
			text-decoration: none;
		}			
	</style>
</head>
<body>
	<div class="container">
	
		<!-- Bootstrap 5.2 NavBar	-->
		<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Cat Pictures</a>
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

		<?php
			// Get all the images from a folder
			// Ref: https://www.tutorialspoint.com/get-all-the-images-from-a-folder-in-php
			$dir_name = "muru/";
			$imageArray = array();
			$imageCaption = array();
			$img = 1;
			$imgMax = $img;
			$images = glob($dir_name."*.jpg");
			
			foreach($images as $image) {
				$imageArray[$img] = $image;								
				switch ($img) {
					case 1:
					$imageCaption[1] = "Anna karkkia";
					break;
					case 2:
					$imageCaption[2] = "Ulkona olisi tipuja";
					break;
					case 3:
					$imageCaption[3] = "Nukuttaa";
					break;
					case 4:
					$imageCaption[4] = "Mitä nyt?";
					break;
					case 5:
					$imageCaption[5] = "Miksi herätit?";
					break;
					case 6:
					$imageCaption[6] = "Meillä molemmilla on häntä";
					break;
					default:
					$imageCaption[$img] = "-- >oo< --";
					break;
				}				
				$img++;				
			}
			$imgMax = $img;
		?>
		
		<h1 class="display-6">Cat Pictures 🐈</h1>
		<p>Here are some pictures of our Cat, Muru</p>
				
		<!-- Gallery -->
		<div class="row">
			<?php
				$x = 1;
				
				do {
					$cat = "";
					$cat .= '<img src = ' . $imageArray[$x];
					$cat .= ' class="w-100 shadow-1-strong rounded mb-4"';
					$cat .= ' alt="' . $imageCaption[$x] . '"/>';

					$caption = "";
					$caption .= '<figcaption class="figure-caption text-end">';
					$caption .= '<span style="color:#366293"><b>' . $imageCaption[$x] . '</b></span>';
					$caption .= '</figcaption>';
					
					$start = '<div class="col-lg-4 mb-4 mb-lg-0">';
					$start .= '<figure class="figure">';
					
					$end = '</figure></div>';

					switch ($x ) {
						case 1:
						case 3:
						case 5:
							echo $start;								
							echo $caption;
							echo $cat;
							break;
							
						case 2:
						case 4:
						case 6:
							echo $caption;
							echo $cat;
							echo $end;
							break;
							
						default:
							break;
					}
					
					$x++;
				} while ($x < $imgMax);
			?>
			
		</div>
		<!-- Gallery -->


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
		
	</div>	<!-- END Container 	-->
</body>
</html>
