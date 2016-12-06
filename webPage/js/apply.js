function pos(event,index) {
	var pos = event.target.textContent;
	var formValue = document.getElementById("pos"+[index]);
	var showPos = document.getElementById("showPos"+[index]);
	var postList = document.getElementById("posList"+[index]);
	formValue.value = pos;
	showPos.innerText = pos;
	postList.style.display = "none";
	visible = true;
}