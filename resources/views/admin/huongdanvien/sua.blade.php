
@extends('admin.layout.index')

@section('content')
	<div id="page-wrapper">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">Hướng dẫn viên
	                    <small>{{$huongdanvien->hoten}}</small>
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

	                <form action="admin/huongdanvien/sua/{{$huongdanvien->id}}" method="POST">
	                	<input type="hidden" name="_token" value="{{csrf_token()}}">
	                	<div class="form-group">
                            <label>ID</label>
                            <input class="form-control" name="id" disabled placeholder="Vui lòng nhập họ tên" value="{{$huongdanvien->id}}" />
                        </div>
	                    <div class="form-group">
                            <label>Họ Tên</label>
                            <input class="form-control" name="hoten" placeholder="Vui lòng nhập họ tên" value="{{$huongdanvien->hoten}}" />
                        </div>

                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input class="form-control" name="sodienthoai" placeholder="Vui lòng nhập số điện thoại" value="{{$huongdanvien->sodienthoai}}" />
                        </div>

                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input class="form-control" name="diachi" placeholder="Vui lòng nhập địa chỉ" value="{{$huongdanvien->diachi}}" />
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
