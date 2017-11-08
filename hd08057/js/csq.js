function sqClick(sq_c,mkB){
	$(".sq_c").on("click",function(){
		$(".mkB").css("display","block");
		var acc = $(this).parents().parents().find('p').html();
		var abc = $(".maLeftP span").html(acc);
	});
}
function mkBA(mA,mkB){
	$(".mA").on("click",function(){
		$(".mkB").css({"display":"none"});
	});
}


$(".sq_click1").on("click",function(){
	$(".maskBox1").css("display","block");
	var acc = $(this).parents().parents().find('p').html();
	var abc = $(".maLeftP span").html(acc);
});
$(".maskBoxA").on("click",function(){
	$(".maskBox1").css({"display":"none"});
});

$(".sq_click2").on("click",function(){
	$(".maskBox2").css("display","block");
	var acc = $(this).parents().parents().find('p').html();
	var abc = $(".maLeftP span").html(acc);
});
$(".maskBoxA").on("click",function(){
	$(".maskBox2").css({"display":"none"});
});

$(".sq_click3").on("click",function(){
	$(".maskBox3").css("display","block");
	var acc = $(this).siblings('li p').html();
	var abc = $(".maLeftP span").html(acc);
});
$(".maskBoxA").on("click",function(){
	$(".maskBox3").css({"display":"none"});
});

$(".sq_click4").on("click",function(){
	$(".maskBox4").css("display","block");
	var acc = $(this).siblings('li p').html();
	var abc = $(".maLeftP span").html(acc);
});
$(".maskBoxA").on("click",function(){
	$(".maskBox4").css({"display":"none"});
});

$(".sq_click5").on("click",function(){
	$(".maskBox5").css("display","block");
	var acc = $(this).siblings('li p').html();
	var abc = $(".maLeftP span").html(acc);
	
});
$(".maskBoxA").on("click",function(){
	$(".maskBox5").css({"display":"none"});
});


$(function(){
    $(".maskBox1").click(function(){
        $(this).hide();
        return false;
    });
    $(".mask").click(function(){
        return false;
    })
});
$(function(){
    $(".maskBox2").click(function(){
        $(this).hide();
        return false;
    });
    $(".mask").click(function(){
        return false;
    })
})
$(function(){
    $(".maskBox3").click(function(){
        $(this).hide();
        return false;
    });
    $(".mask").click(function(){
        return false;
    })
})
$(function(){
    $(".maskBox4").click(function(){
        $(this).hide();
        return false;
    });
    $(".mask").click(function(){
        return false;
    })
})
$(function(){
    $(".maskBox5").click(function(){
        $(this).hide();
        return false;
    });
    $(".mask").click(function(){
        return false;
    })
})