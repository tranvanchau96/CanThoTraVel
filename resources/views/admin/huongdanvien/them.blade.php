 
@extends('admin.layout.index')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Hướng dẫn viên
                        <small>Thêm</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>
                @endif

                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
                    <form action="admin/huongdanvien/them" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Họ Tên</label>
                            <input class="form-control" name="hoten" placeholder="Vui lòng nhập họ tên" />
                        </div>

                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input class="form-control" name="sodienthoai" placeholder="Vui lòng nhập số điện thoại" />
                        </div>

                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input class="form-control" name="diachi" placeholder="Vui lòng nhập địa chỉ" />
                        </div>

                        <button type="submit" class="btn btn-default">Thêm</button>
                        <button type="reset" class="btn btn-default">Nhập lại</button>
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection