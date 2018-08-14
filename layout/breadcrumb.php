<!-- breadcrumb start -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-white">
        <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
        <?php foreach ($breadcrumb as $key => $item): 
            if ($key < count($breadcrumb) - 1): ?>
                <li class="breadcrumb-item"><a href="<?php echo $item['link']; ?>"><?php echo $item['title']; ?></a></li>
            <?php else: ?>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $item['title']; ?></li>
            <?php endif;
        endforeach; ?>
    </ol>
</nav>
<!-- breadcrumb end -->