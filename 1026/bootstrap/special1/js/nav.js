$(function(){
  $("#nav li").click(function(){

    $("#nav li").eq($(this).index()).addClass("active").siblings().removeClass("active");
  })
})
//导航栏 横线
$(document).ready(function(e) {  
    $("#nav ul li a").mouseenter(function(){  
        var parent=$(this).parent();  
        left=parent.position().left;  
        $(".back").stop(true,true).animate({left:left,width:"60px"}, "fast");  
    })  
    $("#nav ul").mouseleave(function(){  
        $(".back").stop(true,true).animate({left:"370px",width:"60px"},"fast");  
        })  
});  

