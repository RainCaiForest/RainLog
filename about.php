<?php

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); 
/**
 * 独立页面模板
 *
 * @package custom
 */


?>
<?php ?>

	<div class="main-container">
	
		<main class="site-main">	
		
			<!-- Page Content -->
			<div class="container-fluid no-left-padding no-right-padding page-content">
				<!-- container -->	
				<div class="container">
					<!-- Row -->
					<div class="row">
						<!-- Content Area -->
						<div class="col-sm-12 content-area">
							<div class="aboute-block">
								<div class="block-title">
									<h3><?php  if($this->is('page','about')) {echo "About Me";}else{echo '我的相册';} ?></h3>
								</div>
								
								<?php $this->content(); ?>
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div><!-- Content Area /- -->
					</div><!-- Row /- -->
				</div><!-- container /- -->
			</div><!-- Aboute-me Section /- -->
		</main>

		
	</div>
	
<?php $this->need('footer.php'); ?>	