 <div class="sixteen columns rotator">
    <div class="rotating-messages rotating-content auto">

<?php  query_posts(array('showposts' => 10, 'cat' => 10)); ?>
<?php if (have_posts()) : ?>
 <?php  while (have_posts()) : the_post(); ?>
          <div class="rotating-item">
            <h3>
              <?php the_title(); ?><br>
            </h3>
            <p>
              <?php the_content(); ?>
              <?php $leermas = get_post_meta( $post->ID, "link",true ); 
              if($leermas!="") {
              ?>
              <a href="<?php echo $leermas; ?>">LEER MÁS</a>
              <?php } ?>
            </p>
          </div>         
<?php endwhile; ?>
<?php   endif; wp_reset_query(); ?>


</div>
</div>