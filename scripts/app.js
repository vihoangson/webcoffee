function getDataProduct(){
    $.get('http://u-kafe.com/admin-post/index.php/wp-json/wp/v2/product?_embed',function(res){
        console.log(res[0].title.rendered);
    })
}

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
    getDataProduct();
    checkscroll();
})

$(window).bind('scroll', function () {
    checkscroll();
});


$(".navbar-toggle").click(function(){
    $("#home-scroll-small").toggleClass('hidden');
})
