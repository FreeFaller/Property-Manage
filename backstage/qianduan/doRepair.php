<?php
require_once'../houtai/include.php';
$name = $_SESSION['adminName'];
$repairtitle = $_POST['repairtitle'];
$repaircontent = $_POST['repaircontent'];

$array = array(
'name' => $name,
'repairtitle' => $repairtitle,
'repaircontent' => $repaircontent);

$keys="`".join("`,`",array_keys($array))."`";
$vals="'".join("','",array_values($array))."'";
$sql="INSERT INTO `zhuce`($keys) VALUES({$vals})";
//print_r($sql);
if(mysql_query($sql)){
  alertMes("发送成功","../../webPage/set.php");
}

// $sql="update `zhuce` set complaintitle = '$(complaintitle)' where id = '11'";
// if(isset($_SESSION['id'])){
//     echo $_SESSION['id'];
// }elseif(isset($_COOKIE['id'])){
//     echo $_COOKIE['id'];
// }
