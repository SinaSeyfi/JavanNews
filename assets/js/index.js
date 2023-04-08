function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
    document.getElementById("chmtn-1").innerHTML = "کپی شد";
    console.log('hsdjid')
    setTimeout(copyToClipboard_back, 1000);
}

function copyToClipboard_back() {
    document.getElementById("chmtn-1").innerHTML = "کپی ";
}

function open_mobaile() {
    document.getElementById("mobail-nav").classList.add("mobail-menu2");
    document.getElementById("mobaile-nav-icon").style.right = "0";
}

function close_mobaile() {
    document.getElementById("mobail-nav").classList.remove("mobail-menu2");
    document.getElementById("mobaile-nav-icon").style.right = "-1200px";
}

$(".sidemenu ul > li").click(function () {
    $(this).toggleClass("toggle-active");
});






