
$(function() {


    //图片轮播代码

    var sWidth = $("#focus").width();//获取容器的宽度，也就是一张图片的宽度
    var len = $("#focus ul li").length;//获取图片张数
    var index = 0;//全局变量，记录当前展示的图片序号
    var picTimer;//定时器
    var btn = "<div class='btn'>";
    for(var i=0; i < len; i++) {
        btn += "<span></span>";
    }//添加与图片数量相对应的span作为小圆点
    $("#focus").append(btn);//将字符串btn的内容加入DOM
    $("#focus .btn span").mouseover(function() {//当鼠标放到图片下面小圆点时执行函数
        index = $("#focus .btn span").index(this);//获取当前发生mouseover事件的小圆点的序号
        showPics(index);//展示对应的图片，showPics函数写在了下面
    }).eq(0).trigger("mouseover");//添加完事件后触发第一个小圆点的mouseover事件
    $("#focus ul").css("width",sWidth * (len));//把ul的宽度修改为所有图片宽度之和，防止图片掉到下一行
    $("#focus").hover(function() {//定时器部分，这部分我一直是直接复制的，没研究过
        clearInterval(picTimer);
    },function() {
        picTimer = setInterval(function() {
            showPics(index);
            index++;
            if(index == len) {index = 0;}
        },2500);
    }).trigger("mouseleave");
    function showPics(index) {//showPics函数，核心
        var moveLeft = -index*sWidth;//首先根据要显示的是计算出这次移动是向左移动多少
        $("#focus ul").stop(true,false)//停止正在进行的动画
        .animate({"left":moveLeft},300);//向左移动ul
        $("#focus .btn span").css("background","transparent")//先让所有的小圆点都变成绿点
        .eq(index).css("background","#f0f0f0");//再让对应的变成白点
    }


    //滚动部分代码


    var _sWidth = $("#roll ul li").width()+16;
    var _len = $("#roll ul li").length;
    var _index = 0;
    var _picTimer;
    var _btn = "<div class='preNext pre'></div><div class='preNext next'></div>";
    $("#roll").append(_btn);
    $("#roll .preNext").css("opacity",0.5).hover(function() {
        $(this).stop(true,false).animate({"opacity":"1"},300);
    },function() {
        $(this).stop(true,false).animate({"opacity":"0.5"},300);
    });
    $("#roll .pre").click(function() {
        _index -= 1;
        if(_index == -1) {_index = _len - 3;}
        _showPics(_index);
    });
    $("#roll .next").click(function() {
        _index += 1;
        if(_index == _len - 2) {_index = 0;}
        _showPics(_index);
    });
    $("#roll ul").css("width",_sWidth * (_len)+100);
    $("#roll").hover(function() {
        clearInterval(_picTimer);
    },function() {
        _picTimer = setInterval(function() {
            _showPics(_index);
            _index++;
            if(_index == _len - 2) {_index = 0;}
        },3500);
    }).trigger("mouseleave");
    function _showPics(_index) {
        var _moveLeft = -_index*_sWidth;
        $("#roll ul").stop(true,false).animate({"left":_moveLeft},300);
    }

});
