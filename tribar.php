

<h4 class="front">¿Qué esta pasando en la Alianza?</h4>
<div class="news-and-events">
<!-- Inicio Noticia 001 -->
<?php  query_posts(array('showposts' => 1, 'cat' => -10)); ?>
<?php if (have_posts()) : ?>
 <?php  while (have_posts()) : the_post(); ?>
<div class="six columns news-block item feature">
  <div class="news-text">
    <div class="item-date show-on-phones"><?php the_time('d/m/Y');  ?></div>
    <div class="eight columns">
      <h3><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h3>
    </div>
    <div class="eight columns">
      <div class="item-date hide-on-phones">
        <div class="month"><?php the_time('M');  ?></div>
        <div class="day"><?php the_time('d');  ?></div>
      </div>
      <p class="hide-on-phones"><?php echo excerpt2(20,$post->ID);  ?></p>
      <p><a href="<?php the_permalink(); ?>" class="more">&mdash; Leer más</a></p>
    </div>
  </div>
  <div class="news-image imxtribar1"><a href="<?php the_permalink(); ?>" style="background:url(<?php echo laimagen3($post->ID);  ?>);"></a></div>
</div>
<?php endwhile; ?>
<?php   endif; wp_reset_query(); ?>
<!-- Fin    Noticia 001 -->

<!-- Inicio Noticia 002 -->
<?php  query_posts(array('showposts' => 2, 'offset' => 1, 'cat' => -10)); ?>
<?php if (have_posts()) : ?>
 <?php  while (have_posts()) : the_post(); ?>
<div class="three columns news-block item news">
  <div class="news-text">
    <div class="item-date simple"><?php the_time('d/m/Y');  ?></div>
    <h3><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h3>
    <p class="hide-on-phones"></p>
    <p><a href="<?php the_permalink(); ?>" class="more">&mdash; Leer más</a></p>
  </div>
  <div class="news-image imxtribar2"><a href="<?php the_permalink(); ?>" style="background:url(<?php echo laimagen3($post->ID);  ?>);"></a></div>
</div>
<?php endwhile; ?>
<?php   endif; wp_reset_query(); ?>
<!-- Fin    Noticia 002 -->


<div class="four columns news-block extra masnoticias">
    <h2>MÁS NOTICIAS</h2>
<ul class="">
  <li id="" >
<?php  query_posts(array('showposts' => 5, 'offset' => 3, 'cat' => -10)); ?>
<?php if (have_posts()) : ?>
 <?php  while (have_posts()) : the_post(); ?>
          <p><strong><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong><br>
            &mdash; <em><?php the_time('d/m/Y');  ?></em></p>
<?php endwhile; ?>
<?php   endif; wp_reset_query(); ?>
    <a href="http://afmaracaibo.org/cultural/b" class="more-news">&mdash; Más Noticias</a>
  </li>
</ul>
</div>
 


	</div>

   