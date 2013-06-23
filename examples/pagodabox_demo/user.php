<?php 

require_once('utility.php');

class User {

  public $uid;
  public $username;
  private $password;

  function __construct($username, $password){

    if(isset($password) && $password!='') {
      $this->password = $password;
    } else {
      $this->genPassword();
    }
    $this->username = $username;
  }

  public function genPassword() {	
    $this->password = rand(10000,99999);		
  }

  public function checkAccount() {
    connect_db();		
    $sql = "SELECT `username` FROM `user` WHERE `username`='$this->username'";
    $result = mysql_query($sql);
    if ( $row = mysql_fetch_array($result) ) {
      return false;
    } else {
      return true;
    }		
  }

  public function login() {
    connect_db();		
    $sql = "SELECT `username` FROM `user` WHERE `username`='$this->username' AND `password`='$this->password'";
    $result = mysql_query($sql);
    mysql_error();
    if ( $row = mysql_fetch_array($result) ) {
      return true;
    } else {
      return false;
    }		
  }

  public function signup(){
    connect_db();		
    if($this->checkAccount()) {		
      $sql = "INSERT INTO `user` (`username` ,`password`)".
	"VALUES ('$this->username', '$this->password');" ;
      mysql_query($sql);
      return true;
    } else {
      echo 'has the same username.';
    }
    return false;
  }	
}
/*
$userObj1 = new User('ggm2', '123');
$userObj1->signup();

$userObj2 = new User('ggm3', null);
$userObj2->signup();

echo '<pre>';
print_r($userObj1);
print_r($userObj2);
echo '</pre>';
 */
?>
