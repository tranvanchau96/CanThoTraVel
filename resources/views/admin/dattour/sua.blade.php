
@extends('admin.layout.index')

@section('content')
	<div id="page-wrapper">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">Đặt Tour
	                    <small>Sửa</small>
	                </h1>
	            </div>
	            <!-- /.col-lg-12 -->
	            <div class="col-lg-7" style="padding-bottom:120px">
	            	@if(session('thongbao'))
						<div class="alert alert-success">
							{{session('thongbao')}}
						</div>
					@endif
	                <form action="admin/dattour/sua/{{$dattour->id}}" method="POST">
	                    <input type="hidden" name="_token" value="{{csrf_token()}}">
	                    <div class="form-group">
	                        <label>ID Đặt tour</label>
	                        <input class="form-control" disabled name="id" value="{{$dattour->id}}" required />
	                    </div>
	                    <div class="form-group">
	                        <label>ID Tour</label>
	                        <input class="form-control" disabled name="id_tour" value="{{$dattour->id_tour}}" />
	                    </div>
	                    <div class="form-group">
	                        <label>Họ Tên </label>
	                        <input class="form-control" required name="hoten" value="{{$dattour->hoten}}" />
	                    </div>
	                    <div class="form-group">
	                        <label>Địa chỉ</label>
	                        <input class="form-control" required name="diachi" value="{{$dattour->diachi}}" />
	                    </div>
	                    <div class="form-group">
	                        <label>Số điện thoại</label>
	                        <input class="form-control" required name="sodienthoai" value="{{$dattour->sodienthoai}}" />
	                    </div>
	                    
	                    <div class="form-group">
	                        <label>Ghi chú</label>
	                        <input class="form-control" name="ghichu" value="{{$dattour->ghichu}}" />
	                    </div>
	                    <div class="form-group">
	                        <label for="songuoilon">Số người lớn</label>
	                        <input class="form-control" required name="nguoilon" value="{{$dattour->nguoilon}}" id="songuoilon" />
	                    </div>
	                    <div class="form-group">
	                        <label for="sotreem">Số trẻ em</label>
	                        <input class="form-control" required name="treem" value="{{$dattour->treem}}" id="sotreem" />
	                    </div>
	                    <div class="form-group">
	                        <label for="sotrenho">Số trẻ nhỏ</label>
	                        <input class="form-control" required name="trenho" value="{{$dattour->trenho}}" id="sotrenho" />
	                    </div>
	                    <div class="form-group">
	                        <label for="soembe">Số em bé</label>
	                        <input class="form-control" required name="embe" value="{{$dattour->embe}}" id="soembe" />
	                    </div>
	                    <div class="form-group">
	                        <label for="phongdon">Phòng đơn</label>
	                        <input class="form-control" required name="phongdon" value="{{$dattour->phongdon}}" id="phongdon" />
	                    </div>
	                    <div class="form-group">
	                        <label for="tongcho">Tổng chố</label>
	                        <input class="form-control" disabled required name="tongcho" value="{{$dattour->tongcho}}" id="tongcho" />
	                    </div>
	                    <div class="form-group">
	                        <label for="tongtien">Tổng tiền</label>
	                        <input class="form-control" disabled required name="tongtien" value="{{$dattour->tongtien}}" id="tongtien" />
	                    </div>
	                    <div class="form-group">
	                        <label>Hình thức thanh toán</label>
	                        <input class="form-control" disabled required name="hinhthucthanhtoan" value="{{$dattour->hinhthucthanhtoan}}"  />
	                    </div>
	                    <div class="form-group">
	                        <label>Trạng thái thanh toán</label>
	                        <input class="form-control" required name="trangthaithanhtoan" value="{{$dattour->trangthaithanhtoan}}" />
	                    </div>

	                    <input type="hidden" id="gianguoilon" value="{{$tour->gianguoilon}}">
						<input type="hidden" id="giatreem" value="{{$tour->giatreem}}">
						<input type="hidden" id="giatrenho" value="{{$tour->giatrenho}}">
						<input type="hidden" id="giaembe" value="{{$tour->giaembe}}">
						<input type="hidden" id="giaphongdon" value="{{$tour->giaphongdon}}">


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

@section('script')
    <script>
        $(document).ready(function(){
           
		  	$("#songuoilon, #sotreem, #sotrenho, #soembe, #phongdon").keyup(function () {
			    $("#tongcho").val(+$("#songuoilon").val() + +$("#sotreem").val() + +$("#sotrenho").val()+ +$("#soembe").val());
			    $("#tongtien").val(+$("#songuoilon").val()*$("#gianguoilon").val() + +$("#sotreem").val()*$("#giatreem").val() + +$("#sotrenho").val()*$("#giatrenho").val() + +$("#soembe").val()*$("#giaembe").val() + +$("#phongdon").val()*$("#giaphongdon").val());
			});


        });
    </script>
@endsection