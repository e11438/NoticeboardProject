<?php






?>

<html>
<head>
	<meta name="viewport" content="user-scalable=no, width=device-width" />
	<link rel="stylesheet" type="text/css" href="screen.css"  />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/load.js"></script>
	
	<title>Notice Board</title>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><a href="./index.html">Notice Board</a></h1>
			
			<div id="nav">
				Notice Board - University of Peradeniya
			</div>
		</div>
		
		<div id="content">
			<h2>About</h2>
			<p><?php
					$myFile = "files/e11.txt";
					$fh = fopen($myFile, 'r');
					$theData = fread($fh, filesize($myFile));
					fclose($fh);
					echo $theData;
					//echo file_get_contents("e11.txt");
				?>
			</p>
		</div>
		
		<div id="sidebar">
			<img alt="Manga Portrait of Jonathan Stark"	src="memlog.png"/>
			<p>Jonathan Stark is a mobile and web application developer who the
			Wall Street Journal has called an expert on publishing desktop
			data to the web.</p>
		</div>
		<div id="sidebar">
			<img alt="Manga Portrait of Jonathan Stark"	src="memlog.png"/>
			<p>Jonathan Stark is a mobile and web application developer who the
			Wall Street Journal has called an expert on publishing desktop
			data to the web.</p>
		</div>
		<div id="footer">
			<ul>
				<li><a href="services.html">Services</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="blog.html">Blog</a></li>
			</ul>
			<p class="subtle">Jonathan Stark Consulting, Inc.</p>
		</div>
	</div>
</body>
</html>