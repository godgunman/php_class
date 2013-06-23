<?php 

session_start();
if (isset($_FILES['file'])) {
  require_once('utility.php');
  require_once('file.php');

  $tmp_name = $_FILES['file']['tmp_name'];
  $name = $_FILES['file']['name'];
  $type = $_FILES['file']['type'];
  $size = $_FILES['file']['size'];

  $new_path= "./upload_files/$name";
  if(move_uploaded_file($tmp_name, $new_path)) {
    $file = new File($name, $type, $size);
    $file->insert();
  } else {

  }
 
  $root = get_root_url();
  $url = "$root/upload.php";
  header("Location:$url");

}

?>
