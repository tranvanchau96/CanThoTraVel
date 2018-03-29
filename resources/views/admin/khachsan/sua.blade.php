
@extends('admin.layout.index')

@section('content')
	<div id="page-wrapper">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">Khách sạn
	                    <small>{{$khachsan->ten}}</small>
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

	                <form action="admin/khachsan/sua/{{$khachsan->id}}" method="POST">
	                	<input type="hidden" name="_token" value="{{csrf_token()}}">
	                	<div class="form-group">
                            <label>ID</label>
                            <input class="form-control" name="id" disabled value="{{$khachsan->id}}" />
                        </div>
	                    <div class="form-group">
                            <label>Tên khách sạn</label>
                            <input class="form-control" name="ten" placeholder="Vui lòng nhập tên khách sạn" value="{{$khachsan->ten}}" />
                        </div>

                        <div class="form-group">
                            <label>URL</label>
                            <input class="form-control" name="url" placeholder="Vui lòng nhập URL" value="{{$khachsan->url}}" />
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
