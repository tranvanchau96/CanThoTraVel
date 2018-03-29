
@extends('admin.layout.index')

@section('content')
	<div id="page-wrapper">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">Ảnh tour
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

	                <form action="admin/anhtour/sua/{{$anhtour->id}}" method="POST" enctype="multipart/form-data">
	                    <input type="hidden" name="_token" value="{{csrf_token()}}">
	                    <div class="form-group">
	                        <label>ID Tour</label>
	                        <input class="form-control" name="id_tour" disabled value="{{$anhtour->id_tour}}" />
	                    </div>
	                    <div class="form-group">
	                        <label>Ảnh Slide 1 1366x650px</label>
	                        <img style="width: 220px; height: auto;" id="adminimg" src="images/tour/{{$anhtour->bg1}}" alt="">
	                        <input  type="file" name="bg1" value="{{$anhtour->bg1}}">
	                    </div>

	                    <div class="form-group">
	                        <label>Ảnh Slide 2 1366x650px</label>
	                        <img style="width: 220px; height: auto;" id="adminimg" src="images/tour/{{$anhtour->bg2}}" alt="">
	                        <input  type="file" name="bg2" value="{{$anhtour->bg2}}">
	                    </div>

	                    <div class="form-group">
	                        <label>Ảnh Slide 3 1366x650px</label>
	                        <img style="width: 220px; height: auto;" id="adminimg" src="images/tour/{{$anhtour->bg3}}" alt="">
	                        <input  type="file" name="bg3" value="{{$anhtour->bg3}}">
	                    </div>

	                    <div class="form-group">
	                        <label>Ảnh Slide 4 1366x650px</label>
	                        <img style="width: 220px; height: auto;" id="adminimg" src="images/tour/{{$anhtour->bg4}}" alt="">
	                        <input  type="file" name="bg4" value="{{$anhtour->bg4}}">
	                    </div>

	                    <div class="form-group">
	                         <label>Ảnh Thumn 1 270x142px</label>
	                        <img style="width: 220px; height: auto;" id="adminimg" src="images/tour/{{$anhtour->thumn1}}" alt="">
	                        <input  type="file" name="thumn1" value="{{$anhtour->thumn1}}">
	                    </div>

	                    <div class="form-group">
	                        <label>Ảnh Thumn 2 270x142px</label>
	                        <img style="width: 220px; height: auto;" id="adminimg" src="images/tour/{{$anhtour->thumn2}}" alt="">
	                        <input  type="file" name="thumn2" value="thumn2">
	                    </div>


	                    <button type="submit" class="btn btn-default">Lưu</button>
	                    <button type="reset" class="btn btn-default">Làm lại</button>
	                <form>
	            </div>
	        </div>
	        <!-- /.row -->
	    </div>
	    <!-- /.container-fluid -->
	</div>
@endsection
