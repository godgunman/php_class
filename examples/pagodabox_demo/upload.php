<?php 
session_start(); 
if(!isset($_SESSION['username'])) {
    require_once('utility.php');
    $root = get_root_url();
    $url = "$root/index.php";
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
	      <li class="active"><a href="#">上傳檔案</a></li>
	      <li><a href="table.php">檔案列表</a></li>
	      <li><a href="#contact">其他</a></li>
	    </ul>
	  </div>
	</div>
      </div>
    </div>

    <div class="container">
      <div class="span4 offset3">

	<?php
	    if(isset($_GET['result'])) {
		$result = $_GET['result'];
		
		if($result=='success')
		    echo "<h4>檔案上傳成功</h4>";
		else if($result=='fail')
		    echo "<h4>檔案上傳失敗</h4>";
	    }
	?>

	<form class="form-horizontal" action="do_upload.php" method="POST"
	  enctype="multipart/form-data">
	  <fieldset>
	    <div id="legend" class="">
	      <legend class="">上傳檔案</legend>
	    </div>
	    <div class="control-group">
	      <label class="control-label">檔案</label>

	      <!-- File Upload -->
	      <div class="controls">
		<input class="input-file" type="file" name="file">
	      </div>

	    </div>

	    <div class="control-group">
	      <label class="control-label"></label>

	      <!-- Button -->
	      <div class="controls">
		<button class="btn btn-success">上傳</button>
	      </div>
	    </div>

	  </fieldset>
	</form>
      </div>
    </div>

  </div>
</div>


</body></html>
