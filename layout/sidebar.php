<!-- sidebar start -->
<nav id="sidebar">
    <!-- Sidebar Header -->
    <div class="sidebar-header">
        <h4><img src="image/sidebar-title.png" class="img-fluid icon" alt="Sidebar Title icon"><?php echo $sidebar['title']; ?></h4>
    </div>

    <!-- Sidebar Links -->
    <ul class="list-unstyled components nav flex-column">
        <?php foreach ($sidebar['items'] as $key => $item):
            $active = '';
            if ($key+1 == $sidebar['active']):
                $active = 'active';
            endif; ?>
            <li class="nav-item">
                <a href="#" class="nav-link pl-0 <?php echo $active; ?>"><img src="image/sidebar-item<?php echo $active; ?>.png" class="img-fluid icon" alt="Sidebar Item icon"><?php echo $item; ?></a>
            </li>
        <?php endforeach; ?>
        <!-- <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li>
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
            </ul>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Contact</a></li> -->
    </ul>
</nav>
<!-- sidebar end -->