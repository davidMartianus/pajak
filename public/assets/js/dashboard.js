$(document).ready(function () {
    $(".burger-menu").on("click", function () {
        $(".logo").find('img').toggle();
    });

    // $(".dash-menu").on("click",function() {
    //     $(this).addClass("active").siblings().removeClass("active");
    // });
});