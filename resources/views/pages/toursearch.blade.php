<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<base href="{{asset('')}}">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style-content.css">
	<link rel="stylesheet" href="css/tour-chi-tiet.css">
<!-- 	<link rel="stylesheet" href="css/responsive.css"> -->
	<link rel="stylesheet" href="css/tour.css">
<!-- 	<link rel="stylesheet" href="css/style-js.css"> -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/Js.js"></script>
	<script src="js/tour-chi-tiet.js"></script>
	<title>Tour tham quan tại Cần Thơ</title>

</head>
<body>
	<div class="wrapper-tour">
	
	<!-- Header -->
		<div class="header1">
			<div class="hd">
				<div class="parallax3 ">
					<div id="header1">
						<div class="hd-inner3 clearfix">
							<div class="logo-tour">
								<a href="index.html" id="logo-tour" class="fl-left">
									<img src="images/logo.png" alt="">
								</a>	
							</div>
							<ul id="main-menu2" class="fl-right">
								<li><a href="index.html">TRANG CHỦ</a></li>
								<li><a href="tour.html">TOUR</a></li>
								<li><a href="thamquan.html">ĐIỂM THAM QUAN</a></li>
								<li><a href="">KHÁCH SẠN</a></li>
								<li><a href="">ẨM THỰC</a></li>
								<li><a href="">CONTACT</a></li>
							</ul>
						</div>
						<div class="tittle clearfix" >
							<p>Tour tham quan</p>
						</div>	
					</div>
				</div>
			</div>
		</div>
	
	<!-- Content -->
		<div class="wp-content-tour">
			<div class="choose">
				<hr class="hr-tour">
					<div class="center clearfix">
						<!-- <nav> -->
						<div class="">
							<div class="tour-search1">
								<p>Chọn điểm đi: </p>
								<select class="select-tour" name="tour-place" id="tour-place" onchange="search(this)">
									<option value="noiden">Nơi đi</option>Tìm
									@foreach($diemdi as $dd)
									<option value="tour/tim/{{$dd->id}}.html">{{$dd->tendiemdi}}</option>
									
									@endforeach

								</select>
							</div>
							
						</div>
						<!-- <p>Sắp xếp theo:</p>	
						<select class="select-tour" name="tour-place" id="tour-place">
							<option value="gia">Giá</option>
							<option value="giacao">Giá cao đến thấp</option>
							<option value="giathap">Giá thấp đến cao</option>
						</select> -->
					<!-- </nav> -->
					</div>
				<hr class="hr-tour">
			</div>
			
			@foreach($tour as $t)

			<div class="content-tour-1 clearfix">
				<div class="content-tour-img">
					<a href=""><img src="images/tour/{{$t->anhtour->thumn1}}"></a>
				</div>
				<div class="content-tour-text">
					<a href="chitiettour/{{$t->id}}/{{$t->tieudekhongdau}}.html">{{$t->tieude}}</a>
					<div class="details">
						<img src="images/tour/tour-icon/calendar.png" alt="">
						<p>Ngày khởi hành: {{$t->ngaykhoihanh}} | {{$t->giokhoihanh}}</p>
					</div>
					<div class="details">
						<img src="images/tour/tour-icon/people.png" alt="">
						<p>Số chỗ: {{$t->socho}}</p>
					</div>
					<div class="details">
						<img src="images/tour/tour-icon/people.png" alt="">
						<p>Số chỗ còn lại: {{$t->sochoconlai}}</p>
					</div>
					<div class="details">
						<img src="images/tour/tour-icon/time.png" alt="">
						<p>Thời gian: {{$t->songaydi}}</p>
					</div>
				</div>
				<div class="content-tour-price">
					<div>
						
					</div>
							
					<div>
						<p id="giatong">{{$t->gianguoilon}} VND</p>
					</div>
					<div class="">
						@if($t->sochoconlai == 0)
							<p id="hetcho">HẾT CHỖ</p>
						@else
							<a href="chitiettour/{{$t->id}}/{{$t->tieudekhongdau}}.html">CHI TIẾT</a>
						@endif
					</div>
				</div>
			</div>

			@endforeach
			
		</div>	
	
	@include('layout.quangcao')
	
	<!-- Footer -->
		
	
	@include('layout.footer')
</div>
</body>
</html>