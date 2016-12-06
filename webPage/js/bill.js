function chooseAll(){
	var parent = document.getElementById("bill");
	var checkbox = document.getElementsByClassName('checkbox',parent);
	var chooseAllBtn = document.getElementById("chooseAllBtn");
	if (chooseAllBtn.checked == false) {
		for (var i = 0; i < checkbox.length; i++) {
			checkbox[i].checked = false;
		}
	}else{
		for (var j = 0; j < checkbox.length; j++) {
			checkbox[j].checked = true;
		}
	}
	calculate();
}
function getElementsByClassName(className, parent) {
    var oParent = parent ? document.getElementById("parent") : document;
    var oLis = oParent.getElementsByTagName("*");
    return [].filter.call(oLis, function(e) {
        return e.classList.contains(className);
    });
}
function calculate(){
	var parent = document.getElementById("bill");
	var checkbox = document.getElementsByClassName('checkbox',parent);
	var sum = 0;
	var totleCost = document.getElementById("totleCost");
	for (var h = 0; h < checkbox.length; h++) {
		if(checkbox[h].checked == true){
			var li = checkbox[h].parentNode;
			var cost = parseFloat(li.childNodes[5].childNodes[1].childNodes[2].childNodes[1].innerText);
			sum += cost;
		}
	}
	var finalCost = sum.toFixed(1);
	totleCost.innerText = finalCost;
}