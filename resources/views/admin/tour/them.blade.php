 
@extends('admin.layout.index')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tour
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
                    <form action="admin/tour/them" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Chọn điểm đi</label>
                            <select class="form-control" name="id_diemdi">
                                @foreach($diemdi as $dd)
                                    <option value="{{$dd->id}}">{{$dd->tendiemdi}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Chọn khách sạn</label>
                            <select class="form-control" name="id_khachsan">
                                @foreach($khachsan as $ks)
                                    <option value="{{$ks->id}}">{{$ks->ten}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Chọn hướng dẫn viên</label>
                            <select class="form-control" name="id_huongdanvien">
                                @foreach($huongdanvien as $hdv)
                                    <option value="{{$hdv->id}}">{{$hdv->hoten}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input class="form-control" name="tieude" placeholder="Vui lòng nhập tiêu đề" required />
                        </div>
                        <div class="form-group">
                            <label>Ngày khởi hành</label>
                            <input type="date" class="form-control" name="ngaykhoihanh" placeholder="Please Enter Category Order" required />
                        </div>
                        
                        <div class="form-group">
                            <label>Giờ khởi hành</label>
                            <input type="time" class="form-control" name="giokhoihanh" placeholder="Please Enter Category Order" required />
                        </div>
                        
                        <div class="form-group">
                            <label>Nơi khởi hành</label>
                            <input class="form-control" name="noikhoihanh" placeholder="Please Enter Category Order" required />
                        </div>
                        
                        <div class="form-group">
                            <label>Giờ tập trung</label>
                            <input type="time" class="form-control" name="giotaptrung" placeholder="Please Enter Category Order" required />
                        </div>
                        
                        <div class="form-group">
                            <label>Số ngày đi</label>
                            <input class="form-control" name="songaydi" placeholder="Please Enter Category Order" required />
                        </div>
                        <div class="form-group">
                            <label>Số chỗ</label>
                            <input class="form-control" name="socho" placeholder="Please Enter Category Order" required />
                        </div>
                        <div class="form-group">
                            <label>Lịch trình</label>
                            <textarea  class="form-control" name="lichtrinh" rows="25" required />
<h1>Ngày 1</h1>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero vitae ex quo unde harum pariatur illo tempora incidunt, quasi illum, dolore fugit deserunt mollitia modi cumque reiciendis id voluptatem, ducimus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit architecto, doloremque corporis vel earum deserunt sapiente dolores placeat officia, ipsa consectetur maiores at odio error laboriosam. Impedit consequatur, qui porro!
<h1>Ngày 2</h1>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, porro tempore tempora illum omnis ipsam, earum sapiente assumenda harum soluta libero ea nostrum possimus quam at veniam iure perspiciatis dignissimos! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt odio veritatis, eaque. Pariatur recusandae hic ratione dignissimos maiores deleniti. Aperiam a modi quos dolore laudantium libero qui voluptatibus fuga blanditiis.
<h1>Ngày 3</h1>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur reiciendis voluptatibus veniam eos beatae mollitia molestias nostrum, aliquam laborum, nobis tenetur quo magnam! Laborum officia vero hic itaque et libero. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora velit quidem sequi soluta rerum quod, accusamus non minus blanditiis natus unde expedita porro reprehenderit repellendus debitis repudiandae ipsam alias aliquid.
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Điều khoản</label>
                            <textarea  class="form-control" name="dieukhoan" rows="55" required />
<p class="tour-note">Giá tour bao gồm:</p>

- Xe tham quan tùy theo số lượng khách theo chương trình
- Khách sạn theo tiêu chuẩn 2 khách/phòng hoặc 3 khách/phòng
- Vé tham quan theo chương trình
- Hướng dẫn viên tiếng Việt nối tuyến
- Bảo hiểm du lịch với mức bồi thường cao nhất 120.000.000đ/vụ
- Thuế VAT

<p class="tour-note">Giá vé trẻ em:</p>

- Trẻ em từ 0 – dưới 5 tuổi: không thu phí dịch vụ, gia đình tự lo cho bé. Hai người lớn chỉ được kèm 1 trẻ em dưới 5 tuổi, trẻ em thứ 2 phải đóng phí theo quy định dành cho độ tuổi từ 5 đến dưới 12 tuổi và phụ thu giường đơn.
- Trẻ em từ 5 - dưới 12 tuổi: mua 50% vé dịch vụ, bao gồm phương tiện xe vận chuyển, ăn uống, vé tham quan, ngủ chung với gia đình, không có giường riêng. Hai người lớn chỉ được kèm 1 trẻ em từ 5 - dưới 12 tuổi, em thứ hai trở lên phải mua 1 suất giường đơn.
- Trẻ em 12 tuổi trở lên: phải mua vé tour trọn gói như người lớn bao gồm phương tiện vận chuyển, khách sạn, ăn uống theo chương trình, vé tham quan theo qui định các điểm tham quan.

<p class="tour-note">Điều kiện thanh toán:</p>

- Khi đăng ký đặt cọc 50% số tiền tour

<p class="tour-note">Các điều kiện khi đăng ký tour:</p>

- Đối với Khách Quốc tịch Việt Nam: Khi đi tour Trẻ em từ 14 tuổi trở lên và người lớn cần đem theo CMND/Passport (Hộ chiếu) bản chính còn hạn sử dụng, hình ảnh rõ (CMND có thời hạn sử dụng không quá 15 năm, tính từ ngày cấp).
- Đối với khách Nước ngoài/Việt Kiều: Khi đi tour phải mang theo đầy đủ Passport (Hộ Chiếu) bản chính còn hạn sử dụng hoặc thẻ xanh kèm theo Visa và giấy tái xuất nhập Việt Nam.
- Khi đăng ký tour Quý khách vui lòng mang theo CMND/Passport bản chính hoặc cung cấp tên chính xác đầy đủ, đúng từng ký tự trên CMND/ Passport (Hộ chiếu)/Giấy khai sinh (trẻ em dưới 14 tuổi) theo thứ tự: Họ/tên lót/tên.
- Phòng khách sạn/resort có thể xảy ra trường hợp phòng không gần nhau, không cùng tầng, loại phòng một giường đôi hoặc hai giường đơn không theo yêu cầu, tùy tình hình thực tế từng khách sạn/Resort.
- Quý khách dưới 18 tuổi khi đi tour phải có Bố Mẹ hoặc người thân trên 18 tuổi đi cùng. Trường hợp đi một mình phải được Bố Mẹ ủy quyền (có xác nhận của chính quyền địa phương).
- Khách nữ từ 55 tuổi trở lên và khách nam từ 60 trở lên: nên có người thân dưới 55 tuổi (đầy đủ sức khỏe) đi cùng. Riêng khách từ 70 tuổi trở lên: Bắt buộc phải có người thân dưới 55 tuổi (đầy đủ sức khỏe) đi cùng và nộp kèm giấy khám sức khỏe, có xác nhận đủ sức khỏe để đi du lịch của bác sĩ + Giấy cam kết sức khỏe theo mẫu qui định của công ty. Vì lý do an toàn Quý khách hạn chế và không nhận khách từ 80 tuổi trở lên. Khách trên 80 tuổi không có chế độ bảo hiểm. 
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Giá người lớn</label>
                            <input class="form-control" name="gianguoilon" placeholder="Please Enter Category Order" required />
                        </div>
                        <div class="form-group">
                            <label>Giá trẻ em</label>
                            <input class="form-control" name="giatreem" placeholder="Please Enter Category Order" required />
                        </div>
                        <div class="form-group">
                            <label>Giá trẻ nhỏ</label>
                            <input class="form-control" name="giatrenho" placeholder="Please Enter Category Order" required />
                        </div>
                        <div class="form-group">
                            <label>Giá em bé</label>
                            <input class="form-control" name="giaembe" placeholder="Please Enter Category Order" required />
                        </div>
                        <div class="form-group">
                            <label>Giá phòng đơn</label>
                            <input class="form-control" name="giaphongdon" placeholder="Please Enter Category Order" required />
                        </div>
                        <div class="form-group">
                            <label>Giới thiệu</label>
                            <textarea  class="form-control" name="gioithieu" rows="10" required />
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias consequatur tenetur iure earum amet expedita optio odit sunt, provident, temporibus ipsum hic rerum minima culpa quasi incidunt! Ipsam, tempore, magnam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias consequatur tenetur iure earum amet expedita optio odit sunt, provident, temporibus ipsum hic rerum minima culpa quasi incidunt! Ipsam, tempore, magnam?
                            </textarea>
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




