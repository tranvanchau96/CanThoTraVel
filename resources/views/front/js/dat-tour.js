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
