function chooseAll(){
	var parent = document.getElementById("bill");
	var checkbox = document.getElementsByClassName('checkbox',parent);
	var chooseAllBtn = document.getElementById("chooseAllBtn");
	if (chooseAllBtn.checked == false) {
		for (var i = 0; i < checkbox.length; i++) {
			checkbox[i].checked = false;
		};
	}else{
		for (var j = 0; j < checkbox.length; j++) {
			checkbox[j].checked = true;
		};
	}
}
function getElementsByClassName(className, parent) {
    var oParent = parent ? document.getElementById("parent") : document;
    var oLis = oParent.getElementsByTagName("*");
    return [].filter.call(oLis, function(e) {
        return e.classList.contains(className);
    });
}
// function calculate(){
// 	var parent = document.getElementById("bill");
// 	var checkbox = document.getElementsByClassName('checkbox',parent);
// 	var sum = 0;
// 	for (var i = 0; i < checkbox.length; i++) {
// 		if(checkbox[i].checked = true){
			
// 		}
// 	};
// }