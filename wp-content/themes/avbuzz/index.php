<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<header class="header">
					<img class="title" src="<?php bloginfo('template_url'); ?>/images/logo.jpg"></img>
				</header>
			</div>				
			<div class="col-md-8" id="header_ad">
				<!-- reservered for header_ad-->
			</div>	
		</div>
		<div class="navbar" id = "main_nav">
			<ul class="nav navbar-nav" >
				<li><a href="">影音主頁</a></li>
				<li><a href="">攝影與Model</a></li>
				<li><a href="">Yesun手稿</a></li>
				<li><a href="">TopGun手記</a></li>
				<li><a href="">家庭影院</a></li>
				<li><a href="">音響茶座</a></li>
				<li><a href="">Model先決</a></li>
				<li><a href="">Model新地帶</a></li>
			</ul>
		</div>
	</div>
	<div class="container ad-top">
		<div class="row">
			<div class="col-md-12">
				<!-- to be replaced by auto generated ADs.-->
				<img class="" src="<?php bloginfo('template_url'); ?>/images/ad.jpg"/>
				<img class="" src="<?php bloginfo('template_url'); ?>/images/ad.jpg"/>
				<img class="" src="<?php bloginfo('template_url'); ?>/images/ad.jpg"/>
				<img class="" src="<?php bloginfo('template_url'); ?>/images/ad.jpg"/>
				<img class="" src="<?php bloginfo('template_url'); ?>/images/ad.jpg"/>
				<img class="" src="<?php bloginfo('template_url'); ?>/images/ad.jpg"/>
				<img class="" src="<?php bloginfo('template_url'); ?>/images/ad.jpg"/>
			</div>
		</div>
	</div>
	<div class="container main-content-container">
		<!-- Example row of columns -->
		<div class="row">
			<div class="col-md-9">
				<div class="main-content-up">
				<table style="width:100%; height: 100%; border:solid 1px">
						  <tr>
						    <td></td>
						    <td></td>
						    <td rowspan="2"></td>
						  </tr>
						  <tr>
						    <td></td>
						    <td></td>
						  </tr>
						</table>
				</div>
				<div class="main-content-middle">				
					<div class="avbuzz_navbar"><img src="<?php bloginfo('template_url'); ?>/images/av_buzz_title.jpg"/><?php wp_pagenavi(); ?></div>
					<!-- <div class="style-center"> -->
					<div class="main-content-middle-articles">
						<?php while(have_posts()) : the_post(); ?>
							<div class="img-box">
								<div class="article-title article-title-font">
									<article>
										<a href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
										</a>
									</article>
								</div>
								<div class="article-img">
									<?php
										if(has_post_thumbnail()){
											the_post_thumbnail();
										}
									?>
								</div>
							</div>
						<?php endwhile;?>
					</div>
					<!-- </div> -->
					<div class="avbuzz-navbar-bottom"><?php wp_pagenavi(); ?></div>
				</div>
			</div>
			<div class="col-md-3 ad-right">
				<!-- tobe replaced by auto generated ADs. -->
				<img class="" src="<?php bloginfo('template_url'); ?>/images/ad.jpg"/>
				<img class="" src="<?php bloginfo('template_url'); ?>/images/ad.jpg"/>
				<img class="" src="<?php bloginfo('template_url'); ?>/images/ad.jpg"/>
				<img class="" src="<?php bloginfo('template_url'); ?>/images/ad.jpg"/>
				<img class="" src="<?php bloginfo('template_url'); ?>/images/ad.jpg"/>
			</div>
			<hr>
		</div> <!-- /container -->
	</div>
<?php get_footer(); ?>