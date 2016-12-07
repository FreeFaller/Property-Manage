<?php
header("content-type:text/html;charset=utf-8");
session_start();
date_default_timezone_set("PRC");
define("ROOT",dirname(__FILE__));
set_include_path(".".PATH_SEPARATOR.ROOT."/".PATH_SEPARATOR.ROOT."/lib".PATH_SEPARATOR.ROOT."/core".PATH_SEPARATOR.ROOT."/configs".PATH_SEPARATOR.get_include_path());
require_once 'mysql.php';
require_once 'image.php';
require_once 'common.php';
require_once 'string.php';
require_once 'page.php';
require_once 'upload.php';
require_once 'configs.php';
require_once 'admin.php';
require_once 'upload.php';
connect();
