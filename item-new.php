<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>MyMedia - Item</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!--picachoose-->
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
        <!--end pickachoose-->
        
</head>

<body>

  <!-- start nav section-->
  <div class="navbar navbar-default navbar-static-top">
    <style>
      .body{padding-top:70px}
    </style>
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">MyMedia - Buy</a>
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="">
            <a href="help.php">Help</a>
          </li>
          <li class="disabled">
            <a href="#">More</a>
          </li>
          <li class="disabled">
            <a href="#">About</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- end nav section-->
  <!--start detail section-->
  <div class="container">
    <div class="row">
      <!--start link section-->
      <div class="col-md-4 col-xs-12"></div>
      <!--end link section-->
      <!--start image section-->
      <div class="col-md-6 col-xs-12">
</div>
      <!--end image section-->
<!-- not really needed, i'm using it to center the gallery. -->
<div class="pikachoose">
shrinking
	<ul id="pikame" >
		<li><a href="http://www.pikachoose.com"><img src="mymedia/images/55563100_1403307486_dv.jpg"/></a><span>This </span></li>
		<li><a href="http://www.pikachoose.com"><img src="mymedia/images/28220600_1403308523_dv.jpg"/></a><span>jCarousel is supported and can be integrated with PikaChoose!</span></li>
		<li><a href="http://www.pikachoose.com"><img src="mymedia/images/29044100_1403308146_dv.jpg"/></a><span>Be sure to check out for updates.</span></li>
	</ul>
</div>
      <!--start ad section-->
      <div class="col-md-2 col-xs-12"></div>
      <!--end ad section-->
    </div>
  </div>
  <!--end detail section-->
  <!--start footer section-->
  <div class="container">
    <div class="row"></div>
  </div>
  <!--end footer section-->






</body>

</html>