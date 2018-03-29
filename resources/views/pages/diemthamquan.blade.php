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
	<link rel="stylesheet" href="css/diemthamquan.css">
	<link rel="stylesheet" href="css/animate.css">
<!-- 	<link rel="stylesheet" href="css/responsive.css"> -->
	<link rel="stylesheet" href="css/tour.css">
<!-- 	<link rel="stylesheet" href="css/style-js.css"> -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/Js.js"></script>
	<script src="js/tour-chi-tiet.js"></script>
	<title>Địa điểm tham quan tại Cần Thơ</title>

</head>
<body>
	<div class="wrapper-tour-thamquan">
		<div class="header-thamquan clearfix">
			
					
						<div class="hd-inner-thamquan">
							<div class="logo-tour">
								<a href="index.html" id="logo-tour" class="fl-left">
									<img src="images/logo.png" alt="logo.png">
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
					
						<div class="hd-inner-thamquan2 ">
							<div class="logo-tour">
								<a href="index.html" id="logo-tour" class="fl-left">
									<img src="images/logo.png" alt="logo.png">
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
		</div>
		
	
	<!-- Content -->
		<div class="content-thamquan clearfix">
			
			<div class="img1366x380 ">
				<p>{{$diemthamquan->ten}}</p>	
				<img src="images/thamquan/{{$diemthamquan->background}}" alt="{{$diemthamquan->background}}">
			</div>
		
			<div class="thamquan-gioithieu">
				<div class="thamquan-tittle">
					<h1>Giới thiệu</h1>
				</div>
				<p>{{$diemthamquan->gioithieu}}</p>

				
			</div>
			
			<div class="thamquan-icon">
				<img src="images/thamquan/icon.png" alt="icon.png">
			</div>

			<div class="thamquan">
				<div class="thamquan-tittle2">
					<h1>{{$diemthamquan->ten}} Xưa</h1>
				</div>
				<div class="imgxua">
					<img id="img1366x160" src="images/thamquan/{{$diemthamquan->headerxua}}" alt="{{$diemthamquan->headerxua}}">					
				</div>
				<div>
					<div class="thamquan-icon icon2">
						<img src="images/thamquan/hoavan2.png" alt="hoavan2.png">
					</div>
					<p>{{$diemthamquan->text1}}</p>
				</div>
				<div class="thamquan-img">
					<img id="img600x391" src="images/thamquan/{{$diemthamquan->xua1img600x391}}" alt="{{$diemthamquan->xua1img600x391}}">
					<img id="img710x391" src="images/thamquan/{{$diemthamquan->xua2img710x391}}" alt="{{$diemthamquan->xua2img710x391}}">
					<img id="img600x253" src="images/thamquan/{{$diemthamquan->xua3img600x253}}" alt="{{$diemthamquan->xua3img600x253}}">
				</div>
					
			</div>
			
			<div class="thamquan-icon">
				<img src="images/thamquan/icon.png" alt="icon.png">
			</div>
				

			<div class="thamquan">
				<div class="thamquan-tittle2">
					<h1>{{$diemthamquan->ten}} Nay</h1>
				</div>
				<div class="imgxua">
					<img id="img1366x160" src="images/thamquan/{{$diemthamquan->headernay}}" alt="{{$diemthamquan->headernay}}">					
				</div>
				<div>
					<div class="thamquan-icon icon2">
						<img src="images/thamquan/hoavan2.png" alt="hoavan2.png">
					</div>
					<p>{{$diemthamquan->text2}}</p>
				</div>

				<div class="img1366x600">
					<img src="images/thamquan/{{$diemthamquan->naybgimg1366x160}}" alt="{{$diemthamquan->naybgimg1366x160}}">
				</div>
				
				<div class="thamquan-icon icon2">
					<img src="images/thamquan/hoavan2.png" alt="hoavan2.png">
				</div>	
				<p>{{$diemthamquan->text3}}</p>
				<div class="thamquan-img">
					<img id="img668x" src="images/thamquan/{{$diemthamquan->nay1img668x}}" alt="">
					<img id="img668x" src="images/thamquan/{{$diemthamquan->nay2img668x}}" alt="">
				</div>
				
				<div class="thamquan-icon icon2">
					<img src="images/thamquan/hoavan2.png" alt="">
				</div>
				<p>{{$diemthamquan->text4}}</p>
				<div class="thamquan-img">
					<img id="img668x" src="images/thamquan/{{$diemthamquan->nay3img668x}}" alt="">
					<img id="img668x" src="images/thamquan/{{$diemthamquan->nay4img668x}}" alt="">
				</div>
				<div class="thamquan-icon icon2">
					<img src="images/thamquan/hoavan2.png" alt="">
				</div>
			</div>
			
			
		</div>	
	
	</div>	

	<div class="thamquan-dexuat">
			
			@foreach($diemthamquandexuat as $dtqdx)
			<div class="thamquan-sidebar">
				<img id="thamquan-sidebar" src="images/thamquan/{{$dtqdx->nay1img668x}}" alt="">
				<a id="thamquan-sidebar" href="diemthamquan/{{$dtqdx->id}}/{{$dtqdx->tenkhongdau}}.html">{{$dtqdx->ten}}</a>
			</div>
			@endforeach

	</div>
	
	@include('layout.quangcao')
	
	<!-- Footer -->
		
	
	@include('layout.footer')
</div>
</body>
</html>