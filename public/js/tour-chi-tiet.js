$(document).ready(function(){
	var stt=0;
	start = $("img.slide:first").attr("stt");
	end = $("img.slide:last").attr("stt");
	$("img.slide").each(function(){
		if($(this).is(':visible'))
			stt = $(this).attr("stt");
	});
	$("#next").click(function(){
		if(stt == end){
			stt = -1;
		}
		next = ++stt;
		$("img.slide").hide();
		$("img.slide").eq(next).show();
	});

	$("#prev").click(function(){
		if(stt == 0){
			stt = end;
			prev = stt++;
		}
		prev = --stt;
		$("img.slide").hide();
		$("img.slide").eq(prev).show();
	});
	setInterval(function(){
		$("#next").click();
	},7000);



	$('ul#tab-menu-ct li').on('click',function(){
		var tab_data2 = $(this).data('tab2');
		$(this).addClass('active2').siblings().removeClass('active2');
		$(tab_data2).show().siblings().hide();
	});



	var stt1=0;
	start1 = $("img.quangcao:first").attr("stt1");
	end1 = $("img.quangcao:last").attr("stt1");
	$("img.quangcao").each(function(){
		if($(this).is(':visible'))
			stt1 = $(this).attr("stt1");
	});
	$("#next1").click(function(){
		if(stt1 == end1){
			stt1 = -1;
		}
		next1 = ++stt1;
		$("img.quangcao").hide();
		$("img.quangcao").eq(next1).show();
	});

	$("#prev1").click(function(){
		if(stt1 == 0){
			stt1 = end1;
			prev1 = stt1++;
		}
		prev1 = --stt1;
		$("img.quangcao").hide();
		$("img.quangcao").eq(prev1).show();
	});
	setInterval(function(){
		$("#next1").click();
	},3000);


});