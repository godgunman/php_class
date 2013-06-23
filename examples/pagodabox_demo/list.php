<?php session_start(); 
if(!isset($_SESSION['account'])) {
    require_once('utility.php');
    $root = get_root_url();
    $url = "$root/uploadapp/index.php";
    header("Location:$url");
}
?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>PHP上傳檔案程式</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
      body {
	padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
	<div class="container">
	  <a class="brand" href="#">PHP上傳檔案程式</a>
	  <div class="nav-collapse">
	    <ul class="nav">
	      <li><a href="index.php">首頁</a></li>
	      <li><a href="upload.php">上傳檔案</a></li>
	      <li class="activee"><a href="#">檔案列表</a></li>
	      <li><a href="#contact">其他</a></li>
	    </ul>
	  </div>
	</div>
      </div>
    </div>

    <div class="container">
      <div class="span4 offset3">
	<?php
	    require_once('utility.php');
	    $files = get_file_list();
	    print_r($files);
    	?>	


      </div>
    </div>

  </div>
</div>


</body></html>
