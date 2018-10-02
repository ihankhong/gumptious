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
        </div>
        <!-- content end -->
    </div>
    <!-- content wrapper end -->
</article>
    <!-- article end -->
<?php
require_once('layout/footer.php');
?>