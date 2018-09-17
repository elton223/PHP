<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $PageName; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="<?php echo $PageName; ?> description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo TEMPLATEWEBPATH; ?>css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo TEMPLATEWEBPATH; ?>css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo TEMPLATEWEBPATH; ?>css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo TEMPLATEWEBPATH; ?>css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo TEMPLATEWEBPATH; ?>css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php echo TEMPLATEWEBPATH; ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo TEMPLATEWEBPATH; ?>css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?php echo TEMPLATEWEBPATH; ?>css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="<?php echo TEMPLATEWEBPATH; ?>fonts/flaticon/font/flaticon.css">
        <!-- Icon  -->
        <link rel="icon" src="C:\xampp\htdocs\public\images\logo.png" type="images/x-icon">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo TEMPLATEWEBPATH; ?>css/style.css">

	<!-- Modernizr JS -->
	<script src="<?php echo TEMPLATEWEBPATH; ?>js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">

			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo">
                                <?php if($LogoLink == 1) { ?>
                                    <a class="active" href="<?php echo $LogoUrl; ?>">
                                        <?php if($LogoType == 'text'){ echo $LogoText; } else { ?>
                                            <img src="<?php echo $LogoImage; ?>" /><?php } ?>
                                    </a>
                                <?php } else {
                                if($LogoType == 'text'){ echo $LogoText; } else { ?>
                                <img src="<?php echo $LogoImage; ?>" /><?php
                                } } ?></a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul >
                                <?php foreach($PlatTopMenus as $MenuItem){ ?>
                                    <li><a href="<?php if($MenuItem['menu_link_type'] == 'internal') { echo $MenuItem['menu_internal_url']; } else {echo $MenuItem['menu_external_url'];} ?>" target="<?php echo $MenuItem['menu_target']; ?>"><?php echo $MenuItem['menu_title']; ?></a>
                                        <?php if (isset($MenuItem['children'])) { ?>
                                            <ul>
                                                <?php foreach ($MenuItem['children'] as $MenuSubItem){?><li><a href="<?php if($MenuSubItem['menu_link_type'] == 'internal') { echo $MenuSubItem['menu_internal_url']; } else {echo $MenuSubItem['menu_external_url'];} ?>" target="<?php echo $MenuSubItem['menu_target']; ?>"><?php echo $MenuSubItem['menu_title']; ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        <?php } ?>
                                    </li>

                                <?php } ?>

						</div>
					</div>
				</div>
			</div>
		</nav>