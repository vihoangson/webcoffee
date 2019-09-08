<?php
session_start();
echo '<pre>';
$files = scandir('./data/order/');
echo "<h1>Order</h1>";
$files = array_reverse($files);
foreach ($files as $v){
    if(preg_match('/(.+)\.json$/',$v,$match)){

        $content = file_get_contents('./data/order/'.$v);
        $data = json_decode($content);

        $date_time =  date("Y-m-d h:i:s",$match[1]);

        echo "<h4>$date_time</h4>";
        foreach ($data as $kd => $vd){
            echo "<div>".$kd.": <strong>".$vd."</strong></div>";
        }
        echo "<hr>";
    }
}
