 
@extends('admin.layout.index')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tour
                        <small>Thêm chi tiết</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                
                <div class="col-lg-7" style="padding-bottom:120px">
                    @if(count($errors) > 0)
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
                    <form action="admin/tour/themchitiettour/{{$tour->id}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
			
                      	<div class="form-group">
	                        <label>ID Tour</label>
	                        <input class="form-control" name="id_tour" disabled value="{{$tour->id}}" />
	                    </div>
						
						<h1 class="page-header" style="font-size: 20px">
	                        Thêm ảnh tour
	                    </h1>
	                    <div class="form-group">
	                        <label>Ảnh Slide 1 1366x650px</label>
	                        <input type="file" class="form-control" name="bg1" />
	                    </div>

	                    <div class="form-group">
	                        <label>Ảnh Slide 2 1366x650px</label>
	                        <input type="file" class="form-control" name="bg2" />
	                    </div>

	                    <div class="form-group">
	                        <label>Ảnh Slide 3 1366x650px</label>
	                        <input type="file" class="form-control" name="bg3" />
	                    </div>

	                    <div class="form-group">
	                        <label>Ảnh Slide 4 1366x650px</label>
	                        <input type="file" class="form-control" name="bg4" />
	                    </div>

	                    <div class="form-group">
	                        <label>Ảnh Thumn 1 270x142px</label>
	                        <input type="file" class="form-control" name="thumn1" />
	                    </div>

	                    <div class="form-group">
	                        <label>Ảnh Thumn 2 270x142px</label>
	                        <input type="file" class="form-control" name="thumn2" />
	                    </div>
						
						<h1 class="page-header" style="font-size: 20px">
	                        Thêm tọa độ điểm tham quan
	                    </h1>

	                    <div class="form-group">
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
                    
                        <button type="submit" class="btn btn-default">Thêm</button>
                        <button type="reset" class="btn btn-default">Làm lại</button>
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection

