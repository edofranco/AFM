<?php include("head.php"); ?>
<div>	
    <?php if (have_posts()) : ?>	
    <?php while (have_posts()) : the_post(); ?>
    <?php $postidx = get_the_ID();
        the_content();
     ?> 
    <?php endwhile; ?>
    <?php endif; ?>
</div>		
<?php include("futer.php"); ?>