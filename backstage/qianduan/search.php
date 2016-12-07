<?php
require_once'../houtai/include.php';
$key = $_GET['key'];
$sql = "select * from biaodan where name like '%$key%' order by id desc";
$query = mysql_query($sql);
if($query&&mysql_num_rows($query)){
    while($row = mysql_fetch_assoc($query)){
        $data[] = $row;
    }
 }
 ?>

<html>  
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></meta>
<meta name="keyword" content="TENCENT"></meta>
<meta name="description" content="TENCENT"></meta>
<meta name="author" content="严涵"></meta>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/tab.css" >
<link rel="stylesheet" href="css/divide.css" >
<link rel="stylesheet" type="text/css" href="css/index.css">
<title>PHP通用审核系统</title>
<style>
.article_title{
    margin:0px 0px 30px 0px;
    border-bottom:1px dashed #dadde3;
    position:relative;
}
.article_title h1{
    height:24px;
    line-height:24px;
    overflow:hidden;
    font-size:22px;
    font-family:"微软雅黑";
    font-weight:normal;
    text-align:center;
    margin:0px;
}
.article_title p{
    text-align:center;
    font-size:12px;
    color:#777777;
    margin:25px 0px 15px 0px;
}
</style>
</head>
<body>
<div style="background-color:#CCCCCC" id="head">
<div class="o1">
    <ul class="ul1">
        <li><a href="../houtai/admin/login.php">Hi,请登录</a></li>
        <li><a href="zhuce.php">我要注册</a></li>
        <li><a href="">找回密码</a></li>
    </ul>
    <ul class="ul2">
        <li><a href="">关注本站</a></li>
        <li><a href="">关于</a></li>
        <li><a href="">友情链接</a></li>
        
    </ul>       
</div>
<div class="p1">
    <br/>
    <h1 id="text1">TWDW企业通用审核系统</h1>
    <p id="text2"><font size=5>最好用的system!</font></p>
</div>
<div class="p2">
    <ul class="ul2">
        <li><a href=""><img src="images/3.png"><font size=5>首页</font></a></li>
        <li><a href=""><img src="images/2.png"><font size=5>留言</font></a></li>
        <li><a href=""><img src="images/1.png"><font size=5>历史</font></a></li>
        <li>
            <form action="" method="get">
                <input name="" type="text" class="find" />
                <input name="" type="button" value="查询" style="color:black"/>
        </form>
        </li>
    </ul>
</div>
</div>
<div class="article_title">
                <h1><?php echo $row['application'];?></h1>
                <p>2016年01月 6日 08:18 新华网</p>
</div>
<div>
<?php  $i = 1;foreach($data as $row):?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['application'];?></td>
        <td><?php echo $row['applicationReasons'];?></td><br/>
    </tr>
    <?php $i++;endforeach;?> 
</div>
 <div id="foot">
        <p>2015  TWDW  <a href="##">网站地图</a></p>
  </div>

</body>
</html>

