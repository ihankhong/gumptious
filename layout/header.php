<?php
$nav = [
	['title' => '關於鼎億', 'link' => 'company.php'],
	['title' => '產品介紹', 'link' => 'product.php'],
	['title' => '型錄下載', 'link' => 'download.php'],
	['title' => '獨特下載', 'link' => '#'],
	['title' => '減速機學堂', 'link' => 'question.php'],
	['title' => '聯絡我們', 'link' => 'contact_us.php'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>鼎億自動化股份有限公司</title>

	<!-- jQuery	 -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<!-- bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>
	<!-- animate -->
	<link href="css/animate.css" rel="stylesheet">
	<!-- font-awesome -->
	<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- custom -->
	<link href="css/nav.css" rel="stylesheet">
	<link href="css/breadcrumb.css" rel="stylesheet">
	<link href="css/footer.css" rel="stylesheet">
	<link href="css/app.css" rel="stylesheet">
	<link href="css/sidebar.css" rel="stylesheet">
	<link href="css/pagination.css" rel="stylesheet">
	<link href="css/jquery.bxslider.css" rel="stylesheet">
	<link href="css/pbxslider.css" rel="stylesheet">
	<script src="js/sidebar.js"></script>
	<script src="js/jquery.bxslider.js"></script>
</head>
<body>
<!-- topbar start -->
<header id="top">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<a href="index.php"><img src="image/logo.png" class="img-fluid" alt="LOGO"></a>
			</div>
			<div class="col-md-7">
				<div class="d-sm-flex d-block flex-sm-nowrap">
					<ul class="nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="#"><img src="image/facebook.png" class="img-fluid" width="32" alt="Facebook"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><img src="image/youtube.png" class="img-fluid" width="32" alt="YouTube"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><img src="image/google-plus.png" class="img-fluid" width="32" alt="Google Plus"></a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle mt-1" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">繁體中文</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">简体中文</a>
								<a class="dropdown-item" href="#">ENGLISH</a>
							</div>
						</li>
					</ul>
					<form class="form-inline">
						<label for="search" class="mx-sm-2">搜尋</label>
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-link p-0" type="submit"><img src="image/search.png" class="img-fluid search-btn" alt="Search"></button>
					</form>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- topbar end -->
<!-- navbar start -->
<nav class="menu navbar navbar-expand-lg navbar-dark" role="navigation">
  	<div class="container">
		<a class="navbar-brand mb-1" href="index.php"><img src="image/logo-small.png" class="img-fluid" width="54" alt="LOGO Small"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="navbar-collapse collapse" id="navbarNavDropdown">
			<ul class="navbar-nav mx-auto">
				<?php foreach ($nav as $key => $item): ?>
					<li class="nav-item<?php echo $key+1 === $active ? ' active' : ''; ?>">
						<a class="nav-link" href="<?php echo $item['link']; ?>"><?php echo $item['title']; ?></a>
					</li>
				<?php endforeach; ?>
			</ul>
			<ul class="navbar-nav topNav">
				<li class="nav-item">
					<div class="d-flex justify-content-center">
						<a class="nav-link mr-2" href="#"><img src="image/facebook.png" class="img-fluid" width="32" alt="Facebook"></a>
						<a class="nav-link mr-2" href="#"><img src="image/youtube.png" class="img-fluid" width="32" alt="YouTube"></a>
						<a class="nav-link" href="#"><img src="image/google-plus.png" class="img-fluid" width="32" alt="Google Plus"></a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle mt-1" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">繁體中文</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">简体中文</a>
						<a class="dropdown-item" href="#">ENGLISH</a>
					</div>
				</li>
				<li class="nav-item">
					<form class="searchWrapper mt-2">
						<div class="form-group">
							<input class="form-control" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-block search-btn mt-2" type="submit">搜尋<i class="fa fa-search ml-2" aria-hidden="true"></i></button>
						</div>
					</form>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- navbar end -->