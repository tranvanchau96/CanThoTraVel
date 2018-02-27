
USE DULICH;

CREATE TABLE TOUR(
  	id INT PRIMARY KEY AUTO_INCREMENT,
   	id_diemdi int,
    id_khachsan int,
    id_huongdanvien int,
    tieude varchar(255),
   	tieudekhongdau varchar(255),
   	ngaykhoihanh date,
   	giokhoihanh time,
   	noikhoihanh varchar(255),
    giotaptrung time,
    songaydi varchar(255),
    socho smallint,
   	sochoconlai smallint,
   	lichtrinh text,
    dieukhoan text,
    gianguoilon int,
    giatreem int,
    giatrenho int,
    giaembe int,
    giaphongdon int
);

ALTER TABLE TOUR ADD gioithieu text;
ALTER TABLE TOUR ALTER COLUMN gioithieu ntext;

UPDATE TOUR SET gioithieu="1111 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint id quos qui, consequatur impedit, sapiente, 
modi atque dolorem ea possimus, harum iusto pariatur! Harum omnis laudantium, delectus iure voluptatibus soluta.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint id quos qui, consequatur impedit, sapiente, modi atque dolorem ea possimus, harum iusto pariatur! Harum omnis laudantium, delectus iure voluptatibus soluta.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint id quos qui, consequatur impedit, sapiente, modi atque dolorem ea possimus, harum iusto pariatur! Harum omnis laudantium, delectus iure voluptatibus soluta.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint id quos qui, consequatur impedit, sapiente, modi atque dolorem ea possimus, harum iusto pariatur! Harum omnis laudantium, delectus iure voluptatibus soluta.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint id quos qui, consequatur impedit, sapiente, modi atque dolorem ea possimus,
 harum iusto pariatur! Harum omnis laudantium, delectus iure voluptatibus soluta. " where id = 1;

UPDATE TOUR SET gioithieu="22222 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint id quos qui, consequatur impedit, sapiente, 
modi atque dolorem ea possimus, harum iusto pariatur! Harum omnis laudantium, delectus iure voluptatibus soluta.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint id quos qui, consequatur impedit, sapiente, modi atque dolorem ea possimus, harum iusto pariatur! Harum omnis laudantium, delectus iure voluptatibus soluta.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint id quos qui, consequatur impedit, sapiente, modi atque dolorem ea possimus, harum iusto pariatur! Harum omnis laudantium, delectus iure voluptatibus soluta.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint id quos qui, consequatur impedit, sapiente, modi atque dolorem ea possimus, harum iusto pariatur! Harum omnis laudantium, delectus iure voluptatibus soluta.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint id quos qui, consequatur impedit, sapiente, modi atque dolorem ea possimus,
 harum iusto pariatur! Harum omnis laudantium, delectus iure voluptatibus soluta. " where id = 1;


INSERT INTO TOUR VALUES(1,1,1,1,"TP.HCM - CẦN THƠ - BẾN NINH KIỀU - VƯỜN CÒ
  - CHÙA ÔNG","tp.hcm-cantho-benninhkieu-vuonco-chuaong","2018-1-1","01:00:00","BX.Miền Tây",
  "12:30:00","3 ngày 2 đêm",12,12,"
  <h1>Ngày 1</h1>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero vitae ex quo unde harum pariatur illo tempora incidunt, quasi illum, dolore fugit deserunt mollitia modi cumque reiciendis id voluptatem, ducimus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit architecto, doloremque corporis vel earum deserunt sapiente dolores placeat officia, ipsa consectetur maiores at odio error laboriosam. Impedit consequatur, qui porro!
  <h1>Ngày 2</h1>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, porro tempore tempora illum omnis ipsam, earum sapiente assumenda harum soluta libero ea nostrum possimus quam at veniam iure perspiciatis dignissimos! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt odio veritatis, eaque. Pariatur recusandae hic ratione dignissimos maiores deleniti. Aperiam a modi quos dolore laudantium libero qui voluptatibus fuga blanditiis.
  <h1>Ngày 3</h1>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur reiciendis voluptatibus veniam eos beatae mollitia molestias nostrum, aliquam laborum, nobis tenetur quo magnam! Laborum officia vero hic itaque et libero. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora velit quidem sequi soluta rerum quod, accusamus non minus blanditiis natus unde expedita porro reprehenderit repellendus debitis repudiandae ipsam alias aliquid.
  ","<p class=\"tour-note\">Giá tour bao gồm:</p>

  - Xe tham quan tùy theo số lượng khách theo chương trình
  - Khách sạn theo tiêu chuẩn 2 khách/phòng hoặc 3 khách/phòng
  - Vé tham quan theo chương trình
  - Hướng dẫn viên tiếng Việt nối tuyến
  - Bảo hiểm du lịch với mức bồi thường cao nhất 120.000.000đ/vụ
  - Thuế VAT

  <p class=\"tour-note\">Giá vé trẻ em:</p>

  - Trẻ em từ 0 – dưới 5 tuổi: không thu phí dịch vụ, gia đình tự lo cho bé. Hai người lớn chỉ được kèm 1 trẻ em dưới 5 tuổi, trẻ em thứ 2 phải đóng phí theo quy định dành cho độ tuổi từ 5 đến dưới 12 tuổi và phụ thu giường đơn.
  - Trẻ em từ 5 - dưới 12 tuổi: mua 50% vé dịch vụ, bao gồm phương tiện xe vận chuyển, ăn uống, vé tham quan, ngủ chung với gia đình, không có giường riêng. Hai người lớn chỉ được kèm 1 trẻ em từ 5 - dưới 12 tuổi, em thứ hai trở lên phải mua 1 suất giường đơn.
  - Trẻ em 12 tuổi trở lên: phải mua vé tour trọn gói như người lớn bao gồm phương tiện vận chuyển, khách sạn, ăn uống theo chương trình, vé tham quan theo qui định các điểm tham quan.

  <p class=\"tour-note\">Điều kiện thanh toán:</p>

  - Khi đăng ký đặt cọc 50% số tiền tour

  <p class=\"tour-note\">Các điều kiện khi đăng ký tour:</p>

  - Đối với Khách Quốc tịch Việt Nam: Khi đi tour Trẻ em từ 14 tuổi trở lên và người lớn cần đem theo CMND/Passport (Hộ chiếu) bản chính còn hạn sử dụng, hình ảnh rõ (CMND có thời hạn sử dụng không quá 15 năm, tính từ ngày cấp).
  - Đối với khách Nước ngoài/Việt Kiều: Khi đi tour phải mang theo đầy đủ Passport (Hộ Chiếu) bản chính còn hạn sử dụng hoặc thẻ xanh kèm theo Visa và giấy tái xuất nhập Việt Nam.
  - Khi đăng ký tour Quý khách vui lòng mang theo CMND/Passport bản chính hoặc cung cấp tên chính xác đầy đủ, đúng từng ký tự trên CMND/ Passport (Hộ chiếu)/Giấy khai sinh (trẻ em dưới 14 tuổi) theo thứ tự: Họ/tên lót/tên.
  - Phòng khách sạn/resort có thể xảy ra trường hợp phòng không gần nhau, không cùng tầng, loại phòng một giường đôi hoặc hai giường đơn không theo yêu cầu, tùy tình hình thực tế từng khách sạn/Resort.
  - Quý khách dưới 18 tuổi khi đi tour phải có Bố Mẹ hoặc người thân trên 18 tuổi đi cùng. Trường hợp đi một mình phải được Bố Mẹ ủy quyền (có xác nhận của chính quyền địa phương).
  - Khách nữ từ 55 tuổi trở lên và khách nam từ 60 trở lên: nên có người thân dưới 55 tuổi (đầy đủ sức khỏe) đi cùng. Riêng khách từ 70 tuổi trở lên: Bắt buộc phải có người thân dưới 55 tuổi (đầy đủ sức khỏe) đi cùng và nộp kèm giấy khám sức khỏe, có xác nhận đủ sức khỏe để đi du lịch của bác sĩ + Giấy cam kết sức khỏe theo mẫu qui định của công ty. Vì lý do an toàn Quý khách hạn chế và không nhận khách từ 80 tuổi trở lên. Khách trên 80 tuổi không có chế độ bảo hiểm. ",
  2000000,1000000,200000,0,200000);

INSERT INTO TOUR VALUES(2,2,2,2,"Hà NỘI - CẦN THƠ - BẾN NINH KIỀU - VƯỜN CÒ
  - CHÙA ÔNG","hanoi-cantho-benninhkieu-vuonco-chuaong","2018-5-5","04:00:00","AAAA",
  "04:30:00","2 ngày 1 đêm",18,18,"
  <h1>Ngày 1</h1>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero vitae ex quo unde harum pariatur illo tempora incidunt, quasi illum, dolore fugit deserunt mollitia modi cumque reiciendis id voluptatem, ducimus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit architecto, doloremque corporis vel earum deserunt sapiente dolores placeat officia, ipsa consectetur maiores at odio error laboriosam. Impedit consequatur, qui porro!
  <h1>Ngày 2</h1>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, porro tempore tempora illum omnis ipsam, earum sapiente assumenda harum soluta libero ea nostrum possimus quam at veniam iure perspiciatis dignissimos! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt odio veritatis, eaque. Pariatur recusandae hic ratione dignissimos maiores deleniti. Aperiam a modi quos dolore laudantium libero qui voluptatibus fuga blanditiis.
  <h1>Ngày 3</h1>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur reiciendis voluptatibus veniam eos beatae mollitia molestias nostrum, aliquam laborum, nobis tenetur quo magnam! Laborum officia vero hic itaque et libero. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora velit quidem sequi soluta rerum quod, accusamus non minus blanditiis natus unde expedita porro reprehenderit repellendus debitis repudiandae ipsam alias aliquid.
  ","<p class=\"tour-note\">Giá tour bao gồm:</p>

  - Xe tham quan tùy theo số lượng khách theo chương trình
  - Khách sạn theo tiêu chuẩn 2 khách/phòng hoặc 3 khách/phòng
  - Vé tham quan theo chương trình
  - Hướng dẫn viên tiếng Việt nối tuyến
  - Bảo hiểm du lịch với mức bồi thường cao nhất 120.000.000đ/vụ
  - Thuế VAT

  <p class=\"tour-note\">Giá vé trẻ em:</p>

  - Trẻ em từ 0 – dưới 5 tuổi: không thu phí dịch vụ, gia đình tự lo cho bé. Hai người lớn chỉ được kèm 1 trẻ em dưới 5 tuổi, trẻ em thứ 2 phải đóng phí theo quy định dành cho độ tuổi từ 5 đến dưới 12 tuổi và phụ thu giường đơn.
  - Trẻ em từ 5 - dưới 12 tuổi: mua 50% vé dịch vụ, bao gồm phương tiện xe vận chuyển, ăn uống, vé tham quan, ngủ chung với gia đình, không có giường riêng. Hai người lớn chỉ được kèm 1 trẻ em từ 5 - dưới 12 tuổi, em thứ hai trở lên phải mua 1 suất giường đơn.
  - Trẻ em 12 tuổi trở lên: phải mua vé tour trọn gói như người lớn bao gồm phương tiện vận chuyển, khách sạn, ăn uống theo chương trình, vé tham quan theo qui định các điểm tham quan.

  <p class=\"tour-note\">Điều kiện thanh toán:</p>

  - Khi đăng ký đặt cọc 50% số tiền tour

  <p class=\"tour-note\">Các điều kiện khi đăng ký tour:</p>

  - Đối với Khách Quốc tịch Việt Nam: Khi đi tour Trẻ em từ 14 tuổi trở lên và người lớn cần đem theo CMND/Passport (Hộ chiếu) bản chính còn hạn sử dụng, hình ảnh rõ (CMND có thời hạn sử dụng không quá 15 năm, tính từ ngày cấp).
  - Đối với khách Nước ngoài/Việt Kiều: Khi đi tour phải mang theo đầy đủ Passport (Hộ Chiếu) bản chính còn hạn sử dụng hoặc thẻ xanh kèm theo Visa và giấy tái xuất nhập Việt Nam.
  - Khi đăng ký tour Quý khách vui lòng mang theo CMND/Passport bản chính hoặc cung cấp tên chính xác đầy đủ, đúng từng ký tự trên CMND/ Passport (Hộ chiếu)/Giấy khai sinh (trẻ em dưới 14 tuổi) theo thứ tự: Họ/tên lót/tên.
  - Phòng khách sạn/resort có thể xảy ra trường hợp phòng không gần nhau, không cùng tầng, loại phòng một giường đôi hoặc hai giường đơn không theo yêu cầu, tùy tình hình thực tế từng khách sạn/Resort.
  - Quý khách dưới 18 tuổi khi đi tour phải có Bố Mẹ hoặc người thân trên 18 tuổi đi cùng. Trường hợp đi một mình phải được Bố Mẹ ủy quyền (có xác nhận của chính quyền địa phương).
  - Khách nữ từ 55 tuổi trở lên và khách nam từ 60 trở lên: nên có người thân dưới 55 tuổi (đầy đủ sức khỏe) đi cùng. Riêng khách từ 70 tuổi trở lên: Bắt buộc phải có người thân dưới 55 tuổi (đầy đủ sức khỏe) đi cùng và nộp kèm giấy khám sức khỏe, có xác nhận đủ sức khỏe để đi du lịch của bác sĩ + Giấy cam kết sức khỏe theo mẫu qui định của công ty. Vì lý do an toàn Quý khách hạn chế và không nhận khách từ 80 tuổi trở lên. Khách trên 80 tuổi không có chế độ bảo hiểm. ",
  4000000,5000000,100000,0,200000);


CREATE TABLE ANHTOUR(
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_tour int,
    bg1 varchar(255),
    bg2 varchar(255),
    bg3 varchar(255),
    bg4 varchar(255),
    thumn1 varchar(255),
    thumn2 varchar(255)
);
INSERT INTO ANHTOUR VALUES(1,1,"slide-bg1.jpg","slide-bg2.jpg","slide-bg3.jpg","slide-bg4.jpg",
  "anh-tour-340x179.jpg","anh-slide-bar-2-270x142.jpg");
INSERT INTO ANHTOUR VALUES(2,2,"slbg4.jpg","slbg5.jpg","slbg6.jpg","slbg7.jpg",
  "thumn2x340.jpg","thumn2x340.jpg");



CREATE TABLE DIEMDI(
  	id INT PRIMARY KEY AUTO_INCREMENT,
   	tendiemdi varchar(255)
);

INSERT INTO DIEMDI VALUES (1,"Hà Nội");
INSERT INTO DIEMDI VALUES (2,"TP.Hồ Chí Minh");
INSERT INTO DIEMDI VALUES (3,"Bến Tre");
INSERT INTO DIEMDI VALUES (4,"Sóc Trăng");

-- CREATE TABLE GIA(
--   	id INT PRIMARY KEY AUTO_INCREMENT,
--     id_tour int,
--     gianguoilon int,
--     giatreem int,
--     giatrenho int,
--     giaembe int,
--     giaphongdon int
-- );



CREATE TABLE DIEMTHAMQUAN(
  	id INT PRIMARY KEY AUTO_INCREMENT,
   	ten varchar(255),
    tenkhongdau varchar(255),
    diachi varchar(255),
    toadox decimal,
    toadoy decimal,
    gioithieu text

);

INSERT INTO DIEMTHAMQUAN VALUES(1,"Bến Ninh Kiều","ben-ninh-kieu","","","","");
INSERT INTO DIEMTHAMQUAN VALUES(2,"Cầu Đi bộ","cau-di-bo","","","","");
INSERT INTO DIEMTHAMQUAN VALUES(3,"Chùa ông","chua-ong","","","","");


CREATE TABLE ANHTHAMQUAN(
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_diemthamquan int,
    anh1 varchar(255),
    anh2 varchar(255),
    anh3 varchar(255)
);



CREATE TABLE KHACHSAN(
    id INT PRIMARY KEY AUTO_INCREMENT,
    ten varchar(255),
    tenkhongdau varchar(255),
    diachi varchar(255),
    gioithieu text
);

INSERT INTO KHACHSAN VALUES (1,"Khách Sạn Ninh Kiều 1","khach-san-ninh-kieu-1","3/2, NK, CT","Lorem ipsum 
  dolor sit amet, consectetur adipisicing elit. Nihil ratione blanditiis placeat eos magni ut, 
  consequuntur iste sapiente consequatur quo rerum tenetur at pariatur! Iure facere aliquid 
  velit voluptatem corrupti.");
INSERT INTO KHACHSAN VALUES (2,"Khách Sạn Mường Thanh","khach-san-muong-thanh","Cái Khế, Cần Thơ","Lorem ipsum 
  dolor sit amet, consectetur adipisicing elit. Nihil ratione blanditiis placeat eos magni ut, 
  consequuntur iste sapiente consequatur quo rerum tenetur at pariatur! Iure facere aliquid 
  velit voluptatem corrupti.");
INSERT INTO KHACHSAN VALUES (3,"Hải Đăng HomeStay","hai-dang-home-stay","Đề Thám, CT","Lorem ipsum 
  dolor sit amet, consectetur adipisicing elit. Nihil ratione blanditiis placeat eos magni ut, 
  consequuntur iste sapiente consequatur quo rerum tenetur at pariatur! Iure facere aliquid 
  velit voluptatem corrupti.");


CREATE TABLE HUONGDANVIEN(
    id INT PRIMARY KEY AUTO_INCREMENT,
    hoten varchar(40),
    sodienthoai varchar(12),
    diachi varchar(255)
);


INSERT INTO HUONGDANVIEN VALUES (1, "Đang cập nhật","Đang cập nhật","Đang cập nhật");
INSERT INTO HUONGDANVIEN VALUES (2, "Trần Văn Châu","01686270769","Ninh Kiều, Cần Thơ");
INSERT INTO HUONGDANVIEN VALUES (3, "Nguyễn An","Đang cập nhật","Cái Răng, Cần Thơ");
INSERT INTO HUONGDANVIEN VALUES (4, "Nguyễn Bích Tuyền","0969333454","Ninh Kiều, Cần Thơ");
INSERT INTO HUONGDANVIEN VALUES (5, "Trần Văn Thanh","01222310123","Cái Khế, Cần Thơ");
INSERT INTO HUONGDANVIEN VALUES (6, "Phạm Hồng Phước","0979149999","Bình Thủy, Cần Thơ");






CREATE TABLE DATTOUR(
  	id INT PRIMARY KEY AUTO_INCREMENT,
   	id_tour int,
   	hoten varchar(30),
   	diachi varchar(255),
   	sodienthoai varchar(12),
    email varchar(30),
    ngaydat datetime,
   	ghichu text,
    nguoilon smallint,
    treem smallint,
    trenho smallint,
    embe smallint,
    phongdon smallint,
    tongcho smallint,
    tongtien int,
    hinhthucthanhtoan varchar(255),
    trangthaithanhtoan varchar(30)
);
CREATE TABLE QUANGCAO(
    id INT PRIMARY KEY AUTO_INCREMENT,
    anh varchar(255),
    url varchar(255)
);

INSERT INTO QUANGCAO VALUES (1,"quangcao1.jpg","");
INSERT INTO QUANGCAO VALUES (2,"quangcao2.jpg","");
INSERT INTO QUANGCAO VALUES (3,"quangcao3.jpg","");
INSERT INTO QUANGCAO VALUES (4,"quangcao4.jpg","");
