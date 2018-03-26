<!-- Widget Area -->
						<div class="col-lg-3 col-md-6 widget-area">
							<!-- Widget : Latest Post -->
							<aside class="widget widget_latestposts">
								<h3 class="widget-title">随便瞅瞅</h3>
								<ul><?php getRandomPosts(5); ?></ul>
								
							<aside class="widget widget_categories text-center">
								<h3 class="widget-title">分类</h3>
								<ul>
									<?php $obj = $this->widget('Widget_Metas_Category_List');?>
									<?php if($obj->have()){?>
										<?php while($obj->next()){ ?>
											<li><a href="<?php  $obj->permalink(); ?>" title="<?php  $obj->name(); ?>"><?php  $obj->name(); ?></a></li>
										<?php   } ?>
									<?php }?>
								</ul>
							</aside><!-- Widget : Categories /- -->
							<!-- Widget : wechat -->
							<aside class="widget widget_social">
								<h3 class="widget-title">微信公众号</h3>
								<div class="wechat" style="text-align: center;">
									<img style=""; src="<?php $this->options->siteUrl(); ?>usr/uploads/myImg/wx.png" alt="">
								</div>
							</aside><!-- Widget :wechat /- -->
							<!-- Widget : Tags -->
							<aside class="widget widget_tags_cloud">
								<h3 class="widget-title">Tags</h3>
								<div class="tagcloud1" style="height: 300; width: 300;">
									<?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=30')->to($tags); ?>
									
									<?php while($tags->next()): ?>
										<a style="" href="<?php $tags->permalink(); ?>" title='<?php $tags->name(); ?>'><?php $tags->name(); ?></a>
									<?php endwhile; ?>
								</div>
								<link rel="stylesheet" href="<?php $this->options->themeUrl('./assets/tagcloud/tagcloud.min.css'); ?>">
								<script src="<?php $this->options->themeUrl('./assets/tagcloud/tagcloud.min.js'); ?>"></script>
								<script>
									 tagcloud({
											//参数名: 默认值
											selector: ".tagcloud1",  //元素选择器
											fontsize: 20,       //基本字体大小
											radius: 100,         //滚动半径
											mspeed: "normal",   //滚动最大速度
											ispeed: "slow",   //滚动初速度
											direction: 200,     //初始滚动方向
											keep: false          //鼠标移出组件后是否继续随鼠标滚动
										  });
								</script>
							</aside><!-- Widget : Tags /- -->
							<!-- Widget : Tranding Post -->
							<!-- <aside class="widget widget_tranding_post">
								<h3 class="widget-title">TRENDING Posts</h3>
								<div id="trending-widget" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<div class="trnd-post-box">
												<div class="post-cover"><a href="#"><img src="<?php $this->options->themeUrl('./assets/images/wid-trnd-post-1.jpg'); ?>" alt="Tranding Post" /></a></div>
												<span class="post-category"><a href="#" title="Lifestyle">Lifestyle</a></span>
												<h3 class="post-title"><a href="#">New Fashion Collection Show This Weekend in Boston </a></h3>
											</div>
										</div>
										<div class="carousel-item">
											<div class="trnd-post-box">
												<div class="post-cover"><a href="#"><img src="<?php $this->options->themeUrl('./assets/images/wid-trnd-post-1.jpg'); ?>" alt="Tranding Post" /></a></div>
												<span class="post-category"><a href="#" title="Lifestyle">Lifestyle</a></span>
												<h3 class="post-title"><a href="#">New Fashion Collection Show This Weekend in Boston </a></h3>
											</div>
										</div>
										<div class="carousel-item">
											<div class="trnd-post-box">
												<div class="post-cover"><a href="#"><img src="<?php $this->options->themeUrl('./assets/images/wid-trnd-post-1.jpg'); ?>" alt="Tranding Post" /></a></div>
												<span class="post-category"><a href="#" title="Lifestyle">Lifestyle</a></span>
												<h3 class="post-title"><a href="#">New Fashion Collection Show This Weekend in Boston </a></h3>
											</div>
										</div>
									</div>
									<ol class="carousel-indicators">
										<li data-target="#trending-widget" data-slide-to="0" class="active"></li>
										<li data-target="#trending-widget" data-slide-to="1"></li>
										<li data-target="#trending-widget" data-slide-to="2"></li>
									</ol>
								</div>
							</aside> -->
							<!-- Widget : Tranding Post /- -->
						</div>
						<!-- Widget Area /- -->