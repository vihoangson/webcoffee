function checkscroll(){
    if ($(window).scrollTop() > 70) {
        $('.menu').addClass('fixed');
        $('.menu').removeClass('hidden');
    } else {
        $('.menu').removeClass('fixed');
        $('.menu').addClass('hidden');
    }
}
$(document).ready(function(){
    checkscroll();
})
$(window).bind('scroll', function () {
    checkscroll();
});
