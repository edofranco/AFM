<?php
/*
Template Name: Principal Cultural 
*/ 
include("head.php"); ?>
	<div class="container">
	<div class="row">
	<div class="sixteen columns">
		<div class="title-one"><a>Cultural</a></div>
	<div class="sixteen columns content-container">  
		<div class="thirteen columns push-three">

			<div class="content">
<?php if (have_posts()) : ?>
 <?php  while (have_posts()) : the_post(); ?>
 <div class="banner-image"><span class="banner-image-overlay"></span><img src='<?php echo laimagen3($post->ID); ?>' alt='page_banner' /></div>
 					
					<?php the_content(); ?>
<?php endwhile; ?>
<?php 	endif; ?>
			

				<div class="action-banner">
					<ul>
<?php wp_list_categories('title_li=&hide_empty=0&exclude=1'); ?>
					</ul>
				</div>
				</div>
		</div>

<div class="three columns left-sidebar pull-thirteen"> 				
<div class="left-navigation">
    <?php include("menu_cats.php");  ?>
</div>
		<div class="share-this-page">
			<!-- AddThis Button BEGIN -->
			<div class="addthis_toolbox addthis_default_style ">
			<a class="addthis_button_preferred_1"></a>
			<a class="addthis_button_preferred_2"></a>
			<a class="addthis_button_preferred_3"></a>
			<a class="addthis_button_preferred_4"></a>
			<a class="addthis_button_compact"></a>
			<a class="addthis_counter addthis_bubble_style"></a>
			</div>
			<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4f85ae1931e7fd3a"></script>
			<!-- AddThis Button END -->
		</div>
	</div>
  </div>
</div>
</div>
</div></div>
</div>
</div>


<?php include("futer.php"); ?> 