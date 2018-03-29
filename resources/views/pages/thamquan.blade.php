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
	<link rel="stylesheet" href="css/thamquanindex.css">
	<link rel="stylesheet" href="css/tour.css">
	<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/tour-chi-tiet.js"></script>
		<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
	<title>Địa điểm tham quan ở Cần Thơ</title>
	
	
</head>
<body>
	<div class="wrapper-tour-ct">
	<!-- Header -->
		@include('layout.headerchitiet')
	<!-- End Header -->
		<div class="thamquanindex-content">
			@foreach($thamquan as $tqindex)
				<div class="thamquanIDA clearfix">
					
					<div class="thamquanID-tieude">
						<p>{{$tqindex->ten}}</p>
					</div>
					<div class="thamquanID-text">
						<p>{{$tqindex->gioithieu}}</p>
					</div>
					
					<img id="thamquanIDbgA" src="images/thamquan/{{$tqindex->naybgimg1366x160}}" alt="">
						
					<div class="thamquan-more">
						<a href="diemthamquan/{{$tqindex->id}}/{{$tqindex->tenkhongdau}}.html" id="thamquan-more">Xem thêm</a>
					</div>
					
				</div>
			@endforeach
		</div>
	</div>

	@include('layout.footer')
</body>	
</html>