<?php require_once('Connections/mini.php'); ?>
<?php require_once('Connections/mini.php'); ?>
<?php require_once('Connections/mini.php'); ?>
<?php require_once('Connections/mini.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$maxRows_rsImageDate = 6;
$pageNum_rsImageDate = 0;
if (isset($_GET['pageNum_rsImageDate'])) {
  $pageNum_rsImageDate = $_GET['pageNum_rsImageDate'];
}
$startRow_rsImageDate = $pageNum_rsImageDate * $maxRows_rsImageDate;

mysql_select_db($database_mini, $mini);
$query_rsImageDate = "SELECT * FROM media WHERE active = 1 ORDER BY `date` DESC";
$query_limit_rsImageDate = sprintf("%s LIMIT %d, %d", $query_rsImageDate, $startRow_rsImageDate, $maxRows_rsImageDate);
$rsImageDate = mysql_query($query_limit_rsImageDate, $mini) or die(mysql_error());
$row_rsImageDate = mysql_fetch_assoc($rsImageDate);

if (isset($_GET['totalRows_rsImageDate'])) {
  $totalRows_rsImageDate = $_GET['totalRows_rsImageDate'];
} else {
  $all_rsImageDate = mysql_query($query_rsImageDate);
  $totalRows_rsImageDate = mysql_num_rows($all_rsImageDate);
}
$totalPages_rsImageDate = ceil($totalRows_rsImageDate/$maxRows_rsImageDate)-1;

$maxRows_rsImagesTypeCD = 6;
$pageNum_rsImagesTypeCD = 0;
if (isset($_GET['pageNum_rsImagesTypeCD'])) {
  $pageNum_rsImagesTypeCD = $_GET['pageNum_rsImagesTypeCD'];
}
$startRow_rsImagesTypeCD = $pageNum_rsImagesTypeCD * $maxRows_rsImagesTypeCD;

mysql_select_db($database_mini, $mini);
$query_rsImagesTypeCD = "SELECT * FROM media WHERE type = 'cd' ORDER BY `date` DESC";
$query_limit_rsImagesTypeCD = sprintf("%s LIMIT %d, %d", $query_rsImagesTypeCD, $startRow_rsImagesTypeCD, $maxRows_rsImagesTypeCD);
$rsImagesTypeCD = mysql_query($query_limit_rsImagesTypeCD, $mini) or die(mysql_error());
$row_rsImagesTypeCD = mysql_fetch_assoc($rsImagesTypeCD);

if (isset($_GET['totalRows_rsImagesTypeCD'])) {
  $totalRows_rsImagesTypeCD = $_GET['totalRows_rsImagesTypeCD'];
} else {
  $all_rsImagesTypeCD = mysql_query($query_rsImagesTypeCD);
  $totalRows_rsImagesTypeCD = mysql_num_rows($all_rsImagesTypeCD);
}
$totalPages_rsImagesTypeCD = ceil($totalRows_rsImagesTypeCD/$maxRows_rsImagesTypeCD)-1;

$maxRows_rsimageTypeDVD = 6;
$pageNum_rsimageTypeDVD = 0;
if (isset($_GET['pageNum_rsimageTypeDVD'])) {
  $pageNum_rsimageTypeDVD = $_GET['pageNum_rsimageTypeDVD'];
}
$startRow_rsimageTypeDVD = $pageNum_rsimageTypeDVD * $maxRows_rsimageTypeDVD;

mysql_select_db($database_mini, $mini);
$query_rsimageTypeDVD = "SELECT * FROM media WHERE type = 'dvd' ORDER BY `date` DESC";
$query_limit_rsimageTypeDVD = sprintf("%s LIMIT %d, %d", $query_rsimageTypeDVD, $startRow_rsimageTypeDVD, $maxRows_rsimageTypeDVD);
$rsimageTypeDVD = mysql_query($query_limit_rsimageTypeDVD, $mini) or die(mysql_error());
$row_rsimageTypeDVD = mysql_fetch_assoc($rsimageTypeDVD);

if (isset($_GET['totalRows_rsimageTypeDVD'])) {
  $totalRows_rsimageTypeDVD = $_GET['totalRows_rsimageTypeDVD'];
} else {
  $all_rsimageTypeDVD = mysql_query($query_rsimageTypeDVD);
  $totalRows_rsimageTypeDVD = mysql_num_rows($all_rsimageTypeDVD);
}
$totalPages_rsimageTypeDVD = ceil($totalRows_rsimageTypeDVD/$maxRows_rsimageTypeDVD)-1;

$maxRows_rsImagePrice = 6;
$pageNum_rsImagePrice = 0;
if (isset($_GET['pageNum_rsImagePrice'])) {
  $pageNum_rsImagePrice = $_GET['pageNum_rsImagePrice'];
}
$startRow_rsImagePrice = $pageNum_rsImagePrice * $maxRows_rsImagePrice;

mysql_select_db($database_mini, $mini);
$query_rsImagePrice = "SELECT * FROM media WHERE price < 5.00 ORDER BY `date` ASC";
$query_limit_rsImagePrice = sprintf("%s LIMIT %d, %d", $query_rsImagePrice, $startRow_rsImagePrice, $maxRows_rsImagePrice);
$rsImagePrice = mysql_query($query_limit_rsImagePrice, $mini) or die(mysql_error());
$row_rsImagePrice = mysql_fetch_assoc($rsImagePrice);

if (isset($_GET['totalRows_rsImagePrice'])) {
  $totalRows_rsImagePrice = $_GET['totalRows_rsImagePrice'];
} else {
  $all_rsImagePrice = mysql_query($query_rsImagePrice);
  $totalRows_rsImagePrice = mysql_num_rows($all_rsImagePrice);
}
$totalPages_rsImagePrice = ceil($totalRows_rsImagePrice/$maxRows_rsImagePrice)-1;
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>MyMedia -  Buy</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="mymedia/resources/initializr/css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/mymedia.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</head>

<body>
<!--slider script start-->
<!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (39KB) or jssor.sliderc.mini.js (31KB, with caption, no slideshow) or jssor.sliders.mini.js (26KB, no caption, no slideshow) instead for release -->
    <!-- jssor.slider.mini.js = jssor.sliderc.mini.js = jssor.sliders.mini.js = (jssor.core.js + jssor.utils.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/jssor.core.js"></script>
    <script type="text/javascript" src="js/jssor.utils.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    <script>

        jQuery(document).ready(function ($) {

            var nestedSliders = [];

            $.each(["sliderh1_container", "sliderh2_container", "sliderh3_container", "sliderh4_container"], function (index, value) {

                var sliderhOptions = {
                    $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1
                    $AutoPlaySteps: 4,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                    $SlideDuration: 300,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                    $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                    $SlideWidth: 200,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                    //$SlideHeight: 150,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                    $SlideSpacing: 3, 					                //[Optional] Space between each slide in pixels, default value is 0
                    $DisplayPieces: 4,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                    $ParkingPosition: 0,                              //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                    $UISearchMode: 0,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).

                    $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                        $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                        $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                        $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                        $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                        $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                        $SpacingX: 0,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                        $SpacingY: 0,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                        $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    }
                }
                var jssor_sliderh = new $JssorSlider$(value, sliderhOptions);

                nestedSliders.push(jssor_sliderh);
            });

            var options = {
                $AutoPlay: false,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 300,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 80,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                $SlideHeight: 150,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 3, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 3,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 0,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 2,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 2,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0),

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $SpacingY: 5,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 2                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                }
            };
            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth) {
                    var sliderWidth = parentWidth;

                    //keep the slider width no more than 809
                    sliderWidth = Math.min(sliderWidth, 809);

                    jssor_slider1.$SetScaleWidth(sliderWidth);
                }
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }


            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
            //    $(window).bind("orientationchange", ScaleSlider);
            //}
            //responsive code end
        });
    </script>
    <!-- sliderh style begin -->
    <style>
        /* jssor slider bullet navigator skin 03 css */
        /*
        .jssorb03 div           (normal)
        .jssorb03 div:hover     (normal mouseover)
        .jssorb03 .av           (active)
        .jssorb03 .av:hover     (active mouseover)
        .jssorb03 .dn           (mousedown)
        */
        .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av
        {
            background: url(../img/b03.png) no-repeat;
            overflow:hidden;
            cursor: pointer;
        }
        .jssorb03 div { background-position: -5px -4px; }
        .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
        .jssorb03 .av { background-position: -65px -4px; }
        .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }
    </style>
    <!-- sliderh style end -->
<!--slider script end-->
  <div class="navbar navbar-default navbar-static-top">
    <style>
      .body{padding-top:70px}
    </style>
    <div class="container">
      <div class="navbar-header mmnav">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">MyMedia - Buy</a>
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

  <div class="container">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
       <!-- slider insert here-->
       <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 809px; height: 456px; overflow: hidden; ">
            <!-- Slides Container -->
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 809px; height: 456px;
                overflow: hidden;">
                <div>
                    <div id="sliderh1_container" style="position: relative; top: 0px; left: 0px; width: 809px;
                        height: 150px;">

                        <!-- Slides Container -->
                        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 809px; height: 150px;
                            overflow: hidden;">
                            <!--Start first row of slider images-->
                            <?php do { ?>
                              <div><img u="image" src="mymedia/images/<?php echo $row_rsImageDate['image']; ?>" alt="latest additions"></div>
                              <?php } while ($row_rsImageDate = mysql_fetch_assoc($rsImageDate)); ?>
<!--End first row of slider images-->
                        </div>
                        <!-- Bullet Navigator Skin Begin -->
                        <!-- bullet navigator container -->
                        <div u="navigator" class="jssorb03" style="position: absolute; bottom: 10px; right: 10px;">
                            <!-- bullet navigator item prototype -->
                            <div u="prototype" style="position: absolute; width: 21px; height: 21px; text-align:center; line-height:21px; color:white; font-size:12px;"><NumberTemplate></NumberTemplate></div>
                        </div>
                        <!-- Bullet Navigator Skin End -->
                    </div>
                </div>
                <div>
                    <div id="sliderh2_container" style="position: relative; top: 0px; left: 0px; width: 809px;
                        height: 150px;">

                        <!-- Slides Container -->
                        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 809px; height: 150px;
                            overflow: hidden;">
                            <!--Start second row of slider images-->
                          <?php do { ?>
                              <div><img u="image" src="mymedia/images/<?php echo $row_rsImagesTypeCD['image']; ?>" alt="cd's"></div>
                              <?php } while ($row_rsImagesTypeCD = mysql_fetch_assoc($rsImagesTypeCD)); ?>
<!--End second row of slider images-->
                        </div>
                        <!-- Bullet Navigator Skin Begin -->
                        <!-- bullet navigator container -->
                        <div u="navigator" class="jssorb03" style="position: absolute; bottom: 10px; right: 10px;">
                            <!-- bullet navigator item prototype -->
                            <div u="prototype" style="position: absolute; width: 21px; height: 21px; text-align:center; line-height:21px; color:white; font-size:12px;"><NumberTemplate></NumberTemplate></div>
                        </div>
                        <!-- Bullet Navigator Skin End -->
                    </div>
                </div>
                <div>
                    <div id="sliderh3_container" style="position: relative; top: 0px; left: 0px; width: 809px;
                        height: 150px;">

                        <!-- Slides Container -->
                        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 809px; height: 150px;
                            overflow: hidden;">
                            <!--Start third row of slider images-->
                            <?php do { ?>
                              <div><img u="image" src="mymedia/images/<?php echo $row_rsimageTypeDVD['image']; ?>" alt="latest DVD" /></div>
                              <?php } while ($row_rsimageTypeDVD = mysql_fetch_assoc($rsimageTypeDVD)); ?>
                            
                        </div>
                        <!--Start third row of slider images-->
                        <!-- Bullet Navigator Skin Begin -->
                        <!-- bullet navigator container -->
                        <div u="navigator" class="jssorb03" style="position: absolute; bottom: 10px; right: 10px;">
                            <!-- bullet navigator item prototype -->
                            <div u="prototype" style="position: absolute; width: 21px; height: 21px; text-align:center; line-height:21px; color:white; font-size:12px;"><NumberTemplate></NumberTemplate></div>
                        </div>
                        <!-- Bullet Navigator Skin End -->
                    </div>
                </div>
                <div>
                    <div id="sliderh4_container" style="position: relative; top: 0px; left: 0px; width: 809px;
                        height: 150px;">

                        <!-- Slides Container -->
                        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 809px; height: 150px;
                            overflow: hidden;">
                            <!--Start fourth row of slider images-->
                            <?php do { ?>
                              <div><img u="image" src="mymedia/images/<?php echo $row_rsImagePrice['image']; ?>" alt="Under 5 Bucks" /></div>
                              <?php } while ($row_rsImagePrice = mysql_fetch_assoc($rsImagePrice)); ?>
                           
                            <!--end fourth row of slider images-->
                        </div>
                        <!-- Bullet Navigator Skin Begin -->
                        <!-- bullet navigator container -->
                        <div u="navigator" class="jssorb03" style="position: absolute; bottom: 10px; right: 10px;">
                            <!-- bullet navigator item prototype -->
                            <div u="prototype" style="position: absolute; width: 21px; height: 21px; text-align:center; line-height:21px; color:white; font-size:12px;"><NumberTemplate></NumberTemplate></div>
                        </div>
                        <!-- Bullet Navigator Skin End -->
                    </div>
                </div>
            </div>
        <!-- Bullet Navigator Skin Begin -->
        <!-- jssor slider bullet navigator skin 02 -->
        <style>
            /*
            .jssorb02 div           (normal)
            .jssorb02 div:hover     (normal mouseover)
            .jssorb02 .av           (active)
            .jssorb02 .av:hover     (active mouseover)
            .jssorb02 .dn           (mousedown)
            */
            .jssorb02 div, .jssorb02 div:hover, .jssorb02 .av
            {
                background: url(../img/b02.png) no-repeat;
                overflow:hidden;
                cursor: pointer;
            }
            .jssorb02 div { background-position: -5px -5px; }
            .jssorb02 div:hover, .jssorb02 .av:hover { background-position: -35px -5px; }
            .jssorb02 .av { background-position: -65px -5px; }
            .jssorb02 .dn, .jssorb02 .dn:hover { background-position: -95px -5px; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb02" style="position: absolute; bottom: 8px; left: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype" style="POSITION: absolute; WIDTH: 21px; HEIGHT: 21px; text-align:center; line-height:21px; color:White; font-size:12px;"><NumberTemplate></NumberTemplate></div>
        </div>
        <!-- Bullet Navigator Skin End -->
            <a style="display: none" href="http://www.jssor.com">html slideshow</a>
        </div>
    <!-- Jssor Slider End -->
       <!--Slider end Here-->
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>

  <div class="row" id="lbox">
    <div class="col-md-1"></div>
    <div class="col-md-3">
      <h2>Find CD's</h2>
      <p>Mostly my collection of cd's but there are other collections too.</p>
      <a class="btn btn-primary" href="detail.php">Search CD's</a>
    </div>
    <div class="col-md-4">
      <h2>Find DVD's</h2>
      <p>Varied DVD titles from all over. wow</p>
      <a class="btn btn-primary" href="#">Search DVD's</a>
    </div>
    <div class="col-md-3">
      <h2>Find More</h2>
      <p>Anything could be in this group, anything.</p>
      <a class="btn btn-primary" href="#">Search Everything</a>
    </div>
    <div class="col-md-1"></div>
  </div>






















</body>

</html>
<?php
mysql_free_result($rsImageDate);

mysql_free_result($rsImagesTypeCD);

mysql_free_result($rsimageTypeDVD);

mysql_free_result($rsImagePrice);
?>
