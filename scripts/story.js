url ='http://u-kafe.com/admin-post/index.php/wp-json/wp/v2/pages?slug=story';
$.get(url,function(res){
    $("#real-story .block-right").html(res[0].content.rendered)
})
