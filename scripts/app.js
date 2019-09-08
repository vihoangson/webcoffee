function checkscroll(){

    if($(".sticked").length > 0){
        heightFix = 0;
        $('.menu').addClass('fixed');
    }else{
        heightFix = 70;
        if ($(window).scrollTop() > heightFix) {
            $('.menu').addClass('fixed');
            $('.menu').removeClass('hidden');
        } else {
            $('.menu').removeClass('fixed');
            $('.menu').addClass('hidden');
        }
    }

}
$(document).ready(function(){
    checkscroll();
})

$(window).bind('scroll', function () {
    checkscroll();
});
