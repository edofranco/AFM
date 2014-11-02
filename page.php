<?php include("head.php"); ?>

<?php if (have_posts()) : ?>	
<?php while (have_posts()) : the_post(); ?>	

            
<?php endwhile; ?>
<?php endif; ?>
		
<?php include("futer.php"); ?> 