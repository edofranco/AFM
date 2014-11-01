<?php include("head.php"); ?>

<div id="pagex" style="padding:20px;">
<?php // INICIO DEL ARTICULO  ?>
<?php if (have_posts()) : ?>
 <?php  while (have_posts()) : the_post(); ?>
           
<div id="distrix2">
<div id="imagen">
	 <a href="<?php the_permalink(); ?>"><?php laimagen(600,1200,$post->ID); ?></a>
	 <a href="<?php the_permalink(); ?>" id="titulo" ><p><?php the_title(); ?></p></a>
</div>
</div>
 
<?php endwhile; ?>
<?php 	endif; ?>
</div> 

<?php include("futer.php"); ?>