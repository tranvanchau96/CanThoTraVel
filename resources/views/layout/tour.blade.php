<div class="tour-list">
	<!-- <div class="t-content clearfix ">
		<div class="t-menu ">
			<p><a href="#">TP.HỒ CHÍ MINH - CẦN THƠ</a></p>
			<p><a href="#">CÀ MAU - CẦN THƠ</a></p>
			<p><a href="#">SÓC TRĂNG - CẦN THƠ</a></p>
		</div>
		<div class="t-menu">
			<p><a href="#">BẾN TRE - CẦN THƠ</a></p>#
			<p><a href="#">AN GIANG - CẦN THƠ</a></p>
			<p><a href="#">HẢI PHÒNG - CẦN THƠ</a></p>
		</div>
	</div> -->
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

		<div class="index-tour-xemthem">
			<p><a href="tour.html" target="_blank">XEM THÊM</a></p>

		</div>
	
</div>