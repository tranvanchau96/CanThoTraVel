
@extends('admin.layout.index')

@section('content')
	<div id="page-wrapper">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">Quảng cáo
	                    <small>{{$quangcao->id}}</small>
	                </h1>
	            </div>
	            <!-- /.col-lg-12 -->

				

	            <div class="col-lg-7" style="padding-bottom:120px">
	            	@if(session('thongbao'))
					<div class="alert alert-success">
						{{session('thongbao')}}
					</div>
				@endif
	                <form action="admin/quangcao/sua/{{$quangcao->id}}" method="POST" enctype="multipart/form-data">
	                    <input type="hidden" name="_token" value="{{csrf_token()}}">
	                    <div class="form-group">
	                        <label>ID</label>
	                        <input class="form-control" name="id" disabled value="{{$quangcao->id}}" placeholder="Please Enter Category Name" />
	                    </div>
	                    <div class="form-group">
	                        <label>Ảnh</label>
	                        <img style="width: 220px; height: auto;" id="adminimg" src="images/quangcao/{{$quangcao->anh}}" alt="" >
	                        <input type="file" name="anh">
	                    </div>
	                    <div class="form-group">
	                        <label>URL</label>
	                        <input class="form-control" name="url" value="{{$quangcao->url}}" placeholder="Vui lòng nhập URL ảnh" />
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
