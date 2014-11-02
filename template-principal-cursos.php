<?php
/*
Template Name: Principal Cursos
*/ 
include("head.php"); ?>
	<div class="container">
	<div class="row">
	<div class="sixteen columns">
		<div class="title-one"><a>Cursos</a></div>
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
<?php  query_posts(array('showposts' => 20, 'post_parent' => 7, 'post_type' => 'page')); ?>
<?php if (have_posts()) : ?>
 <?php $cont=0;  
 while (have_posts()) : the_post(); ?>
	        <li class="list-<?php $cont++; echo $cont;  ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; ?>
<?php 	endif; ?>
					</ul>
				</div>
				</div>
		</div>

<div class="three columns left-sidebar pull-thirteen"> 				
<div class="left-navigation">
    <?php include("menu_cursos.php");  ?>
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