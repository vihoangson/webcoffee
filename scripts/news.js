$(document).on('click','.paging-button li.page',function(){
    $('#news article').hide();
    let id = $(this).data('id');
    $('#news article').each(function () {
        console.log($(this).data('id'));
        if ($(this).data('id') == id) {
            $(this).show();
        }

    })
})


$(".list-news button").click(function(){
    $('.list-news').hide();
})


$(".click-more-img").click(function (a) {
    a.preventDefault();
    let data_img =
        [
            [
                {
                    img: 'imgs/trust1.png',
                    link: ''
                },
                {
                    img: 'imgs/trust2.png',
                    link: ''
                },
                {
                    img: 'imgs/trust3.png',
                    link: ''
                },
                {
                    img: 'imgs/trust4.png',
                    link: ''
                },

            ],
            [
                {
                    img: 'imgs/trust6.png',
                    link: ''
                },
                {
                    img: 'imgs/trust7.png',
                    link: ''
                },
                {
                    img: 'imgs/trust8.png',
                    link: ''
                },
                {
                    img: 'imgs/trust9.png',
                    link: ''
                },

            ]
        ];

    if ($(this).data('id') == 1) {
        $(this).data('id', 2);
        $(".box-1 img").attr('src', data_img[0][0].img);
        $(".box-2 img").attr('src', data_img[0][1].img);
        $(".box-3 img").attr('src', data_img[0][2].img);
        $(".box-4 img").attr('src', data_img[0][3].img);
    } else {
        $(this).data('id', 1)
        $(".box-1 img").attr('src', data_img[1][0].img);
        $(".box-2 img").attr('src', data_img[1][1].img);
        $(".box-3 img").attr('src', data_img[1][2].img);
        $(".box-4 img").attr('src', data_img[1][3].img);
    }
});

function setNews(){

        callback = function(res){

            $(".loading-news").toggleClass('hidden');

            $(".content-news").toggleClass('hidden');
            $(".paging-button").toggleClass('hidden');

            if(sessionStorage.getItem("data-news")==undefined){
                sessionStorage.setItem("data-news", JSON.stringify(res));
            }


            if(true){
                res = sessionStorage.getItem('data-news');
                res = JSON.parse(res);
                let k = $(".content-news article").first();
                k.hide();

                let listArtical = $(".list-news article").first();
                listArtical.hide();
                $.each(res,function(key,v){
                    let m = k.clone();
                    let ElementListArtical = listArtical.clone();

                    if(v._embedded["wp:featuredmedia"] != undefined){
                        m.find('img').attr('src',v._embedded["wp:featuredmedia"][0].source_url);
                    }else{
                        m.find('img').attr('src','https://via.placeholder.com/200x200');
                    }

                    let link = "news-detail.php?id="+v.id ;
                    m.find('a').attr('href',link);
                    m.find('a').text(v.title.rendered);

                    ElementListArtical.find('a').attr('href',link);
                    ElementListArtical.find('a').text(v.title.rendered);

                    m.find('.content-blog').html(v.excerpt.rendered);
                    m.attr('data-id',key+1);
                    if(key != 0){
                        m.hide();
                    }else{
                        m.show();
                    }

                    ElementListArtical.show();
                    ElementListArtical.removeClass('hidden');
                    $(".content-news").append(m);
                    $(".list-news").append(ElementListArtical);


                    // let index= key+1;
                    // $(".paging-button").append('<li class="page" data-id="'+index+'">'+index+'</li>');
                });
            }
        };

        $.get('http://u-kafe.com/admin-post/index.php/wp-json/wp/v2/news?_embed' , callback);
    if(sessionStorage.getItem("data-news") == undefined) {
}


    return;


}
$(document).ready(function(){
    setNews()
});

