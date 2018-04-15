 
@extends('admin.layout.index')

@section('content')
    <div id="page-wrapper">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">Khách sạn
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
	                        <th>Tên khách sạn</th>
	                        <th>Tên không dấu</th>
	                        <th>url</th>
	                        <th>Xóa</th>
	                        <th>Sửa</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    @foreach($khachsan as $ks)
	                    <tr class="odd gradeX" align="center">
	                        <td>{{$ks->id}}</td>
	                        <td>{{$ks->ten}}</td>
	                        <td>{{$ks->tenkhongdau}}</td>
	                        <td>{{$ks->url}}</td>
	                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/khachsan/xoa/{{$ks->id}}"> Xóa</a></td>
	                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/khachsan/sua/{{$ks->id}}">Sửa</a></td>
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
