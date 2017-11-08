
$(function () {
		var dv = $('#page_it'), st;
		dv.attr('otop', dv.offset().top); 
		$(window).scroll(function () {
		st = Math.max(document.body.scrollTop || document.documentElement.scrollTop);
		if (st > parseInt(dv.attr('otop'))) {
		
		if (dv.css('position') != 'fixed') dv.css({ 'position': 'fixed', top: "10px" ,"z-index":"100",'left':'50%','margin-left':'-603px'});
		} else if (dv.css('position') != 'static') dv.css({ 'position': 'relative' ,'left':'50%','margin-left':'-603px'});
		});
	});

//锚点链接
 $(function () {
 	           
                var current=0;
                var item1=$("#item1").offset().top;
                var item2=$("#item2").offset().top-500;
                var item3=$("#item3").offset().top-500;
                var item4=$("#item4").offset().top-500;
            $(document).scroll(function () {
            	current=$("#page_it").offset().top;
            	 $("#page_it").find("a").css("color","#333");
                 $("#page_it li").find("img").css("display","none");
                 
                if(current<item2){  
	               $("#page_it li").eq(0).find("a").css("color","#ff7f91");
	                $("#page_it li").eq(0).find("img").css("display","block");
	              $("#page_it li").eq(0).css("marginTop","-26px").siblings().css("marginTop","-18px");
                }else if(current>=item2 && current<item3){
	               $("#page_it li").eq(1).find("a").css("color","#ff7f91");
	               $("#page_it li").eq(1).find("img").css("display","block");
	                $("#page_it li").eq(1).css("marginTop","-26px").siblings().css("marginTop","-18px");
                }else if(current>=item3&&current<item4){
	               $("#page_it li").eq(2).find("a").css("color","#ff7f91");
	               $("#page_it li").eq(2).find("img").css("display","block");
	                $("#page_it li").eq(2).css("marginTop","-26px").siblings().css("marginTop","-18px");
                }else if(current>=item4){
	               $("#page_it li").eq(3).find("a").css("color","#ff7f91");
	               $("#page_it li").eq(3).find("img").css("display","block");
	                $("#page_it li").eq(3).css("marginTop","-26px").siblings().css("marginTop","-18px");
                }
            
            });

            $("#page_it").find("li").click(function () {
                var aId = $(this).find("a").attr("href");     
              
               $("html,body").animate({"scrollTop":$(aId).offset().top-220},2000);
            });
        });