<?php
$active = 1;
require_once('layout/header.php');

$breadcrumb = [
    ['title' => '關於鼎億', 'link' => 'company.php'],
    ['title' => '公司介紹', 'link' => '#']
];
require_once('layout/breadcrumb.php');

$title = ['title' => '公司介紹', 'subtitle' => 'About'];
require_once('layout/title.php');

$sidebar = [
    'title' => '關於鼎億',
    'items' => [
        ['title' => '最新消息', 'link' => 'news.php'],
        ['title' => '公司介紹', 'link' => 'company.php'],
        ['title' => '發展沿革', 'link' => '#'],
        ['title' => '理念/使命/願景', 'link' => '#'],
    ],
    'active' => 2
];
require_once('layout/content.php');
?>
<img src="image/page/company/1.png" class="img-fluid" alt="Company Banner 1">
<h3 class="ct text-center">公司簡介</h3>
<p>鼎億(廈門)貿易有限公司，是台灣鼎億有限公司於廈門成立的服務據點，2010年元月正式營運。具有獨立法人營業資格及合法進出口執照，提供廣大中國客戶更便捷的產品購買及技術支持。</p>
<p>鼎億(廈門)貿易有限公司，是台灣鼎億有限公司於廈門成立的服務據點，2010年元月正式營運。具有獨立法人營業資格及合法進出口執照，提供廣大中國客戶更便捷的產品購買及技術支持。</p>
<h3 class="ct text-center">為什麼選擇鼎億</h3>
<p>鼎億(廈門)貿易有限公司，是台灣鼎億有限公司於廈門成立的服務據點，2010年元月正式營運。具有獨立法人營業資格及合法進出口執照，提供廣大中國客戶更便捷的產品購買及技術支持。</p>
<h3 class="ct text-center">經驗和專業</h3>
<p>鼎億(廈門)貿易有限公司，是台灣鼎億有限公司於廈門成立的服務據點，2010年元月正式營運。具有獨立法人營業資格及合法進出口執照，提供廣大中國客戶更便捷的產品購買及技術支持。</p>
<p>鼎億(廈門)貿易有限公司，是台灣鼎億有限公司於廈門成立的服務據點，2010年元月正式營運。具有獨立法人營業資格及合法進出口執照，提供廣大中國客戶更便捷的產品購買及技術支持。</p>
<img src="image/page/company/2.png" class="img-fluid" alt="Company Banner 2">
<?php
require_once('layout/content_end.php');
require_once('layout/footer.php');
?>