$(function(){
	
$(".page3_content_ul li").hover(function(){
	$(".page3_content_p").css({'display':'none'});
	$(".page3_content_p").eq($(this).index()).css({'display':'block'});
},function(){
	$(".page3_content_p").css({'display':'none'});
});

var length = $(".page4_content_ul li").length;
console.log(length);
for(var i= 1;i<=length;i++){
	$(".page4_content_ul li").eq(i-1).css({'background':'url(images/page4_a'+i+'.jpg) no-repeat'});
}
})


