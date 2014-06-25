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
$query_DetailRS1 = sprintf("SELECT * FROM media  WHERE id = %s", GetSQLValueString($colname_DetailRS1, "int"));
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
<!--thumbnail code-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script> <link type="text/css" href="/styles/bottom.css" rel="stylesheet" /> <script type="text/javascript" src="/lib/jquery.jcarousel.min.js"></script> <script type="text/javascript" src="/lib/jquery.pikachoose.js"></script>
<!-- end thumbnail code-->
  <meta charset="utf-8">
  <title>MyMedia - Item</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
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
        <a class="navbar-brand" href="index.php">MyMedia - Hello</a>
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="">
            <a href="help.php">Help</a>
          </li>
          <li class="disabled">
            <a href="#">More</a>
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
      <div class="col-md-4 col-xs-12"></div>
      <!--end link section-->
      <!--start image section-->
      <div class="col-md-6 col-xs-12"></div>
      <!--end image section-->

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
		
<table border="1" align="center">
  
  <tr>
    <td>type</td>
    <td><?php echo $row_DetailRS1['type']; ?> </td>
  </tr>
  <tr>
    <td>title</td>
    <td><?php echo $row_DetailRS1['title']; ?> </td>
  </tr>
  <tr>
    <td>artist</td>
    <td><?php echo $row_DetailRS1['artist']; ?> </td>
  </tr>
  <tr>
    <td>condition</td>
    <td><?php echo $row_DetailRS1['condition']; ?> </td>
  </tr>
  <tr>
    <td>image</td>
    <td><?php echo $row_DetailRS1['image']; ?> </td>
  </tr>
  <tr>
    <td>price</td>
    <td><?php echo $row_DetailRS1['price']; ?> </td>
  </tr>
  <tr>
    <td>description</td>
    <td><?php echo $row_DetailRS1['description']; ?> </td>
  </tr>
  <tr>
    <td>buttoncode</td>
    <td><?php echo $row_DetailRS1['buttoncode']; ?> </td>
  </tr>
  <tr>
    <td>date</td>
    <td><?php echo $row_DetailRS1['date']; ?> </td>
  </tr>
  <tr>
    <td>image2</td>
    <td><?php echo $row_DetailRS1['image2']; ?> </td>
  </tr>
  
  
</table>
<p>&nbsp;</p>
<!-- not really needed, i'm using it to center the gallery. -->
<div class="pikachoose">

	<ul id="pikame" >
		
		<li><a href="http://www.pikachoose.com"><img src="mymedia/images/<?php echo $row_DetailRS1['image2']; ?>" width="75" height="75" class="img-thumbnail/></a></li>
		<li><a href="http://www.pikachoose.com"><img src="mymedia/images/<?php echo $row_DetailRS1['image']; ?>" width="75" height="75" class="img-thumbnail/></a></li>
	</ul>
</div>






</body>

</html><?php
mysql_free_result($DetailRS1);
?>