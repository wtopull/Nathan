function sqClick(sq_c,mkB){
	$(sq_c).on("click",function(){
		$(mkB).css("display","block");
		var acc = $(this).parents().parents().find('p').html();
		var abc = $(".maLeftP span").html(acc);
	});
}
function sqClick1(sq_c,mkB){
	$(sq_c).on("click",function(){
		$(mkB).css("display","block");
		var acc = $(this).siblings('p').html();
		var abc = $(".maLeftP span").html(acc);
	});
}
function mkBA(mkB){
	$(".maskBoxA").on("click",function(){
		$(mkB).css({"display":"none"});
	});
}
sqClick1("button.sq_click1",".maskBox1");
sqClick("img.sq_click1",".maskBox1");
mkBA(".maskBox1");

sqClick1("button.sq_click2",".maskBox2");
sqClick("img.sq_click2",".maskBox2");
mkBA(".maskBox2");

sqClick1("button.sq_click3",".maskBox3");
sqClick("img.sq_click3",".maskBox3");
mkBA(".maskBox3");

sqClick1("button.sq_click4",".maskBox4");
sqClick("img.sq_click4",".maskBox4");
mkBA(".maskBox4");

sqClick1("button.sq_click5",".maskBox5");
sqClick("img.sq_click5",".maskBox5");
mkBA(".maskBox5");


function mask(mbox){
    $(mbox).click(function(){
        $(this).hide();
        return false;
    });
    $(".mask").click(function(){
        return false;
    })
}
mask(".maskBox1");
mask(".maskBox2");
mask(".maskBox3");
mask(".maskBox4");
mask(".maskBox5");