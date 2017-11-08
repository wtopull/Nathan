var arr=['haha1.jpg','haha2.jpg','haha3.jpg'];
var sum="";
var xum="";
//创建图片li
$.each(arr,function(index){
	xum+='<li><a href="javascript:void(0)"><image src="image/'+arr[index]+'" alt=""></a></li>';
});
$(".boxUl").html(xum);
//创建小圆点li
var n = 0;
var k=0;
var liLenght = $(".boxUl li").length;						//boxul li 长度
var imageLenght = $(".boxUl img").width();					//image  宽度
var oLeft =$(".boxUl li").css("left");
$(".boxUl").css({'width':$(".boxUl img").width()*liLenght});
$(".boxUl li").each(function(){
	sum+='<li></li>';
});
$(".disc").html(sum);
var oWidth = $(".disc").width();
//小圆点居中
$(".disc").css({'margin-left':-oWidth/2});
$(".disc li").first().addClass("active");
times = setInterval(oPrev,1000);
$(".cT2R").hover(function(){
	clearInterval(times);
},function(){
	times = setInterval(oPrev,1000);
});
$(".next").click(function(){
	oNext();
});
$(".prev").click(function(){
	oPrev();
});
$(".disc li").click(function(){
	k=$(this).index();
	discClick();
});
function discClick(){
	if(k==liLenght){
		$(".disc li").addClass("active").eq(0).siblings().removeClass("active");
	}else{
		$(".disc li").addClass("active").eq(k).siblings().removeClass("active");
	}
	$(".boxUl").css({"left":-k*imageLenght});
}
function oNext(){
	if( k > 0 ){
		k--;
	}else{
		k = liLenght - 1;
		$('.boxUl').css("left",-liLenght * imageLenght);
	};
	discClick();
}
function oPrev(){
	if(k == liLenght-1){
		k=0;
		$('.boxUl').css("left",0);
	}else{
		k++;
	};
	discClick();
}
