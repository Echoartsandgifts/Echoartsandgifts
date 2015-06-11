<?php

$price = '1,000';

$products = array(
	0 =>'http://lorempixel.com/400/200/',
	1 =>'http://lorempixel.com/400/201/',
	2 =>'http://lorempixel.com/400/202/',
	3 =>'http://lorempixel.com/400/203/',
	4 =>'http://lorempixel.com/400/204/',
	5 =>'http://lorempixel.com/400/205/',
	6 =>'http://lorempixel.com/400/206/'
);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="CSS/Style.css">
</head>
<body>
<h1 style="color:red"><a href="/echo/"><img width="40%" src="Image/Logo.png"></a></h1>
<div id="main">
    <h3 style="color:red">Popular Anime</h3>   
    <?php include 'inc/nav.php'; ?>
    <?php include 'inc/sidebar.php';?> 
    <div id="container">
      	<?php
    $htmlString = null;
    foreach ($products as $key => $value) {
    	$htmlString .= '<div class="product">';
	    $htmlString .= '<img src="' . $value . '">';
	    $htmlString .=   	'<p>$' . $price .  '</p>';
	    $htmlString .= '</div>';
	
    }
    echo $htmlString;
    ?>
	</div>
      
</div>
</body>
</html>

<?php  ?>