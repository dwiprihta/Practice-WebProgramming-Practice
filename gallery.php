<html>
<head>
<title>Membuat Layout Web</title>
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/css/fancyzoom.css" rel="stylesheet" type="text/css"/>
</head>
<body background="images/bgr.jpg">
<div id="container">
		<div id="header3">
			<a href=http://www.unsa.ac.id target="blank" class="boxleft"></a>
			<a href=http://unsa.greenfrog-ts.co.id/tu/ target="blank" class="boxright"></a>
		</div>
		
		<div id="content">
		  		 <h1>HALAMAN GALLERY</h1>
		  		<button href="images/foto_krs.jpg"><img src="images/foto_krs2.jpg"></button></b>
		  		<button href="images/3.jpg"><img src="images/31.jpg"></button>
		  		<button href="images/2.jpg"><img src="images/21.jpg"></button>
		</div>
		<div id="right">
				<h2 class="categories"><center>MENU</center></h2>
  					<ul>
						<li><a href="<?php echo 'index.php';?>">HOME</a></li>
						<li><a href="<?php echo 'profile.php';?>">PROFILE</a></li>
						<li><a href="<?php echo 'agenda.php';?>">AGENDA</a></li>
						<li><a href="<?php echo 'gallery.php';?>">GALERY</a></li>
						<li><marquee><b>DWI PRIHTAPAMBUDI</b></marquee></li>
						<li><marquee><blink><b>1201523005</b></blink></marquee></li>		
  					</ul>
  					<h2 class="categories">.</marquee></h2>
		</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="assets/js/jquery.fancyzoom.js"></script> 
	
	<script>
      $(document).ready(function() {
        $("button").fancyZoom();
      }); 
 	</script>
 

		<div id="footer">
				<p id="bottom">
		  		
			</p>
		  	<p id="copy">
	  		Copyright &copy; 2018 DWI PRIHTAPAMBUDI</a>
			</p>
		</div>
</div>
</body>
</html>
