
@extends('admin.layout.index')

@section('content')
	<div id="page-wrapper">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">Gmaps
	                    <small>{{$gmap->address}}</small>
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

	                <form action="admin/gmaps_geocache/sua/{{$gmap->id}}" method="POST">
	                	<input type="hidden" name="_token" value="{{csrf_token()}}">
	                	<div class="form-group">
                            <label>ID</label>
                            <input class="form-control" name="id" disabled value="{{$gmap->id}}" />
                        </div>
	                    <div class="form-group">
                            <label>Address (Vui lòng nhập không dấu)</label>
                            <input class="form-control" name="address" value="{{$gmap->address}}" placeholder="Vui lòng nhập address" />
                        </div>

                        <div class="form-group">
                            <label>Latitude</label>
                            <input class="form-control" name="latitude" value="{{$gmap->latitude}}" placeholder="Vui lòng nhập Vĩ độ" />
                        </div>

                        <div class="form-group">
                            <label>Longitude</label>
                            <input class="form-control" name="longitude" value="{{$gmap->longitude}}" placeholder="Vui lòng nhập Kinh độ" />
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
