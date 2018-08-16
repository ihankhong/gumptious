<?php
$active = 5;
require_once('layout/header.php');
require_once('layout/article.php');

$breadcrumb = [
    ['title' => '減速機學堂', 'link' => 'question.php'],
    ['title' => '常見問題', 'link' => '#']
];
require_once('layout/breadcrumb.php');

$title = ['title' => '常見問題', 'subtitle' => 'Q&A'];
require_once('layout/title.php');

$sidebar = [
    'title' => '減速機學堂',
    'items' => [
        ['title' => '常見問題', 'link' => 'question.php'],
        ['title' => '安裝教學', 'link' => '#'],
        ['title' => '選購問題', 'link' => '#'],
        ['title' => '維修問題', 'link' => '#'],
    ],
    'active' => 1
];
require_once('layout/content.php');
?>
<h3>減速機比數代表什麼意思？該如何計算減速比？</h3>
<p class="date text-right">2018/04/12</p>
<img src="image/page/study/content/1.png" class="img-fluid" alt="Question Content Banner 1">
<h3>什麼是減速比？減速比的概念？</h3>
<p>其實就是【將馬達速度減低到合適速度，減低速度，增加馬達轉轉矩！】但要如何計算出最符合自己機台的減速比呢？</p>
<h3>用一個簡單概念去想</h3>
<p>其實就是【將馬達速度減低到合適速度，減低速度，增加馬達轉轉矩！】但要如何計算出最符合自己機台的減速比呢？</p>
<div class="btn-group btn-block">
    <a href="question.php" class="btn btn-link pagelink ml-auto"><i class="fa fa-caret-left fa-lg mr-2" aria-hidden="true"></i>減速機學堂</a>
</div>
<?php
require_once('layout/content_end.php');
require_once('layout/article_end.php');
require_once('layout/footer.php');
?>