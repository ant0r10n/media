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

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_rsArtist = 10;
$pageNum_rsArtist = 0;
if (isset($_GET['pageNum_rsArtist'])) {
  $pageNum_rsArtist = $_GET['pageNum_rsArtist'];
}
$startRow_rsArtist = $pageNum_rsArtist * $maxRows_rsArtist;

mysql_select_db($database_mini, $mini);
$query_rsArtist = "SELECT * FROM media WHERE active = 1 ORDER BY artist ASC";
$query_limit_rsArtist = sprintf("%s LIMIT %d, %d", $query_rsArtist, $startRow_rsArtist, $maxRows_rsArtist);
$rsArtist = mysql_query($query_limit_rsArtist, $mini) or die(mysql_error());
$row_rsArtist = mysql_fetch_assoc($rsArtist);

if (isset($_GET['totalRows_rsArtist'])) {
  $totalRows_rsArtist = $_GET['totalRows_rsArtist'];
} else {
  $all_rsArtist = mysql_query($query_rsArtist);
  $totalRows_rsArtist = mysql_num_rows($all_rsArtist);
}
$totalPages_rsArtist = ceil($totalRows_rsArtist/$maxRows_rsArtist)-1;

$queryString_rsArtist = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_rsArtist") == false && 
        stristr($param, "totalRows_rsArtist") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_rsArtist = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_rsArtist = sprintf("&totalRows_rsArtist=%d%s", $totalRows_rsArtist, $queryString_rsArtist);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>MyMedia - Search By View</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="mymedia/resources/initializr/css/bootstrap.css" rel="stylesheet" type="text/css">
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
          <li class="active">
            <a href="#">Search</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- end nav section-->

  <!-- start repeat section-->
  <div class="container">
  <?php do { ?>
    <div class="row">
      <div class="col-md-2 col-xs-12"><img class="img-rounded" height="50" width="50"src="mymedia/images/<?php echo $row_rsArtist['image']; ?>" alt="image"></div>
      <div class="col-md-1 col-xs-1"><?php echo $row_rsArtist['type']; ?></div>
      <div class="col-md-3 col-xs-11"><?php echo $row_rsArtist['artist']; ?></div>
      <div class="col-md-5 col-xs-12"><a href="item.php?recordID=<?php echo $row_rsArtist['id']; ?>"><?php echo $row_rsArtist['title']; ?></a></div>
      <div class="col-md-1" col-xs-12=""></div>
    </div>
    <?php } while ($row_rsArtist = mysql_fetch_assoc($rsArtist)); ?>
  </div>
  <!-- end repeat section-->

  <!-- start pagnation section-->
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-xs-12"><table border="0">
  <tr>
    <td><?php if ($pageNum_rsArtist > 0) { // Show if not first page ?>
        <a href="<?php printf("%s?pageNum_rsArtist=%d%s", $currentPage, 0, $queryString_rsArtist); ?>">First-</a>
        <?php } // Show if not first page ?></td>
    <td><?php if ($pageNum_rsArtist > 0) { // Show if not first page ?>
        <a href="<?php printf("%s?pageNum_rsArtist=%d%s", $currentPage, max(0, $pageNum_rsArtist - 1), $queryString_rsArtist); ?>">-Previous</a>
        <?php } // Show if not first page ?></td>
    <td><?php if ($pageNum_rsArtist < $totalPages_rsArtist) { // Show if not last page ?>
        <a href="<?php printf("%s?pageNum_rsArtist=%d%s", $currentPage, min($totalPages_rsArtist, $pageNum_rsArtist + 1), $queryString_rsArtist); ?>">Next-</a>
        <?php } // Show if not last page ?></td>
    <td><?php if ($pageNum_rsArtist < $totalPages_rsArtist) { // Show if not last page ?>
        <a href="<?php printf("%s?pageNum_rsArtist=%d%s", $currentPage, $totalPages_rsArtist, $queryString_rsArtist); ?>">-Last</a>
        <?php } // Show if not last page ?></td>
  </tr>
</table>

</div>
    </div>
    <div class="row">
      <div class="col-md-12 col-xs-12">Records <?php echo ($startRow_rsArtist + 1) ?> to <?php echo min($startRow_rsArtist + $maxRows_rsArtist, $totalRows_rsArtist) ?> of <?php echo $totalRows_rsArtist ?></div></div>
  </div>

  <!-- end pagnation section-->




<!--end DW CODE--->












</body>

</html>
<?php
mysql_free_result($rsArtist);
?>
