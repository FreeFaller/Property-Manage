<?php
require_once'../houtai/include.php';
$sql="select * from biaodan";
$totalRows=getResultNum($sql);
//echo $totalRows;
$pageSize=13;
//得到总页码数
$totalPage=ceil($totalRows/$pageSize);//ceil 向上取整
$page=$_REQUEST['page']?(int)$_REQUEST['page']:1; //page表示当前页
if($page<1||$page==null||!is_numeric($page)){
    $page=1;
}
if($page>=$totalPage)$page=$totalPage;
$offset=($page-1)*$pageSize;
$sql="select * from biaodan limit {$offset},{$pageSize}";
//echo $sql;
$rows=fetchAll($sql);
//print_r($rows);

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
<!-- <script src="js/tab.js"></script> -->
<script type="text/javascript" src="js/jquery.min2.js"></script>
<script type="text/javascript" src="js/roll.js"></script>
<title>PHP通用审核系统</title>
<style type="text/css">
#div1 {position:relative; width:300px; height:300px; margin: 0px auto 0; }
#div1 a {position:absolute; top:0px; left:0px; font-family: Microsoft YaHei; color:#fff; font-weight:bold; text-decoration:none; padding: 3px 6px; }
#div1 a:hover {border: 1px solid #eee; background: #000; }
#div1 .blue {color:blue;}
#div1 .red {color:red;}
#div1 .yellow {color:yellow;}
p { font: 16px Microsoft YaHei; text-align: center; color: #ba0c0c; }
p a { font-size: 14px; color: #ba0c0c; }
p a:hover { color: red; }
p a:hover {color:red; }
</style>
<script>

// var _offset = 0;
//  function _$id(_obj) {
//   return document.getElementById(_obj);
//  }
//  function _$Pages(_i) {
//   _$id("Content").scrollTop = (_$id("Content").clientHeight*_i);
//   for (var i=0;i<(_$id("Content").scrollHeight/_offset);i++)
//   {
//    if (i==_i)
//     _$id("soojs_"+(_i+1)).style.backgroundColor="#ff9900";
//    else
//     _$id("soojs_"+(i+1)).style.backgroundColor="";
//   }
//  }
//  function _$init_zzjs_net() {
//   var _s='';
//   _offset = _$id("Content").clientHeight;
//   var _top = _$id("Content").scrollTop;
//   for (var i=0;i<(_$id("Content").scrollHeight/_offset);i++) {
//    _s+=('<a href="javascript:void(0);" onclick="javascript:_$Pages('+i+');" onfocus="this.blur()" title="Page&nbsp;'+(i+1)+'" id="soojs_'+(i+1)+'">'+"&nbsp;"+(i+1)+"&nbsp;"+'</a>&nbsp;&nbsp;&nbsp;&nbsp;');
//   }
//   _$id("page").innerHTML=_s;
// _$id("soojs_"+1).style.backgroundColor="#ff9900";
//  }
var radius=120;var dtr=Math.PI/180;var d=300;var mcList=[];var active=false;var lasta=1;var lastb=1;var distr=true;var tspeed=10;var size=250;var mouseX=0;var mouseY=0;var howElliptical=1;var aA=null;var oDiv=null;window.onload=function()
{var i=0;var oTag=null;oDiv=document.getElementById('div1');aA=oDiv.getElementsByTagName('a');for(i=0;i<aA.length;i++)
{oTag={};oTag.offsetWidth=aA[i].offsetWidth;oTag.offsetHeight=aA[i].offsetHeight;mcList.push(oTag);}
sineCosine(0,0,0);positionAll();oDiv.onmouseover=function()
{active=true;};oDiv.onmouseout=function()
{active=false;};oDiv.onmousemove=function(ev)
{var oEvent=window.event||ev;mouseX=oEvent.clientX-(oDiv.offsetLeft+oDiv.offsetWidth/2);mouseY=oEvent.clientY-(oDiv.offsetTop+oDiv.offsetHeight/2);mouseX/=5;mouseY/=5;};setInterval(update,30);};function update()
{var a;var b;if(active)
{a=(-Math.min(Math.max(-mouseY,-size),size)/ radius ) * tspeed;
b=(Math.min(Math.max(-mouseX,-size),size)/ radius ) * tspeed;
}
else
{a=lasta*0.98;b=lastb*0.98;}
lasta=a;lastb=b;if(Math.abs(a)<=0.01&&Math.abs(b)<=0.01)
{return;}
var c=0;sineCosine(a,b,c);for(var j=0;j<mcList.length;j++)
{var rx1=mcList[j].cx;var ry1=mcList[j].cy*ca+mcList[j].cz*(-sa);var rz1=mcList[j].cy*sa+mcList[j].cz*ca;var rx2=rx1*cb+rz1*sb;var ry2=ry1;var rz2=rx1*(-sb)+rz1*cb;var rx3=rx2*cc+ry2*(-sc);var ry3=rx2*sc+ry2*cc;var rz3=rz2;mcList[j].cx=rx3;mcList[j].cy=ry3;mcList[j].cz=rz3;per=d/(d+rz3);mcList[j].x=(howElliptical*rx3*per)-(howElliptical*2);mcList[j].y=ry3*per;mcList[j].scale=per;mcList[j].alpha=per;mcList[j].alpha=(mcList[j].alpha-0.6)*(10/6);}
doPosition();depthSort();}
function depthSort()
{var i=0;var aTmp=[];for(i=0;i<aA.length;i++)
{aTmp.push(aA[i]);}
aTmp.sort
(function(vItem1,vItem2)
{if(vItem1.cz>vItem2.cz)
{return-1;}
else if(vItem1.cz<vItem2.cz)
{return 1;}
else
{return 0;}});for(i=0;i<aTmp.length;i++)
{aTmp[i].style.zIndex=i;}}
function positionAll()
{var phi=0;var theta=0;var max=mcList.length;var i=0;var aTmp=[];var oFragment=document.createDocumentFragment();for(i=0;i<aA.length;i++)
{aTmp.push(aA[i]);}
aTmp.sort
(function()
{return Math.random()<0.5?1:-1;});for(i=0;i<aTmp.length;i++)
{oFragment.appendChild(aTmp[i]);}
oDiv.appendChild(oFragment);for(var i=1;i<max+1;i++){if(distr)
{phi=Math.acos(-1+(2*i-1)/max);
theta=Math.sqrt(max*Math.PI)*phi;}
else
{phi=Math.random()*(Math.PI);theta=Math.random()*(2*Math.PI);}
mcList[i-1].cx=radius*Math.cos(theta)*Math.sin(phi);mcList[i-1].cy=radius*Math.sin(theta)*Math.sin(phi);mcList[i-1].cz=radius*Math.cos(phi);aA[i-1].style.left=mcList[i-1].cx+oDiv.offsetWidth/2-mcList[i-1].offsetWidth/2+'px';aA[i-1].style.top=mcList[i-1].cy+oDiv.offsetHeight/2-mcList[i-1].offsetHeight/2+'px';}}
function doPosition()
{var l=oDiv.offsetWidth/2;var t=oDiv.offsetHeight/2;for(var i=0;i<mcList.length;i++)
{aA[i].style.left=mcList[i].cx+l-mcList[i].offsetWidth/2+'px';aA[i].style.top=mcList[i].cy+t-mcList[i].offsetHeight/2+'px';aA[i].style.fontSize=Math.ceil(12*mcList[i].scale/2)+8+'px';aA[i].style.filter="alpha(opacity="+100*mcList[i].alpha+")";aA[i].style.opacity=mcList[i].alpha;}}
function sineCosine(a,b,c)
{sa=Math.sin(a*dtr);ca=Math.cos(a*dtr);sb=Math.sin(b*dtr);cb=Math.cos(b*dtr);sc=Math.sin(c*dtr);cc=Math.cos(c*dtr);}
</script>

</head>
<body >
<div style="background-color:#CCCCCC" id="head">
<div class="o1">
    <ul class="ul1">
        <li>  欢迎您     
        <?php
                if(isset($_SESSION['adminName'])){
                    echo $_SESSION['adminName'];
                }elseif(isset($_COOKIE['adminName'])){
                    echo $_COOKIE['adminName'];
                }
            ?>
        </li>
        <li><a href="">我要注册</a></li>
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
        <li><a href="liuyan.php"><img src="images/2.png"><font size=5>留言</font></a></li>
        <li><a href="ziye2.php"><img src="images/1.png"><font size=5>历史</font></a></li>
        <li>
            <form action="search.php" method="get">
                <input name="key" type="text" class="find" />
                <input name="" type="submit" value="查询" style="color:black"/>
        </form>
        </li>
    </ul>
</div>
</div>

<div class="p3">
<!-- <dl>
<dt><h1><font color="red">【今日观点】</font></h1></dt>
<dd style="text-indent:2em"><a href="">black hot drink......</a></dd>
</dl> -->
<div class="wrapper clearfix">
            <div id="focus">
                <ul>
                    <li><img src="images/us.png" alt="图片1" /></li>
                    <li><img src="images/us.png" alt="图片2" /></li>
                    <li><img src="images/us.png" alt="图片3" /></li>
                    <li><img src="images/us.png" alt="图片4" /></li>
                </ul>
            </div>
</div>
</div>




<div id="tab" style="margin-right:0;margin-top:-150px; overflow:hidden;background-color:#CCCCCC">
        <h3 class="up" id="two1" onmouseover="setContentTab('two',1,4)">网站公告<a href="#">[更多]</a></h3>
        <div class="block" id="con_two_1">
            <ul >
                <li><a class="tab_title" href="wangzhangonggao.php">网站公告1</a><span><font color="black">2015-11-8</font></span></li>
                <li><a class="tab_title" href="wangzhangonggao.php">网站公告2</a><span><font color="black">2015-11-8</font></span></li>
                <li><a class="tab_title" href="wangzhangonggao.php">网站公告3</a><span><font color="black">2015-11-8</font></span></li>
                <li><a class="tab_title" href="wangzhangonggao.php">网站公告4</a><span><font color="black">2015-11-8</font></span></li>

            </ul>
           
        </div>
        <h3 id="two2" onmouseover="setContentTab('two',2,4)">会员中心<a href="#">[更多]</a></h3>
        <div id="con_two_2">
            <ul >
                <li><font color="black"><a class="tab_title" href="#">会员中心1</a><span><font color="black">2015-11-8</font></span></font></li>
                <li><a class="tab_title" href="#">会员中心2</a><span><font color="black">2015-11-8</font></span></li>
                <li><a class="tab_title" href="#">会员中心3</a><span><font color="black">2015-11-8</font></span></li>
                <li><a class="tab_title" href="#">会员中心4</a><span><font color="black">2015-11-8</font></span></li>
                
            </ul>
        </div>
        <h3 id="two3" onmouseover="setContentTab('two',3,4)">事务审核<a href="#">[更多]</a></h3>
        <div id="con_two_3">
            <ul >
                <li><a class="tab_title" href="application2.php">出差申请</a><span><font color="black">2015-11-8</font></span></li>
                <li><a class="tab_title" href="application.php">资金申请</a><span><font color="black">2015-11-8</font></span></li>
                <li><a class="tab_title" href="application.php">项目发布</a><span><font color="black">2015-11-8</font></span></li>
                <li><a class="tab_title" href="application.php">职务信息</a><span><font color="black">2015-11-8</font></span></li>
            </ul>
        </div>
        <h3 id="two4" onmouseover="setContentTab('two',4,4)">联系我们<a href="#">[更多]</a></h3>
        <div id="con_two_4">
            <ul >
                <li><a class="tab_title" href="lianxi.php">联系我们1</a><span><font color="black">2015-11-8</font></span></li>
                <li><a class="tab_title" href="lianxi.php">联系我们2</a><span><font color="black">2015-11-8</font></span></li>
                <li><a class="tab_title" href="lianxi.php">联系我们3</a><span><font color="black">2015-11-8</font></span></li>
                <li><a class="tab_title" href="lianxi.php">联系我们4</a><span><font color="black">2015-11-8</font></span></li>
            </ul>
        </div>
    </div>
  
  <div style="margin-left:70%;margin-top:1%; overflow:hidden;background-color:#CCCCCC;width:30%;height:340px;">
    <!-- <h1>标签</h1>
    <p>出差申请 企业事务安排</p> -->
    <h1><font color=blue>标签</font></h1> 
    <!-- <p>出差申请 企业事务安排</p> -->
    <p id="div1">
    <a href="#"><font color=yellow>出差申请</font></a>
    <a href="#" class="red">项目申请</a>
    <a href="#"><font color=yellow>资金结算</font></a>
    <a href="#"><font color=yellow>联系我们</font></a>
    <a href="#" class="blue">事务发布</a>
    <a href="#">SEO</a>
    <a href="#" class="red">注册</a>
    <a href="#"><font color=yellow>登陆</font></a>
    <a href="#" class="red">测试</a>
    <a href="#" class="blue">分页应用</a>
    <a href="#">特别军事</a>
    <a href="#"><font color=green>祖国</font></a>
    <a href="#">阿尔法</a>
    <a href="#" class="yellow">会员中心</a>
    <a href="#">操作记录</a>
</p>
  </div>
  <div id="net"  class="page" style="margin-top:-400px;">
   <div id="Content" style="font-size:16px;width:100%">
<?php  $i = 1;foreach($rows as $row):?>
    <tr>
        <!--这里的id和for里面的c1 需要循环出来-->
        <td>序号：<?php echo $i;?></td>
        <td>姓名：<?php echo $row['name'];?></td>
        <td>申请事项：<?php echo $row['application'];?></td>
        <td>申请原因：<?php echo $row['applicationReasons'];?></td>
        <td><a href="show.php?id=<?php echo $row['id']?>">查看详细&nbsp;&raquo;</a></td>><br/>
    </tr>
    <?php $i++;endforeach;?>
    <?php if($totalRows>$pageSize):?>
    <tr>
        <td colspan="4" align="center"><?php echo showPage($page, $totalPage);?></td>
    </tr>
    <?php endif;?>
   </div>
  </div>

  <div id="foot">
        <p>2015  TWDW  <a href="##">网站地图</a></p>
  </div>

<script type="text/javascript">
 function setContentTab(name, curr, n) {
    for (i = 1; i <= n; i++) {
        var menu = document.getElementById(name + i);
        var cont = document.getElementById("con_" + name + "_" + i);
        menu.className = i == curr ? "up" : "";
        if (i == curr) {
            cont.style.display = "block";
        } else {
            cont.style.display = "none";
        }
    }
}
</script>



</body>
</html>
