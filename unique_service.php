<?php
$active = 4;
require_once('layout/header.php');
?>
<!-- article start -->
<article class="container">
<?php
$breadcrumb = [
    ['title' => '獨特服務', 'link' => 'unique_service.php?step=1'],
    ['title' => '減速機適用機型計算器', 'link' => '#'],
];
require_once('layout/breadcrumb.php');

$title = ['title' => '減速機適用機型計算器', 'subtitle' => 'Unique Service'];
require_once('layout/title.php');

$step = isset($_GET['step']) ? $_GET['step'] : 1;
?>
    <!-- content wrapper start -->
    <div class="wrapper">
        <!-- content start -->
        <div class="content">
            <img src="image/page/uniqueservice/step<?php echo $step?>.png" class="img-fluid" alt="Unique Service Step">
            <div class="uniqueServiceStepWrapper">
                <form>
                    <h3>運動方向</h3>
                    <div class="form-row">
                        <div class="col-sm-6">
                            <select name="items" class="form-control">
                                <option value="">-----請選擇-----</option>
                                <option value="1">螺桿轉矩</option>
                                <option value="2">齒輪傳動</option>
                                <option value="3">線性運動</option>
                                <option value="4">水平旋轉</option>
                                <option value="5">垂直旋轉</option>
                            </select>
                        </div>
                    </div>
                    <!-- 適用系列區塊 -->
                    <div class="applicable-area">
                        <h3>適用系列</h3>
                        <p>您可能適用下列幾項系列，請點選「下一步」更精準計算出與您數據匹配的機種</p>
                        <div class="form-row">
                            <div class="col-md-4">
                                <img src="image/page/uniqueservice/items/1.png" class="img-fluid mx-auto d-block"
                                     alt="Unique Service
                                 Item 1">
                                <p class="item-title text-center">適用系列1</p>
                            </div>
                            <div class="col-md-4">
                                <img src="image/page/uniqueservice/items/2.png" class="img-fluid mx-auto d-block" alt="Unique Service
                                 Item 2">
                                <p class="item-title text-center">適用系列2</p>
                            </div>
                            <div class="col-md-4">
                                <img src="image/page/uniqueservice/items/3.png" class="img-fluid mx-auto d-block" alt="Unique Service
                                 Item 3">
                                <p class="item-title text-center">適用系列3</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4">
                                <img src="image/page/uniqueservice/items/4.png" class="img-fluid mx-auto d-block"
                                     alt="Unique Service Item 4">
                                <p class="item-title text-center">適用系列4</p>
                            </div>
                            <div class="col-md-4">
                                <img src="image/page/uniqueservice/items/5.png" class="img-fluid mx-auto d-block"
                                     alt="Unique Service Item 5">
                                <p class="item-title text-center">適用系列5</p>
                            </div>
                        </div>
                        <div class="btns text-right mt-3">
                            <button type="submit" class="btn bg-submit px-5" role="button">下一步 <i class="fa
                            fa-arrow-circle-o-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- content end -->
    </div>
    <!-- content wrapper end -->
</article>
<!-- article end -->
<script>
$(function(){
    $('select[name=items]').change(function (event) {
        if (this.value === '') {
            $('.applicable-area').removeClass('show');
            return false;
        }

        $('.applicable-area').addClass('show');
    });
});
</script>
<?php
require_once('layout/footer.php');
?>