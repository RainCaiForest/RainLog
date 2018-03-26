<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="<?php $this->options->themeUrl('./assets/images/favicon.ico'); ?>" />
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" href="<?php $this->options->themeUrl('./assets/images/apple-touch-icon-114x114-precomposed.png'); ?>">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" href="<?php $this->options->themeUrl('./assets/images/apple-touch-icon-72x72-precomposed.html'); ?>">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="<?php $this->options->themeUrl('./assets/images/apple-touch-icon-57x57-precomposed.png'); ?>">	
	
	<!-- Library - Google Font Familys -->
	<!-- <link href="../../../../fonts.googleapis.com/css8896.css?family=Hind:300,400,500,600,700%7cMontserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->
	
	<!-- Library -->
    <link href="<?php $this->options->themeUrl('./assets/css/lib.css'); ?>" rel="stylesheet">
	
	<!-- Custom - Common CSS -->
	<link rel="stylesheet" href="<?php $this->options->themeUrl('./assets/css/rtl.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('./assets/css/style.css'); ?>">

	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
	
</head>

<body data-offset="200" data-spy="scroll" data-target=".ownavigation">
	<!-- Loader -->
	<div id="site-loader" class="load-complete">
		<div class="loader">
			<div class="line-scale"><div></div><div></div><div></div><div></div><div></div></div>
		</div>
	</div><!-- Loader /- -->
	
	<!-- Header Section -->
	<header class="container-fluid no-left-padding no-right-padding header_s header-fix header_s7">
		<!-- SidePanel -->
		<div id="slidepanel-4" class="slidepanel">
			<!-- Top Header -->
			<div class="container-fluid no-right-padding no-left-padding top-header">
				<!-- Container -->
				<div class="container">	
					<div class="row">
						<div class="col-lg-4 col-6">
							<ul class="top-social">
							<li><a href="#search-box" data-toggle="collapse" class="search collapsed" title="Search"><i class="pe-7s-search sr-ic-open"></i><i class="pe-7s-close sr-ic-close"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-4 logo-block">
							<a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
						</div>
						<div class="col-lg-4 col-6">
							<ul class="top-right user-info">
								<!-- <li><a href="#search-box" data-toggle="collapse" class="search collapsed" title="Search"><i class="pe-7s-search sr-ic-open"></i><i class="pe-7s-close sr-ic-close"></i></a></li> -->
								<li class="dropdown">
									<a class="dropdown-toggle" href="#"><i class="pe-7s-user"></i></a>
									<!-- <ul class="dropdown-menu">
										<li><a class="dropdown-item" href="javascript:;" title="Sign In">Sign In</a></li>
										<li><a class="dropdown-item" href="javascript:;" title="Subscribe">Subscribe </a></li>
										<li><a class="dropdown-item" href="javascript:;" title="Log In">Log In</a></li>
									</ul> -->
								</li>
							</ul>
						</div>
					</div>
				</div><!-- Container /- -->
			</div><!-- Top Header /- -->				
		</div><!-- SidePanel /- -->
		
		<!-- Container -->
		<div class="container">	
			<!-- Menu Block -->
			<div class="container-fluid no-left-padding no-right-padding menu-block">
				<nav class="navbar ownavigation navbar-expand-lg">
					<a class="navbar-brand" href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title() ?>" ><?php $this->options->title() ?></a>
					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar7" aria-controls="navbar7" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fa fa-bars"></i>
					</button>
					<div class="collapse navbar-collapse" id="navbar7">
						<ul class="navbar-nav">
							<li class="dropdown"><a class="nav-link" title="Home" href="/">Home</a></li>
							<?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
		                    <?php while($category->next()): ?>
		                    	<li class="dropdown"><a class="nav-link" href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>"><?php $category->name(); ?></a></li>
		                    <?php endwhile; ?>
							<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
		                    <?php while($pages->next()): ?>
		                    	<li class="dropdown"><a class="nav-link" href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
		                   
		                    <?php endwhile; ?>
						</ul>
					</div>
					<div id="loginpanel-4" class="desktop-hide">
						<div class="right toggle" id="toggle-4">
							<a id="slideit-4" class="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
							<a id="closeit-4" class="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
						</div>
					</div>
				</nav>
			</div><!-- Menu Block /- -->
		</div><!-- Container /- -->
		<!-- Search Box -->
		<div class="search-box collapse" id="search-box">
			<div class="container">
				<form method="post" action="<?php $this->options->siteUrl(); ?>">
					<div class="input-group">
						<input type="search" name="s" class="form-control" placeholder="输入搜索内容..." required>
						<span class="input-group-btn">
							<button class="btn btn-secondary" type="submit"><i class="pe-7s-search"></i></button>
						</span>
					</div>
				</form>
			</div>
		</div><!-- Search Box /- -->
	</header><!-- Header Section /- -->