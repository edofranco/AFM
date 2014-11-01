<?php include("head.php"); ?>
<?php if (have_posts()) : ?>	
<?php while (have_posts()) : the_post(); ?>	

<div id="pagex" style="padding:20px;">
 							
<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
<?php the_content(); ?>
</div><!--/post-<?php the_ID(); ?>-->

<div style="clear:both;"></div>

</div>
            
<?php endwhile; ?>
<?php endif; ?>
		
<?php include("futer.php"); ?> 