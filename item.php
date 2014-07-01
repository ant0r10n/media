<?php require_once('Connections/mini.php'); ?><?php
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

$maxRows_DetailRS1 = 10;
$pageNum_DetailRS1 = 0;
if (isset($_GET['pageNum_DetailRS1'])) {
  $pageNum_DetailRS1 = $_GET['pageNum_DetailRS1'];
}
$startRow_DetailRS1 = $pageNum_DetailRS1 * $maxRows_DetailRS1;

$colname_DetailRS1 = "-1";
if (isset($_GET['recordID'])) {
  $colname_DetailRS1 = $_GET['recordID'];
}
mysql_select_db($database_mini, $mini);
$query_DetailRS1 = sprintf("SELECT * FROM media WHERE id = %s", GetSQLValueString($colname_DetailRS1, "int"));
$query_limit_DetailRS1 = sprintf("%s LIMIT %d, %d", $query_DetailRS1, $startRow_DetailRS1, $maxRows_DetailRS1);
$DetailRS1 = mysql_query($query_limit_DetailRS1, $mini) or die(mysql_error());
$row_DetailRS1 = mysql_fetch_assoc($DetailRS1);

if (isset($_GET['totalRows_DetailRS1'])) {
  $totalRows_DetailRS1 = $_GET['totalRows_DetailRS1'];
} else {
  $all_DetailRS1 = mysql_query($query_DetailRS1);
  $totalRows_DetailRS1 = mysql_num_rows($all_DetailRS1);
}
$totalPages_DetailRS1 = ceil($totalRows_DetailRS1/$maxRows_DetailRS1)-1;
?><!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <title>MyMedia - <?php echo $row_DetailRS1['title']; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="For Sale,<?php echo $row_DetailRS1['title']; ?>, <?php echo $row_DetailRS1['description']; ?>,in <?php echo $row_DetailRS1['condition']; ?> condition for <?php echo $row_DetailRS1['price']; ?>. Posted on <?php echo $row_DetailRS1['date']; ?> on 0r10n network. http://simple.0r10n.net/media using MyMedia">
  <meta name="author" content="0r10n network http://simple.0r10n.net/media">
  <meta name="keywords" content="<?php echo $row_DetailRS1['title']; ?>,<?php echo $row_DetailRS1['title']; ?>,<?php echo $row_DetailRS1['type']; ?>,yard sale,used media sales,dvd,cd,vhs,cassette,second hand" />
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="1 month">
  
  
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<link href="mymedia/resources/initializr/js/vender/bootstrap.min.css" rel="stylesheet">
<link href="css/mymedia.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>

  <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  

  
</head>

<body>

  <!-- start nav section-->
  <div class="navbar navbar-default navbar-fixed-top">
    <style>
      .body{padding-top:70px}
    </style>
    <div class="container">
      <div class="nav-tabs">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">MyMedia - Item Detail</a>
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="">
            <a href="help.php">Help</a>
          </li>
          <li class="disabled">
            <a href="#" onClick="history.go(-1)">Back</a>
          </li>
          <li class="active">
            <a href="#"><?php echo $row_DetailRS1['title']; ?></a>
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
      <div class="col-md-3 col-xs-12">
      <h3>Format: <?php echo $row_DetailRS1['type']; ?><br></h3>
      
	  <h3>Title: <a type="amzn" search="<?php echo $row_DetailRS1['title']; ?>"><?php echo $row_DetailRS1['title']; ?></a><br></h3>
      <h3>Artist: <?php echo $row_DetailRS1['artist']; ?><br></h3>
      <h3>Condition: <?php echo $row_DetailRS1['condition']; ?><br></h3>
      <h4>The Price: <?php echo $row_DetailRS1['price']; ?><br></h3>
      <h4>Date Added: <?php echo $row_DetailRS1['date']; ?><br></h3>
      <!--button Code-->
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="<?php echo $row_DetailRS1['buttoncode']; ?>">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
      <p><a type="amzn" search="<?php echo $row_DetailRS1['title']; ?>"> Search Amazon for more like this.</a></p>
     </div>
      
      <!--end link section-->
      <!--start image section-->
      <div class="col-md-7 col-xs-12">
     <img class="center img-responsive" src="mymedia/images/<?php echo $row_DetailRS1['image']; ?>">
     <img class="center img-responsive" src="mymedia/images/<?php echo $row_DetailRS1['image2']; ?>" alt="" ><br>
	
<span class="bold">Description: <?php echo $row_DetailRS1['description']; ?></span>
</div>

    
      <!--end image section-->

      <!--start ad section-->
      <div class="col-md-2 col-xs-12"><hr>	<br><a href="https://www.digitalocean.com/?refcode=4e36c0d39348"><img class="img-responsive center" src="img/Digital_Ocean_Logo.png" width="200 px" alt="Best Cloud Servers ever"><p class="center">Set up your cloud server in 55 Seconds.</p></a></div>
      <!--end ad section-->
</div>
  </div>
<!--end detail section-->
  <!--start footer section-->
  <div class="container">&copy2014 0r10n network</p>
    <div class="row"></div>
  </div>
  <p><!--end footer section-->
    
    <SCRIPT charset="utf-8" type="text/javascript" src="http://ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&MarketPlace=US&ID=V20070822%2FUS%2F0r10nnetwork-20%2F8005%2F7cbcf097-3f8f-46cd-afd3-240a6c655f68"> </SCRIPT> 
    <NOSCRIPT>
      <A HREF="http://ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&MarketPlace=US&ID=V20070822%2FUS%2F0r10nnetwork-20%2F8005%2F7cbcf097-3f8f-46cd-afd3-240a6c655f68&Operation=NoScript">Amazon.com Widgets</A>
    </NOSCRIPT>
  </p>

</body>

</html><?php
mysql_free_result($DetailRS1);
?>