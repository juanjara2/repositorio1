<?php
include ("../PHP/Conecta.php");
include ("../PHP/mostrarhome.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Image carousel generated by WOWSlider.com</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Image carousel" />
	
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>	<script src="https://www.youtube.com/iframe_api"></script>

	<!-- End WOWSlider.com HEAD section -->

</head>
<body >
	
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
                <?php
                while ($rvi=  mysql_fetch_array($sqlvideo)){
                    $idvideo=$rvi['idvideo'];
                    $titulovideo=$rvi['titulo_video'];
                    $fotovideo=$rvi['img_video'];
                    $urlvideo=$rvi['url_video'];
                    $fechavideo=$rvi['fecha'];
                
                ?>
		<li><iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo($urlvideo); ?>?autoplay=0&rel=0&enablejsapi=1&playerapiid=ytplayer&wmode=transparent" frameborder="0" allowfullscreen></iframe><img src="data1/images/<?php echo($fotovideo); ?>" alt="<?php echo($titulovideo) ?>" title="<?php echo($titulovideo) ?>" id="wows1_0"/></li>
		<?php } ?>
            </ul></div>
	<span class="wsl"><a href="http://wowslider.com/vu">image carousel</a> by WOWSlider.com v7.4</span>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->

</body>
</html>