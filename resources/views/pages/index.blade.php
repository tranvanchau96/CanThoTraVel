<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<base href="{{asset('')}}">
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
		@include('layout.headerindex')
	
		
		<div id="wp-content" class="wp-inner">
			
<!-- GIỚI THIỆU -->
			@include('layout.gioithieu')

<!-- ĐỊA ĐIỂM THAM QUAN -->
			@include('layout.diadiemthamquan')

<!-- ẨM THỰC -->
			@include('layout.amthuc')

<!-- TOUR -->
			<div class="tour" class="clearfix">
				<div class="parallax2">
					<div class="t-header">
						<p>TOUR DU LỊCH</p>
					</div>
				</div>
			</div>	
		<div id="wp-content" class="wp-inner">	
			@include('layout.tour')

<!-- CONTACT -->
			@include('layout.contact')
		</div>

	</div>
<!-- FOOTER -->
	@include('layout.footer')
	</div>
</body>
</html>