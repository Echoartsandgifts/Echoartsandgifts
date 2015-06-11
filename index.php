<!DOCTYPE html>
<html>
	<head>
		<title>Echo Arts And Gifts</title>
		<?php include 'inc/styles.php'; ?>
	</head>

	<body>
	<h1 style="color:red"><img width="40%" src="Image/Logo.png"></h1>
      <header>
            <div id="carousel">
<figure id="spinner">
<img  class="circle" src="Image/attack-on-titan.jpg" alt="">
<img  class="circle" src="Image/attack-on-titan.jpg" alt="">
<img  class="circle" src="Image/attack-on-titan.jpg" alt="">
<img  class="circle" src="Image/attack-on-titan.jpg" alt="">
<img  class="circle" src="Image/attack-on-titan.jpg" alt="">
<img  class="circle" src="Image/attack-on-titan.jpg" alt="">
<img  class="circle" src="Image/attack-on-titan.jpg" alt="">
<img  class="circle" src="Image/attack-on-titan.jpg" alt="">
</figure>
</div>
<span style="margin-right:75%;" class="ss-icon" onclick="galleryspin('-')">&lt;</span>
<span style="" class="ss-icon" onclick="galleryspin('')">&gt;</span>
      </header>
	
	<div id="main">
           <h3 style="color:red">Popular Anime</h3>   
      <?php include 'inc/nav.php'; ?>
      <?php include 'inc/sidebar.php';?> 
      </div>
      <br>
      


      <br><p style="color:red">Also Check out <a href="http://www.animegogogo.com">Animegogogo.com</a> <br></p>

<script type="text/javascript">
	var angle = 0;
function galleryspin(sign) { 
spinner = document.querySelector("#spinner");
if (!sign) { angle = angle + 45; } else { angle = angle - 45; }
spinner.setAttribute("style","-webkit-transform: rotateY("+ angle +"deg); -moz-transform: rotateY("+ angle +"deg); transform: rotateY("+ angle +"deg);");
}
</script>


	</body>

</html>