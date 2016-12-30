<?php
require_once'../houtai/include.php';
$name = $_SESSION['adminName'];
$garden = $_POST['pos1'];
$building = $_POST['pos2'];
$property = $_POST['pos3'];
$role = $_POST['pos4'];

$array = array(
'garden' => $garden,
'building' => $building,
'property' => $property,
'role' => $role);

$keys="`".join("`,`",array_keys($array))."`";
$vals="'".join("','",array_values($array))."'";
$sql="INSERT INTO `zhuce`($keys) VALUES({$vals})";
//print_r($sql);
if(mysql_query($sql)){
  alertMes("发送成功","../../webPage/apply.html");
}

// $sql="update `zhuce` set complaintitle = '$(complaintitle)' where id = '11'";
// if(isset($_SESSION['id'])){
//     echo $_SESSION['id'];
// }elseif(isset($_COOKIE['id'])){
//     echo $_COOKIE['id'];
// }
