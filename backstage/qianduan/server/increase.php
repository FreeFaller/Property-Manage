<?php

    require("mysql_class.php");
    $insert
 = $db->insert("user","(nikename,email)","('beyondweb','beyondwebcn@xx.com')");
    $db->dbClose();
?>