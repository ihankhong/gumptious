<?php
$active = 1;
require_once('layout/header.php');

$breadcrumb = ['關於鼎億','最新消息'];
require_once('layout/breadcrumb.php');

$title = ['title' => '最新消息', 'subtitle' => 'News'];
require_once('layout/title.php');

$sidebar = [
    'title' => '關於鼎億',
    'items' => ['最新消息','公司介紹','發展沿革','理念/使命/願景'],
    'active' => 1
];
require_once('layout/content.php');
?>
<div class="row">
    <div class="col-md-6">
        <div class="latestNewsWrapper">
            <a href="news_content.php">
                <div class="picWrapper">
                    <img src="image/page/news/1.png" class="img-fluid" alt="News Banner 1">
                </div>
                <div class="txtWrapper">
                    <h5>鼎億臉書按讚沒？還按讚還不快跟上！</h5>
                    <p>鼎億GTC官方粉絲團～持續提供第一手、最優質的減速機資訊給各位！除了官方臉書粉絲團，鼎億GTC創辦的“減速器交流社團”，也提供了一個開放、優質的環境供大家...</p>
                    <p class="date text-right">2018/04/12</p>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="latestNewsWrapper">
            <a href="news_content.php">
                <div class="picWrapper">
                    <img src="image/page/news/1.png" class="img-fluid" alt="News Banner 1">
                </div>
                <div class="txtWrapper">
                    <h5>2018清明節休假公告</h5>
                    <p>清明連假，我們將從04/04(三)休到04/08(日)，休假期間，減速機相關問題，也可以於官網留言給我們喔～～祝福大家有一個美好的清明佳節</p>
                    <p class="date text-right">2018/04/30</p>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="latestNewsWrapper">
            <a href="news_content.php">
                <div class="picWrapper">
                    <img src="image/page/news/1.png" class="img-fluid" alt="News Banner 1">
                </div>
                <div class="txtWrapper">
                    <h5>2018深圳國際機器人展圓滿落幕，感謝客戶熱情參與與回饋！</h5>
                    <p>鼎億最新研發，超小型諧波減速機登場，小而靈巧的特性，適合精密度高的機台，如晶圓點測機或機械手臂！以下GCSD11型諧波減速機的5大好處，你絕不能錯過！</p>
                    <p class="date text-right">2018/03/31</p>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="latestNewsWrapper">
            <a href="news_content.php">
                <div class="picWrapper">
                    <img src="image/page/news/1.png" class="img-fluid" alt="News Banner 1">
                </div>
                <div class="txtWrapper">
                    <h5>千萬別錯過！鼎億GTC減速機批量優惠來囉！</h5>
                    <p>以感恩的心，回饋給大家最優質的減速機產品！即日起，只要購買任一系列減速機，20台(含)以上！就能享有批量優惠的價格！</p>
                    <p class="date text-right">2018/02/02</p>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="latestNewsWrapper">
            <a href="news_content.php">
                <div class="picWrapper">
                    <img src="image/page/news/1.png" class="img-fluid" alt="News Banner 1">
                </div>
                <div class="txtWrapper">
                    <h5>提高產能的秘密-獨家技術！鼎億GTC P1無背隙系列</h5>
                    <p>每個製造商心中，都期望機台產能效果能提高，為了因應供應商的期望與理想，鼎億特別推出-GTC P1無背隙系列減速機！協助您將生產力提升！</p>
                    <p class="date text-right">2018/01/26</p>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="latestNewsWrapper">
            <a href="news_content.php">
                <div class="picWrapper">
                    <img src="image/page/news/1.png" class="img-fluid" alt="News Banner 1">
                </div>
                <div class="txtWrapper">
                    <h5>減速機30年老牌，鼎益GTC受經濟日報採訪啦！</h5>
                    <p>走過30年歲月，鼎億GTC懷著熱誠與執著，孜孜矻矻耕耘於減速機產業。近來，感謝經濟日報採訪，讓鼎億減速機優異的產品品質與卓越研發，讓廣大社會大眾知悉。</p>
                    <p class="date text-right">2018/01/23</p>
                </div>
            </a>
        </div>
    </div>
</div>
<?php
require_once('layout/pagination.php');
require_once('layout/content_end.php');
require_once('layout/footer.php');
?>