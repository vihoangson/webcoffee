<?php
session_start();
if(true){
    if(!is_writable_r('./data/order')){
        echo 1;
        chmod('./data/order',777);
    }

}
function is_writable_r($dir) {
    if (is_dir($dir)) {
        if(is_writable($dir)){
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (!is_writable_r($dir."/".$object)) return false;
                    else continue;
                }
            }
            return true;
        }else{
            return false;
        }

    }else if(file_exists($dir)){
        return (is_writable($dir));

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <title> U-Kafé | 100% Hạt cà phê </title>
    <meta name="description" content="U-Kafe Real Café – 100% hạt cà phê">
    <meta name="keywords"
          content=" cà phê hạt, hat ca phe, cà phê nguyên chất, ca phe nguyen chat, 100% cà phê nguyên chất, cà phê ngon, ca phe ngon, cà phê thơm, cà phê thơm ngon, cà phê sạch, cà phê rang xay, hạt cà phê rang xay, cà phê chất lượng cao, cà phê không hóa chất, cà phê Arabica, cà phê robusta, cà phê moka, cà phê culi, cà phê pha máy, cà phê pha máy ngon, cà phê pha máy thơm ngon, cà phê pha phin, cà phê pha phin ngon, cà phê pha phin thơm ngon, cà phê quận 1, cà phê quận 3, cà phê quận 4, cà phê quận 5, cà phê quận 7, cà phê quận 8, cà phê ngon quận 1, cà phê ngon quận 3, cà phê ngon quận 4, cà phê ngon quận 5, cà phê ngon quận 7, cà phê ngon quận 8, giao cà phê ngon quận 1, giao cà phê ngon quận 3, giao cà phê ngon quận 4, giao cà phê ngon quận 5, giao cà phê ngon quận 7, giao cà phê ngon quận 8, giao cà phê ngon, cà phê dễ uống, cà phê gia đình, cà phê thư giãn, cà phê thành công, cà phê đẳng cấp, cafe hạt, cafe nguyên chất, 100% cafe nguyên chất, cafe ngon, cafe thơm, cafe thơm ngon, cafe sạch, cafe rang xay, hạt cafe rang xay, cafe chất lượng cao, cafe không hóa chất, cafe Arabica, cafe robusta, cafe moka, cafe culi, cafe pha máy, cafe pha máy ngon, cafe pha máy thơm ngon, cafe pha phin, cafe pha phin ngon, cafe pha phin thơm ngon, cafe quận 1, cafe quận 3, cafe quận 4, cafe quận 5, cafe quận 7, cafe quận 8, cafe ngon quận 1, cafe ngon quận 3, cafe ngon quận 4, cafe ngon quận 5, cafe ngon quận 7, cafe ngon quận 8, giao cafe ngon quận 1, giao cafe ngon quận 3, giao cafe ngon quận 4, giao cafe ngon quận 5, giao cafe ngon quận 7, giao cafe ngon quận 8, giao cafe ngon, cafe dễ uống, cafe gia đình, cafe thư giãn, cafe thành công, cafe đẳng cấp, ca phe thom, ca phe thom ngon, ca phe chat luong cao, ca phe sach, hat ca phe rang xay, ca phe robusta, ca phe arabica, ca phe moka, ca phe culi, ca phe phin, ca phe pha phin, ca phe phin ngon, ca phe phin thom ngon">

    <!-- Bootstrap core CSS -->
    <!--    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    <link href="vendos/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/font-awesome/css/all.css" rel="stylesheet">

    <!--    <link href="styles/style.css" rel="stylesheet">-->
    <!--    <link href="styles/scss/style.scss" rel="stylesheet">-->
    <link rel="stylesheet/less" type="text/css" href="styles/less/style.less"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js"></script>
    <![endif]-->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="header-bar menu hidden" id="home-scroll">
    <div>
        <ul>
            <li><a href="#home">HOME </a></li>
            <li><a href="#real-story">OUT STORY </a></li>
            <li><a href="#coffee">PRODUCT </a></li>
            <li class="mid-block"><a href="#trust">TRUST </a></li>
            <li><a href="#contact">CONTACT </a></li>
            <li><a href="#news">NEWS</a></li>
        </ul>
        <a href="/"><img src="imgs/logo.png"></a>
    </div>
</div>
<div class="header-bar" id="home">
    <div>
        <ul>
            <li><a href="#home">HOME </a></li>
            <li><a href="#real-story">OUT STORY </a></li>
            <li><a href="#coffee">PRODUCT </a></li>
            <li class="mid-block"><a href="#trust">TRUST </a></li>
            <li><a href="#contact">CONTACT </a></li>
            <li><a href="#news">NEWS</a></li>
        </ul>
        <a href="/"><img src="imgs/logo.png"></a>
    </div>
</div>
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

<div class="coffee block-box container" id="coffee">
    <h2>COFFEE</h2>
    <div class="box row">
        <div class="order">
            <img src='imgs\san pham 1.png'>
            <a href="#" data-id="1">MUA HÀNG</a>
        </div>
        <div class="order">
            <img src='imgs\san pham 2.png'>
            <a href="#" data-id="2">MUA HÀNG</a>
        </div>
        <div class="order">
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
    <div class="row content-news">
        <article data-id="" class="">
            <img src="imgs/news.png">
            <div class="description">
                <a target="_blank" href="page1.html">{{title}}</a>
                <div class="content-blog">{{content}}</div>
            </div>
        </article>
    </div>
    <ul class="paging-button">
        <li class="page" data-id="1">1</li>
        <li class="page" data-id="2">2</li>
        <li class="page" data-id="3">3</li>
        <li class="page">»</li>
        <li class="list-button">List</li>
    </ul>
</div>
<div class="container list-news" style="display: none;">
    <button>Close</button>
    <article>
        <h3><a href="#">asldfk</a></h3>
        asdlf;kajdsf
    </article>

</div>

<footer class="" style="position:relative  ">

    <div class="content-footer">
        <img src="imgs/logo.png">
        <div>U-Kafe - Real Coffee</div>
        <div>Address: 44/13B Nguyễn Văn Linh, P. Tân Thuận Tây, Q.7, Tp. Hồ Chí Minh</div>
        <div>Hotline: 096.269.2690 - Tel: 093.856.8165</div>
    </div>

    <div class="fb-block">
<!--        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fukafe10%2F&tabs&width=300&height=200&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"-->
<!--                width="300" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0"-->
<!--                allowTransparency="true" allow="encrypted-media"></iframe>-->
                <iframe style="border: none; overflow: hidden;" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fukafe&amp;tabs&amp;width=340&amp;height=154&amp;small_header=true&amp;adapt_container_width=true&amp;hide_cover=true&amp;colorscheme=dark&amp;show_facepile=true&amp;appId=1079595618783088" frameborder="0" scrolling="no"></iframe>
    </div>

</footer>

<div class="cover-fix"></div>

<div id="model-contact">
    <form action="send.php" method="POST" role="form">
        <legend><i class="fa fa-shopping-cart"></i> Đặt hàng</legend>
        <div class="form-group form-order">
            <h2>Thông tin khách hàng:</h2>
            <div class="row">
                <div class="col-lg-3">
                    <label for="">Họ và tên: <span style="color:red">*</span></label>
                </div>
                <div class="col-lg-9">
                    <input type="text" name="name" required class="form-control" id="" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <label for="">Địa chỉ: <span style="color:red">*</span></label>
                </div>
                <div class="col-lg-9">
                    <input type="text" name="add" required class="form-control" id="" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <label for="">Số điện thoại: <span style="color:red">*</span></label>
                </div>
                <div class="col-lg-9">
                    <input type="text" name="phone" required class="form-control" id="" placeholder="">
                </div>
            </div>
            <h2>Thông tin sản phẩm:</h2>
            <div class="row">
                <div class="col-lg-3">
                    <label for="">Loại cà phê:</label>
                </div>
                <div class="col-lg-9" id="type-product">
                    <select class="form-control" name="typeProduct">
                        <option>Arabica</option>
                        <option>Robusta</option>
                        <option>Culi</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <label for="">Đóng gói:</label>
                </div>
                <div class="col-lg-9">
                    <select class="form-control" name="typeBox">
                        <option>
                            Hạt cafe
                        </option>
                        <option>
                            Bột cafe
                        </option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <label for="">Số lượng:</label>
                </div>
                <div class="col-lg-9">
                    <select class="form-control" id="amount" name="amount">
                        <option value="1">1 kg</option>
                        <option value="2">2 kg</option>
                        <option value="3">3 kg</option>
                        <option value="4">4 kg</option>
                        <option value="5">5 kg</option>
                        <option value="6">6 kg</option>
                        <option value="7">7 kg</option>
                        <option value="8">8 kg</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <label for="">Giá :</label>
                </div>
                <div class="col-lg-9">
                    <span id="price">{{gia}}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <label for="">Thành tiền :</label>
                </div>
                <div class="col-lg-9">
                    <span id="total">{{gia}}</span>
                </div>
            </div>

            <div> Thời gian giao hàng dự kiến vào lúc 13:00 - 19:00 các ngày trong tuần</div>

        </div>


        <div class="text-center">
            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Xác nhận</button>
            <button type="button" class="btn btn-default btn-close"><i class="fa fa-times"></i> Close</button>
        </div>
    </form>
</div>

<div id="model-contact-news"></div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&amp;version=v2.5"></script>
<script src="scripts/app.js"></script>
<script src="scripts/news.js"></script>
<script src="scripts/order.js"></script>
<script>
    <?php
    if(true){
        if($_SESSION['status_order'] == 1){
?>
alert('Thank you for order');
<?php
$_SESSION['status_order'] = null;
}elseif ($_SESSION['status_order'] == 2){
?>
alert('Cant order');
<?php
$_SESSION['status_order'] = null;

}
    }
    ?>
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-147054499-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-147054499-1');
</script>

</body>
</html>
