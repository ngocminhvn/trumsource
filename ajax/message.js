$(function(){
    setInterval(function () {
        $.get("/ajax/chat.php?t=1", {}, function (data, status) {
            $("#messager").html(data);
        });
    }, 1e3);
});
