<?php
define('PAGE', 'DETAIL');
$json   = file_get_contents('http://u-kafe.com/admin-post/index.php/wp-json/wp/v2/news?_embed&post_id=18');
$object = json_decode($json, true);

foreach ($object as $v) {
    if ($v['id'] == $_GET['id']) {
        break;
    }
}
$title    = ($v['title']['rendered']);
$title_page    = $title;

$content  = ($v['content']['rendered']);
$link_img = ($v['_embedded']["wp:featuredmedia"][0]['source_url'] ?? "");

include('header.php'); ?>
<style>
    .list-newss a {
        color: #582000;
    }
</style>
<div class="container" id="content-detail">
    <div class="news block-box container" id="news">
        <h2>NEWS</h2>
    </div>
    <?php if($link_img){?>
    <img src="<?=$link_img?>" style="width:100%">
    <?php } ?>
    <h1><?=$title?></h1>
    <article class="content_detail fck_detail width_common block_ads_connect"><?=$content?></article>

</div>
<div class="mt-2  container" style="">
    <h2>Tin liên quan</h2>
</div>
<div class="mt-2  container list-news" style="">
    <?php
    foreach ($object as $v) {
        $id = ($v['id']);

        $title   = ($v['title']['rendered']);
        $content = ($v['content']['rendered']);
        $excerpt = ($v['excerpt']['rendered']);

        $link_img = ($v['_embedded']["wp:featuredmedia"][0]['source_url']??"");
        ?>
        <article>
            <h3><a href="/news-detail.php?id=<?=$id?>"><?=$title?></a></h3>
            <span><?=$excerpt?></span>
        </article>
        <?php
    }
    ?>


</div>
<?php include('footer.php'); ?>
