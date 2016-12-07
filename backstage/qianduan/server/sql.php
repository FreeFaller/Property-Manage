<?php

    class
 Mysql{

        private
 $host;//服务器地址

        private
 $root;//用户名

        private
 $password;//密码

        private
 $database;//数据库名



    }
function
 __construct($host,$root,$password,$database){

    $this->host
 = $host;

    $this->root
 = $root;

    $this->password
 = $password;

    $this->database
 = $database;

    $this->connect();

}
function
 connect(){

    $this->conn
 = mysql_connect($this->host,$this->root,$this->password) or die("DB
 Connnection Error !".mysql_error());

    mysql_select_db($this->database,$this->conn);

    mysql_query("set
 names utf8");

}

         

function
 dbClose(){

    mysql_close($this->conn);

}
function
 query($sql){

    return
 mysql_query($sql);

}

        

function
 myArray($result){

    return
 mysql_fetch_array($result);

}

        

function
 rows($result){

    return
 mysql_num_rows($result);

}
function
 select($tableName,$condition){

    return
 $this->query("SELECT
 * FROM $tableName $condition");

}
function
 insert($tableName,$fields,$value){

    $this->query("INSERT
 INTO $tableName $fields VALUES$value");

}
function
 update($tableName,$change,$condition){

    $this->query("UPDATE
 $tableName SET $change $condition");

}
function
 delete($tableName,$condition){

    $this->query("DELETE
 FROM $tableName $condition");

}
$db
 = new Mysql("localhost","root","admin","beyondweb_test");
?>