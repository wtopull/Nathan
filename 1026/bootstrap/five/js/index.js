var times = new Date(2017,9,1,23,59,59);
setInterval(function() {
	var dates = new Date;
	var hour = dates.getHours();
	var time = times - dates;
	var year = dates.getFullYear();
	var month = dates.getMonth();
	var day = dates.getDate();
	var time1 = new Date(year,month,day,10,00,00);
	var time2 = new Date(year,month,day,13,00,00);
	var time3 = new Date(year,month,day,17,00,00);
	var time4 = new Date(year,month,day+1,10,00,00);
	var timea = 0;
	if(times-dates != 0){
		if(hour<10){
			timea=time1-dates;
		}else if(hour>=10&&hour<13){
			timea=time2-dates;
		}else if(hour>=13&&hour<17){
			timea=time3-dates;
		}else if(hour>=17){
			timea=time4-dates;
		}
		var hour = Math.floor(timea / 1000 / 60 / 60 % 24);
		var minute = Math.floor(timea / 1000 / 60 % 60);
		var seconds = Math.floor(timea / 1000 % 60);
	}
	$('.timespan').html(day + "天" + hour + "小时" + minute + "分钟" + seconds + "秒");
	$(".hour").html(hour);
	$(".minute").html(minute);
	$(".second").html(seconds);
//	console.log(times+"--"+dates+"--"+hour+"时---"+minute+"分---"+seconds+"秒");
}, 1000);


function tabs(){
	$(".page4Ul li").eq(0).children("img").show();
	$(".page4Ul li").eq(0).css({'color':'#6BC5CF'});
	$(".page4Ul li").on('mouseover',function(){
		$(this).css({'color':'#6BC5CF'}).siblings().css({'color':'#244C6E'});
		$(this).siblings().children("img").hide();
		$(this).children("img").show();
	});
}
tabs();
var lengths = $(".page4Ul li").length;
var n = 0;
var widths = $(".page4Ul2 li").width();
var length2 = $(".page4Ul2 li").length;
console.log(widths);
setInterval(function(){
	if(n<lengths){
		$(".page4Ul li").eq(n).css({'color':'#6BC5CF'}).siblings().css({'color':'#244C6E'});
		$(".page4Ul li").siblings().children("img").hide();
		$(".page4Ul li").eq(n).children("img").show();
		$(".page4U2 li").css({'width':'widths*length'});
		console.log($(".page4Ul2").width());
		n++;
	}else if(n==lengths){
		n=0;
	}
},1000);