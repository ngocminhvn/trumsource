$(document).ready(function () {
    $.ajaxSetup({
        headers: { 
            'csrf-token': $('meta[name="csrf-token"]').attr("content") 
        }
    });
    $('.nav-main-link[href="' + location.pathname + '"]').addClass("active");
});
$("button").click(function(){
    $("textarea").select();
    document.execCommand('copy');
});
One.helpersOnLoad(['jq-magnific-popup']);

function copy(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
    Swal.fire("Thông Báo", "Copy thành công!", "success");
}
function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(";");
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == " ") {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
