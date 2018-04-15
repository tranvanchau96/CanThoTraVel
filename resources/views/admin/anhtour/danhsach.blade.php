 
@extends('admin.layout.index')

@section('content')
    <div id="page-wrapper">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">Ảnh Tour
	                    <small>Danh sách</small>
	                </h1>
	            </div>
	            <!-- /.col-lg-12 -->
	            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	                <thead>
	                    <tr align="center">
	                        <th>ID</th>
	                        <th>ID_TOUR</th>
	                        <th>Ảnh BG1</th>
	                        <th>Ảnh BG2</th>
	                        <th>Ảnh BG3</th>
	                        <th>Ảnh BG4</th>
	                        <th>Ảnh Thumn1</th>
	                        <th>Ảnh Thumn2</th>
	                        
	                        <th>Sửa</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    @foreach($anhtour as $at)
	                    <tr class="odd gradeX" align="center">
	                        <td>{{$at->id}}</td>
	                        <td>{{$at->id_tour}}</td>
	                        <td><img style="width: 220px; height: auto;" id="adminimg" src="images/tour/{{$at->bg1}}" alt=""></td>
	                        <td><img style="width: 220px; height: auto;" id="adminimg" src="images/tour/{{$at->bg2}}" alt=""></td>
	                        <td><img style="width: 220px; height: auto;" id="adminimg" src="images/tour/{{$at->bg3}}" alt=""></td>
	                        <td><img style="width: 220px; height: auto;" id="adminimg" src="images/tour/{{$at->bg4}}" alt=""></td>
	                        <td><img style="width: 220px; height: auto;" id="adminimg" src="images/tour/{{$at->thumn1}}" alt=""></td>
	                        <td><img style="width: 220px; height: auto;" id="adminimg" src="images/tour/{{$at->thumn2}}" alt=""></td>
	                        
	                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/anhtour/sua/{{$at->id}}">Sửa</a></td>
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
