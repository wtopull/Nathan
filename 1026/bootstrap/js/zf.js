var data= new Date().getFullYear();
$(".newDate").html(data);
$(".conTopUl2 li").click(function(){
	$(this).addClass("active").siblings().removeClass("active");
	$(".cT2L i").html($(this).html());
});
$(".cT3RUl li").mouseover(function(){
	num =($(this).index()-1)*40+4+"px";
	$(this).addClass("active").siblings().removeClass("active");
	$(".cT3RUl span").css("top",num);
});

