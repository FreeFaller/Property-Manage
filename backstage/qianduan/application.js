window.onload=function() {
	var oDiv = document.getElementById("main-right-top");
	var aBtn = oDiv.getElementsByTagName("input");
	var aDiv = oDiv.getElementsByTagName("div");

	for (var i = 0; i < aBtn.length; i++) {
		aBtn[i].index= i;
		aBtn[i].onclick=function(){
			for (var a = 0; a < aBtn.length; a++) {
				aDiv[a].style.display="none";
			};
			aDiv[this.index].style.display ="block";
		}
	};
}

function checkname(){
	var oInput = document.getElementById("name");
	var name = oInput.value;
	if (name.length == 0) {
		alert("姓名不能为空");
		return;
	};		
}

function checkposition(){
	var oInput = document.getElementById("position");
	var position = oInput.value;
	if (position.length == 0) {
		alert("职务不能为空");
		return;
	};		
}

function checkphone(){
	var oInput = document.getElementById("phone");
	var phone = oInput.value;
	var a = /\d{11}/g;
	if (phone.length == 0) {
		alert("手机号码不能为空");
		return;
	};
	if (!a.test(phone)) {
		alert("请填写正确的手机号码")
		return;
	};		
}

function checkemail(){
	var oInput = document.getElementById("email");
	var email = oInput.value;
	var a = /^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/;
	if (email.length == 0) {
		alert("邮箱不能为空");
		return;
	};
	if (!a.test(email)) {
		alert("请填写正确的邮箱地址");
		return;
	};		
}

function checkthing(){
	var oInput = document.getElementById("thing");
	var thing = oInput.value;
	if (thing.length == 0) {
		alert("申请事项不能为空");
		return;
	};
	if (thing.length > 300) {
		alert("不能填写超过300字");
		return;
	};		
}

function checkreason(){
	var oInput = document.getElementById("reason");
	var reason = oInput.value;
	if (reason.length == 0) {
		alert("申请理由不能为空");
		return;
	};
	if (reason.length > 300) {
		alert("不能填写超过300字");
		return;
	};		
}

