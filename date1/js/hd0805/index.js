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
    })
    $(".mask").click(function(){
        return false;
    })
})


var hD = $(".footer_RigBox").height();
var hU = $(".footer_RigUl").height();
var sctop = $(".footer_RigUl").scrollTop();
var he = hU - hD;

if(hU > hD){
	function anm(){
		$(".footer_RigUl").animate({'bottom':he},10000,);
	};
	anm();
}
$(".sc").on("click",function(){
	$(".maskBox").css({"display":"block"});
});
$(".maskBoxA").on("click",function(){
	$(".maskBox").css({"display":"none"});
});
