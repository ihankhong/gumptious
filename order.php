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

$title = ['title' => '訂購資訊', 'subtitle' => 'Order Info'];
require_once('layout/title.php');

$order = isset($_GET['order']) ? $_GET['order'] : 'info';
?>
    <!-- content wrapper start -->
    <div class="wrapper">
        <!-- content start -->
        <div class="content">
            <div class="orderWrapper">
                <?php
                require_once('order/' . $order . '.php');
                ?>
            </div>
        </div>
        <!-- content end -->
    </div>
    <!-- content wrapper end -->
</article>
<!-- article end -->
<?php
require_once('layout/footer.php');
?>