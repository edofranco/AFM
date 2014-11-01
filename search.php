<?php include("head.php"); ?>
<?php include("sidebar.php"); ?>


			<div class="span-16">
			<div id="content">
<?php // INICIO DEL ARTICULO  ?>

<?php if (have_posts()) : ?>
<div>
		<h2 class="title" style="display:block; text-align:center;">Seguramente lo que estas buscando esta en:</h2>

<?php while (have_posts()) : the_post(); ?>
<div style="border-bottom:1px dashed #999; padding-bottom:25px; float:left; margin-top:20px;">

<?php // NUEVO CODIGO PARA HACER MINIATURAS ?>
      <div id="desta_imx" style="width:170px; float:left;">
      <a class="aimx_cine" href="<?php the_permalink() ?>" rel="bookmark"  title="<?php the_title(); ?>" style="display:block; text-align:center; margin-left:0px; margin-top:10px;">
          <?php 
		  $clx='imx_cine'; //CLASE  
		  $anchox=150;
		  $altox=100;
			$imgdest = get_post_meta($post->ID,'imgdest', true); //BUSCAR PARAMERO IMGDEST COMO PRIORIDAD
			  if($imgdest==''){ //SI EL PARAMETRO IMGDEST ESTA VACIO BUSCA LA IMAGEN DESTACADA
				 $imagx = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); //BUSCA EL URL DE LA IMAGEN DESTACADA
				 $imgdest = $imagx[0]; //BUSCA SI HAY UN CAMPO PERSONALIZADO COMO IMGDEST
				 if($imgdest==''){
	$attachments = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order'));
	$img = array_shift($attachments);
	$imagelink = wp_get_attachment_image_src($img->ID,'full');
	$imgdest = $imagelink[0];
					 }//ultimo if para buscar img en caso de que no este como imgdest ni como destacada
				  }
		if($imgdest!=''){imx_dest($anchox,$altox,$imgdest,$clx);} //SI HAY IMG SI SE HACE LA FUNCION SINO MAMANDISIMO
		//LLAMA LA FUNCION LOS PARAMETROS SON EN ESTE ORDEN: ANCHO,ALTO,IMGDEST,CLASE
           ?>
       </a></div>
      <?php // FIN DEL CODIGO PARA LAS MINIATURAS ?>
      
    <div  id="desta_text" style="width:480px; height:75px; float:left; padding-left:12px;"><!-- CONTENEDOR DEL ARTICULO-->
    <span class="blue"><?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?></span>
      <h2 class="titolthin"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
    <?php the_title(); ?>
    </a></h2>
    </div><!-- FIN DEL CONTENEDOR DEL ARTICULO-->
    
    <a href="<?php the_permalink(); ?>" class="segundomore">
    Leer m&aacute;s
    </a>
    
        <div style=" clear:both;"></div>
     
     
</div>
<?php endwhile; ?> 
</div>
<?php // FIN DEL ARTICULO  ?>

    
    
    
		
		<div class="navigation" style="margin-top:20px; float:left; width:670px;">
			<div class="alignleft"><?php next_posts_link('&laquo; '.$titol.' Anteriores') ?></div>
			<div class="alignright"><?php previous_posts_link(''.$titol.' Siguientes &raquo;') ?></div>
		</div>
        
<?php else : ?>

		<h2 class="pagetitle" style="line-height:35px; margin-top:60px;">Lo sentimos, por ahora no tenemos registros relacionados con tu busqueda.</h2>
	<?php endif; ?>

                 <div style="clear:both;"></div>
			</div>
            <div style="clear:both;"></div>
			</div>
		
<?php include("futer.php"); ?>