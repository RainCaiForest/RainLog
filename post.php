<?php

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');

?>
	<div class="main-container">
	
		<main class="site-main">

			<!-- Page Content -->
			<div class="container-fluid no-left-padding no-right-padding no-top-padding page-content blog-single cover-fullwidth">
				<div class="entry-cover">
					<img src="<?php $this->options->themeUrl('./assets/images/blog-single-cover-fullwidth.jpg'); ?>" alt="Post">
				</div>
				<!-- Container -->
				<div class="container">
					<div class="row">
						<!-- Content Area -->
						<div class="col-xl-9 col-lg-9 col-md-6 col-12 content-area">
							<article class="type-post">
								
								<div class="entry-content">
									<div class="entry-header">	
										<h3 class="entry-title"><?php $this->title() ?></h3>
										<div class="post-meta">
											<span class="byline">by <a href="#" title="RainCai">RainCai</a></span>
											<span class="post-date"><?php $this->date(); ?></span>
										</div>
									</div>								
									<div>
										 <?php $this->content(); ?>

									</div>
									<div class="entry-footer">
										<div class="tags">
											<?php $this->tags('',true); ?>
										</div>
										<div class="social-share social"  data-disabled="google, qq, douban, facebook, twitter, tencent, linkedin, diandian"></div>

										<!--  css & js -->
										<link rel="stylesheet" href="<?php $this->options->themeUrl('./assets/share/css/share.min.css'); ?>">
										<script src="<?php $this->options->themeUrl('./assets/share/js/social-share.min.js'); ?>"></script>
								
									</div>
								</div>
							</article>
							<!-- Related Post -->
							<div class="related-post">
								<h3>猜你喜欢</h3>
								<div class="related-post-block">
									<?php $this->related(4)->to($obj);?>
                        			<?php if($obj->have()){?>
                            			<?php while($obj->next()):?>
											<div class="related-post-box">
												<a href="#"><img src="<?php $this->options->themeUrl('./assets/images/related-post-5.jpg'); ?>" alt="Post" /></a>
												<span><a href="#" title='<?php $obj->category();?>'><?php $obj->category();?></a></span>
												<h3><a href="#" title="A penguin bicycled behind an escalator"><?php $obj->title();?></a></h3>
											</div>
										<?php endwhile; ?>
                            		<?php }?>
								</div>
							</div><!-- Related Post /- -->
							<?php $this->need('comments.php'); ?>
						</div><!-- Content Area /- -->
						<!-- Widget Area -->
						<?php $this->need('sidebar.php'); ?>
						<!-- Widget Area /- -->
					</div>
				</div><!-- Container /- -->
			</div><!-- Page Content /- -->
		</main>		
	</div>
	
<?php $this->need('footer.php'); ?>