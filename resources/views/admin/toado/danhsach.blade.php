 
@extends('admin.layout.index')

@section('content')
    <div id="page-wrapper">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">Tọa độ
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
	                        <th>ID_TOUR</th>
	                        <th>Tên Tour</th>
	                        <th>ID_GMAPS</th>
	                         <th>Address</th>
	                        <th>Delete</th>
	                        
	                    </tr>
	                </thead>
	                <tbody>
	                    @foreach($toado as $td)
	                    <tr class="odd gradeX" align="center">

	                        <td>{{$td->id}}</td>
	                        <td>{{$td->id_tour}}</td>
	                        <td>{{$td->tour->tieude}}</td>
	                        <td>{{$td->id_gmaps}}</td>
	                        <td>{{$td->gmaps_geocache->address}}</td>

	                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/toado/xoa/{{$td->id}}"> Xóa</a></td>
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
