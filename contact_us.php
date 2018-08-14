<?php
$active = 6;
require_once('layout/header.php');

$breadcrumb = [
    ['title' => '聯絡我們', 'link' => 'contact_us.php']
];
require_once('layout/breadcrumb.php');

$title = ['title' => '聯絡我們', 'subtitle' => 'Contact Us'];
require_once('layout/title.php');
?>
<div class="wrapper">
    <div class="content">
        <img src="image/page/contactus/1.png" class="img-fluid" alt="Contact Us Banner 1">
        <h3>諮詢服務</h3>
        <p>您可以透過線上填寫諮詢單取得適當的幫助。填寫完表單，我們將會與您聯絡。</p>
        <div class="contactWrapper">
            <form>
                <div class="form-row">
                    <div class="col-sm-6 mb-3">
                        <input type="text" class="form-control" placeholder="姓名*">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <input type="text" class="form-control" placeholder="聯絡電話*">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-6 mb-3">
                        <input type="email" class="form-control" placeholder="E-mail*">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <input type="text" class="form-control" placeholder="公司名稱*">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col mb-3">
                        <input type="text" class="form-control" placeholder="地址">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-6 mb-3">
                        <input type="text" class="form-control" placeholder="公司傳真">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <input type="url" class="form-control" placeholder="公司網站">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-lg-6 mb-3">
                        <input type="text" class="form-control" placeholder="機型">
                    </div>
                    <div class="col-lg-6 mb-3 my-2 check">
                        <div class="form-inline">
                            <label for="check" class="mr-2">相關問題*</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="autoSizingCheck1">
                                <label class="form-check-label" for="autoSizingCheck1">技術</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                                <label class="form-check-label" for="autoSizingCheck2">目錄索取</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="autoSizingCheck3">
                                <label class="form-check-label" for="autoSizingCheck3">產品訊息</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="autoSizingCheck4">
                                <label class="form-check-label" for="autoSizingCheck4">其他</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="諮詢內容*"></textarea>
                    </div>
                </div>
                <div class="btns text-center">
                    <button type="reset" class="btn bg-reset px-4 mr-3" role="button">清除</button>
                     <button type="submit" class="btn bg-submit px-4" role="button">送出</button>
                </div>
            </form>
        </div>
        <div class="mapWrapper">
            <div class="row">
                <div class="col-md-6">
                    <div class="addressWrapper">
                        <h5 class="company"><img src="image/contact-company-title.png" class="img-fluid icon mb-1" alt="Contact Title Icon">台中總公司</h5>
                        <p>地址：41280 台中市大里區工業九路8號</p>
                        <p>電話：04-24919100</p>
                        <p>傳真：04-24919155</p>
                        <p>E-mail：sales@gumptious.org</p>
                    </div>
                    <div class="picWrapper">
                        <img src="image/page/contactus/2.png" class="img-fluid" alt="Contact Us Map 1">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="addressWrapper">
                        <h5 class="company"><img src="image/contact-company-title.png" class="img-fluid icon mb-1" alt="Contact Title Icon">台中總公司</h5>
                        <p>地址：36100 廈門市思明區高雄路20號匹克運營中心8層07單位</p>
                        <p>電話：+86-592-5931017</p>
                        <p>傳真：+86-592-5992101</p>
                        <p>E-mail：gumptious@gumptious.org</p>
                    </div>
                    <div class="picWrapper">
                        <img src="image/page/contactus/3.png" class="img-fluid" alt="Contact Us Map 2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once('layout/footer.php');
?>