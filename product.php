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
require_once('product/index.php');
?>
<section class="productTabWrapper">
    <div class="pillsWrapper">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pformat-tab" data-toggle="pill" href="#pformat" aria-controls="pformat" aria-selected="true" role="tab">產品規格</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="papply-tab" data-toggle="pill" href="#papply" aria-controls="papply" aria-selected="false" role="tab">產品應用</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pdownload-tab" data-toggle="pill" href="#pdownload" aria-controls="pdownload" aria-selected="false" role="tab">設計下載</a>
            </li>
        </ul>
    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pformat" role="tabpanel" aria-labelledby="pformat-tab">
            <?php require_once('product/format.php'); ?>
        </div>
        <div class="tab-pane fade" id="papply" role="tabpanel" aria-labelledby="papply-tab">
            <?php require_once('product/apply.php'); ?>
        </div>
        <div class="tab-pane fade" id="pdownload" role="tabpanel" aria-labelledby="pdownload-tab">
            <?php require_once('product/download.php'); ?>
        </div>
    </div>
</section>
<?php
require_once('layout/content_end.php');
require_once('layout/footer.php');
?>