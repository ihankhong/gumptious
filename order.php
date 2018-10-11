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

$order = isset($_GET['order']) ? $_GET['order'] : 'info';
if ($order === 'info') {
    $title = ['title' => '訂購資訊', 'subtitle' => 'Order Info'];
} else {
    $title = ['title' => '訂購明細', 'subtitle' => 'Order Detail'];
}
require_once('layout/title.php');
?>
    <!-- content wrapper start -->
    <div class="wrapper">
        <!-- content start -->
        <div class="content">
            <?php
            require_once('order/' . $order . '.php');
            ?>
        </div>
        <!-- content end -->
    </div>
    <!-- content wrapper end -->
</article>
<!-- article end -->
<?php
require_once('layout/footer.php');
?>