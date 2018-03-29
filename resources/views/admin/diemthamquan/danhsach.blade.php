 
@extends('admin.layout.index')

@section('content')
    <div id="page-wrapper">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">Điểm tham quan
	                    <small>Danh sách</small>
	                </h1>
	            </div>
	            <!-- /.col-lg-12 -->
	            <div class="col-lg-7">
					@if(session('thongbao'))
					<div class="alert alert-success">
						{{session('thongbao')}}
					</div>
					@endif
				</div>
	            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	                <thead>
	                    <tr align="center">
	                        <th>ID</th>
	                        <th>Tên điểm than quan</th>
	                        <!-- <th>Tên không dấu</th> -->
	                        <th style="width: 300px;">Giới thiệu</th>
	                        <th style="width: 300px;">Văn bản 1</th>
	                        <!-- <th style="width: 300px;">Văn bản 2</th> -->
	                       <!--  <th style="width: 300px;">Văn bản 3</th>
	                        <th style="width: 300px;">Văn bản 4</th> -->
	                        <!-- <th>Ảnh nền</th>
	                        <th>Ảnh header mục Xưa</th>
	                        <th>Ảnh xưa 600x391px</th>
							<th>Ảnh xưa 710x391px</th>
							<th>Ảnh xưa 600x253px</th>
							<th>Ảnh header mục Nay</th>
							<th>Ảnh Background mục Nay</th>
							<th>Ảnh nay 668px 1</th>
							<th>Ảnh nay 668px 2</th>
							<th>Ảnh nay 668px 3</th>
							<th>Ảnh nay 668px 4</th> -->

	                        <th>Xóa</th>
	                        <th>Sửa</th>
	                    </tr>
	                </thead>
	                <tbody>
	                	@foreach($diemthamquan as $dtq)
	                    <tr class="odd gradeX" align="center">
	                        <td>{{$dtq->id}}</td>
	                        <td>{{$dtq->ten}}</td>
	                       <!--  <td>{{$dtq->tenkhongdau}}</td> -->
	                        <td>{{$dtq->gioithieu}}</td>
	                        <td>{{$dtq->text1}}</td>
	                        <!-- <td>{{$dtq->text2}}</td> -->
	                        <!-- <td>{{$dtq->text3}}</td>
	                        <td>{{$dtq->text4}}</td> -->
	                        <!-- <td><img style="width: 220px; height: auto;" id="adminimg" src="images/thamquan/{{$dtq->background}}" alt=""></td>
	                        <td><img style="width: 220px; height: auto;" id="adminimg" src="images/thamquan/{{$dtq->headerxua}}" alt=""></td>
	                        <td><img style="width: 220px; height: auto;" id="adminimg" src="images/thamquan/{{$dtq->xua1img600x391}}" alt=""></td>
	                        <td><img style="width: 220px; height: auto;" id="adminimg" src="images/thamquan/{{$dtq->xua2img710x391}}" alt=""></td>
	                        <td><img style="width: 220px; height: auto;" id="adminimg" src="images/thamquan/{{$dtq->xua3img600x253}}" alt=""></td>
	                        <td><img style="width: 220px; height: auto;" id="adminimg" src="images/thamquan/{{$dtq->headernay}}" alt=""></td>
	                        <td><img style="width: 220px; height: auto;" id="adminimg" src="images/thamquan/{{$dtq->naybgimg1366x160}}" alt=""></td>
	                        <td><img style="width: 220px; height: auto;" id="adminimg" src="images/thamquan/{{$dtq->nay1img668x}}" alt=""></td>
	                        <td><img style="width: 220px; height: auto;" id="adminimg" src="images/thamquan/{{$dtq->nay2img668x}}" alt=""></td>
	                        <td><img style="width: 220px; height: auto;" id="adminimg" src="images/thamquan/{{$dtq->nay3img668x}}" alt=""></td>
	                        <td><img style="width: 220px; height: auto;" id="adminimg" src="images/thamquan/{{$dtq->nay4img668x}}" alt=""></td> -->
	                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/diemthamquan/xoa/{{$dtq->id}}"> Xóa</a></td>
	                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/diemthamquan/sua/{{$dtq->id}}">Sửa</a></td>
	                    </tr>
	                    @endforeach
	                </tbody>
	            </table>
	        </div>
	        <!-- /.row -->
	    </div>
	    <!-- /.container-fluid -->
	</div>
@endsection
