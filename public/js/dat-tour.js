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
$(document).ready(function (){
  $("#songuoilon, #sotreem, #sotrenho, #soembe, #phongdon").keyup(function () {
    $("#tongcho").val(+$("#songuoilon").val() + +$("#sotreem").val() + +$("#sotrenho").val()+ +$("#soembe").val());
    $("#tongtien").val(+$("#songuoilon").val()*$("#gianguoilon").val() + +$("#sotreem").val()*$("#giatreem").val() + +$("#sotrenho").val()*$("#giatrenho").val() + +$("#soembe").val()*$("#giaembe").val() + +$("#phongdon").val()*$("#giaphongdon").val());
  });
});
