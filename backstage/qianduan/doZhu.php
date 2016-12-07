<?php
require_once'../houtai/include.php';
$name = $_POST['name'];
$email = $_POST['email'];
$xing = $_POST['sex'];
$phone = $_POST['phone'];
$section = $_POST['section'];
$position = $_POST['speciality'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$array = array(
'name' => $name,
'email' => $email,
'xing' => $xing,
'phone' => $phone,
'section' => $section,
'position' => $position,
'username' => $username,
'password' => $password);

$keys="`".join("`,`",array_keys($array))."`";
$vals="'".join("','",array_values($array))."'";
$sql="INSERT INTO `zhuce`($keys) VALUES({$vals})";
//print_r($sql);
if(mysql_query($sql)){
  alertMes("注册成功","index1.php");
}