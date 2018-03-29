 
@extends('admin.layout.index')

@section('content')
    <div id="page-wrapper">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">Quảng cáo
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
	                        <th>Ảnh</th>
	                        <th>URL</th>
	                        <th>Delete</th>
	                        <th>Edit</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    @foreach($quangcao as $qc)
	                    <tr class="odd gradeX" align="center">
	                        <td>{{$qc->id}}</td>
	                        <td><img style="width: 220px; height: auto;" id="adminimg" src="images/quangcao/{{$qc->anh}}" alt=""></td>
	                        <td>{{$qc->url}}</td>
	                        
	                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/quangcao/xoa/{{$qc->id}}"> Xóa</a></td>
	                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/quangcao/sua/{{$qc->id}}">Sửa</a></td>
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
