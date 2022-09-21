function sweet(text, icon) {
    swal({
      title: "Thông Báo",
      text,
      icon,
      button: "Ok",
    });
}

// update gia
$(document).ready(function(){
 $('.edit').click(function(){
  $('.txtedit').hide();
  $(this).next('.txtedit').show().focus();
  $(this).hide();
 });
 $(".txtedit").focusout(function(){
  var id = this.id;
  var value = $(this).val();
  $(this).hide();
  $(this).prev('.edit').show();
  $(this).prev('.edit').text(value);
  $.ajax({
   url: '/control/ajax/update_code.php',
   type: 'POST',
   data: { value:value, id:id },
   success:function(response){
      if(response == 'success'){ 
         swal("Thông Báo","Lưu Thành Công!","success");
      }else if(response == 'empty'){ 
         swal("Lỗi","Không Được Để Trống","error");
      }else{
         swal("Lỗi","Lỗi máy chủ","error");
      }
   }
  });
 });
});

// update tien
$(document).ready(function(){
 $('.edit_user').click(function(){
  $('.useredit').hide();
  $(this).next('.useredit').show().focus();
  $(this).hide();
 });
 $(".useredit").focusout(function(){
  var id = this.id;
  var value = $(this).val();
  $(this).hide();
  $(this).prev('.edit_user').show();
  $(this).prev('.edit_user').text(value);
  $.ajax({
   url: '/control/ajax/update_user.php',
   type: 'POST',
   data: { value:value, id:id },
   success:function(response){
      if(response == 'success'){ 
         swal("Thông Báo","Cập nhập thành công!","success");
      }else if(response == 'empty'){ 
         swal("Lỗi","Không Được Để Trống","error");
      }else{
         swal("Lỗi","Lỗi máy chủ","error");
      }
   }
  });
 });
});

// update setting
$(document).ready(function(){
    $("#updateform").submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var formAction = form.attr("action");
        var formData = form.serialize();
        $.post(formAction, formData,
          function (data) {
              if(data.status == 1){
                swal("Thông báo", data.msg, "error");
              }else{
                swal("Thông báo", data.msg, "success");
              }
        }, "json");
    });
});
    
// post
        $(document).ready(function(){
        $('#submit-post').click(function() {
        $('#submit-post').attr('disabled','disabled');
        $('#submit-post')['html']('Submit');
        var formData = {
        'note'              : $('textarea[id=note]').val()
        };
        $.post("/control/ajax/post.php", formData,
          function (data) {
              if(data.status == '1'){
                swal("Thông báo", data.msg, "error");
                $('#submit-post').html('Submit').prop('disabled', false);
              }else{
               swal("Thông báo", data.msg, "success");
               $('#submit-post').html('Submit').prop('disabled', false);
              }
        }, "json");
      });
    });
    