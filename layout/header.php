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
	<!-- <link href="css/offcanvas.css" rel="stylesheet"> -->
	<!-- <script src="js/offcanvas.js"></script> -->
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
					<ul class="nav mr-auto">
						<li class="nav-item">
							<a class="nav-link active" href="#"><img src="image/facebook.png" class="img-fluid" width="32" alt="Facebook"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><img src="image/youtube.png" class="img-fluid" width="32" alt="YouTube"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><img src="image/google-plus.png" class="img-fluid" width="32" alt="Google Plus"></a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">繁體中文</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">繁體中文</a>
								<a class="dropdown-item" href="#">English</a>
							</div>
						</li>
					</ul>
					<form class="form-inline">
						<label for="search" class="mr-sm-2">搜尋</label>
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<img src="image/search.png" class="img-fluid search-btn" alt="Search">
						<!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
					</form>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- topbar end -->
<!-- navbar start -->
<nav class="menu navbar navbar-expand-lg navbar-dark" role="navigation">
  	<div class="mx-auto d-sm-flex d-block flex-sm-nowrap">
		<!-- <a class="navbar-brand" href="#">Navbar</a> -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<?php foreach ($nav as $key => $item): ?>
					<li class="nav-item<?php echo $key+1 === $active ? ' active' : ''; ?>">
						<a class="nav-link" href="<?php echo $item['link']; ?>"><?php echo $item['title']; ?></a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</nav>
<!-- navbar end -->