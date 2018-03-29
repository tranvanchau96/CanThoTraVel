
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

ALTER TABLE TOUR ADD gioithieu varchar(64000);

ALTER TABLE TOUR ADD updated_at datetime;
ALTER TABLE TOUR ADD created_at datetime;

ALTER TABLE TOUR ADD FOREIGN KEY (id_diemdi) REFERENCES DIEMDI(id);
ALTER TABLE TOUR ADD FOREIGN KEY (id_khachsan) REFERENCES KHACHSAN(id);
ALTER TABLE TOUR ADD FOREIGN KEY (id_huongdanvien) REFERENCES HUONGDANVIEN(id);




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

ALTER TABLE ANHTOUR ADD updated_at datetime;
ALTER TABLE ANHTOUR ADD created_at datetime;

ALTER TABLE ANHTOUR ADD FOREIGN KEY (id_tour) REFERENCES TOUR(id);

INSERT INTO ANHTOUR VALUES(1,1,"slide-bg1.jpg","slide-bg2.jpg","slide-bg3.jpg","slide-bg4.jpg",
  "anh-tour-340x179.jpg","anh-slide-bar-2-270x142.jpg");
INSERT INTO ANHTOUR VALUES(2,2,"slbg4.jpg","slbg5.jpg","slbg6.jpg","slbg7.jpg",
  "thumn2x340.jpg","thumn2x340.jpg");



CREATE TABLE DIEMDI(
  	id INT PRIMARY KEY AUTO_INCREMENT,
   	tendiemdi varchar(255)
);
ALTER TABLE DIEMDI ADD updated_at datetime;
ALTER TABLE DIEMDI ADD created_at datetime;

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

CREATE TABLE gmaps_geocache(
    id int PRIMARY KEY AUTO_INCREMENT,
    address varchar(30),
    latitude varchar(30),
    longitude varchar(30)
);

ALTER TABLE gmaps_geocache ADD updated_at datetime;
ALTER TABLE gmaps_geocache ADD created_at datetime;

INSERT INTO gmaps_geocache VALUES ('1','ben ninh kieu can tho','10.0322005  ','105.7879913');

INSERT INTO gmaps_geocache VALUES ('2','cho noi cai rang can tho','10.0020535  ','105..7441099');

CREATE TABLE TOADO(
    id int PRIMARY KEY AUTO_INCREMENT,
    id_tour int,
    id_gmaps int
);

ALTER TABLE TOADO ADD updated_at datetime;
ALTER TABLE TOADO ADD created_at datetime;

ALTER TABLE TOADO ADD FOREIGN KEY(id_tour) REFERENCES tour(id);
ALTER TABLE TOADO ADD FOREIGN KEY(id_gmaps) REFERENCES gmaps_geocache(id);

CREATE TABLE DIEMTHAMQUAN(
  	id INT PRIMARY KEY AUTO_INCREMENT,
   	ten varchar(255),
    tenkhongdau varchar(255),
    gioithieu varchar(64000),
    text1 varchar(64000),
    text2 varchar(64000),
    text3 varchar(64000),
    text4 varchar(64000),
    background varchar(255),
    headerxua varchar(255),
    xua1img600x391 varchar(255),
    xua2img710x391 varchar(255),
    xua3img600x253 varchar(255),
    headernay varchar(255),
    naybgimg1366x160 varchar(255),
    nay1img668x varchar(255),
    nay2img668x varchar(255),
    nay3img668x varchar(255),
    nay4img668x varchar(255),

);


ALTER TABLE DIEMTHAMQUAN ADD updated_at datetime;
ALTER TABLE DIEMTHAMQUAN ADD created_at datetime;

INSERT INTO DIEMTHAMQUAN VALUES(1,"Bến Ninh Kiều","ben-ninh-kieu",
  "Bến Ninh Kiều không chỉ nổi tiếng là một địa danh cảnh sắc hữu tình đi vào thơ, vào nhạc, mà còn được xem là một biểu tượng của thành phố Cẩn Thơ. Đây cũng chính là lý do khiến du khách khi đến với Cần Thơ đều muốn đi thăm bến Ninh Kiều. Bến Ninh Kiều xưa được hình thành từ thế kỷ 19, vốn là một bến sông ở chợ đầu mối Cần Thơ, tọa lạc ở bờ phải sông Hậu. Điểm độc đáo của bến Ninh Kiều là nằm giữa ngã ba sông Hậu và sông Cần Thơ nên có vị trí trung chuyển khách, giao thương hàng hóa rất tấp nập. Xưa kia, các tàu ghe của xứ lục tỉnh đều ghé bến Ninh Kiều đưa đón khách, vận chuyển hàng hóa đi khắp nơi.",
  "Bến Ninh Kiều nay được gọi là Công viên Ninh Kiều là một bến nước và là địa danh du lịch, văn hóa của thành phố Cần Thơ hình thành từ thế kỷ XIX. Bến Ninh Kiều tọa lạc ở bờ phải sông Hậu, nằm giữa ngã ba sông Hậu và sông Cần Thơ tiếp giáp với đường Hai Bà Trưng, phường Tân An, quận Ninh Kiều thuộc thành phố Cần Thơ",
  "Về đêm, bến Ninh Kiều hiện lên trước mặt du khách với vẻ đẹp huyền ảo, mê hoặc và quyến rũ. Những dãy dài đèn lồng đỏ được thắp lên dọc bờ sông lung linh trên bóng nước. Bên ngoài bến, đèn sáng rực rỡ. Dọc bến có một lề đường cho du khách tản bộ dọc theo bờ sông ngắm cảnh sông nước. Xa xa, xóm chài le lói ánh đèn yên tĩnh, bình lặng. Dưới sông, những con đò chiều lòng khách, thả trôi trên dòng nước nhìn lên thành phố rực rỡ ánh đèn. Ngày nay, bến Ninh Kiều được đầu tư để trở  thành công viên du lịch có diện tích 7.000m², thu hút đông đảo người dân địa phương và du khách đến ngắm cảnh, tản bộ, hóng mát.  Trong công viên có bức tượng Chủ tịch Hồ Chí Minh bằng đồng cao 7,2m, đặt trên bệ cao 3,6m, trọng lượng hơn 12 tấn.",
  "Để cảm nhận hết vẻ đẹp của vùng sông nước miền Tây, du khách tới Cần Thơ đừng bỏ lỡ dịp trải nghiệm dịch vụ du thuyền trên bến Ninh Kiều. Mỗi tối, từ 19h đến 21h, thuyền sẽ đưa khách du ngoạn sông Hậu, thưởng thức các món đặc sản và những tiết mục văn nghệ đặc sắc đậm chất Nam Bộ.",
  "Bên ngoài bến, đèn sáng rực rỡ, hoạt động chợ đêm nhộn nhọp bởi cứ cách 100m lại có một dãy phó bán một mặt hàng khác nhau. Chợ đêm được mở cửa từ 4h chiều đến 4h sáng hôm sau. Rất nhiều du khách đến đây đã ngỡ ngàng vì vẻ đẹp của đêm phố cổ Hội An, Quảng Nam. Ngoài ra cuối bến Ninh Kiều còn có Cầu đi bộ vừa được xây dựng, thu hút nhiều bạn trẻ đến tham quan và chụp ảnh",
  "bg1.jpg",
  "xuatittle.jpg",
  "xua1.jpg",
  "xua2.jpg",
  "xua3.jpg",
  "naytittle.jpg",
  "img1366x600.jpg",
  "img668x1.jpg",
  "img668x2.jpg",
  "img668x3.jpg",
  "img668x4.jpg",
  "10.0321822",
  "105.7858675"
);

INSERT INTO DIEMTHAMQUAN VALUES(2,"Chợ nổi Cái Răng","cho-noi-cai-rang",
  "Chợ nổi Cái Răng là chợ nổi chuyên trao đổi, mua bán nông sản, các loại trái cây, hàng hóa, thực phẩm, ăn uống ở trên sông và là điểm tham quan đặc sắc của quận Cái Răng, thành phố Cần Thơ. Nét độc đáo và đặc điểm chính của chợ nổi Cái Răng là chuyên buôn bán các loại trái cây, đặc sản của vùng đồng bằng sông Cửu Long. Hơn 100 năm hình thành và phát triển, chợ nổi Cái Răng trở thành biểu tượng du lịch đặc trưng của TP Cần Thơ. Đây cũng là một trong những điểm du lịch hấp dẫn của miền Tây.",
  "Chợ nổi này được hình thành vào những năm đầu của thế kỷ XX, trước khi xuất hiện chợ nổi Ngã Bảy (Hậu Giang), chợ nổi Ngã Năm (Sóc Trăng). Chợ nằm trên trục đường thủy sông Cần Thơ - kênh xáng Xà No, nên rất thuận tiện cho việc giao thương, buôn bán với các tỉnh lân cận. Chợ nổi Cái Răng cách cầu Cái Răng khoảng 600 m, nằm trên địa phận quận Cái Răng, TP Cần Thơ, mỗi ngày có từ 300-400 ghe, tàu buôn bán, kinh doanh hàng hóa tại đây.Thuở xưa, chợ nổi hình thành là vì đường bộ và phương tiện lưu thông đường bộ chưa phát triển, trong khi đó nhu cầu mua bán, trao đổi hàng hóa, người ta tụ tập trên sông và bằng các phương tiện như xuồng, ghe, tắc ráng.... Ngày nay, dù mạng lưới giao thông đường bộ đã phát triển rộng khắp nơi nhưng chợ nổi vẫn tồn tại và phát triển ngày một sầm uất hơn.",
  "Chợ nổi Cái Răng cũng là chợ đầu mối chuyên mua bán sỉ các loại trái cây, nông sản của vùng. Hàng hóa tập trung ở đây với số lượng lớn. Mỗi mặt hàng đã được phân loại cho đồng đều về chất lượng, kích cỡ. Nếu như dân địa phương và các vùng lân cận thường sử dụng các ghe, xuồng trung bình chở các mặt hàng nông sản đến đây tiêu thụ thì những ghe bầu lớn là của các thương lái thu mua trái cây tỏa đi khắp nơi, sang tận Campuchia và Trung Quốc. Hòa mình vào không khí nhộn nhịp của buổi chợ, du khách có thể quan sát, tìm hiểu sinh hoạt của nhiều gia đình thương hồ với nhiều thế hệ chung sống trên ghe. Có những chiếc ghe như căn hộ di động trên sông nước với những chậu hoa kiểng, các loài vật nuôi, các tiện nghi đầy đủ như ti-vi màu, đầu dĩa, dàn âm thanh... có cả xe gắn máy đậu trên ghe.",
  "Chợ Cái Răng thường họp khá sớm, thường từ lúc mờ sáng và đến khoảng 8, 9 giờ thì vãn. Khách tham quan nên đi vào khoảng 7-8 giờ là tốt vì có thể tham quan đúng vào lúc chợ hoạt động đông đúc nhất. Chợ không hoạt động và hoạt động rất ít vào các ngày Tết Âm Lịch (mồng 1 và mồng 2 Tết, Tết Đoan Ngọ (mồng 5 tháng Năm âm lịch). Do nhu cầu của người đi chợ nên không chỉ có các xuồng trái cây, nông sản phẩm mà còn có nhiều loại dịch vụ khác: phở, hủ tiếu, cà phê, quán nhậu nổi... Các xuồng dịch vụ (thường là thuyền nhỏ) len lõi phục vụ khách đi chợ và cả khách tham quan lạ.",
  "Chợ nổi Cái Răng là một trong những điểm tham quan đặc sắc nhất ở Cần Thơ. Đây là một nét văn hóa rất đặc sắc ở vùng đồng bằng sông nước Cửu Long, thu hút rất nhiều du khách, đặc biệt là khách nước ngoài.",
  "chonoiBG.jpg",
  "chonoiHDXUA.jpg",
  "chonoiXUA1.jpg",
  "chonoiXUA2.jpg",
  "chonoiXUA3.jpg",
  "chonoiHDNAY.jpg",
  "chonoiBGNAY.jpg",
  "chonoiNAY1.jpg",
  "chonoiNAY2.jpg",
  "chonoiNAY3.jpg",
  "chonoiNAY4.jpg",
  "10.0007998",
  "105.7368636"
);

INSERT INTO DIEMTHAMQUAN VALUES(3,"Cầu Đi Bộ","cau-di-bo",
  "Ngày 6 tháng 2 năm 2016 (tức 28 Tết Bính Thân), cầu đi bộ du lịch đầu tiên của thành phố Cần Thơ được khánh thành thu hút đông đảo người dân và du khách thưởng ngoạn sau gần một năm thi công.
Cầu bắc qua rạch Khai Luông, nối bến Ninh Kiều và cồn Cái Khế, bằng bêtông cốt thép bán vĩnh cửu, dài gần 200 m, rộng 7,2 m, tổng mức đầu tư gần 50 tỷ đồng. Mặt cầu được thiết kế cách điệu uốn lượn hình chữ S tượng trưng cho đất nước. Tại hai phần cầu mở rộng được bố trí hai đài hoa sen. Trên cầu trang bị hệ thống đèn led màu được điều khiển theo những kịch bản khác nhau tạo nên vẻ đẹp sinh động và hiện đại. Hệ thống cây xanh, bồn hoa ở bên ngoài lan can ở thành cầu, được tưới và thoát nước tự động tiện lợi cho công tác bảo trì.",
  "",
  "Cầu đi bộ có vị trí khá “đẹp” khi nằm giữa ngã ba sông Hậu, đứng từ trên cầu có thể nhìn khá rõ cầu Cần Thơ, cồn Ấu và gần như toàn cảnh bến Ninh Kiều. Không những thế, vào buổi chiều, cầu đi bộ là nơi đi dạo của những du khách đến du lịch Cần Thơ và người dân trên địa bàn thành phố.",
  "Nhìn từ trên cao, hình dạng của cầu khá giống hình chữ S – bản đồ Việt Nam, và hai bông sen lớn ở giữa cầu là nơi được trang trí các cụm đèn led nghệ thuật mang nét hiện đại và sống động cho cây cầu vào ban đêm. Hai bên lan can bên ngoài thành cầu, các chậu hoa rực rỡ được đặt để trang trí mang điểm nhấn cho cầu vào ban ngày và có hệ thống tưới nước đảm bảo hoa luôn tươi tốt. Đặc biệt, chính giữa cầu đi bộ được xây dựng mái che nghiêng dành cho du khách ngồi nghỉ mát. Ngoài ra, cầu có độ dốc thấp, người lớn tuổi và người ngồi xe lăn có thể dễ dàng di chuyển trên cầu cũng được lòng người dân.",
  "Sau khi khánh thành cầu đi bộ bến Ninh Kiều, đây cũng là nơi được nhiều bạn trẻ check-in mới thay cho các địa điểm vui chơi quen thuộc khác trong địa bàn thành phố. Tuy nhiên, hiện nay đang xảy ra tình trạng nhiều bạn trẻ gắn các “ổ khóa tình yêu” với dây xích lòng thòng trên lan can cầu khiến cây cầu phần nào mất đi vẻ đẹp và gây khó chịu cho khách đến tham quan trên cầu.",
  "caudiboBG.jpg",
  "caudiboHDXUA.jpg",
  "",
  "",
  "",
  "caudiboHDNAY.jpg",
  "caudibBGNAY.jpg",
  "caudiboNAY1.jpg",
  "caudiboNAY2.jpg",
  "caudiboNAY3.jpg",
  "caudiboNAY4.jpg",
  "10.0371984",
  "105.789166"
);

INSERT INTO DIEMTHAMQUAN VALUES(2,"Cầu Đi bộ","cau-di-bo","","","","");
INSERT INTO DIEMTHAMQUAN VALUES(3,"Chùa ông","chua-ong","","","","");


-- CREATE TABLE ANHTHAMQUAN(
--     id INT PRIMARY KEY AUTO_INCREMENT,
--     id_diemthamquan int,
--     anh1 varchar(255),
--     anh2 varchar(255),
--     anh3 varchar(255)
-- );
-- ALTER TABLE ANHTHAMQUAN ADD updated_at datetime;
-- ALTER TABLE ANHTHAMQUAN ADD created_at datetime;


CREATE TABLE KHACHSAN(
    id INT PRIMARY KEY AUTO_INCREMENT,
    ten varchar(255),
    tenkhongdau varchar(255),
    url varchar(255)
);

ALTER TABLE KHACHSAN ADD updated_at datetime;
ALTER TABLE KHACHSAN ADD created_at datetime;

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
    sodienthoai varchar(15),
    diachi varchar(255)
);
ALTER TABLE HUONGDANVIEN ADD updated_at datetime;
ALTER TABLE HUONGDANVIEN ADD created_at datetime;

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

ALTER TABLE DATTOUR ADD updated_at datetime;
ALTER TABLE DATTOUR ADD created_at datetime;


ALTER TABLE DATTOUR ADD FOREIGN KEY (id_tour) REFERENCES TOUR(id);


CREATE TABLE QUANGCAO(
    id INT PRIMARY KEY AUTO_INCREMENT,
    anh varchar(255),
    url varchar(255)
);

ALTER TABLE QUANGCAO ADD updated_at datetime;
ALTER TABLE QUANGCAO ADD created_at datetime;

INSERT INTO QUANGCAO VALUES (1,"quangcao1.jpg","");
INSERT INTO QUANGCAO VALUES (2,"quangcao2.jpg","");
INSERT INTO QUANGCAO VALUES (3,"quangcao3.jpg","");
INSERT INTO QUANGCAO VALUES (4,"quangcao4.jpg","");

