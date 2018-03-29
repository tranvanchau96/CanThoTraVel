<div class="tour-content-side-bar">
				<div class="margin10px">
					
					<div class="sidebar-tour center">
						<p class="sidebar-header">TOUR MỚI NHẤT</p>
						
						@foreach($tourmoinhat as $tmn)
						<div class="marginbottom10px">
							<div class="img270x142">
								<img id="thumn2" src="images/tour/{{$tmn->anhtour->thumn2}}" alt="">
							</div>
													
							<a class="sidebar-tittle clearfix" href="chitiettour/{{$tmn->id}}/{{$tmn->tieudekhongdau}}.html">{{ $tmn->tieude }}</a>
						</div>
						@endforeach	
						

					</div>

					<div class="sidebar-diadiem center">
						<p class="sidebar-header">ĐỊA ĐIỂM NỔI BẬT</p>
						
						@foreach($diemthamquandexuat as $dtqdx)
						<div class="marginbottom10px">
							<div class="img270x142">
								<img src="images/thamquan/{{$dtqdx->nay1img668x}}" alt="">
							</div>
							<a class="sidebar-tittle clearfix" href="diemthamquan/{{$dtqdx->id}}/{{$dtqdx->tenkhongdau}}.html">{{$dtqdx->ten}}</a>
						</div>
						@endforeach
						
					</div>
				</div>
			</div>