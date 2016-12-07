<?php
    require("mysql_class.php");
    $update
 = $db->update("user","nikename
 = #beyondwebcn#","where
 id = #2#");//请把#号替换为单引号

    $db->dbClose();

?>