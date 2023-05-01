<!DOCTYPE html>
<html lang="en">

<head>
	<meta utf-8>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
	if ($GLOBALS['title']) {
		$title = $GLOBALS['title'];
	} else {
		$GLOBALS['title'] = "";
	}
	if ($GLOBALS['desc']) {
		$desc = $GLOBALS['desc'];
	} else {
		$desc = "";
	}
	if ($GLOBALS['keywords']) {
		$keywords = $GLOBALS['keywords'];
	} else {
		$keywords = "";
	} ?>
	<title><?php echo $title; ?></title>
	<title>NewHydrogen | Developing a Breakthrough Green Hydrogen Generator</title>
	<link rel="icon" type="image/png" href="./assets/images/favicon.png">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="./assets/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="./assets/css/all.css" />
	<link rel="stylesheet" type="text/css" href="./assets/css/swiper.css" />
	<link rel="stylesheet" type="text/css" href="./assets/css/fullpage.css" />
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
	<link rel="stylesheet" type="text/css" href="./assets/css/responsive.css" />

	<script src="./assets/js/jquery.min.js"></script>

	<script>
		$(window).on('load', function() {
			setTimeout(function() {
				$(".mainpagewhite").show();
			}, 500);
		});
	</script>

</head>

<body class="<?php if (basename($_SERVER['PHP_SELF']) == "index.php") { ?>home page-template page-template-index page-template-index-php page page-id-8 <?php } else { ?> fp-viewing-1 <?php } ?>">

	<?php
	function active($currect_page)
	{
		$url_array =  explode('/', $_SERVER['REQUEST_URI']);
		$url = end($url_array);
		if ($currect_page == $url) {
			echo 'current_page_item'; //class name in css 
		}
	}
	?>

	<div class="mainpagewhite">
		<header class="NewHydrogen_header" id="header">
			<div class="sticky_only">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-lg-right">
							<div class="d-lg-flex fendd">
								<div class="hsocial_icons">
									<a href="https://www.facebook.com/NewHydrogen/" target="_blank">
										<i class="fab fa-facebook-f"></i>
									</a>
									<a href="https://twitter.com/newhydrogen" target="_blank">
										<i class="fab fa-twitter"></i>
									</a>
								</div>

								<div class="foemsuxsribe">
									<script type="text/javascript" src="https://app.icontact.com/icp/core/mycontacts/signup/designer/form/automatic?id=128&amp;cid=122131&amp;lid=1647"></script>
								</div>

								<ul id="menu" class="header_top">
									<li id="menu-item-28" class="<?php active('investors'); ?>"><a href="/investors">Investors</a>
									</li>
									<li id="menu-item-27" class="<?php active('contact-us'); ?>"><a href="/contact-us">Contact Us</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mobile_menu">
				<div class="container">
					<div class="row justify-content-center align-items-center">
						<div class="col-5 logo"> <a href="/"><img src="./assets/images/New-Hydrogen-Logo-Final-Outlined-1.svg"></a>
						</div>
						<div class="col-7  mobile_iconcontainer">
							<ul>
								<li class="menu_toggle">
									<div class="nav_button">
										<div class="icon-x" onclick="myFunction(this)">
											<div class="bar1"></div>
											<div class="bar2"></div>
											<div class="bar3"></div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="NewHydrogen_main_menu">
				<div class="header_width container">
					<div class="innermenu">
						<div class="row align-items-center">
							<div class="col-lg-3 desktoplogo logo"> <a href="/"><img src="./assets/images/New-Hydrogen-Logo-Final-Outlined-1.svg"></a>
							</div>
							<div class="col-lg-9 mobilemenuu">
								<ul id="menu" class="main_menu">
									<li id="menu-item-31" class="<?php active('market'); ?>"><a href="/market">Market</a>
									</li>
									<li id="menu-item-30" class="<?php active('hydrogen-generator'); ?>"><a href="/hydrogen-generator">Hydrogen Generator</a></li>
									<li id="menu-item-33" class="<?php active('technology'); ?>"><a href="/technology">Technology</a>
									</li>
									<li id="menu-item-29" class="<?php active('applications'); ?>"><a href="/applications">Applications</a>
									</li>
									<li id="menu-item-32" class=" <?php active('news'); ?>">
										<a href="/news">News</a>
									</li>
									<li id="menu-item-36" class="mobilehide <?php active('investors'); ?>">
										<a href="/investors">Investors</a>
									</li>
									<li id="menu-item-440" class="lastmenu <?php active('about-us'); ?>">
										<a href="/about-us">About
											Us</a>
									</li>
									<li id="menu-item-34" class="mobilehide <?php active('contact-us'); ?>">
										<a href="/contact-us">Contact
											Us</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>


		<?php if (basename($_SERVER['PHP_SELF']) != "index.php" && basename($_SERVER['PHP_SELF']) != "" && basename($_SERVER['PHP_SELF']) != "/") { ?>
			<div class="header_bg"></div>
		<?php } ?>