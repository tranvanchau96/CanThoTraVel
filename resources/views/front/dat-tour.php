<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" href="css/reset.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style-content.css">
	<link rel="stylesheet" href="css/tour-chi-tiet.css">
	<link rel="stylesheet" href="css/dat-tour.css">
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/tour-chi-tiet.js"></script>
	<script src="js/dat-tour.js"></script>
	<title>Tour chi tiết</title>
	
</head>
<body>
	<div class="wrapper-tour-ct">
	<!-- Header -->
		<div class="tour-ct-header clearfix">
			<div class="hd-inner4 clearfix">
				<div class="logo-tour-ct">
					<a href="" id="logo-tour-ct" class="fl-left">
						<img src="images/logo.png" alt="">
					</a>	
				</div>
				<ul id="main-menu2" class="fl-right">
					<li><a href="">TRANG CHỦ</a></li>
					<li><a href="">TOUR</a></li>
					<li><a href="">VÉ THAM QUAN</a></li>
					<li><a href="">KHÁCH SẠN</a></li>
					<li><a href="">ẨM THỰC</a></li>
					<li><a href="">CONTACT</a></li>
				</ul>
			</div>
		</div>
	<!-- End Header -->

	<!-- Content -->
		<div class="tour-content-1 clearfix">
			<div class="tour-content-1-1 clearfix">
				<div class="margin10px">
					<div class="dt-tittle">
						<p>TP.HCM - CẦN THƠ - BẾN NINH KIỀU - VƯỜN CÒ - CHÙA ÔNG - Bến Tre - Cần Thơ - Bến Ninh Kiều</p>
					</div>
					<div class="dt-table">
						<table>
						  <tr>
						    <th>Ngày khởi hành</th>
						    <th>Nơi khởi hành</th>
						    <th>Thời gian</th>
						    <th>Số chỗ còn trống</th>
						  </tr>
						  <tr>
						    <td>14/2/2018</td>
						    <td>TP.Hồ Chí Minh</td>
						    <td>3 ngày 2 đêm</td>
						    <td>5</td>
						  </tr>

						</table>
					</div>
					<div class="dt-tittle2">
						<p>GIÁ TOUR CHI TIẾT</p>
					</div>
					<div class="dt-table tb2">
						<table>
						  <tr>
						    <th></th>
						    <th>Giá người lớn</th>
						    <th>Giá người trẻ em (từ 5 đến 12 tuổi)</th>
						    <th>Giá người trẻ nhỏ (từ 2 đến 5 tuổi)</th>
						    <th>Giá trẻ nhỏ (dưới 2 tuổi)</th>
						  </tr>
						  <tr>
						    <td>Giá tour cơ bản</td>
						    <td>0 VND</td>
						    <td>0 VND</td>
						    <td>0 VND</td>
						    <td>0 VND</td>
						  </tr>
						  <tr>
						    <td>Phụ thu phòng đơn</td>
						    <td>0 VND</td>
						    <td>0 VND</td>
						    <td>0 VND</td>
						    <td>0 VND</td>
						  </tr>
						</table>
					</div>
					<div class="dt-tittle2">
						<p>THÔNG TIN ĐẶT TOUR</p>
					</div>
					<div class="dt-form">
						
							<form action="">
								<label for="hoten">Họ tên</label>
								<input type="text" id="hoten" name="hoten" placeholder="Your name.." required>

								<label for="sdt">Số điện thoại</label>
								<input type="text" id="sdt" name="sdt" placeholder="Your numberphone.." required>

								<label for="email">Email</label>
								<input type="text" id="email" name="email" placeholder="Your email.." required>
								<label for="diachi">Địa chỉ</label>
								<input type="text" id="diachi" name="diachi" placeholder="Your address.." required>

								<label for="songuoilon">Người lớn</label>
								<input type="text" id="songuoilon" class="songuoilon" name="songuoilon" placeholder="1" required>

								<label for="sotreem">Trẻ em</label>
								<input type="text" class="sotreem" id="sotreem"  name="sotreem" placeholder="1" required>

								<label for="sotrenho">Trẻ nhỏ</label>
								<input type="text" class="sotrenho" id="sotrenho"  name="sotrenho" placeholder="1" required>

								<label for="soembe">Em bé</label>
								<input type="text" class="soembe" id="soembe"  name="soembe" placeholder="1" required>

								<label for="tongcho">Tổng</label>
								<input type="text" class="tongcho" id="tongcho" disabled name="tongcho" placeholder="1" required>

								<label for="ghichu">Ghi chú</label>
								<textarea placeholder="Note.."  id="ghichu" name="ghichu" >
								</textarea>
								
								<label for="thanhtoan">Hình thức thanh toán</label>
								<select id="htthanhtoan" name="htthanhtoan"  onchange="showdetails()" required>
									<option value="khong" selected>Chọn hình thức thanh toán</option>
									<option value="chuyenkhoan">Chuyển khoản</option>
									<option value="tienmat">Tiền mặt</option>
								</select>
								
									<div class="chitietthanhtoan">
										<div id="chuyenkhoan" class="chuyenkhoan">
										<h5>THANH TOÁN CHUYỂN KHOẢN</h5>
										<p>CHẤP NHẬN THANH TOÁN CHUYỂN KHOẢN TỪ ATM / INTERNET BANKING / QUẦY GIAO DỊCH NGÂN HÀNG</p>
										<p>Chủ tài khoản : Trần Văn Châu</p>
										<p>Ngân hàng : Ngân hàng Nông nghiệp và Phát triển Nông thôn Việt Nam.</p>
										<p>Số tài khoản : 0123456789123</p>
									</div>
									<div id="tienmat" class="tienmat">
										<p>Xin lỗi quý khách, hiện tại chỉ cho phép thanh toán bằng chuyển khoản.</p>
									</div>
									</div>
								

								<label for="tongtien">Tổng tiền</label>
								<input type="text" class="tongtien" id="tongtien" disabled name="tongtien" placeholder="1">

								<input type="submit" value="Đặt tour">
							</form>


						
					</div>
				</div>
			</div>
		<!-- SideBar -->
			<div class="tour-content-side-bar">
				<div class="margin10px">
					<div class="sidebar-tour center">
						<p class="sidebar-header">TOUR MỚI NHẤT</p>
						<div class="marginbottom10px">
							<img src="images/tour/anh-slide-bar-270x142.jpg" alt="">
							<a class="sidebar-tittle clearfix" href="">Bến Tre - Cần Thơ - Bến Ninh Kiều - Chợ Nổi - Chùa Ông</a>
						</div>
						<div class="marginbottom10px">
							<img src="images/tour/anh-slide-bar-270x142.jpg" alt="">
							<a class="sidebar-tittle clearfix" href="">Bến Tre - Cần Thơ - Bến Ninh Kiều - Chợ Nổi - Chùa Ông</a>
						</div>
						<div class="marginbottom10px">
							<img src="images/tour/anh-slide-bar-270x142.jpg" alt="">
							<a class="sidebar-tittle clearfix" href="">Bến Tre - Cần Thơ - Bến Ninh Kiều - Chợ Nổi - Chùa Ông</a>
						</div>
					</div>
					<div class="sidebar-diadiem center">
						<p class="sidebar-header">ĐỊA ĐIỂM NỔI BẬT</p>
						
						<div class="marginbottom10px">
							<img src="images/tour/anh-slide-bar-2-270x142.jpg" alt="">
							<a class="sidebar-tittle clearfix" href="">BẾN NINH KIỀU</a>
						</div>
						<div class="marginbottom10px">
							<img src="images/tour/anh-slide-bar-2-270x142.jpg" alt="">
							<a class="sidebar-tittle clearfix" href="">BẾN NINH KIỀU</a>
						</div>
						<div class="marginbottom10px">
							<img src="images/tour/anh-slide-bar-2-270x142.jpg" alt="">
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
	<!-- End Footer -->

	</div>
</body>	
</html>