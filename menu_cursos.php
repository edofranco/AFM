<div class="sidebar-links"> </div>
    	<h3>DENTRO DE CURSOS</h3>
	      <ol class="slash-number" style="list-style-type:none; margin:0;">
<?php  query_posts(array('showposts' => 20, 'post_parent' => 7, 'post_type' => 'page', 'order' => 'ASC')); ?>
<?php if (have_posts()) : ?>
 <?php  while (have_posts()) : the_post(); ?>
	        <li class="list-1 webadvisor-and-registration"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; ?>
<?php 	endif; ?>
	      </ol> 