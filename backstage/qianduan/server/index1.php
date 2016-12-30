<?php
require_once'../../houtai/include.php';
$sql="select * from zhuce";
$totalRows=getResultNum($sql);
//echo $totalRows;
$pageSize=4;
//得到总页码数
$totalPage=ceil($totalRows/$pageSize);//ceil 向上取整
$page=$_REQUEST['page']?(int)$_REQUEST['page']:1; //page表示当前页
if($page<1||$page==null||!is_numeric($page)){
    $page=1;
}
if($page >= $totalPage){
  $page = $totalPage;
}
$offset=($page-1)*$pageSize;
$sql="select * from zhuce limit {$offset},{$pageSize}";
//echo $sql;
$rows=fetchAll($sql);
//print_r($rows);
?>
<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<title>通用审核系统管理页面</title>
<link rel="stylesheet" href="css/style.css">
<style type="text/css">
  #d1{
    width:1800px;
    margin: 0 auto;
  }
</style>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/date.js"></script>
<script>
$(document).ready(function(){
	$("#one1,#one2,#one3,#one4,#one5").click(function(){
		$("#con_one_6").css("display","none")
		})
	$("#one0").click(function(){
		$("#con_one_6").css("display","block")
		})
	})
  
</script>
</head>
<body onload="setTab('one',1)">
<div class="top"> <img class="logo" src="" alt="logo">
  <div class="tab1" id="tab1">
    <div class="menu">
      <ul class="nav">
        <li id="one0" onclick="setTab('one',6)"><a href="#"><img src="">
          <p>回到首页</p>
          </a></li>
        <li  id="one1" onclick="setTab('one',1)"><a href="#"><img src="">
          <p>常规管理</p>
          </a></li>
        <li id="one2" onclick="setTab('one',2)"><a href="#"><img src="">
          <p>文章管理</p>
          </a></li>
        <li id="one3" onclick="setTab('one',3)"><a href="#"><img src="">
          <p>产品管理</p>
          </a></li>
        <li id="one4" onclick="setTab('one',4)"><a href="#"><img src="">
          <p>留言管理</p>
          </a></li>
        <li id="one5" onclick="setTab('one',5)"><a href="#"><img src="">
          <p>系统管理</p>
          </a></li>
      </ul>
    </div>
  </div>
</div>
<div class="content" id="con_one_6" style="display:block;">
  <div class="meduo">
    <div class="hyy">
      <!-- <p>欢迎页</p> -->
    </div>
  </div> 
</div>

<div class="content" id="con_one_1" style="display:none;">
  <div class="left-column">
    <div class="service">
      <h5>常规管理</h5>
    </div>
    <div class="tab2" id="tab2">
      <dl class="call">
        <div class="medo">
          <dt>常规管理</dt>
          
          <dd id="column1" onclick="setTab('column',1)" ><a href="#">业务受理</a></dd>
          <dd id="column2" onclick="setTab('column',2)"><a href="#">业务申请</a></dd>
          <dd id="column3" onclick="setTab('column',3)"><a href="#">业务结算</a></dd>
          <dd id="column4" onclick="setTab('column',4)"><a href="#">业务回访</a></dd>
          <dd id="column5" onclick="setTab('column',5)"><a href="#">业务分析</a></dd>
          <dd id="column6" onclick="setTab('column',6)"><a href="#"></a></dd>
        </div>
      </dl>
    </div>
  </div>

<div class="meduo">
  <div class="right-content" id="con_column_1">
    <div class="ck">
      <p><span>业务受理</span></p>
    </div>

    <?php  $i = 1;foreach($rows as $row):?>

    <tr>
        <td id="td1"><?php echo $i;?></td>
        <td id="td2"><?php echo $row['name'];?></td>
        <td><?php echo $row['garden'];?></td>
        <td><?php echo $row['building'];?></td>
        <td><?php echo $row['property'];?></td>
        <td><?php echo $row['role'];?></td>
        <td align="center"><input type="button" value="同意" class="btn" id="<?php echo "agree$i"; ?>" onclick="agree()"><input type="button" value="拒绝" id="<?php echo "refuse$i" ?>" class="btn"  onclick="refuse()"></td><br/>
    </tr>
    <?php $i++;endforeach;?>
    <?php if($totalRows>$pageSize):?>
    <tr>
        <td colspan="4" align="center"><?php echo showPage($page, $totalPage);?></td>
    </tr>
<?php endif;?>
  </div>

  <div class="right-content" id="con_column_2" style="display:none">
<div class="ck">
      <p><span>业务受理</span></p>
    </div>

<form action="yewu.php" method="post">
    <div class="srxz">
      <p><span>姓名：</span>
        <input name="name" type="text">
        <span>职务：</span>
        <input name="business" type="text">
        <span>手机：</span>
        <input name="phone" type="number">
        <span>邮箱：</span>
        <input name="email" type="email">
      </p>
      <p><span>业务分类：</span>
        <select  name="class" onchange="change(this.value)">  
          <option>出差</option>
          <option>报告</option>
        </select>
        <span><span>紧急程度：</span>
        <select  name="level" onchange="change(this.value)">  
          <option>着急</option>
          <option>不着急</option>
        </select>
        </span></p>
      <p><span>申请内容：</span>
         <select>  
          <option>预设业务</option>
        </select>
      </p>
      <p class="message">
        <textarea name="application" style="margin-left:75px;height:100px; width:500px; border:1px solid #c1c1c1; border-radius:5px; background-color:#f1f1f1;"></textarea>
      </p>
  
      <p><span>申请理由：</span>
      </p>
      <p class="message">
        <textarea name="applicationReasons" style="margin-left:75px;height:100px; width:500px; border:1px solid #c1c1c1; border-radius:5px; background-color:#f1f1f1;"></textarea>
      </p>
    </div>
    <input class="sub" type="submit" value="提交">
    </form>
  </div>


  <div class="right-content" id="con_column_3" style="display:none">
    <center>
      <span style="font-size:100px;"> 3</span>
    </center>
  </div>
  <div class="right-content" id="con_column_4" style="display:none">
    <center>
      <span style="font-size:100px;"> 4</span>
    </center>
  </div>
  <div class="right-content" id="con_column_5" style="display:none">
    <center>
      <span style="font-size:100px;"> 5</span>
    </center>
  </div>
  <div class="right-content" id="con_column_6" style="display:none">
    <center>
      <span style="font-size:100px;"> 6</span>
    </center>
  </div>
</div>
</div>
<div class="content"id="con_one_2" style="display:none;">
  <div class="left-column">
    <div class="service">
      <h5>文章管理</h5>
    </div>
    <div class="tab3" id="tab3">
      <dl class="call">
        <div class="medo medo1">
          <dt>文章管理</dt>
          <dd id="colum1" onclick="setTab('colum',1)" ><a href="#">企业报告</a></dd>
          <dd id="colum2" onclick="setTab('colum',2)"><a href="#">出差申请</a></dd>
          <dd id="colum3" onclick="setTab('colum',3)"><a href="#">出差报销</a></dd>
          <dd id="colum4" onclick="setTab('colum',4)"><a href="#">项目申请</a></dd>
          <dd id="colum5" onclick="setTab('colum',5)"><a href="#">项目研发</a></dd>
          <dd id="colum6" onclick="setTab('colum',6)"><a href="#"></a></dd>
        </div>
      </dl>
    </div>
  </div>

<div class="meduo meduo1">
  <div class="right-content" id="con_colum_1">
    <center>
      <span style="font-size:100px;"><iframe src="test.html" style="height:655px;width:1200px;"></iframe></span>
    </center>
  </div>
  <div class="right-content" id="con_colum_2" style="display:none">
    <center>
      <span style="font-size:100px;"> 8</span>
    </center>
  </div>
  <div class="right-content" id="con_colum_3" style="display:none">
    <center>
      <span style="font-size:100px;"> 9</span>
    </center>
  </div>
  <div class="right-content" id="con_colum_4" style="display:none">
    <center>
      <span style="font-size:100px;"> 10</span>
    </center>
  </div>
  <div class="right-content" id="con_colum_5" style="display:none">
    <center>
      <span style="font-size:100px;">11</span>
    </center>
  </div>
  <div class="right-content" id="con_colum_6" style="display:none">
    <center>
      <span style="font-size:100px;">12</span>
    </center>
  </div>
</div>
</div>
<div class="content"id="con_one_3" style="display:none;">
  <div class="left-column">
    <div class="service">
      <h5>产品管理</h5>
    </div>
    <div class="tab4" id="tab4">
      <dl class="call">
        <div class="medo medo2">
          <dt>服务中心</dt>
          <dd id="colun1" onclick="setTab('colun',1)" ><a href="#">产品开发</a></dd>
          <dd id="colun2" onclick="setTab('colun',2)"><a href="#">产品生产</a></dd>
          <dd id="colun3" onclick="setTab('colun',3)"><a href="#">产品状态</a></dd>
          <dd id="colun4" onclick="setTab('colun',4)"><a href="#">产品维护</a></dd>
          <dd id="colun5" onclick="setTab('colun',5)"><a href="#"></a></dd>
          <dd id="colun6" onclick="setTab('colun',6)"><a href="#"></a></dd>
        </div>
      </dl>
    </div>
  </div>


<div class="meduo meduo2">
  <div class="right-content" id="con_colun_1">
    <center>
      <span style="font-size:100px;"> 13</span>
    </center>
  </div>
  <div class="right-content" id="con_colun_2" style="display:none">
    <center>
      <span style="font-size:100px;"> 14</span>
    </center>
  </div>
  <div class="right-content" id="con_colun_3" style="display:none">
    <center>
      <span style="font-size:100px;"> 15</span>
    </center>
  </div>
  <div class="right-content" id="con_colun_4" style="display:none">
    <center>
      <span style="font-size:100px;"> 16</span>
    </center>
  </div>
  <div class="right-content" id="con_colun_5" style="display:none">
    <center>
      <span style="font-size:100px;">17</span>
    </center>
  </div>
  <div class="right-content" id="con_colun_6" style="display:none">
    <center>
      <span style="font-size:100px;">18</span>
    </center>
  </div>
</div>
</div>
<div class="content"id="con_one_4" style="display:none;">
  <div class="left-column">
    <div class="service">
      <h5>留言管理</h5>
    </div>
    <div class="tab5" id="tab5">
      <dl class="call">
        <div class="medo medo3">
          <dt>留言管理</dt>
          <dd id="colunm1" onclick="setTab('colunm',1)" ><a href="#">留言一栏</a></dd>
          <dd id="colunm2" onclick="setTab('colunm',2)"><a href="#">留言回复</a></dd>
          <dd id="colunm3" onclick="setTab('colunm',3)"><a href="#">留言删除</a></dd>
          <dd id="colunm4" onclick="setTab('colunm',4)"><a href="#">留言修改</a></dd>
          <dd id="colunm5" onclick="setTab('colunm',5)"><a href="#">留言新增</a></dd>
          <dd id="colunm6" onclick="setTab('colunm',6)"><a href="#"></a></dd>
        </div>
      </dl>
    </div>
  </div>
  <div class="meduo meduo3">
    <div class="right-content" id="con_colunm_1">
      <center>
        <span style="font-size:100px;"> 19</span>
      </center>
    </div>
    <div class="right-content" id="con_colunm_2" style="display:none">
      <center>
        <span style="font-size:100px;"> 20</span>
      </center>
    </div>
    <div class="right-content" id="con_colunm_3" style="display:none">
      <center>
        <span style="font-size:100px;"> 21</span>
      </center>
    </div>
    <div class="right-content" id="con_colunm_4" style="display:none">
      <center>
        <span style="font-size:100px;"> 22</span>
      </center>
    </div>
    <div class="right-content" id="con_colunm_5" style="display:none">
      <center>
        <span style="font-size:100px;">23</span>
      </center>
    </div>
    <div class="right-content" id="con_colunm_6" style="display:none">
      <center>
        <span style="font-size:100px;">24</span>
      </center>
    </div>
  </div>
</div>



<div class="content"id="con_one_5" style="display:none;">
  <div class="left-column">
    <div class="service">
      <h5>系统管理</h5>
    </div>
    <div class="tab6" id="tab6">
      <dl class="call">
        <div class="medo medo4">
          <dt>系统管理</dt>
          <dd id="colnm1" onclick="setTab('colnm',1)" ><a href="#">系统设置</a></dd>
          <dd id="colnm2" onclick="setTab('colnm',2)"><a href="#">内容设置</a></dd>
          <dd id="colnm3" onclick="setTab('colnm',3)"><a href="#">栏目设置</a></dd>
          <dd id="colnm4" onclick="setTab('colnm',4)"><a href="#">功能设置</a></dd>
          <dd id="colnm5" onclick="setTab('colnm',5)"><a href="#">页面管理</a></dd>
          <dd id="colnm6" onclick="setTab('colnm',6)"><a href="#">退出管理</a></dd>
        </div>
      </dl>
    </div>
  </div>
  <div class="meduo meduo4">
    <div class="right-content" id="con_colnm_1" style="display:none">
      <center>
        <span style="font-size:100px;"> 25</span>
      </center>
    </div>
    <div class="right-content" id="con_colnm_2" style="display:none">
      <center>
        <span style="font-size:100px;"> 26</span>
      </center>
    </div>
    <div class="right-content" id="con_colnm_3" style="display:none">
      <center>
        <span style="font-size:100px;"> 27</span>
      </center>
    </div>
    <div class="right-content" id="con_colnm_4" style="display:none">
      <center>
        <span style="font-size:100px;"> 28</span>
      </center>
    </div>
    <div class="right-content" id="con_colnm_5" style="display:none">
      <center>
        <span style="font-size:100px;">29</span>
      </center>
    </div>
    <div class="right-content" id="con_colnm_6" style="display:none">
      <center>
        <span style="font-size:100px;">30</span>
      </center>
    </div>
  </div>
</div>
<div style="text-align:center;">
<script type="text/javascript">
  function agree(){
  var a=document.getElementById('<?php echo "agree$i"; ?>');
  var b=document.getElementById('<?php echo "refuse$i"; ?>');
  a.style.display='block';
    b.style.display='none';
}
function refuse(){
  var a=document.getElementById('<?php echo "agree$i"; ?>');
  var b=document.getElementById('<?php echo "refuse$i"; ?>');
  a.style.display='none';
    b.style.display='block';
}
</script>

</body>
</html>
