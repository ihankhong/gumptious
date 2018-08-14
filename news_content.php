<?php
$active = 1;
require_once('layout/header.php');

$breadcrumb = [
    ['title' => '關於鼎億', 'link' => 'company.php'],
    ['title' => '最新消息', 'link' => '#']
];
require_once('layout/breadcrumb.php');

$title = ['title' => '最新消息', 'subtitle' => 'News'];
require_once('layout/title.php');

$sidebar = [
    'title' => '關於鼎億',
    'items' => [
        ['title' => '最新消息', 'link' => 'news.php'],
        ['title' => '公司介紹', 'link' => 'company.php'],
        ['title' => '發展沿革', 'link' => '#'],
        ['title' => '理念/使命/願景', 'link' => '#'],
    ],
    'active' => 1
];
require_once('layout/content.php');
?>
<h3>2018深圳國際機器人展圓滿落幕，感謝客戶熱情參與與回饋！</h3>
<p class="date text-right">2018/04/12</p>
<img src="image/page/news/content/1.png" class="img-fluid" alt="News Content Banner 1">
<p></p>
<p>為期四天的深圳國際機器人展，在客戶熱情的參與與回饋中終於圓滿落幕，從佈展到產品解說，充滿著鼎億GTC對客對客戶對客戶的細心與用心！除了平穩度高的升降機構，剛性強的NTH100中空旋轉平台更是更是讓客戶大開眼界，看照片中熱絡的情形就知道，鼎億GTC的減速機有多受歡迎！</p>
<img src="image/page/news/content/2.png" class="img-fluid" alt="News Content Banner 2">
<p></p>
<p>與組裝人員們仔細的組裝機構，每一個細節都不可以馬虎，才能確保穩定的品質與效能！專業與用心的服務，最值得信賴，還在為機台尋尋覓覓好的減速機廠商嗎？</p>
<p>別再浪費時間了！減速機大小問題，交給鼎億GTC準沒錯<br>一通電話幫你搞定–《04-24919100》</p>
<div class="btn-group btn-block">
    <a href="news.php" class="btn btn-link pagelink ml-auto"><i class="fa fa-caret-left fa-lg mr-2" aria-hidden="true"></i>回最新消息</a>
</div>
<?php
require_once('layout/content_end.php');
require_once('layout/footer.php');
?>