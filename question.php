<?php
$active = 5;
require_once('layout/header.php');

$breadcrumb = ['減速機學堂','常見問題'];
require_once('layout/breadcrumb.php');

$title = ['title' => '常見問題', 'subtitle' => 'Q&A'];
require_once('layout/title.php');

$sidebar = [
    'title' => '減速機學堂',
    'items' => ['常見問題','安裝教學','選購問題','維修問題'],
    'active' => 1
];
require_once('layout/wrapper.php');
?>
<div class="row">
    <div class="col-md-6">
        <div class="solutionWrapper">
            <a href="question_content.php">
                <div class="picWrapper">
                    <img src="image/page/study/1.jpg" class="img-fluid" alt="Question Banner 1">
                </div>
                <div class="txtWrapper">
                    <h5>減速機周邊相關知識</h5>
                    <p>減速機比數代表什麼意思？應該如何計算減速比？</p>
                    <span class="viewmore" role="button">檢視更多</span>
                </div>
            </a> 
        </div>
    </div>   
    <div class="col-md-6">
        <div class="solutionWrapper">
            <a href="question_content.php">
                <div class="picWrapper">
                    <img src="image/page/study/2.jpg" class="img-fluid" alt="Question Banner 2">
                </div>
                <div class="txtWrapper">
                    <h5>全球銷售據點(範例)</h5>
                    <p>鼎億自動化股份有限公司的全球銷售據點？</p>
                    <span class="viewmore" role="button">檢視更多</span>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="solutionWrapper">
            <a href="question_content.php">
                <div class="picWrapper">
                    <img src="image/page/study/3.jpg" class="img-fluid" alt="Question Banner 3">
                </div>
                <div class="txtWrapper">
                    <h5>如何議價(範例)</h5>
                    <p>我該如何跟鼎億洽詢產品價格？</p>
                    <span class="viewmore" role="button">檢視更多</span>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="solutionWrapper">
            <a href="question_content.php">
                <div class="picWrapper">
                    <img src="image/page/study/4.jpg" class="img-fluid" alt="Question Banner 4">
                </div>
                <div class="txtWrapper">
                    <h5>如何線上訂購(範例)</h5>
                    <p>我該如何線上訂購減速機？</p>
                    <span class="viewmore" role="button">檢視更多</span>
                </div>
            </a>
        </div>
    </div>
</div>
<?php
require_once('layout/pagination.php');
require_once('layout/footer.php');
?>