<?php
include("head.php"); ?>
<?php // INICIO DEL ARTICULO  ?>
<?php if (have_posts()) : ?>
 <?php  while (have_posts()) : the_post(); ?>
	<!-- container -->
	<div class="container">
	<div class="row">
	<div class="sixteen columns">
		<div class="title-one"><a href="index.html"><?php the_title(); ?></a></div>
	<div class="sixteen columns content-container">  
		<div class="thirteen columns push-three">
 			<!-- contenido de la seccion -->
			<div class="content">
					<?php the_content(); ?>
			</div>
		</div>
<?php endwhile; ?>
<?php 	endif; ?>
<div class="three columns left-sidebar pull-thirteen"> 				
<div class="left-navigation">
	
			<div class="sidebar-details-content">
			 	<h3 class="content-block-title"><?php echo get_post_meta( $post->ID, "dia",true); ?></h3>
			 	<div class="sidebar-detail-item"><p><?php echo get_post_meta( $post->ID, "lugar",true); ?></p></div>
			    <div class="sidebar-detail-item"><p><?php echo get_post_meta( $post->ID, "nota",true); ?></p></div>
			    <div class="sidebar-detail-item"><?php laimagen2(180,1200,$post->ID); ?></div>
			</div> 
    <?php // include("menu_cursos.php");  ?>
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