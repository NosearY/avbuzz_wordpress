<!DOCTYPE html>
<?php avbuzz_enqueue_assets_forarticle();?>
<html <?php language_attributes(); ?>>

<head>
<?php wp_head(); ?>
<meta charset="<?php bloginfo('charset');?>" />
<style>
html {text-align:center;}
p {text-align:center;font-size:18px;}
</style>

<title><?php the_title(); ?></title>  
      
</head>

<body background="<?php bloginfo('template_directory') ?>/images/background_Logo.jpg">

	<div class="container article-header">
		<div class="row">
			<div class="col-lg-12">
				<h1 style="text-align: center"><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
	<div class="article-separator"><img src="<?php bloginfo('template_url'); ?>/images/separator.gif"/><img src="<?php bloginfo('template_url'); ?>/images/separator.gif"/></div>
	<div class="article-content">
		<!-- <div class="row">
			<div class="col-lg-12"> -->
				<?php while( have_posts()) : the_post();?>
					<article>
						<div>
							<!--<span><?php the_time('n / j, Y');?></span>-->
							<?php the_content();?>
						</div>
					</article>
				<?php endwhile; ?>
	<!-- 		</div>
		</div> -->
	</div>
	
	<div class="container article-footer">
		<div class="row">
			<div class="col-lg-12">
				<div class="article-separator"><img src="<?php bloginfo('template_url'); ?>/images/separator.gif"/><img src="<?php bloginfo('template_url'); ?>/images/separator.gif"/></div>
				<div align="center">  
					<table border="1" cellspacing="1" width="1">  
						<tr>  
							<td width="131"><a href="http://www.avbuzz.com/new_home/main.php"><img src="http://www.avbuzz.com/audio-video/201303/sa/avbuzz.jpg" border="0" width="100" height="43"></a></td>  
							<td width="168"><a href="https://www.facebook.com/av.buzz"><img border="0" src="http://www.avbuzz.com/audio-video/201306/90/FacebookLogo.jpg" width="129" height="43"></a></td>  
							<td width="101"><a href="http://www.avbuzz.com/new_home/w/ablist2004/buzzab2004b.htm"><img src="http://www.avbuzz.com/audio-video/201303/sa/photolista.jpg" border="0" width="99" height="44"></a></td>  
						</tr>  
					</table>  
				</div>  
				<br>
				<p align="center"><font color="#008000">各師兄與朋友，這篇文章，如非商業用途，歡迎轉貼再轉貼，如需借圖片使用，<br>  
					<br>  
					請自便，但敬請不要抹去圖中的 avbuzz.com簽名字樣，感激感激再感激。</font></p>                         
					<p align="center"><font color="#ff9900">◆ </font><span style="font-size: 10pt; color: teal"><font color="teal" size="2">&nbsp;</font></span>                  
						<font color="#ff9900">avbuzz.com精神，人人毒我，我毒人人 ◆</font></p>                 
						<p align="center">　<font size="3">謝謝收看這篇文章，你是第 <script language="javascript" src="http://avbuzz.com/bbs/article_counter.php?title=測試標題&amp;filename=20191198283766ewwwwqqaJJJJJHHHHJJ65bxgxe.html"></script>         
							個收看這篇文章的讀者。</font></p>         
						</div>
					</div>
				</div>

<?php get_footer(); ?>
