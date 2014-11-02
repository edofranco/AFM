<?php include("head.php"); ?>


	<!-- container -->
	<div class="row">
	<div class="sixteen columns">
  		<div class="title-one"><a href="index.html">Cultural</a></div>
		<h1 class="title-two"><a href="#"><?php single_cat_title();  ?></a></h1>
  			<div class="sixteen columns content-container">  
  			<div class="thirteen columns push-three">
				<div class="eleven columns center-column three-column-layout">
					<div class="content">
					<!-- Inicio del articulo -->
<?php // INICIO DEL ARTICULO  ?>
<?php if (have_posts()) : ?>
<?php  while (have_posts()) : the_post(); ?>
					<h3><?php the_date('d/m/Y', '', ''); ?><br><a href="<?php the_permalink(); ?>"><strong><?php the_title(); ?></strong></a></h3>
   					<p><?php the_excerpt(); ?></p>
					<hr>
<?php endwhile; ?>
<?php 	endif; ?>
					<!-- Fin del articulo -->
					</div>
				</div>
	<div class="five columns right-column">
	<div class="sidebar-news">
	<div class="sidebar-news-item">
		<a href="#">			
			<div class="sidebar-news-content">
				<div class="item-date">
				</div>
				<h3>Estos son los eventos que la alianza francesa de maracaibo ha organizado para el fortalecimiento del lenguaje y la instruccion cultural de paises francófonos</h3>
				<div class="news-details">
					<p></p> 
				</div>
			</div>
			<div class="sidebar-news-image">
				<span class="overlay"></span>
				<p><img class="news_image" src="http://afmaracaibo.org/1/cultural/img/musica.jpg"/></p> 
			</div>
		 </a>
	</div>
</div>
</div>
</div>

<div class="three columns left-sidebar pull-thirteen"> 	

 <div class="left-navigation">
    <?php include("menu_cats.php");  ?> 
</div>
  				<div class="left-sidebar-content"></div>
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
	<!-- Fin Contenedor -->


<?php include("futer.php"); ?>