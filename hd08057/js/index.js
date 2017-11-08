var lenth = $(".conUl li").length;
for(var i=0; i< lenth; i++){
	if((i+1) % 3  == 0){
		$(".conUl li").eq(i).css('margin-right','0');
	}
}
$(".conUl li .zz").on("mouseover",function(){
	$(this).find("img").css("display",'block');
});
$(".conUl li .zz").on("mouseleave",function(){
	$(this).find("img").css("display",'none');
});

$(function(){
    $(".maskBox").click(function(){
        $(this).hide();
        return false;
    });
    $(".masDiv").click(function(){
        return false;
    })
})

$(".sc").on("click",function(){
	$(".maskBox").css({"display":"block"});
});
$(".maskBoxA").on("click",function(){
	$(".maskBox").css({"display":"none"});
});

$(function(){
	$('.myscroll').myScroll({
		speed:28, //数值越大，速度越慢
		rowHeight: 33 //li的高度
	});
});