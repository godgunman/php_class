<?php 

require_once('utility.php');

class File {

  public $fid;
  public $name;
  public $type;
  public $size;

  function __construct($name, $type, $size){
    $this->name = $name;
    $this->type = $type;
    $this->size = $size;
  }

  public function insert() {
    $link = connect_db();		
    $sql = "INSERT INTO `files` ( `name` ,`type`, `size` ) VALUES ('$this->name',  '$this->type', '$this->size'); ";
    $result = mysql_query($sql, $link);	
  }

  public static function getFiles() {
    $link = connect_db();
    $sql = "SELECT * FROM  `files` ";
    $result = mysql_query($sql, $link);	

    $files = array();	
    while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
      $file = new File($row['name'], $row['type'], $row['size']);
      $file->fid = $row['fid'];
      array_push($files, $file);
    }
    return $files;
  }	
}

?>
