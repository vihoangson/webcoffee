
$('.paging-button li.page').click(function () {
    $('#news article').hide();
    let id = $(this).data('id');
    $('#news article').each(function () {
        console.log($(this).data('id'));
        if ($(this).data('id') == id) {
            $(this).show();
        }

    })
});

$('.order a').click(function (e) {
    e.preventDefault();
    let id = $(this).data('id')
    openModal(id);

});
$(".list-button").click(function(){
    $(".list-news").show();
});


//openModal();
function openModal(id) {
    $("#type-product select > option").prop("selected",false);
    $("#type-product select > option:nth-child("+(id)+")").prop("selected","selected");
    countPrice();
    $('#model-contact').show();
    $('.cover-fix').show();
}
$("#type-product select").change(function(){
    countPrice();
})
$("#amount").change(function(){
    countPrice();
})
countPrice
function countPrice(){
    console.log($("#type-product select > option:selected").index()+1);
id = $("#type-product select > option:selected").index()+1;
switch (id) {
    case 1:
        price = 100000;
        break;
    case 2:
        price = 150000;
        break;
    case 3:
        price =
            200000;
        break;
}


    let amount = $("#amount").val();
    total = amount * price

    //$("#amount").text($("#type-product select > option:selected").index()+1)

    $("#price").text(formatCurrency(price));
    $("#total").text(formatCurrency(total))
}
function formatCurrency(curr){
    curr  = formatMoney(curr);
    return curr + " đ"
}
function formatMoney(amount, decimalCount = 0, decimal = ".", thousands = ",") {
    try {
        decimalCount = Math.abs(decimalCount);
        decimalCount = isNaN(decimalCount) ? 2 : decimalCount;

        const negativeSign = amount < 0 ? "-" : "";

        let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
        let j = (i.length > 3) ? i.length % 3 : 0;

        return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
    } catch (e) {
        console.log(e)
    }
};
$(".btn-close").click(function(){
    $('.cover-fix').trigger('click');
});

$('.cover-fix').click(function () {
    $('#model-contact').hide();
    $(this).hide();
});


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

function getDataNews(){
    return [
        {
            title:'123',
            content:'alkdf',
            link:'/index.html',
            img:'https://i-vnexpress.vnecdn.net/2019/03/12/nghi-pham-1984-1552407954.jpg'
        },
        {
            title:'123',
            content:'alkdf',
            link:'/index.html',
            img:'https://i-vnexpress.vnecdn.net/2019/03/12/map-edit-7763-1552378206-8496-1552407954.jpg'
        }

    ]
}
function checkscroll(){
    if ($(window).scrollTop() > 70) {
        $('.menu').addClass('fixed');
        $('.menu').removeClass('hidden');
    } else {
        $('.menu').removeClass('fixed');
        $('.menu').addClass('hidden');
    }
}

function setNews(){
    let data = getDataNews();
    let k = $(".content-news article").first();
    k.hide();
    //k.remove();
    $.each(data,function(key,v){
        m = k.clone();
        m.find('img').attr('src',v.img);
        m.find('a').attr('href',v.link);
        m.find('a').text(v.title);
        m.find('.content-blog').text(v.content);
        m.attr('data-id',key+1);
        if(key != 0){
            m.hide();
        }else{
            m.show();
        }
        $(".content-news").append(m);

    });

}
$(document).ready(function(){
    checkscroll();
    setNews();
})
$(window).bind('scroll', function () {
    checkscroll();
});
