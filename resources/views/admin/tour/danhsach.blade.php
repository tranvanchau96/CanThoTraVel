 
@extends('admin.layout.index')

@section('content')
    <div id="page-wrapper">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">Tour
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
	                        <th>Tiêu đề</th>
	                        <th>Ngày khởi hành</th>
	                        <th>Nơi đi</th>
	                        <th>Số ngày đi</th>
	                        <th>Số chỗ</th>
	                        <th>Số chỗ còn lại</th>
	                        <th>Giá người lớn</th>
	                        <th>Giá phòng đơn</th>
	                        <th>Xóa</th>
	                        <th>Sửa</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    @foreach($tour as $t)
	                  		<tr class="odd gradeX" align="center">
                       
	                        <td>{{$t->id}}</td>
	                        <td>{{$t->tieude}}</td>
	                        <td>{{$t->ngaykhoihanh}}</td>
	                        <td>{{$t->diemdi->tendiemdi}}</td>
	                        <td>{{$t->songaydi}}</td>
	                        <td>{{$t->socho}}</td>
	                        <td>{{$t->sochoconlai}}</td>
	                        <td>{{$t->gianguoilon}}</td>
	                        <td>{{$t->giaphongdon}}</td>
	                     
	                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/tour/xoa/{{$t->id}}"> Xóa</a></td>
	                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/tour/sua/{{$t->id}}">Sửa</a></td>
	                   	@endforeach
	                </tbody>
	            </table>
	        </div>
	        <!-- /.row -->
	    </div>
	    <!-- /.container-fluid -->
	</div>
@endsection
