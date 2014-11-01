<?php include("head.php"); ?>
<div style="height:80px; "></div> 
    <?php 
	query_posts('showposts=10&cat=1');
    if (have_posts()) : ?>	
    <?php while (have_posts()) : the_post(); ?>

<div id="distrix1">
	<h2><?php the_title(); ?></h2>
<?php the_date('Y-m-d', '<div id="fecha">', '</div>'); ?>
	<div id="imagen">
		 <?php laimagen(600,1200,$post->ID); ?>
	</div>
	<div id="extrak">
		<?php echo excerpt(50,"");  ?>
	</div>
	<div id="videoframe"><?php videoframe($post->ID);  ?></div>
</div>

    <?php endwhile; ?>
    <?php endif; ?>

<?php include("futer.php"); ?>  