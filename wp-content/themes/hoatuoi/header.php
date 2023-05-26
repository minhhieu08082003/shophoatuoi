<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slick.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slick-theme.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.mmenu.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animate.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/lightGallery.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/lightslider.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.mmenu.positioning.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.png" type="image/x-icon"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/custom.css">
	<?php wp_head();?>
</head>
<header id="masthead" class="site-header">
		<div id="top-header" class="bg-primary">
				<div class="container">
					<div class="row"> 
						<div class="col-8">
						<div class= "hotlien">
								<a href="#">CONTACT</a>
								<a href="#">7:00 - 22:00</a>
								<a href="#">0888.111.652</a>
						</div>
						</div>
					
							
				
						<div class="col-2">
							<div class= "socie">
								<a href="">Đăng nhập</a>
							</div>
							
						</div>
						<div class="col-2">
							<ul class="lh2-ul share-h2">
								<li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-skype"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
		</div> 

		<div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    
                                </div>
                            </div>
                        </div>

		<body>
	<div class="lh-wrapper">
		<div class="lh-header <?php if(!is_home()){echo 'module-header';}?>">
			<div class="header-position">
				<!-- end block-header -->
				<div class="block-menu">
					<div class="container">
						<div class="row">
							<div class="box-logo col-lg-2 col-4">
								<a href="" class="logo"><img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/hoa-tuoi.png" alt=""></a>
							</div>
							<div class="box-menu col-lg-10">
								<nav id="drop_down">
                                      <?php wp_nav_menu( 
                                      array( 
                                         'theme_location' => 'header-menu', 
                                         'container' => 'false', 
                                         'menu_id' => 'header-menu', 
                                         'menu_class' => 'lh2-ul'
                                        ) 
                                    ); ?>
								</nav>
							</div>
						</div>
						<button class="d-lg-none d-md-none" id="menu"><span></span></button>
					</div>
				</div>
				<!-- end block-menu -->
			</div>
			<?php if(!is_home()){?>
			
			<?php }?>
			</div>