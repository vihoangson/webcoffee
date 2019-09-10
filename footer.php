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
        <iframe style="border: none; overflow: hidden;"
                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fukafe&amp;tabs&amp;width=340&amp;height=154&amp;small_header=true&amp;adapt_container_width=true&amp;hide_cover=true&amp;colorscheme=dark&amp;show_facepile=true&amp;appId=1079595618783088"
                frameborder="0" scrolling="no"></iframe>
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
<!--                        <option>Arabica</option>-->
<!--                        <option>Robusta</option>-->
<!--                        <option>Culi</option>-->
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
<!--<script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>-->
<script src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&amp;version=v2.5"></script>
<script src="scripts/app.js"></script>
<script src="scripts/news.js"></script>
<script src="scripts/order.js"></script>
<script src="scripts/contentDetail.js"></script>
<script>
    <?php
    if(true){
    if(@$_SESSION['status_order'] == 1){
    ?>
    alert('Thank you for order');
    <?php
    $_SESSION['status_order'] = null;
    }elseif (@$_SESSION['status_order'] == 2){
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
