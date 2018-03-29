
@extends('admin.layout.index')

@section('content')
	<div id="page-wrapper">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">Điểm tham quan
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

	                <form action="admin/diemthamquan/sua/{{$diemthamquan->id}}" method="POST" enctype="multipart/form-data">
	                    <input type="hidden" name="_token" value="{{csrf_token()}}">
	                    <div class="form-group">
	                        <label>ID</label>
	                        <input class="form-control" name="id" value="{{$diemthamquan->id}}" disabled  />
	                    </div>

	                    <div class="form-group">
	                        <label>Tên điểm tham quan</label>
	                        <input class="form-control" name="ten" value="{{$diemthamquan->ten}}"  />
	                    </div>

	                    <div class="form-group">
	                        <label>Giới thiệu</label>
	                        <textarea   class="form-control" name="gioithieu" rows="7">{{$diemthamquan->gioithieu}} </textarea>
	                    </div>

	                    <div class="form-group">
	                        <label>Nội dung mục Xưa 1</label>
	                         <textarea class="form-control" name="text1"  rows="7" placeholder="Vui lòng nhập tên điểm tham quan">{{$diemthamquan->text1}}</textarea> 
	                    </div>

	                    <div class="form-group">
	                        <label>Nội dung mục Xưa 2</label>
	                        <textarea class="form-control" name="text2" rows="7" placeholder="Vui lòng nhập tên điểm tham quan" />{{$diemthamquan->text2}}</textarea>
	                    </div>

	                    <div class="form-group">
	                        <label>Nội dung mục Nay 1</label>
	                        <textarea class="form-control" name="text3" rows="7" placeholder="Vui lòng nhập tên điểm tham quan" />{{$diemthamquan->text3}}</textarea>
	                    </div>

	                    <div class="form-group">
	                        <label>Nội dung mục Nay 2</label>
	                        <textarea class="form-control" name="text4" rows="7" placeholder="Vui lòng nhập tên điểm tham quan" />{{$diemthamquan->text4}}</textarea> 
	                    </div>
						<br>			
	                    <div class="form-group">
                            <label>Ảnh Background 1366x380px</label>
                            <br>
                            <img style="width: 220px; height: auto;" id="adminimg" src="images/thamquan/{{$diemthamquan->background}}" alt="">
							<input  type="file" name="background" value="{{$diemthamquan->background}}">
                        </div>
						<br>
                        <div class="form-group">
                            <label>Ảnh Header Xưa 1366x160px</label>
                            <br>
                            <img style="width: 220px; height: auto;" id="adminimg" src="images/thamquan/{{$diemthamquan->headerxua}}" alt="">
							<input  type="file" name="headerxua" value="{{$diemthamquan->headerxua}}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Ảnh Xưa 1 600x391px</label>
                            <br>
                            <img style="width: 220px; height: auto;" id="adminimg" src="images/thamquan/{{$diemthamquan->xua1img600x391}}" alt="">
							<input  type="file" name="xua1img600x391" value="{{$diemthamquan->xua1img600x391}}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Ảnh Xưa 2 710x391px</label>
                            <br>
                            <img style="width: 220px; height: auto;" id="adminimg" src="images/thamquan/{{$diemthamquan->xua2img710x391}}" alt="">
							<input  type="file" name="xua2img710x391" value="{{$diemthamquan->xua2img710x391}}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Ảnh Xưa 3 600x253px</label>
                            <br>
                            <img style="width: 220px; height: auto;" id="adminimg" src="images/thamquan/{{$diemthamquan->xua3img600x253}}" alt="">
							<input  type="file" name="xua3img600x253" value="{{$diemthamquan->xua3img600x253}}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Ảnh Header Nay 1366x160px</label>
                            <br>
                            <img style="width: 220px; height: auto;" id="adminimg" src="images/thamquan/{{$diemthamquan->headernay}}" alt="">
							<input  type="file" name="headernay" value="{{$diemthamquan->headernay}}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Ảnh Background Nay 1366x600px</label>
                            <br>
                            <img style="width: 220px; height: auto;" id="adminimg" src="images/thamquan/{{$diemthamquan->naybgimg1366x160}}" alt="">
							<input  type="file" name="naybgimg1366x160" value="{{$diemthamquan->naybgimg1366x160}}">
                        </div>
						<br>	
                        <div class="form-group">
                            <label>Ảnh Nay 1 1366x160px</label>
                            <br>
                            <img style="width: 220px; height: auto;" id="adminimg" src="images/thamquan/{{$diemthamquan->nay1img668x}}" alt="">
							<input  type="file" name="nay1img668x" value="{{$diemthamquan->nay1img668x}}">
                        </div>
						<br>
                        <div class="form-group">
                            <label>Ảnh Nay 2 1366x160px</label>
                            <br>
                            <img style="width: 220px; height: auto;" id="adminimg" src="images/thamquan/{{$diemthamquan->nay2img668x}}" alt="">
							<input  type="file" name="nay2img668x" value="{{$diemthamquan->nay2img668x}}">
                        </div>
						<br>	
                        <div class="form-group">
                            <label>Ảnh Nay 3 1366x160px</label>
                            <br>
                            <img style="width: 220px; height: auto;" id="adminimg" src="images/thamquan/{{$diemthamquan->nay3img668x}}" alt="">
							<input  type="file" name="nay3img668x" value="{{$diemthamquan->nay3img668x}}">
                        </div>
						<br>	
                        <div class="form-group">
                            <label>Ảnh Nay 4 1366x160px</label>
                            <br>
                            <img style="width: 220px; height: auto;" id="adminimg" src="images/thamquan/{{$diemthamquan->nay4img668x}}" alt="">
							<input  type="file" name="nay4img668x" value="{{$diemthamquan->nay4img668x}}">
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




