<?php
define('PAGE','HOME');
include('header.php'); ?>

<div class="real-story block-box container" id="real-story">
    <h2>THE REAL STORY</h2>
    <div class="box row">
        <div class="block-left col-md-4"><img src="imgs/real story.png"></div>
        <div class="block-right col-md-8">
            <p>- Nguyên tắc giúp chúng tôi luôn đặt lên hàng đầu để đảm bảo chất lượng và hương vị tinh nguyên gửi đến
                khách hàng.</p>
            <p>Những hạt cà phê đều được lựa chọn khắt khe từ trái chín của mùa vụ mới nhất, được thu hái hoàn toàn bằng
                tay, đạt tỉ lệ trái chín chiếm tới hơn 95% thu hoạch.</p>
            <p>Công thức rang và phối trộn hạt Arabica và Robusta của U-Kafe tạo nên một tổng thể cân bằng của vị đắng,
                ngọt, chua, giúp cà phê đậm thanh, hương thơm quyến rũ.</p>
            <p>- Hạt ARABICA xuất xứ từ những trang trại uy tín ở Cầu Đất, thổ nhưỡng để trồng được hạt cà phê Arabica
                ngon nhất Việt Nam. Cà phê Arabica được sơ chế ướt, chắt lọc hương trái cây chín, chua thanh dễ chịu,
                thoang thoảng vị caramel và chocolate cùng hậu vị ngọt dịu kéo dài.</p>
            <p>- Hạt ROBUSTA của U-Kafe được chọn lọc từ những nhà cung cấp Robusa uy tín nhất Việt Nam từ Tây Nguyên
                (Đak Lak, Gia Lai, Lâm Đồng). Hạt Robusta được sơ chế kiểu mật ong để mật trái cà phê bám vào hạt trong
                quá trình khô. Hạt Robusta có hàm lượng caffein cao gấp 1,5 - 2 lần hạt Arabica, được rang đậm vừa, cho
                vị bùi béo, ngọt dịu kéo dài.</p>

        </div>
    </div>
</div>
<?php

$json_str = file_get_contents('http://u-kafe.com/admin-post/index.php/wp-json/wp/v2/product?_embed');
$array_product = json_decode($json_str,true);

?>
<div class="coffee block-box container" id="coffee">
    <h2>COFFEE</h2>
    <div class="box row">
        <?php
        foreach ($array_product as $key=>$value){
            ?>
            <div class="order" >
                <img src='<?= $value['_embedded']["wp:featuredmedia"]["0"]['source_url'] ?>'>
                <a class="e-product" href="#" data-id="<?= $value['id'] ?>"  data-price="<?= $value['price'] ?>" data-name="<?= $value['title']['rendered'] ?>">MUA HÀNG</a>
            </div>

            <?php
        }
        ?>
        <div class="order hidden">
            <img src='imgs\san pham 2.png'>
            <a href="#" data-id="2">MUA HÀNG</a>
        </div>
        <div class="order hidden">
            <img src='imgs\san pham 3.png'>
            <a href="#" data-id="3">MUA HÀNG</a>
        </div>
    </div>
</div>

<div class="trust block-box container" id="trust">
    <h2>TRUST</h2>
    <div class="box row">
        <div class="box-1"><a href="#"><img src="imgs/trust1.png"></a></div>
        <div class="box-2"><a href="#"><img src="imgs/trust2.png"></a></div>
        <div class="box-3"><a href="#"><img src="imgs/trust3.png"></a></div>
        <div class="box-4"><a href="#"><img src="imgs/trust4.png"></a></div>
        <div class="box-5 click-more-img" data-id=""><a href="#"><img src="imgs/trust5.png"></a></div>
        <div class=" hidden box-6"><a href="#"><img src="imgs/trust1.png"></a></div>
        <div class=" hidden box-7"><a href="#"><img src="imgs/trust1.png"></a></div>
        <div class=" hidden box-8"><a href="#"><img src="imgs/trust1.png"></a></div>
        <div class=" hidden box-9"><a href="#"><img src="imgs/trust1.png"></a></div>
        <div class=" hidden box-10"><a href="#"><img src="imgs/trust5.png"></a></div>
    </div>
</div>

<div class="commitment block-box container" id="commitment">
    <h2>COMMITMENT</h2>
    <div class="row">
        <div class="col-lg-4"><img src="imgs/commitment 1.png"></div>
        <div class="col-lg-4"><img src="imgs/commitment 2.png"></div>
        <div class="col-lg-4"><img src="imgs/commitment 3.png"></div>
    </div>
</div>

<div class="contact block-box container" id="contact">
    <h2>CONTACT</h2>
    <div class="row">
        <div class="col-lg-4 text-left"><img src="imgs/contact1.png"></div>
        <div class="col-lg-4"><img src="imgs/contact2.png"></div>
        <div class="col-lg-4 text-right"><img src="imgs/contact3.png"></div>
    </div>
</div>

<div class="news block-box container" id="news">


    <h2>NEWS</h2>
    <div class="text-center loading-news"><i class="fa fa-spinner fa-spin  fa-4x"></i></div>
    <div class="row content-news hidden">
        <article data-id="" class="">
            <div class="cover-img"><img src="imgs/news.png"></div>
            <div class="description">
                <a target="_blank" href="page1.html">{{title}}</a>
                <div class="content-blog">{{content}}</div>
            </div>
        </article>
    </div>
    <ul class="paging-button hidden">
        <li class="page" data-id="1">1</li>
        <li class="page" data-id="2">2</li>
        <li class="page" data-id="3">3</li>
        <li class="page" data-id="4">4</li>
        <li class="page" data-id="5">5</li>
        <li class="page" data-id="6">6</li>
        <li class="list-button">List</li>
    </ul>
</div>

<div class="container list-news" style="display: none;">
    <button>Close</button>
    <article class="hidden">
        <h3><a href="#"></a></h3>
    </article>

</div>

<?php include('footer.php'); ?>
