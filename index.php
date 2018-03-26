<?php

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
$banner1 = getContet($this->options->banner1);
$banner2 = getContet($this->options->banner2);
$banner3 = getContet($this->options->banner3);



?>
	<div class="main-container">
	
		<main class="site-main">
			<!-- Slider Section -->
			<div class="container-fluid no-left-padding no-right-padding slider-section slider-section2">
				<!-- Container -->
				<div class="container">
					<div id="slider-section2" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<div class="row">
									<div class="col-lg-9 col-sm-12 post-block post-big">
										<div class="post-box">
											<?php if($banner1['bannerImg']){?>
												<img src="<?php echo $banner1['bannerImg']; ?>" alt="Slide" />
											<?php }else{?>
												<img src="<?php $this->options->themeUrl('./assets/images/mm-slide-2-1.jpg'); ?>" alt="Slide" />
											<?php }?>
											
											<div class="entry-content">
												<span class="post-category"><a href="javascript:;" title="time"><?php echo date("Y-m-d",$banner1['created']); ?></a></span>
												
												<h3><a href="<?php $this->options->siteUrl(); ?>archives/<?php echo $banner1['cid'];?>" title="Best Surfing Spots for Beginners and Advanced"><?php echo $banner1['title']; ?></a></h3>
												
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-sm-12 post-block post-thumb">
										<div class="post-box">
											<?php if($banner2['bannerImg']){?>
												<img src="<?php echo $banner2['bannerImg']; ?>" alt="Slide" />
											<?php }else{?>
												<img src="<?php $this->options->themeUrl('./assets/images/mm-slide-2-2.jpg'); ?>" alt="Slide" />
											<?php }?>
											<div class="entry-content">
												<span class="post-category"><a href="javascript:;" title="time"><?php echo date("Y-m-d",$banner2['created']); ?></a></span>
												<h3><a href="<?php $this->options->siteUrl(); ?>archives/<?php echo $banner2['cid'];?>" title="High-Tech Prototype Bike Announced"><?php echo $banner2['title']; ?></a></h3>
											</div>
										</div>
										<div class="post-box">
											<?php if($banner3['bannerImg']){?>
												<img src="<?php echo $banner3['bannerImg']; ?>" alt="Slide" />
											<?php }else{?>
												<img src="<?php $this->options->themeUrl('./assets/images/mm-slide-2-3.jpg'); ?>" alt="Slide" />
											<?php }?>
											<div class="entry-content">
												<span class="post-category"><a href="javascript:;" title="Nature"><?php echo date("Y-m-d",$banner3['created']); ?></a></span>
												<h3><a href="<?php $this->options->siteUrl(); ?>archives/<?php echo $banner3['cid'];?>" title="High-Tech Prototype Bike Announced"><?php echo $banner3['title']; ?></a></h3>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div><!-- Container -->
			</div><!-- Slider Section /- -->
			
			<!-- Page Content -->
			<div class="container-fluid no-left-padding no-right-padding page-content">
				<!-- Container -->
				<div class="container">
					<div class="row">
						<!-- Content Area -->
						<div class="col-lg-9 col-md-6 content-area">
							<!-- Row -->
							<div class="row">
								<?php while($this->next()): ?>
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="type-post blog-onecolumn">
										<div class="entry-cover">
											<div class="post-meta">
												<span class="byline"><a href="javascript:;" title="RainCai">RainCai</a></span>
												<span class="post-date"><a href="javascript:;"><?php $this->date(); ?></a></span>
											</div>
											<a href="<?php $this->permalink() ?>">
											<?php if($this->fields->ThumbImg){?>
											<img src="<?php $this->fields->ThumbImg(); ?>" alt="Post" />
											<?php }else{?>
											<img src="<?php $this->options->themeUrl('./assets/images/mm-slide-5-1.jpg'); ?>" alt="Post" />
											<?php }?>
											</a>
										</div>
										<div class="entry-content">
											<div class="entry-header">	
												<h3 class="entry-title"><a href="<?php $this->permalink() ?>" title="Trendy Summer Fashion"><?php $this->title() ?></a></h3>
											</div>								
											<p><?php $this->excerpt(80, '...'); ?></p>
										</div>
									</div>
								</div>
								<?php endwhile; ?>
							</div><!-- Row /- -->
							<!-- Pagination -->
							<nav class="navigation pagination">
								<h2 class="screen-reader-text">Posts navigation</h2>
								<div class="nav-links">
									<?php $this->pageLink('上一页','prev'); ?>
									<?php $this->pageLink('下一页','next'); ?>
								</div>
							</nav><!-- Pagination /- -->
						</div><!-- Content Area /- -->
						<?php $this->need('sidebar.php'); ?>
					</div>
				</div><!-- Container /- -->
			</div><!-- Page Content /- -->
		</main>
	</div>
<?php $this->need('footer.php'); ?>
	