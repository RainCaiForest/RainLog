<?php

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');

?>
	<div class="main-container">
	
		<main class="site-main">


			<!-- Slider Section -->
			<div class="container-fluid no-left-padding no-right-padding slider-section slider-section1">
				<div class="entry-cover">
					<img src="<?php $this->options->themeUrl('./assets/images/blog-single-cover-fullwidth.jpg'); ?>" alt="Post">
				</div>
			</div><!-- Slider Section /- -->
			
			<!-- Page Content -->
			<div class="container-fluid no-left-padding no-right-padding page-content">
				<!-- Container -->
				<div class="container">
					<div class="row">
					
						<!-- Content Area -->
						<div class="col-lg-12 col-md-12 content-area">
							<!-- Row -->
							<div class="row">
								<?php if ($this->have()): ?>
                					<?php while ($this->next()): ?>
										<div class="col-lg-4 col-md-6 col-sm-6">
											<div class="type-post">
												<div class="entry-cover">
													<div class="post-meta">
														<span class="byline"><a href="#" title="Technology"><?php $this->category(); ?></a></span>
														<span class="post-date"><a href="#"><?php $this->date(); ?></a></span>
													</div>
													<a href="#"><img src="<?php $this->options->themeUrl('./assets/images/blog-2-col-1.jpg'); ?>" alt="Post" /></a>
												</div>
												<div class="entry-content">
													<div class="entry-header">	
														<h3 class="entry-title"><a href="<?php $this->permalink(); ?>" title="Traffic Jams Solved"><?php $this->title();?></a></h3>
													</div>								
													
												</div>
											</div>
										</div>
									<?php endwhile; ?>
            					<?php endif; ?>
								
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
					</div>
				</div><!-- Container /- -->
			</div><!-- Page Content /- -->	
		</main>
		
	</div>
<?php $this->need('footer.php'); ?>