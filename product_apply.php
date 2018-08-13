<?php
$active = 2;
require_once('layout/header.php');

$breadcrumb = ['產品介紹','多枚行星減速機-GNP系列'];
require_once('layout/breadcrumb.php');

$title = ['title' => '多枚行星減速機-GNP系列', 'subtitle' => 'Planetary Gearbox - GNP Series'];
require_once('layout/title.php');

$sidebar = [
    'title' => '產品介紹',
    'items' => ['動力推引器','WS升降機購系列','90度轉向器-WS系列','中空旋轉平台-NT系列','多枚行星減速機-GNP系列','多枚行星減速機-GNDU系列','諧波減速機-GCSG系列','諧波減速機-GSHG系列(中空軸)','諧波減速機-GCSD14'],
    'active' => 5
];
require_once('layout/content.php');
require_once('layout/product/index.php');
?>

<?php
require_once('layout/content_end.php');
require_once('layout/footer.php');
?>