<!DOCTYPE html>
<html>
<head>
	<title>申请页面</title>
	<meta charset=utf-8>
	<link rel="stylesheet" type="text/css" href="application.css">
	<script type="text/javascript" src="application.js"></script>
</head>
<body>
	<div id="head">
		<div id="head-son">
			<div id="top-left">
				<a href="../houtai/admin/login.php">欢迎您，<?php
                if(isset($_SESSION['adminName'])){
                    echo $_SESSION['adminName'];
                }elseif(isset($_COOKIE['adminName'])){
                    echo $_COOKIE['adminName'];
                }
            ?></a>
				<a href="zhuce.php">我要注册</a>
				<a href="##">找回密码</a>
			</div>
			<div id="top-right">
				<a href="##">友情链接</a>
				<a href="##">关于</a>
				<a href="##">关于本站</a>
			</div>
			<div id="bottom-left">
				<P>TWDW企业通用审核系统</P>
				<p>最好用的system</p>
			</div>
			<div id="bottom-middle">
				<a href="##">首页</a>
                <a href="liuyan.php">留言</a>
                <a href="ziye2.php">历史</a>
			</div>
			<div id="bottom-right">
				<input type="text">
				<input type="submit" value="搜索">
			</div>
		</div>
	</div>
	<div id="main">
		<div id="main-son">
		<div id="main-left">
			<!-- <div id="personal-information">
				<p>个人信息</p>
				<label>姓名<input type="text" onblur="checkname()" id="name"></label>
				<label>性别<select><option>男</option><option>女</option></select></label>
				<label>职务 <input type="text" onblur="checkposition()" id="position"></label>
				<label>手机 <input type="text" onblur="checkphone()" id="phone"></label>
				<label>邮箱 <input type="text" onblur="checkemail()" id="email"></label>
			</div>
			<div id="account-details">
				<p>详细信息</p>
				<p>申请事项</p><textarea rows="5" cols="50" id="thing" onblur="checkthing()"></textarea>
				<p>申请理由</p><textarea rows="5" cols="50" id="reason" onblur="checkreason()"></textarea>
			</div> -->
			<form action="doBiao.php" method="post">
				<table width="800px"  border="0" align="center" cellpadding="2" cellspacing="1" >
					<tr class="tr1">
						<td>姓名：</td>
						<td>
						  <input name="name" type="text" id="name"  >
						</td>
						<td>职务：</td>
						<td>
							<input name="position" type="text" id="position"  >
						</td>
					</tr>
					<tr class="tr1">
						<td>手机：</td>
						<td>
							<input name="phone" type="text" id="phone" >
						</td>
						<td>邮箱：</td>	
						<td>
							<input name="email" type="text" id="email" >
						</td>
					</tr>
					<tr class="tr2">
						<td>申请事项：</td>
						<td colspan="6">
							<textarea name="application" type="text" id="thing" cols="60" rows="8" style="width:669px;" class="p1"></textarea>
						</td>
					</tr>
					<tr class="tr2">
						<td>申请理由：</td>
						<td colspan="6">
							<textarea name="applicationReasions" type="text" id="resaon" cols="60" rows="8" style="width:669px;" class="p1"></textarea>
						</td>
					</tr>
					<tr class="tr1">
						<td></td>
						<td>
							<input type="submit" name="submit" value="提交" /> 
                            <input type="reset" name="submit" value="重置" />
						</td>
					</tr>
				</table>
			</form>
		</div>
		<div id="main-right">
			<div id="main-right-top">
				<input type="button" value="网站公告">
				<input type="button" value="公司事务">
				<input type="button" value="强烈推荐">
				<div style="display:none"><p>网站公告</p></div>
				<div style="display:none"><p>公司事务</p></div>
				<div style="display:none"><p>强烈推荐</p></div>
			

			</div>
			<div id="main-right-bottom">
				<div><p>标签</p></div>
			</div>
		</div>
	    </div>
	</div>
	<div id="foot">
		<p>2015  TWDW  <a href="##">网站地图</a></p>
	</div>
</body>
<html>