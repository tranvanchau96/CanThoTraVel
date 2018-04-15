 
@extends('admin.layout.index')

@section('content')
    <div id="page-wrapper">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">Gmaps
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
	                        <th>Address</th>
	                        <th>Vĩ độ (Latitude)</th>
	                        <th>Kinh độ (Longitude)</th>
	                        <th>Xóa</th>
	                        <th>Sửa</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    @foreach($gmap as $gm)
	                    <tr class="odd gradeX" align="center">
	                        <td>{{$gm->id}}</td>
	                        <td>{{$gm->address}}</td>
	                        <td>{{$gm->latitude}}</td>
	                        <td>{{$gm->longitude}}</td>
	                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/gmaps_geocache/xoa/{{$gm->id}}"> Xóa</a></td>
	                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/gmaps_geocache/sua/{{$gm->id}}">Sửa</a></td>
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
