var _offset = 0;
 function _$id(_obj) {
  return document.getElementById(_obj);
 }
 function _$Pages(_i) {
  _$id("Content").scrollTop = (_$id("Content").clientHeight*_i);
  for (var i=0;i<(_$id("Content").scrollHeight/_offset);i++)
  {
   if (i==_i)
    _$id("soojs_"+(_i+1)).style.backgroundColor="#ff9900";
   else
    _$id("soojs_"+(i+1)).style.backgroundColor="";
  }
 }
 function _$init_zzjs_net() {
  var _s='';
  _offset = _$id("Content").clientHeight;
  var _top = _$id("Content").scrollTop;
  for (var i=0;i<(_$id("Content").scrollHeight/_offset);i++) {
   _s+=('<a href="javascript:void(0);" onclick="javascript:_$Pages('+i+');" onfocus="this.blur()" title="Page&nbsp;'+(i+1)+'" id="soojs_'+(i+1)+'">'+"&nbsp;"+(i+1)+"&nbsp;"+'</a>&nbsp;&nbsp;&nbsp;&nbsp;');
  }
  _$id("page").innerHTML=_s;
_$id("soojs_"+1).style.backgroundColor="#ff9900";
 }
