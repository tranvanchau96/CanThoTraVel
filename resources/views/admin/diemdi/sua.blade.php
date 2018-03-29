
@extends('admin.layout.index')

@section('content')
	<div id="page-wrapper">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">Điểm đi
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

	                <form action="" method="POST">
	                    <input type="hidden" name="_token" value="{{csrf_token()}}">
	                    <div class="form-group">
	                        <label>ID</label>
	                        <input class="form-control" name="id" disabled value="{{$diemdi->id}}" placeholder="Vui lòng nhập ID điểm đi" />
	                    </div>

	                    <div class="form-group">
	                        <label>Tên điểm đi</label>
	                        <input class="form-control" name="tendiemdi" value="{{$diemdi->tendiemdi}}" placeholder="Vui lòng nhập tên điểm đi" />
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
