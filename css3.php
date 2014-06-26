<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<link type="text/css" href="styles/css3.css" rel="stylesheet" />
		<script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script type="text/javascript" src="lib/jquery.jcarousel.min.js"></script>
		<script type="text/javascript" src="lib/jquery.pikachoose.min.js"></script>
		<script type="text/javascript" src="lib/jquery.touchwipe.min.js"></script>
		<script language="javascript">
			$(document).ready(
				function (){
					$("#pikame").PikaChoose();
				});
		</script>

		
</head>
<body>
<!-- not really needed, i'm using it to center the gallery. -->
<div class="pikachoose">
Styled without images. Pure CSS.
	<ul id="pikame" >
		<li><a href="http://www.pikachoose.com"><img src="mymedia/images/55563100_1403307486_dv.jpg"/></a><span>This </span></li>
		<li><a href="http://www.pikachoose.com"><img src="mymedia/images/28220600_1403308523_dv.jpg"/></a><span>jCarousel is supported and can be integrated with PikaChoose!</span></li>
		<li><a href="http://www.pikachoose.com"><img src="mymedia/images/29044100_1403308146_dv.jpg"/></a><span>Be sure to check out for updates.</span></li>
	</ul>
</div>

</body>
</html>
