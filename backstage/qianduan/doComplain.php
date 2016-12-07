<?php
require_once'../houtai/include.php';
$name = $_SESSION['adminName'];
$complaintitle = $_POST['complaintitle'];
$content = $_POST['content'];

$array = array(
'name' => $name,
'complaintitle' => $complaintitle,
'content' => $content);

$keys="`".join("`,`",array_keys($array))."`";
$vals="'".join("','",array_values($array))."'";
$sql="INSERT INTO `zhuce`($keys) VALUES({$vals})";
//print_r($sql);
if(mysql_query($sql)){
  alertMes("发送成功","../../webPage/set.html");
}

// $sql="update `zhuce` set complaintitle = '$(complaintitle)' where id = '11'";
// if(isset($_SESSION['id'])){
//     echo $_SESSION['id'];
// }elseif(isset($_COOKIE['id'])){
//     echo $_COOKIE['id'];
// }
