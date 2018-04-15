 
@extends('admin.layout.index')

@section('content')
    <div id="page-wrapper">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">Đặt Tour
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
	                        <th>ID Tour</th>
	                        <th>Họ Tên </th>
	                        <th>Địa chỉ</th>
	                        <th>Số điện thoại</th>
	                        <th>Ngày đặt</th>
	                        <th>Ghi chú</th>
	                        <th>Số người lớn</th>
	                        <th>Số trẻ em</th>
	                        <th>Số trẻ nhỏ</th>
	                        <th>Số em bé</th>
	                        <th>Phòng đơn</th>
	                        <th>Tổng chố</th>
	                        <th>Tổng tiền</th>
	                        <th>Hình thức thanh toán</th>
	                        <th>Trạng thái thanh toán</th>
	                        <th>Xóa</th>
	                        <th>Sửa</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    @foreach($dattour as $dt)
		                    <tr class="odd gradeX" align="center">
		                        <td>{{$dt->id}}</td>
		                        <td>{{$dt->id_tour}}</td>
		                        <td>{{$dt->hoten}}</td>
		                        <td>{{$dt->diachi}}</td>
		                        <td>{{$dt->sodienthoai}}</td>
		                        <td>{{$dt->ngaydat}}</td>
		                        <td>{{$dt->ghichu}}</td>
		                        <td>{{$dt->nguoilon}}</td>
		                        <td>{{$dt->treem}}</td>
		                        <td>{{$dt->trenho}}</td>
		                        <td>{{$dt->embe}}</td>
		                        <td>{{$dt->phongdon}}</td>
		                        <td>{{$dt->tongcho}}</td>
		                        <td>{{$dt->tongtien}}</td>
		                        <td>{{$dt->hinhthucthanhtoan}}</td>
		                        <td>{{$dt->trangthaithanhtoan}}</td>
		                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/dattour/xoa/{{$dt->id}}">Xóa</a></td>
		                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/dattour/sua/{{$dt->id}}">Sửa</a></td>
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
