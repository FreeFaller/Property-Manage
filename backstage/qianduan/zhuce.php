<html>  
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></meta>
<meta name="keyword" content="tencent"></meta>
<meta name="description" content="tencent"></meta>
<link rel="shortcut icon" href="images/logo.ico">
<title>企业通用审核系统</title>

<style>

body{
	margin:0 auto;
	
}
div {
	margin:0 auto;
}
.bj{
	position: relative;
	left: 0px;
	top:0px;
	width: 960px;
	height: 600px;
	background:url(images/bj2.jpg);}
.pi{background-color:#CCCCCC}
</style>
<script>

function check(){

           
if(document.getElementById("name").value==""||document.getElementById("name").value==null){
		alert("用户名为空");
	
document.getElementById("name").focus();
return false;}

if(document.getElementById("email").value==""||document.getElementById("email").value==null){
	alert("请输入邮箱信息！");
document.getElementById("email").focus();
return false;}
if(document.getElementById("phone").value==""||document.getElementById("phone").value.length!==11){
	alert("请输入正确的手机号码！");
document.getElementById("phone").focus();
return false;}

if(document.getElementById("qq").value==""||document.getElementById("qq").value==null){
	alert("请输入QQ号码信息！");
document.getElementById("qq").focus();
return false;
}
if(isNaN(document.getElementById("qq").value)){
		alert("请输入正确的QQ号码信息！");
document.getElementById("qq").focus();
return false;

	}
if(document.getElementById("school").value==""||document.getElementById("school").value==null){
	alert("请输入职务信息！");
document.getElementById("school").focus();
return false;
}
if(document.getElementById("username").value==""||document.getElementById("username").value==null){
	alert("请输入用户名！");
document.getElementById("username").focus();
return false;
}
if(document.getElementById("password").value==""||document.getElementById("password").value==null){
	alert("请输入密码！");
document.getElementById("password").focus();
return false;
}
return true;
}

function emailCheck(obj, labelName) { 
    var objName = eval("document.all."+obj); 
    var pattern = /^([\.a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/; 
    if (!pattern.test(objName.value)) { 
        alert("请输入正确的邮箱地址。"); 
        objName.focus(); 
        return false; 
    } 
    return true; 
}
</script>
</head>
<body class="bj">
<div   topmargin="0" style="margin-top:150px">
<form enctype="multipart/form-data" action="doZhu.php" method="post" onsubmit="return check()" >  
<table width="800px"  border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#3399FF">  
<tr align="center" valign="middle" bgcolor="#CCCCCC">  
<td height="30" colspan="4" bgcolor="#B7DAF9">注册信息</td> 
</tr>  
<tr bgcolor="#CCCCCC">  
<td height="30">姓名:</td> 
 <td width="36%" 
height="30"><input name="name" type="text" id="name" maxlength="20" ></td>  
 <td width="9%" height="30">邮箱:</td> 
 <td width="39%" height="30">
 <input name="email" type="text" id="email" onblur="return emailCheck('email', 'email')">
</tr>

<tr bgcolor="#FFFFFF">  
 <td height="30">
照片上传:</td>  
<td height="30" colspan="3"><input name="headphoto" type="file" id="headphoto" /></td> 

 </tr>   
   <tr bgcolor="#FFFFFF">  

 <td height="30">

性别：

</td>  

 <td height="30" colspan="3"><select name="sex" id="question1"> 

 <option value="男">
 男
</option> 

 <option value="女">
女

</option>   

 </select></td> 

 </tr> 
 <tr bgcolor="#CCCCCC"> 
 <td height="30">联系方式:</td> 
 <td width="36%" 
height="30"><input name="phone" type="text" id="phone" maxlength="20" 
></td>  
 <td width="9%" height="30">
qq:</td> 
 <td width="39%" height="30">  
 <input name="qq" type="text" id="qq" >

</td> 
</tr>  

<tr bgcolor="#CCCCCC"> 
<td height="30">用户名</td> 
 <td width="36%" 
height="30"><input name="username" type="text" id="username" maxlength="20" 
></td>  
 <td width="9%" height="30">
密码：</td> 
 <td width="39%" height="30">  
 <input name="password" type="text" id="password" >

</td> 
 </tr>  
 
 <tr bgcolor="#CCCCCCF">  
 <td height="30">&nbsp;</td>  
 <td  height="30" colspan="3" >
 	<input type="submit" name="submit" value="提交" /> 
 <input type="reset" name="submit" value="重置" /></td> 
 </tr> 
</table>
</form> 
</div> 
</body>
</html>       