<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta charset="UTF-8">
	<base href="{{ asset('') }}">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style-content.css">
	<link rel="stylesheet" href="css/tour-chi-tiet.css ">
	<link rel="stylesheet" href="css/dat-tour.css">
	<link rel="stylesheet" href="css/success.css">
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/tour-chi-tiet.js"></script>
	<title>Đặt tour</title>
	
	
</head>
<body>
	<div class="wrapper-tour-ct">
	<!-- Header -->
		@include('layout.headerchitiet')
	<!-- End Header -->
	
	

	<!-- Content -->
		<div class="tour-content-1">
			<div class="tour-content-1-1">
				<div class="margin10px">
					<div class="dt-tittle">
						<p>ĐẶT TOUR THÀNH CÔNG</p>
					</div>
					<div class="success-tittle2">
						<p>THÔNG TIN TOUR CHI TIẾT</p>
					</div>
					<div class="dt-tittle success ">
						<p>{{$tour->tieude}}</p>
					</div>
					<div class="dt-table success3">
						<table>
						  <tr>
						    <th>Ngày khởi hành</th>
						    <th>Nơi khởi hành</th>
						    <th>Thời gian</th>
						    <th>Số chỗ</th>
						    <th>Phòng đơn</th>
						  </tr>
						  <tr>
						    <td>{{$tour->ngaykhoihanh}}</td>
						    <td>{{$tour->noikhoihanh}}</td>
						    <td>{{$tour->songaydi}}</td>
						    <td>{{$dattour->tongcho}}</td>
						    <td>{{$dattour->phongdon}}</td>
						  </tr>

						</table>
					</div>
					
					<div class="lienhe success2 clearfix">
						<div class="success-tittle2">
							<p>NGƯỜI ĐẶT</p>
						</div>
						<div class="chitiet1 clearfix">
							<div class="lienhe1 success1">
								<p>{{$dattour->hoten}}</p>
								<p>Điện thoại: {{$dattour->sodienthoai}}</p>
								<p>Email: {{$dattour->email}}</p>
							</div>

							<div class="lienhe1 success1">
								
								<p>Quý khách vui lòng chuyển trước 25% số tiền là {{$tientra}} VND vào tài khoản: </p>
								<p>Chủ tài khoản : Trần Văn Châu</p>
										<p>Ngân hàng : Ngân hàng Nông nghiệp và Phát triển Nông thôn Việt Nam.</p>
										<p>Số tài khoản : 0123456789123</p>
										<p>Khi chuyển vui lòng ghi rõ họ tên, số điện thoại và mã tour là {{$tour->id}}.</p>
										<p>Chúng tôi sẽ không hoàn lại phí đặt trước dù bất kì lí do gì.  Xin cảm ơn!</p>
								
							</div>
						</div>
					</div>
					
						
					<div class="lienhe success2 clearfix">
						<div class="success-tittle2">
							<p>MỌI CHI TIẾT XIN LIÊN HỆ</p>
						</div>
						<div class="chitiet1 clearfix">
							<div class="lienhe1 success1">
								<p>Trần Văn Châu</p>
								<p>Điện thoại: 01686270769</p>
								<p>Email: tvchau@gmail.com</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		<!-- SideBar -->
			@include('layout.tourcontentsidebar')
		<!--End SideBar -->
		</div>
	<!-- End content -->
	<div id="Ads" class="Ads clearfix">
		<a href=""><img class="quangcao" src="images/quangcao/quangcao1.jpg" stt1="0"></a>
		<a href=""><img class="quangcao" src="images/quangcao/quangcao2.jpg" stt1="1" style="display: none;"></a>
		<a href=""><img class="quangcao" src="images/quangcao/quangcao3.jpg" stt1="2" style="display: none;"></a>
		<a href=""><img class="quangcao" src="images/quangcao/quangcao4.jpg" stt1="3" style="display: none;"></a>
		<a class="prev1" id="prev1">&#10094;</a>
		<a class="next1" id="next1">&#10095;</a>
	</div>
	<!-- Footer -->
		
	<!-- End Footer -->

	</div>

	@include('layout.footer')
</body>	
</html>