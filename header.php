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
    <title> <?= $title_page?$title_page.' | ':'' ?> U-Kafé | 100% Hạt cà phê </title>
    <meta name="description" content="U-Kafe Real Café – 100% hạt cà phê">
    <meta name="keywords"
          content=" cà phê hạt, hat ca phe, cà phê nguyên chất, ca phe nguyen chat, 100% cà phê nguyên chất, cà phê ngon, ca phe ngon, cà phê thơm, cà phê thơm ngon, cà phê sạch, cà phê rang xay, hạt cà phê rang xay, cà phê chất lượng cao, cà phê không hóa chất, cà phê Arabica, cà phê robusta, cà phê moka, cà phê culi, cà phê pha máy, cà phê pha máy ngon, cà phê pha máy thơm ngon, cà phê pha phin, cà phê pha phin ngon, cà phê pha phin thơm ngon, cà phê quận 1, cà phê quận 3, cà phê quận 4, cà phê quận 5, cà phê quận 7, cà phê quận 8, cà phê ngon quận 1, cà phê ngon quận 3, cà phê ngon quận 4, cà phê ngon quận 5, cà phê ngon quận 7, cà phê ngon quận 8, giao cà phê ngon quận 1, giao cà phê ngon quận 3, giao cà phê ngon quận 4, giao cà phê ngon quận 5, giao cà phê ngon quận 7, giao cà phê ngon quận 8, giao cà phê ngon, cà phê dễ uống, cà phê gia đình, cà phê thư giãn, cà phê thành công, cà phê đẳng cấp, cafe hạt, cafe nguyên chất, 100% cafe nguyên chất, cafe ngon, cafe thơm, cafe thơm ngon, cafe sạch, cafe rang xay, hạt cafe rang xay, cafe chất lượng cao, cafe không hóa chất, cafe Arabica, cafe robusta, cafe moka, cafe culi, cafe pha máy, cafe pha máy ngon, cafe pha máy thơm ngon, cafe pha phin, cafe pha phin ngon, cafe pha phin thơm ngon, cafe quận 1, cafe quận 3, cafe quận 4, cafe quận 5, cafe quận 7, cafe quận 8, cafe ngon quận 1, cafe ngon quận 3, cafe ngon quận 4, cafe ngon quận 5, cafe ngon quận 7, cafe ngon quận 8, giao cafe ngon quận 1, giao cafe ngon quận 3, giao cafe ngon quận 4, giao cafe ngon quận 5, giao cafe ngon quận 7, giao cafe ngon quận 8, giao cafe ngon, cafe dễ uống, cafe gia đình, cafe thư giãn, cafe thành công, cafe đẳng cấp, ca phe thom, ca phe thom ngon, ca phe chat luong cao, ca phe sach, hat ca phe rang xay, ca phe robusta, ca phe arabica, ca phe moka, ca phe culi, ca phe phin, ca phe pha phin, ca phe phin ngon, ca phe phin thom ngon">

    <!-- Bootstrap core CSS -->
    <!--    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    <link href="vendos/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/font-awesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
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
<body id="page-<?= PAGE ?>">
<div class="header-bar menu <?= (PAGE == 'HOME'?'':'sticked') ?>" id="home-scroll">
    <div>
        <ul>
            <li><a href="<?= PAGE=='HOME'?'':'/' ?>#home">HOME </a></li>
            <li><a href="<?= PAGE=='HOME'?'':'/' ?>#real-story">OUT STORY </a></li>
            <li><a href="<?= PAGE=='HOME'?'':'/' ?>#coffee">PRODUCT </a></li>
            <li class="mid-block"><a href="<?= PAGE=='HOME'?'':'/' ?>#trust">TRUST </a></li>
            <li><a href="<?= PAGE=='HOME'?'':'/' ?>#contact">CONTACT </a></li>
            <li><a href="<?= PAGE=='HOME'?'':'/' ?>#news">NEWS</a></li>
        </ul>
        <a href="/"><img src="imgs/logo.png"></a>
    </div>
</div>


<div class="header-bar <?= (PAGE == 'HOME'?'':'hidden') ?>" id="home">
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

