<html>
<head>
	<title> TheDateNight </title>
  <link rel="stylesheet" type="text/css" href="http://97.107.130.57/~sruparel/thedatenight.co/css/style.css">

</head>
<body>
<div id="container">
	<div id="page">
		<img src="http://97.107.130.57/~sruparel/thedatenight.co/img/logo.png" id="logo">

<div id="menu">
		<ul>
			<li><a href="http://97.107.130.57/~sruparel/thedatenight.co/index.php/"
			       <?php if($this->uri->uri_string() == '' || $this->uri->uri_string() == 'thedatenight' || $this->uri->uri_string() == 'thedatenight/index'){echo 'class="selected"';} ?>
			       >
			    Home</a></li>
			<li><a href="http://97.107.130.57/~sruparel/thedatenight.co/index.php/thedatenight/about"
			       <?php if($this->uri->uri_string() == 'thedatenight/about') {echo 'class="selected"';} ?>
			       >
			    About</a></li>
		</ul>
	</div>
	</div>
<!--
<div class="accordian">
	<ul>
		<li>
			<div class="image_title">

			</div>
			<a href="#">
				<img src="http://97.107.130.57/~sruparel/thedatenight.co/img/1.jpg"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				</div>
			<a href="#">
				<img src="http://97.107.130.57/~sruparel/thedatenight.co/img/2.jpg"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				</div>
			<a href="#">
				<img src="http://97.107.130.57/~sruparel/thedatenight.co/img/3.jpg"/>
			</a>
		</li>
		<li>
			<div class="image_title">

			</div>
			<a href="#">
				<img src="http://97.107.130.57/~sruparel/thedatenight.co/img/4.jpg"/>
			</a>
		</li>
		<li>
			<div class="image_title">
			</div>
			<a href="#">
				<img src="http://97.107.130.57/~sruparel/thedatenight.co/img/5.jpg"/>
			</a>
		</li>
	</ul>
</div>
-->
</div>
</body>
</html>
