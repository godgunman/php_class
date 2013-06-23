<?php 
session_start(); 
if(!isset($_SESSION['username'])) {
  require_once('utility.php');
  $root = get_root_url();
  $url = "$root/index.php";
  header("Location:$url");
} else {
  require_once('file.php');
  $files = File::getFiles();
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
              <li class="active"><a href="#about">檔案列表</a></li>
              <li><a href="#contact">其他</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <table class='table table-hover'>
        <thead>
          <tr>
            <th>id</th>
            <th>name</th>
            <th>type</th>
            <th>size</th>
          </tr>
        </thead>
        <tbody>
<?php
foreach ($files as $file) {
  echo '<tr>';
  echo '<th>'.$file->fid.'</th>';
  echo '<th>'."<a href=\"upload_files/$file->name\">$file->name</a>".'</th>';
  echo '<th>'.$file->type.'</th>';
  echo '<th>'.$file->size.'</th>';
  echo '</tr>';
}
?>			
        </tbody>		

      </table>			
      <script src="http://code.jquery.com/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>


    </div>


</body></html>
