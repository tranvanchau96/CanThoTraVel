function showdetails(){
      var x = document.getElementById("htthanhtoan").value;
      if (x === "khong"){
          $("#chuyenkhoan").hide();
          $("#tienmat").hide();
      }
      else if (x === "chuyenkhoan"){
          $("#chuyenkhoan").show();
           $("#tienmat").hide();
      }
      else if (x === "tienmat"){
          $("#tienmat").show();
          $("#chuyenkhoan").hide();

      }
  }

$(function ($tour) {
  $("#songuoilon, #sotreem, #sotrenho, #soembe, #phongdon").keyup(function () {
    $("#tongcho").val(+$("#songuoilon").val() + +$("#sotreem").val() + +$("#sotrenho").val()+ +$("#soembe").val());
    $("#tongtien").val(+$("#songuoilon").val()*$("#gianguoilon").val() + +$("#sotreem").val()*$("#giatreem").val() + +$("#sotrenho").val()*$("#giatrenho").val() + +$("#soembe").val()*$("#giaembe").val() + +$("#phongdon").val()*$("#giaphongdon").val());
  });
});


// $(function () {
//   $("#songuoilon, #sotreem, #sotrenho, #soembe, #phongdon").keyup(function () {
//     $("#tongtien").val(+$("#songuoilon").val()*{{$tour->gianguoilon}} + +$("#sotreem").val()*{{$tour->giatreem}} + +$("#sotrenho").val()*{{$tour->giatrenho}} + +$("#soembe").val()*{{$tour->giaembe}} + +$("#phongdon").val()*{{$tour->giaphongdon}});
//   });
// });



//                   <form oninput="x.value = parseInt(nglon.value)+parseInt(trem.value)+parseInt(trnho.value)+parseInt(embe.value)">
//   <label>NguoiLon</label>
//     <input type=num id="nglon" default="0">
//     <label>TreEm</label>
//     <input type=num id="trem" default="0">
//     <label>TreNho</label>
//     <input type=num id="trnho" default="0">
//     <label>EmBe</label>
//     <input type=num id="embe" default="0"><br>
//     <label>Tong</label>
//     <output name=x for="nglon trem trnho embe">
// </form>