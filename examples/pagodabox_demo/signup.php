<?php	
session_start();
if(isset($_POST['username']) && isset($_POST['password']) ) {

  require_once('user.php');
  require_once('utility.php');
  $username = $_POST['username'];
  $password = $_POST['password'];

  $userObject = new User($username, $password);
  $isSignup = $userObject->signup();
  if($isSignup==true) {
    $_SESSION['username'] = $userObject->username;

    $server_name = $_SERVER['SERVER_NAME'];
    $root = get_root_url();

    $url = "$root/upload.php";
    header("Location:$url");
  } else {
    echo 'fail.';
  }	
}
?>
