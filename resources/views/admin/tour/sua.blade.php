 
@extends('admin.layout.index')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tour
                        <small>Sửa</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @if(count($errors) >0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
								{{$err}}<br>
							@endforeach
						</div>
					@endif

					@if(session('thongbao'))
						<div class="alert alert-success">
							{{session('thongbao')}}
						</div>
					@endif
                    <form action="admin/tour/sua/{{$tour->id}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>ID Tour</label>
                            <input class="form-control" value="{{$tour->id}}" disabled />
                        </div>
                        <div class="form-group">
                            <label>Điểm đi</label>
                            <select class="form-control" name="id_diemdi">
                                @foreach($diemdi as $dd)
                                    @if($tour->id_diemdi == $dd->id)
                                    	<option value="{{$dd->id}}" selected>{{$dd->tendiemdi}}</option>
                                    @else
                                    	<option value="{{$dd->id}}">{{$dd->tendiemdi}}</option>
									@endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Chọn khách sạn</label>
                            <select class="form-control" name="id_khachsan">
                                @foreach($khachsan as $ks)
                                    
                                    @if($tour->id_khachsan == $ks->id)
                                    	<option value="{{$ks->id}}" selected>{{$ks->ten}}</option>
                                    @else
                                    	<option value="{{$ks->id}}">{{$ks->ten}}</option>
									@endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Chọn hướng dẫn viên</label>
                            <select class="form-control" name="id_huongdanvien">
                                @foreach($huongdanvien as $hdv)
                                    
                                    @if($tour->id_huongdanvien == $hdv->id)
                                    	<option value="{{$hdv->id}}" selected>{{$hdv->hoten}}</option>
                                    @else
                                    	<option value="{{$hdv->id}}">{{$hdv->hoten}}</option>
									@endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input class="form-control" name="tieude" value="{{$tour->tieude}}" placeholder="Vui lòng nhập tiêu đề" required />
                        </div>
                        <div class="form-group">
                            <label>Ngày khởi hành</label>
                            <input type="date" class="form-control" value="{{$tour->ngaykhoihanh}}" name="ngaykhoihanh" placeholder="Please Enter Category Order" required />
                        </div>
                        
                        <div class="form-group">
                            <label>Giờ khởi hành</label>
                            <input type="time" class="form-control" value="{{$tour->giokhoihanh}}" name="giokhoihanh" placeholder="Please Enter Category Order" required />
                        </div>
                        
                        <div class="form-group">
                            <label>Nơi khởi hành</label>
                            <input class="form-control" name="noikhoihanh" value="{{$tour->noikhoihanh}}" placeholder="Please Enter Category Order" required />
                        </div>
                        
                        <div class="form-group">
                            <label>Giờ tập trung</label>
                            <input type="time" class="form-control" value="{{$tour->giotaptrung}}" name="giotaptrung" placeholder="Please Enter Category Order" required />
                        </div>
                        
                        <div class="form-group">
                            <label>Số ngày đi</label>
                            <input class="form-control" value="{{$tour->songaydi}}" name="songaydi" placeholder="Please Enter Category Order" required />
                        </div>
                        <div class="form-group">
                            <label>Số chỗ</label>
                            <input class="form-control" value="{{$tour->socho}}" name="socho" placeholder="Please Enter Category Order" required />
                        </div>
                        <div class="form-group">
                            <label>Giới thiệu</label>
                            <textarea  class="form-control" name="gioithieu" rows="10" required />{{$tour->gioithieu}}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Lịch trình</label>
                            <textarea  class="form-control" name="lichtrinh" rows="25" required />{{$tour->lichtrinh}}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Điều khoản</label>
                            <textarea  class="form-control" name="dieukhoan" rows="55" required />{{$tour->dieukhoan}}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Giá người lớn</label>
                            <input class="form-control" value="{{$tour->gianguoilon}}" name="gianguoilon" placeholder="Please Enter Category Order" required />
                        </div>
                        <div class="form-group">
                            <label>Giá trẻ em</label>
                            <input class="form-control" value="{{$tour->giatreem}}" name="giatreem" placeholder="Please Enter Category Order" required />
                        </div>
                        <div class="form-group">
                            <label>Giá trẻ nhỏ</label>
                            <input class="form-control" value="{{$tour->giatrenho}}" name="giatrenho" placeholder="Please Enter Category Order" required />
                        </div>
                        <div class="form-group">
                            <label>Giá em bé</label>
                            <input class="form-control" value="{{$tour->giaembe}}" name="giaembe" placeholder="Please Enter Category Order" required />
                        </div>
                        <div class="form-group">
                            <label>Giá phòng đơn</label>
                            <input class="form-control" value="{{$tour->giaphongdon}}" name="giaphongdon" placeholder="Please Enter Category Order" required />
                        </div>
                        
                        <h1 class="page-header" style="font-size: 20px">
	                        Thêm ảnh tour
	                    </h1>
	                    <div class="form-group">
	                        <label>Ảnh Slide 1 1366x650px</label> <br>
	                        <img style="width: 220px; height: auto;" id="adminimg" src="images/tour/{{$tour->anhtour->bg1}}" alt="">
	                        <input type="file" class="form-control" name="bg1" />
	                    </div>

	                    <div class="form-group">
	                        <label>Ảnh Slide 2 1366x650px</label> <br>
	                        <img style="width: 220px; height: auto;" id="adminimg" src="images/tour/{{$tour->anhtour->bg2}}" alt="">
	                        <input type="file" class="form-control" name="bg2" />
	                    </div>

	                    <div class="form-group">
	                        <label>Ảnh Slide 3 1366x650px</label> <br>
	                        <img style="width: 220px; height: auto;" id="adminimg" src="images/tour/{{$tour->anhtour->bg3}}" alt="">
	                        <input type="file" class="form-control" name="bg3" />
	                    </div>

	                    <div class="form-group">
	                        <label>Ảnh Slide 4 1366x650px</label> <br>
	                        <img style="width: 220px; height: auto;" id="adminimg" src="images/tour/{{$tour->anhtour->bg4}}" alt="">
	                        <input type="file" class="form-control" name="bg4" />
	                    </div>

	                    <div class="form-group">
	                        <label>Ảnh Thumn 1 270x142px</label> <br>
	                        <img style="width: 220px; height: auto;" id="adminimg" src="images/tour/{{$tour->anhtour->thumn1}}" alt="">
	                        <input type="file" class="form-control" name="thumn1" />
	                    </div>

	                    <div class="form-group">
	                        <label>Ảnh Thumn 2 270x142px</label> <br>
	                        <img style="width: 220px; height: auto;" id="adminimg" src="images/tour/{{$tour->anhtour->thumn2}}" alt="">
	                        <input type="file" class="form-control" name="thumn2" />
	                    </div>
						
						<h1 class="page-header" style="font-size: 20px">
	                        Thêm tọa độ điểm tham quan
	                    </h1>

	                    <div class="form-group">
                          		<label>Địa điểm tham quan đã chọn</label>
								@foreach($toado as $td)
									@if($td->id_tour == $tour->id)
									<div class="checkbox">
										<label><input type="checkbox"  value="{{$td->id_gmaps}}" disabled checked>{{$td->gmaps_geocache->address}}</label>
									</div> 
                        			@endif
                        		@endforeach	
                        		<label>Vui lòng chọn lại địa điểm tham quan (kể cả địa điểm đã chọn ở trên) </label>
                        		@foreach($gmaps as $gm)
									@if($gm->id == 2)
                            			<div class="checkbox">
							  				<label><input type="checkbox" disabled value="{{$gm->id}}">{{$gm->address}}</label>
							  			</div>

							  		@else
								  		<div class="checkbox">
								  			<label><input type="checkbox" name="id_gmaps[]" value="{{$gm->id}}">{{$gm->address}}</label>
										</div>
									@endif
                        		@endforeach
                        	
                        </div>
                        <button type="submit" class="btn btn-default">Sửa</button>
                        <button type="reset" class="btn btn-default">Làm lại</button>
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection




