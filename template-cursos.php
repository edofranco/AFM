<?php
/*
Template Name: Cursos
*/ 
include("head.php"); ?>
<?php // INICIO DEL ARTICULO  ?>
<?php if (have_posts()) : ?>
 <?php  while (have_posts()) : the_post(); ?>
	<!-- container -->
	<div class="container">
	<div class="row">
	<div class="sixteen columns">
		<div class="title-one"><a href="index.html">Cursos</a></div>
			<h1 class="title-two"><a href="curso-express.html"><?php the_title();   ?></a></h1>
	<div class="sixteen columns content-container">  
		<div class="thirteen columns push-three">
 		<div class="eleven columns center-column three-column-layout">
 			<!-- contenido de la seccion -->
			<div class="content">

					<?php the_content(); ?>
			</div>
</div>
 <div class="five columns right-column">
    <div class="sidebar-content video">
	<div class="video-title">
	</div>
</div>
  	<div class="sidebar-details testimonial rotating-content fade">
		<div class="sidebar-details-item rotating-item-1 rotating-item content-block"  id="content-block-61">
				<div class="sidebar-details-image">
					<?php laimagen(240,1200,$post->ID); ?>
				</div>
			<div class="sidebar-details-content">
				<h4><?php echo get_post_meta( $post->ID, "quedicen",true); ?></h4>
				<div class="sidebar-detail-item">
					<p style="font-style:italic">
						<?php echo get_post_meta( $post->ID, "quedicen-texto",true ); ?>
					</p>
					<p><?php echo get_post_meta( $post->ID, "quedicen-firma" ,true); ?></p>
				</div>
			</div>
		</div>
	</div>
<div class="sidebar-news">
	<div class="sidebar-news-item">		<!--<h4> Mas Noticias recientes de la Alianza Francesa</h4>-->		
	<a href="index.html">			
			<div class="sidebar-news-content">
				<div class="item-date"></div>
				<h3>Mantente al tanto de nuestros horarios, nuevos cursos, pruebas y convocatorias a becas</h3>
				<div class="news-details">
					<p><span class="more-link">&mdash;MUCHA MAS INFORMACION AQUI</span></p>
				</div>
			</div>
			<div class="sidebar-news-image">
				<span class="overlay"></span><p><img class="news_image" src="http://afmaracaibo.org/1/cursos/img/logoalianza.jpg"/></p> 
			</div>
	</a>
</div>
</div>
</div>
</div>
<?php endwhile; ?>
<?php 	endif; ?>
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