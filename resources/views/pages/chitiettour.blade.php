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
	
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/tour-chi-tiet.js"></script>
	<title>Tour chi tiết</title>
	
	
</head>
<body>
	<div class="wrapper-tour-ct">
	<!-- Header -->
		@include('layout.headerchitiet')
	<!-- End Header -->

	<!-- Slide -->
		<div class="tour-ct-slide">
			<img class="slide" src="images/tour/{{$tour->anhtour->bg1}}" stt="0">
			<img class="slide" src="images/tour/{{$tour->anhtour->bg2}}" stt="1" style="display: none;">
			<img class="slide" src="images/tour/{{$tour->anhtour->bg3}}" stt="2" style="display: none;">
			<img class="slide" src="images/tour/{{$tour->anhtour->bg4}}" stt="3" style="display: none;">
			<a class="prev" id="prev">&#10094;</a>
			<a class="next" id="next">&#10095;</a>
			<div class="">
			<div class="tour-ct-tittle">
				<p>{{$tour->tieude}}</p>
			</div>
			<div class="tour-ct-button">
				<p>{{$tour->gianguoilon}} VND</p>
				<a class="book" href="">ĐẶT NGAY</a>
			</div>
			</div>
		</div>
	<!-- End Slide -->

	<!-- Content -->
		<div class="tour-content-1">
			<div class="tour-content-1-1">
				<div class="margin10px">
					<div class="tour-ct-info">
						<div class="col-1">
							<img src="images/tour/tour-icon/calendar.png" alt="">
							<p>Ngày khởi hành: {{$tour->ngaykhoihanh}} | {{$tour->giokhoihanh}} </p>
							<img src="images/tour/tour-icon/time.png" alt="">
							<p>Thời gian: {{$tour->songaydi}}</p>
						</div>
						<div class="col-2">
							<img src="images/tour/tour-icon/people.png" alt="">
							<p>Số chỗ: {{$tour->socho}} </p>
							<img src="images/tour/tour-icon/people.png" alt="">
							<p>Số chỗ còn lại: {{$tour->sochoconlai}}</p>
						</div>
					</div>
	
					<div class="tour-ct-tittle1 clearfix">
						<p>ĐIỂM THAM QUAN</p>
					</div>
					
					<div class="tour-ct-map">
						<img src="images/tour/BANDO-840x440.PNG" alt="">
					</div>
					
		
					<div class="tab-menu-ct clearfix">
						<ul id="tab-menu-ct">
							<li class="active2" data-tab2=".tabchitiet1">GIỚI THIỆU</li>
							<li data-tab2=".tabchitiet2">HÀNH TRÌNH TOUR</li>
							<li data-tab2=".tabchitiet3">LƯU Ý</li>
						</ul>
					</div>
					<div class="tabs2">
						<div class="tab2 tabchitiet1">
							<!-- <div class="tour-ct-tittle1">
								<p>HÀNH TRÌNH TOUR</p>
							</div> -->
							<div class="tour-ct-text">
								<p> {{$tour->gioithieu}} </p>
							</div>
						</div>
						<div class="tab2 tabchitiet2">
							<!-- <div class="tour-ct-tittle1">
								<p>CHI TIẾT TOUR</p>
							</div> -->
							<div class="tour-ct-text">
								{!! $tour->lichtrinh !!}
							</div>
						</div>
						<div class="tab2 tabchitiet3">
							<div class="note-text">
								{!! $tour->dieukhoan !!}
							</div>
						</div>
					</div>

					<div class="tour-ct-tittle1 clearfix">
						<p>CHI TIẾT TOUR</p>
					</div>
					<!-- KHỞI HÀNH -->
					<div class="chitiet clearfix">
						<div class="chitiet-header">
							<p>THÔNG TIN KHỞI HÀNH</p>
						</div>
						<div class="chitiet1 clearfix">
							<div class="chitiettrai">
								<p>Ngày khởi hành</p>
							</div>
							<div class="chitietphai">
								<p> {{$tour->ngaykhoihanh}} </p>
							</div>
						</div>
						<div class="chitiet1 clearfix">
							<div class="chitiettrai">
								<p>Giờ khởi hành</p>						
							</div>
							<div class="chitietphai">
								<p>{{$tour->giokhoihanh}}</p>	
							</div>
						</div>
						<div class="chitiet1 clearfix">
							<div class="chitiettrai">
								<p>Nơi khởi hành</p>
							</div>
							<div class="chitietphai">
								<a href="">{{$tour->noikhoihanh}}</a>
							</div>
						</div>
						<div class="chitiet1 clearfix">
							<div class="chitiettrai">
								<p>Giờ tập trung</p>
							</div>
							<div class="chitietphai">
								<p>{{$tour->giotaptrung}}</p>
							</div>
						</div>
					</div>
					<!-- KHÁCH SẠN -->
					<div class="chitiet clearfix">
						<div class="chitiet-header">
							<p>THÔNG TIN KHÁCH SẠN</p>
						</div>
						<div class="chitiet1 clearfix">
							<div class="chitiettrai">
								<p>Tên khách sạn</p>
							</div>
							<div class="chitietphai">
								<p>{{$tour->khachsan->ten}}</p>
							</div>
						</div>
						<div class="chitiet1 clearfix">
							<div class="chitiettrai">
								<p>Địa chỉ</p>						
							</div>
							<div class="chitietphai">
								<p>{{$tour->khachsan->diachi}}</p>	
							</div>
						</div>
					</div>
					<!-- HƯỚNG DẪN VIÊN -->
					<div class="chitiet clearfix">
						<div class="chitiet-header">
							<p>THÔNG TIN HƯỚNG DẪN VIÊN</p>
						</div>
						<div class="chitiet1 clearfix">
							<div class="chitiettrai">
								<p>Họ tên hướng dẫn viên</p>
							</div>
							<div class="chitietphai">
								<p>{{$tour->huongdanvien->hoten}}</p>
							</div>
						</div>
						<div class="chitiet1 clearfix">
							<div class="chitiettrai">
								<p>Địa chỉ</p>						
							</div>
							<div class="chitietphai">
								<p>{{$tour->huongdanvien->diachi}}</p>	
							</div>
						</div>
						<div class="chitiet1 clearfix">
							<div class="chitiettrai">
								<p>Số điện thoại</p>						
							</div>
							<div class="chitietphai">
								<p>{{$tour->huongdanvien->sodienthoai}}</p>	
							</div>
						</div>
					</div>
					<!-- GIÁ TOUR-PHỤ THU -->
					<div class="chitiet clearfix">
						<div class="chitiet-header">
							<p>GIÁ TOUR CHI TIẾT & PHỤ THU PHÒNG ĐƠN</p>
						</div>
						<div class="chitiet1 clearfix">
							<div class="chitiettrai">
								<p>Người lớn</p>
							</div>
							<div class="chitietphai">
								<p>{{$tour->gianguoilon}}</p>
							</div>
						</div>
						<div class="chitiet1 clearfix">
							<div class="chitiettrai">
								<p>Trẻ em (từ 5 đến 12 tuổi)</p>						
							</div>
							<div class="chitietphai">
								<p>{{$tour->giatreem}}</p>	
							</div>
						</div>
						<div class="chitiet1 clearfix">
							<div class="chitiettrai">
								<p>Trẻ nhỏ (dưới 2 tuổi)</p>						
							</div>
							<div class="chitietphai">
								<p>{{$tour->giatrenho}}</p>	
							</div>
						</div>
						<div class="chitiet1 clearfix">
							<div class="chitiettrai">
								<p>Em bé (dưới 2 tuổi)</p>						
							</div>
							<div class="chitietphai">
								<p>{{$tour->giaembe}}</p>	
							</div>
						</div>
						<div class="chitiet1 clearfix">
							<div class="chitiettrai">
								<p>Phụ thu phòng đơn (phòng riêng)</p>						
							</div>
							<div class="chitietphai">
								<p>{{$tour->giaphongdon}}</p>	
							</div>
						</div>
					</div>
					<div class="lienhe clearfix">
						<div class="chitiet-header">
							<p>MỌI CHI TIẾT XIN LIÊN HỆ</p>
						</div>
						<div class="chitiet1 clearfix">
							<div class="lienhe1">
								<p>Trần Văn Châu</p>
								<p>Điện thoại: 01686270769</p>
								<p>Email: tvchau@gmail.com</p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		<!-- SideBar -->
			<div class="tour-content-side-bar">
				<div class="margin10px">
					
					<div class="sidebar-tour center">
						<p class="sidebar-header">TOUR MỚI NHẤT</p>
						
						@foreach($tourmoinhat as $tmn)
						<div class="marginbottom10px">
							<div class="img270x142">
								<img id="thumn2" src="images/tour/{{$tmn->anhtour->thumn2}}" alt="">
							</div>
													
							<a class="sidebar-tittle clearfix" href="">{{ $tmn->tieude }}</a>
						</div>
						@endforeach	
						

					</div>

					<div class="sidebar-diadiem center">
						<p class="sidebar-header">ĐỊA ĐIỂM NỔI BẬT</p>
						
						<div class="marginbottom10px">
							<div class="img270x142">
								<img src="images/tour/anh-slide-bar-2-270x142.jpg" alt="">
							</div>
							<a class="sidebar-tittle clearfix" href="">BẾN NINH KIỀU</a>
						</div>

						
					</div>
				</div>
			</div>
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