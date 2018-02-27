<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style-content.css">
<!-- 	<link rel="stylesheet" href="css/responsive.css"> -->

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/Js.js"></script>
	
	<title>Du lịch Cần Thơ</title>
</head>
<body>
	<div id="wrapper">

<!-- Header -->
		<div class="header">
			<div class="parallax">
				<div id="header" >
					<div class="hd-inner" class="clearfix">
						<a href="" id="logo" class="fl-left">
							<img src="images/logo.png" alt="">
						</a>
						<ul id="main-menu" class="fl-right">
							<li><a href="">TRANG CHỦ</a></li>
							<li><a href="">TOUR</a></li>
							<li><a href="">VÉ THAM QUAN</a></li>
							<li><a href="">KHÁCH SẠN</a></li>
							<li><a href="">ẨM THỰC</a></li>
							<li><a href="">CONTACT</a></li>
						</ul>
					</div>
					<div class="hd-inner2" class="clearfix">
						<div class="logo1">
							<a href="" id="logo1" class="fl-left">
								<img src="images/logo.png" alt="">
							</a>	
						</div>
						<ul id="main-menu1" class="fl-right">
							<li><a href="">TRANG CHỦ</a></li>
							<li><a href="">TOUR</a></li>
							<li><a href="">VÉ THAM QUAN</a></li>
							<li><a href="">KHÁCH SẠN</a></li>
							<li><a href="">ẨM THỰC</a></li>
							<li><a href="">CONTACT</a></li>
						</ul>
					</div>
					<div class="tittle clearfix" >
						<p>Welcome to Can Tho City</p>
					</div>
				</div>
			</div>
		</div>
	
		
		<div id="wp-content" class="wp-inner">
			
<!-- GIỚI THIỆU -->
			<div id="gioithieu"  class="clearfix">
				<?php require "blocks/gioithieu.html"; ?>
			</div>

<!-- ĐỊA ĐIỂM THAM QUAN -->
			<div id="diadiemthamquan" class="clearfix">
				<div class="ct-header">
					<p>ĐỊA ĐIỂM THAM QUAN</p>
				</div>
				<div class="tq-menu clearfix" >
					<ul id="tq-menu">
						<li class="active" data-tab=".tabct1">BẾN NINH KIỀU</li>
						<li data-tab=".tabct2">VƯỜN TRÁI CÂY</li>
						<li data-tab=".tabct3">CHỢ NỔI CÁI RĂNG</li>
						<li data-tab=".tabct4">VƯỜN CÒ</li>
						<li data-tab=".tabct5">THIỀN VIỆN TRÚC LÂM</li>
						<li data-tab=".tabct6">CHÙA ÔNG</li>
					</ul>
				</div>
				<div class="tabs">	
					<div id="" class="tab tabct1">
						<div class="text-center">
							<p class="p2">Bến Ninh Kiều thu hút khách du lịch với phong cảnh sông nước hữu tình, thơ mộng và tầm nhìn hướng ra sông Hậu Giang hiền hòa. Nằm bên hữu ngạn sông Hậu gần ngay ngã ba sông Hậu và 
							sông Cần Thơ, bến Ninh Kiều nổi tiếng không chỉ là nơi dạo chơi hóng gió thư giãn mà cón là nơi để các bạn trẻ tụ tập gặp gỡ bên các nhà hàng ăn uống cùng nhau. Đến với Bến Ninh Kiều, 
							du khách sẽ được ngồi trên những nhà hàng nổi, ngắm cảnh sông nước Hậu Giang và thưởng thức những món ăn đặc sản hấp dẫn.</p>
						</div>
						<div class="tq-img">
							<img id="tq" src="images/thamquan/BEN-NINH-KIEU.jpg" srcset=""> 
						</div>
					</div>
					<div id="" class="tab tabct2">
						<div class="text-center">
							<p class="p2">Nổi tiếng là vùng đất sông nước có đất đai màu mỡ cùng khí hậu ấm áp quanh năm nên Cần Thơ trồng được rất nhiều loại cây ăn quả thơm ngon như: vú sữa, nhãn, sầu riêng, râu Hạ Châu, măng cụt, táo, chôm chôm…Du khách tới Cần Thơ vào bất kì thời điểm nào cũng sẽ có cơ hội tham quan, thường thức hoa quả tại các khu vườn trái cây của Cần Thơ bởi sự đa dạng về mùa của các loại hoa quả.  Một số nhà vườn mà du khách không nên bỏ qua là Mỹ Thơm, Mỹ Khánh, Mỹ Thuận, Vũ Bình, Cồn Ấu, Xám Vàng….</p>
						</div>
						<div class="tq-img">
							<img id="tq" src="images/thamquan/CHO-NOI.jpg">
						</div>
					</div>
					<div id="" class="tab tabct3">
						<div class="text-center">
							<p class="p2">Chợ nổi Cái Răng có lẽ là điểm rất quen thuộc của du lịch Cần Thơ. Chắc chắn ai ai đi du lịch Cần Thơ cũng sẽ phải đến thăm quan chợ nổi Cái Răng. Vào mỗi buổi sáng, tại chợ nổi Cái Răng có hàng trăm chiếc thuyền lớn nhỏ đậu san sát nhau. Bên trên thuyền là đầy những sản vật như hoa quả, đồ gia dụng, đặc sản…Chắc chắn đến chợ nổi Cái Răng vào buổi sáng và tham gia phiên chợ lênh đênh trên sông sẽ mang lại một trải nghiệm khó quên cho du khách.</p>
						</div>
						<div class="tq-img">
							<img id="tq" src="images/thamquan/chonoi2.jpg">
						</div>
					</div>
					<div id="" class="tab tabct4">
						<div class="text-center">
							<p class="p2">Cách trung tâm thành phố Cần Thơ khoảng 50km là Vườn Cò Bằng Lăng – một trong những nơi tập trung chim lớn nhất của miền quê sông nước. Vườn cò thuộc ấp Thới Bình, xã Thới Thuận, huyện Thốt Nốt của thành phố Cần thơ. Được hình thành vào năm 1983 đây là nơi tập trung, sinh sống của hàng ngàn con cò đủ chủng loaij. Khi đến đây du khách sẽ phải ngỡ ngàng trước hình ảnh của nhiều đàn cò đang bay lượn trên bầu trời, và đứng đậu trên những cánh cây. Nhìn ngắm đàn cò bay lượn cho ta cảm giác thư thái như đang hòa cùng với thiên nhiên.</p>
						</div>
						<div class="tq-img">
							<img id="tq" src="images/thamquan/vuonco.jpg">
						</div>
					</div>
					<div id="" class="tab tabct5">
						<div class="text-center">
							<p class="p2">Nằm trong khu di tích lịch sử Lộ Vòng Cung, cách trung tâm thành phố Cần Thơ 15km, Thiền viện trúc lâm Phương Nam tọa lạc trên mảnh đất có diện tích gần 4ha tại xã Mỹ Khánh, huyên Phong Điền. Thiền viện được xây dựng theo kiến trúc thời Lý mang nét đẹp thanh bình, yên ả. Đến với thiền việc trúc lâm Phương Nam thăm quan cảnh đẹp và cầu bình an sẽ là một trải nghiệm đáng nhớ trong chuyến du lịch về miền sông nước của bạn.</p>
						</div>
						<div class="tq-img">
							<img id="tq" src="images/thamquan/thienvien.jpg">
						</div>
					</div>
					<div id="" class="tab tabct6">
						<div class="text-center">
							<p class="p2">Nằm ngay gần bến Ninh Kiều thơ mông, chùa Ông cũng là một điểm thăm quan được nhiều du khách tới thăm. Ngôi chùa được xây dựng năm 1894 – 1896 trên một khu đất có diện tích khá rộng chừng hơn 500m2. Chùa Ông có lối kiến trúc độc đáo và hiện nay gần như vẫn giữ được vẻ đẹp vẹn nguyên ban đầu. Bên trong chùa treo rất nhiều vòng hương lớn và được người dân đến thành kính hương khói quanh năm. Là ngôi chùa cổ đại với lối kiến trúc độc đáo, Chùa Ông đã được công nhận di tích lịch sử cấp quốc gia vào năm 1993.</p>
						</div>
						<div class="tq-img">
							<img id="tq" src="images/thamquan/chuaong3.jpg">
						</div>
					</div>
				</div>
			</div>

<!-- ẨM THỰC -->
			<div id="amthuc" class="clearfix">
				<div class="ct-header">
					<p>ẨM THỰC</p>
				</div>
				<div class="at-menu clearfix">
					<ul id="at-menu">
						<li class="active1" data-tab1=".tabat1"><p>ĐẶC SẢN</p</li>
						<li data-tab1=".tabat2"><p>HẢI SẢN</p</li>
						<li data-tab1=".tabat3"><p>NUỚNG</p</li>
						<li data-tab1=".tabat4"><p>LẨU</p</li>
					</ul>
				</div>
				<div class="tabs1">
					<div class="tab1 tabat1">
						<!-- Đặc sản -->
						<ul id="at-img">
							<li><img src="images/food/BANH.jpg" alt=""></li>
							<li><img src="images/food/BANHCONG.jpg" alt=""></li>
							<li><img src="images/food/banhtet.jpg" alt=""></li>
							<li><img src="images/food/BANHXEO.jpg" alt=""></li>
							<li><img src="images/food/BOKHO.jpg" alt=""></li>
							<li><img src="images/food/GOI.jpg" alt=""></li>
							<li><img src="images/food/LAU.jpg" alt=""></li>
						</ul>
					</div>
					<div class="tab1 tabat2">
						<!-- Hải sản -->
						<ul id="at-img">
							<li><img src="images/food/haisan/haisan.jpg" alt=""></li>
							<li><img src="images/food/haisan/haisan2.jpg" alt=""></li>
							<li><img src="images/food/haisan/haisan3.jpg" alt=""></li>
							<li><img src="images/food/haisan/haisan5.jpg" alt=""></li>
							<li><img src="images/food/haisan/haisan6.jpg" alt=""></li>
						</ul>
					</div>
					<div class="tab1 tabat3">
						<!-- Nướng -->
						<ul id="at-img">
							<li><img src="images/food/nuong/nuong2.jpg" alt=""></li>
							<li><img src="images/food/nuong/nuong3.jpg" alt=""></li>
							<li><img src="images/food/nuong/nuong4.jpg" alt=""></li>
							<li><img src="images/food/nuong/nuong5.jpg" alt=""></li>
							<li><img src="images/food/nuong/nuong6.jpg" alt=""></li>
							<li><img src="images/food/nuong/nuong7.jpg" alt=""></li>
						</ul>
					</div>
					<div class="tab1 tabat4">
						<!-- Lẩu -->
						<ul id="at-img">
							<li><img src="images/food/lau/lau1.jpg" alt=""></li>
							<li><img src="images/food/lau/lau2.jpg" alt=""></li>
							<li><img src="images/food/lau/lau3.jpg" alt=""></li>
							<li><img src="images/food/lau/lau4.jpg" alt=""></li>
							<li><img src="images/food/lau/lau5.jpg" alt=""></li>
							<li><img src="images/food/lau/lau6.jpg" alt=""></li>
							<li><img src="images/food/lau/lau7.jpg" alt=""></li>
							<li><img src="images/food/lau/LAU.jpg" alt=""></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

<!-- TOUR -->
			<div class="tour" class="clearfix">
				<div class="parallax2">
					<div class="t-header">
						<p>TOUR DU LỊCH</p>
					</div>
				</div>
			</div>
		<div id="wp-content" class="wp-inner">	
			<?php require "blocks/tour.html"; ?>

<!-- CONTACT -->
			<div class="contact">
				<?php require "blocks/contact.html"; ?>
			</div>
		</div>


		<div id="footer" class="footer clearfix" >
			<img src="images/logo.png" alt="">
			<div class="ft-menu1">
				<ul id="ft-menu1" class="fl-right">
					<li><a href="">TRANG CHỦ</a></li>
					<li><a href="">TOUR</a></li>
					<li><a href="">VÉ THAM QUAN</a></li>
					<li><a href="">KHÁCH SẠN</a></li>
					<li><a href="">ẨM THỰC</a></li>
					<li><a href="">CONTACT</a></li>
				</ul>
			</div>
			<div class="ft-menu2 clearfix">
				<ul id="ft-menu2" >
					<li><a href="">Facebook</a></li>
					<li><a href="">Google+</a></li>
					<li><a href="">Twitter</a></li>
				</ul>		
			</div>
		</div>
	</div>
</body>
</html>