<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta charset="UTF-8">
	<base href="{{ asset('') }}">
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
	<title>Đặt tour</title>
	<script>
		var msg = '{{Session::get('alert')}}';
		var exist = '{{Session::has('alert')}}';
		if(exist){
			alert(msg);
		}
	</script>
</head>
<body>
	<div class="wrapper-tour-ct">
	<!-- Header -->
		@include('layout.headerchitiet')
	<!-- End Header -->

	<!-- Content -->
		<div class="tour-content-1 clearfix">
			<div class="tour-content-1-1 clearfix">
				<div class="margin10px">
					<div class="dt-tittle">
						<p>{{$tour->tieude}}</p>
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
						    <td>{{$tour->ngaykhoihanh}}</td>
						    <td>{{$tour->noikhoihanh}}</td>
						    <td>{{$tour->songaydi}}</td>
						    <td>{{$tour->sochoconlai}}</td>
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
						    <td>{{$tour->gianguoilon}} VND</td>
						    <td>{{$tour->giatreem}} VND</td>
						    <td>{{$tour->giatrenho}} VND</td>
						    <td>{{$tour->giaembe}} VND</td>
						  </tr>
						  <tr>
						    <td>Phụ thu phòng đơn</td>
						    <td>{{$tour->giaphongdon}} VND</td>
						    
						  </tr>
						</table>
					</div>
					<div class="dt-tittle2">
						<p>THÔNG TIN ĐẶT TOUR</p>
					</div>
					<div class="dt-form">
						@if (session('alert'))
					    <div class="alert alert-success">
					        {{ session('alert') }}
					    </div>
						@endif
							<form action="insert/{{$tour->id}}" method="post">
								<input type="hidden" name="_token" value="{{csrf_token()}}">
								<label for="hoten">Họ tên</label>
								<input type="text" id="hoten" name="hoten" placeholder="Your name.." required>

								<label for="sdt">Số điện thoại</label>
								<input type="text" id="sdt" name="sodienthoai" placeholder="Your numberphone.." required>

								<label for="email">Email</label>
								<input type="text" id="email" name="email" placeholder="Your email.." required>
								<label for="diachi">Địa chỉ</label>
								<input type="text" id="diachi" name="diachi" placeholder="Your address.." required>
 
								<label for="songuoilon">Người lớn</label>
								<input type="text" id="songuoilon" class="songuoilon" name="songuoilon" placeholder="0"  required>

								<label for="sotreem">Trẻ em</label>
								<input type="text" class="sotreem" id="sotreem"  value="0" name="sotreem"   placeholder="0" >

								<label for="sotrenho">Trẻ nhỏ</label>
								<input type="text" class="sotrenho" id="sotrenho" value="0"  name="sotrenho" placeholder="0" >

								<label for="soembe">Em bé</label>
								<input type="text" class="soembe" id="soembe" value="0" name="soembe" placeholder="0" >
								
								<label for="phongdon">Phòng đơn</label>
								<input type="text" class="phongdon" id="phongdon" value="0" name="phongdon" placeholder="0" >
								<br>
								<label for="tongcho">Tổng</label>
								<input type="text" id="tongcho" class="tongcho" readonly disabled>
								<br>
								<label for="ghichu">Ghi chú</label>
								<textarea placeholder="Note.." required  id="ghichu" name="ghichu" >
								</textarea>
								
								<!--  -->
								<input type="hidden" id="gianguoilon" value="{{$tour->gianguoilon}}">
								<input type="hidden" id="giatreem" value="{{$tour->giatreem}}">
								<input type="hidden" id="giatrenho" value="{{$tour->giatrenho}}">
								<input type="hidden" id="giaembe" value="{{$tour->giaembe}}">
								<input type="hidden" id="giaphongdon" value="{{$tour->giaphongdon}}">
								<!--  -->
								<label for="thanhtoan">Hình thức thanh toán</label>
								<select id="htthanhtoan" name="htthanhtoan"  onchange="showdetails()" required>
									<option value="chuyenkhoan" selected>Chọn hình thức thanh toán</option>
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
			@include('layout.tourcontentsidebar')
		<!--End SideBar -->
		</div>
	<!-- End content -->
	@include('layout.quangcao')
	<!-- Footer -->
		@include('layout.footer')
	<!-- End Footer -->

	</div>
</body>	
</html>