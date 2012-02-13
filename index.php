<?php
$imgs = array("http://galleries.ivarvong.com/photos/i-DMjjkVg/0/L/i-DMjjkVg-L.jpg",
"http://galleries.ivarvong.com/photos/i-bhjDbDX/0/L/i-bhjDbDX-L.jpg",
"http://galleries.ivarvong.com/photos/i-Bq9NGdp/0/L/i-Bq9NGdp-L.jpg");

$imgs = glob("/srv/www/ivarvong.com/public_html/drop/IV/*.JPG");
?>
<!DOCTYPE html>
<html>
<head>
	<meta content="charset=utf-8">


	<link rel="stylesheet" href="./css/flexslider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="./css/slider.css" type="text/css" media="screen" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="./js/jquery.flexslider-min.js"></script>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	
	<style>
	.slide-number {
		float: left;
		color: #CCC;
		padding: 3px;
		margin: 2px;
		cursor: pointer;
	}
	.slide-highlighted {
		border: 1px solid #CCC;
	}
	</style>
	
	<script type="text/javascript">
		var s;
		
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: "slide",
				controlsContainer: ".fcontainer",
				slideshow: false,
				start: function(slider) {
					s = slider;
					$('#total-slides').text(slider.count);
					for (var i=0;i<slider.count;i++) {
						$("#slide-numbers").append('<div id="'+i+'" class="slide-number">'+(i+1)+'</div>');
					}
					setTimeout(function() { $("#slide-numbers").fadeIn(500) }, 100);
				},
				before: function(slider) {
					$(".slide-highlighted").removeClass("slide-highlighted");
					$("#"+slider.animatingTo).addClass("slide-highlighted");
				}
			});
		});

		$(".slide-number").live('click', function() {
			//alert($(this).attr("id"));
			s.flexAnimate( 2 );
		});

	</script>
	
	<style>
	.flexslider { border: 0; margin-top: 30px; }
	#numwrap {color: #EEE; }
	</style>
	
</head>
<body style="background: #1A1A1A">
	<div id="container">

		<div class="flexslider">
			<ul class="slides">
		
				<?php foreach ($imgs as $img) { ?>
				<?php $img = str_replace("/srv/www/ivarvong.com/public_html","",$img); ?>
				<li>				
					<img src="<?php echo $img; ?>" />
				</li>
				<?php } ?>
		
			</ul>
		</div>
		
		<div class="fcontainer" style="margin-top: 30px"></div>
		
		
		
		  
		</div>  


	</div>
</body>
</html>