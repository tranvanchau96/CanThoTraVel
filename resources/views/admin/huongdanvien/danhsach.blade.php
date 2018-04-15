 
@extends('admin.layout.index')

@section('content')
    <div id="page-wrapper">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">Hướng Dẫn Viên
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
	                        <th>Họ Tên</th>
	                        <th>Số điện thoại</th>
	                        <th>Địa chỉ</th>
	                        <th>Xóa</th>
	                        <th>Sửa</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    @foreach($huongdanvien as $hdv)
	                    <tr class="odd gradeX" align="center">
	                        <td>{{$hdv->id}}</td>
	                        <td>{{$hdv->hoten}}</td>
	                        <td>{{$hdv->sodienthoai}}</td>
	                        <td>{{$hdv->diachi}}</td>
	                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/huongdanvien/xoa/{{$hdv->id}}">Xóa</a></td>
	                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/huongdanvien/sua/{{$hdv->id}}">Sửa</a></td>
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
