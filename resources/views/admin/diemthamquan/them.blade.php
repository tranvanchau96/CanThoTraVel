 
@extends('admin.layout.index')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Điểm tham quan
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
                    <form action="admin/diemthamquan/them" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Tên</label>
                            <input class="form-control" name="ten" placeholder="Vui lòng nhập tên điểm tham quan" />
                        </div>

                        <div class="form-group">
                            <label>Giới thiệu</label>
                            <textarea   class="form-control " name="gioithieu" rows="7"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Nội dung mục Xưa 1</label>
                            <textarea class="form-control" name="text1"  rows="7" placeholder="Vui lòng nhập tên điểm tham quan"></textarea> 
                        </div>

                        <div class="form-group">
                            <label>Nội dung mục Xưa 2</label>
                            <textarea class="form-control" name="text2" rows="7" placeholder="Vui lòng nhập tên điểm tham quan" /></textarea> 
                        </div>

                        <div class="form-group">
                            <label>Nội dung mục Nay 1</label>
                            <textarea class="form-control" name="text3" rows="7" placeholder="Vui lòng nhập tên điểm tham quan" /></textarea> 
                        </div>

                        <div class="form-group">
                            <label>Nội dung mục Nay 2</label>
                            <textarea class="form-control" name="text4" rows="7" placeholder="Vui lòng nhập tên điểm tham quan" /></textarea> 
                        </div>
                        
                        <div class="form-group">
                            <label>Ảnh Background 1366x380px</label>
                            <input type="file" class="form-control" name="background" placeholder="Vui lòng nhập tên điểm tham quan" />
                        </div>

                        <div class="form-group">
                            <label>Ảnh Header Xưa 1366x160px</label>
                            <input type="file" class="form-control" name="headerxua" placeholder="Vui lòng nhập tên điểm tham quan" />
                        </div>
                        <div class="form-group">
                            <label>Ảnh Xưa 1 600x391px</label>
                            <input type="file" class="form-control" name="xua1img600x391" placeholder="Vui lòng nhập tên điểm tham quan" />
                        </div>
                        <div class="form-group">
                            <label>Ảnh Xưa 2 710x391px</label>
                            <input type="file" class="form-control" name="xua2img710x391" placeholder="Vui lòng nhập tên điểm tham quan" />
                        </div>
                        
                        <div class="form-group">
                            <label>Ảnh Xưa 3 600x253px</label>
                            <input type="file" class="form-control" name="xua3img600x253" placeholder="Vui lòng nhập tên điểm tham quan" />
                        </div>
                        
                        <div class="form-group">
                            <label>Ảnh Header Nay 1366x160px</label>
                            <input type="file" class="form-control" name="headernay" placeholder="Vui lòng nhập tên điểm tham quan" />
                        </div>
                        
                        <div class="form-group">
                            <label>Ảnh Background Nay 1366x600px</label>
                            <input type="file" class="form-control" name="naybgimg1366x160" placeholder="Vui lòng nhập tên điểm tham quan" />
                        </div>

                        <div class="form-group">
                            <label>Ảnh Nay 1 1366x160px</label>
                            <input type="file" class="form-control" name="nay1img668x" placeholder="Vui lòng nhập tên điểm tham quan" />
                        </div>

                        <div class="form-group">
                            <label>Ảnh Nay 2 1366x160px</label>
                            <input type="file" class="form-control" name="nay2img668x" placeholder="Vui lòng nhập tên điểm tham quan" />
                        </div>

                        <div class="form-group">
                            <label>Ảnh Nay 3 1366x160px</label>
                            <input type="file" class="form-control" name="nay3img668x" placeholder="Vui lòng nhập tên điểm tham quan" />
                        </div>

                        <div class="form-group">
                            <label>Ảnh Nay 4 1366x160px</label>
                            <input type="file" class="form-control" name="nay4img668x" placeholder="Vui lòng nhập tên điểm tham quan" />
                        </div>

                        <button type="submit" class="btn btn-default">Thêm</button>
                        <button type="reset" class="btn btn-default">Làm lại</button>
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection

