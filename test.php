<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>현자타임</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="album.css" rel="stylesheet">
</head>

<body>
	<header>
		<div class="navbar navbar-dark bg-dark box-shadow">
			<div class="container d-flex justify-content-between">
				<a href="#" class="navbar-brand d-flex align-items-center">
					<svg xmlns="http://www.w3.ogr/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
					<strong>GOOD_VIDEO</strong>
				</a>
			</div>
		</div>
	</header>
	<main>
		<div class="container">
			<video controls>
				<source src="http://kimawet.ipdisk.co.kr:5023/dav/HDD1/GOOD_VIDEO/0.%20November/SNIS-945.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video>
		</div>
		<div class="album py-5 bg-light">
			<div class="container">
				<video controls>
					<source src="test1.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			</div>
		</div>
	</main>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<?php

$dir    = '..';
$video_array = glob('../GOOD_VIDEO/0. November/{*.mp4,*.wmv,*.avi, *.mkv}', GLOB_BRACE);
print_r($video_array);

?>