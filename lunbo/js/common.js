$(function() {
    //导航条代码
    $(".drop ul").hide();//让二级菜单都消失
    $(".drop").click(function(){//加给li的点击事件
        var index=$(this).index();//判断序号
        if(index==2){
            index=0;
        }else{
            index=1;
        }
        if($(".drop ul").eq(index).is(":visible")){//判断是否在显示
            $(".drop ul").eq(index).hide();
        }else{
            $(".drop ul").hide().eq(index).show();
        }
    });
});