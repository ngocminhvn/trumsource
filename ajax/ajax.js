$(function(){
    // auth
    $("#login-form").submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var formAction = form.attr("action");
        var formData = form.serialize();
        $.post(formAction, formData,
          function (data) {
              if(data.status === false){
                Swal.fire("Thông báo", data.message, "error");
              }else{
                Swal.fire("Thông báo", data.message, "success");
                setTimeout(function(){ location.href = "/home" },2000);
              }
        }, "json");
    });
    $("#register-form").submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var formAction = form.attr("action");
        var formData = form.serialize();
        $.post(formAction, formData,
          function (data) {
              if(data.status === false){
                Swal.fire("Thông báo", data.message, "error");
              }else{
                Swal.fire("Thông báo", data.message, "success");
                setTimeout(function(){ location.href = "/home" },2000);
              }
        }, "json");
    });

    // setting
    $("#changetoken").submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var formAction = form.attr("action");
        var formData = form.serialize();
        $.post(formAction, formData,
          function (data) {
              if(data.status === false){
                Swal.fire("Thông báo", data.message, "error");
              }else{
                Swal.fire("Thông báo", data.message, "success");
                document.getElementById('token').value = data.token;
              }
        }, "json");
    });
    $("#changepassword").submit(function (e) {
      e.preventDefault();
      var form = $(this);
      var formAction = form.attr("action");
      var formData = form.serialize();
      $.post(formAction, formData,
        function (data) {
            if(data.status === false){
              Swal.fire("Thông báo", data.message, "error");
            }else{
              Swal.fire("Thông báo", data.message, "success");
              window.location.href = "/logout";
            }
      }, "json");
    });

    // sevices
    $("#recharge-card").submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var formAction = form.attr("action");
        var formData = form.serialize();
        $.post(formAction, formData,
          function (data) {
              if(data.status === false){
                Swal.fire("Thông báo", data.message, "error");
              }else{
                Swal.fire("Thông báo", data.message, "success");
              }
        }, "json");
    });
    $("#buy").submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var formAction = form.attr("action");
        var formData = form.serialize();
        Swal.fire({
            title: "Bạn chắc chắn chứ?",
            text: "Click vào đồng ý để mua",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#0891b2",
            cancelButtonColor: "#d33",
            confirmButtonText: "Mua",
        }).then((result) => {
            if (result.isConfirmed) {
                $.post(
                    formAction,
                    formData,
                    function (data) {
                        if (data.status === false) {
                            Swal.fire("Thông báo", data.message, "error");
                        } else {
                            Swal.fire("Thông báo", data.message, "success");
                        }
                    },
                    "json"
                );
            }
        });
    });
    $("#tools_card").submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var formAction = form.attr("action");
        var formData = form.serialize();
        $.post(formAction, formData,
          function (data) {
              if(data.status === false){
                Swal.fire("Thông báo", data.message, "error");
              }else{
                Swal.fire("Thông báo", data.message, "success");
              }
        }, "json");
    });
    $("#whois-form").submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var formAction = form.attr("action");
        var formData = form.serialize();
        $.post(formAction, formData,
          function (data) {
            $("#result").html(data);
        });
    });
      $("#encode").click(function() {
         if ($("#php_origial").val().length <= 5) {
            Swal.fire('Lỗi', 'Mã bạn nhập vào quá ngắn !', 'error');
         } else {
            $(this).html('Đang mã hóa');
            $.ajax({
               type: "post",
               url: "/ajax/encode.php",
               data: {
                  org_php: $("#php_origial").val()
               },
               dataType: "json",
               success: function(response) {
                  if (!response['status']) {
                     $("#btn_encode").html('<i class="fa-thin fa-play"></i> Mã hóa ngay');
                     Swal.fire('Lỗi', response['msg'], 'error');
                  } else {
                     $("#btn_encode").html('<i class="fa-thin fa-play"></i> Mã hóa ngay');
                     Swal.fire('Thành công', response['msg'], 'success');
                     $("#php_encoded").val(response['php_encoded']);
                  }
               }
            });
         }
      });
    $("#chat-form").submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var formAction = form.attr("action");
        var formData = form.serialize();
        $.post(formAction, formData,
          function (data) {
              if(data.status === false){
                document.getElementById("chat-form").reset();
                Swal.fire("Thông báo", data.message, "error");
              }else{
                document.getElementById("chat-form").reset();
                Swal.fire("Thông báo", data.message, "success");
              }
        }, "json");
    });
    
});
