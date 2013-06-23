<?php
function connect_db() {
  $noDatabase = true;
  if (isset($_SERVER['DB1_HOST']) && isset($_SERVER['DB1_USER']) && isset($_SERVER['DB1_PASS']) && isset($_SERVER['DB1_NAME'])) {
    $link = mysql_connect($_SERVER['DB1_HOST'], $_SERVER['DB1_USER'], $_SERVER['DB1_PASS']);
    if (!$link) {
      $noDatabase = true;
      die('Could not connect: ' . mysql_error());
    }
    $noDatabase = !mysql_select_db($_SERVER['DB1_NAME'], $link);
  } else {
    $link = mysql_connect("localhost", "root", "root");
    mysql_query('SET NAMES utf8');
    mysql_select_db('web');
  }

  $sql_user = 'CREATE TABLE IF NOT EXISTS `user` (
    `uid` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
    `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
    PRIMARY KEY (`uid`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;';
  $result = mysql_query($sql_user);

  $sql_db = 'CREATE TABLE IF NOT EXISTS `files` (
    `fid` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
    `type` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
    `size` int(11) NOT NULL,
    `uploadtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`fid`)
  ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;';
  $result = mysql_query($sql_db);

  return $link;
}

function get_root_url() {
  $server_name = $_SERVER['SERVER_NAME'];
  $port = $_SERVER['SERVER_PORT'];

  if($port == '80')
    $url = "http://$server_name";
  else
    $url = "http://$server_name:$port";
  return $url;
}

function get_file_list() {
  connect_db();

  $sql = "SELECT * FROM `files`; ";
  $result = mysql_query($sql);

  $files = array();
  while ( $row = mysql_fetch_array($result) ) { 
    array_push($files, $row);
  }               
  return $files;

}

?>
