$(document).ready(function (){
	$('ul#tq-menu li').on('click',function(){
		var tab_data = $(this).data('tab');
		$(this).addClass('active').siblings().removeClass('active');
		$(tab_data).show().siblings().hide();
	})
	$('ul#at-menu li').on('click',function(){
		var tab_data1 = $(this).data('tab1');
		$(this).addClass('active1').siblings().removeClass('active1');
		$(tab_data1).show().siblings().hide();
	});



  //selector đến menu cần làm việc
  	var TopFixMenu = $(".hd-inner2");
  // dùng sự kiện cuộn chuột để bắt thông tin đã cuộn được chiều dài là bao nhiêu.
    $(window).scroll(function(){
    // Nếu cuộn được hơn 150px rồi
        if($(this).scrollTop()>725){
      // Tiến hành show menu ra   
        TopFixMenu.slideDown(300);

        }else{
      // Ngược lại, nhỏ hơn 150px thì hide menu đi.
            TopFixMenu.slideUp(300);
        }}
    );


     //selector đến menu cần làm việc
    var TopFixMenu2 = $(".hd-inner-thamquan2");
  // dùng sự kiện cuộn chuột để bắt thông tin đã cuộn được chiều dài là bao nhiêu.
    $(window).scroll(function(){
    // Nếu cuộn được hơn 150px rồi
        if($(this).scrollTop()>400){
      // Tiến hành show menu ra   
        TopFixMenu2.slideDown(300); 

        }else{
      // Ngược lại, nhỏ hơn 150px thì hide menu đi.
            TopFixMenu2.slideUp(300);
        }}
    );

    


 
});

function search(obj){
      var value  = obj.value;
       window.location.href = value;
    }