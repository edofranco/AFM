<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="es"> <!--<![endif]--><head>
<!-- Meta Tags --> 
<meta http-equiv="Content-Language" content="es"> 
<link rel="image_src" href="http://afmaracaibo.org/logo.jpg" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> Alianza Francesa de Maracaibo @AlianzadeMcbo</title>
<link rel="stylesheet" href="http://afmaracaibo.org/wp-content/themes/afm/style.css" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="http://www.afmaracaibo.org/feed/" />
<link rel="alternate" type="application/atom+xml" title="Atom Feed" href="http://www.afmaracaibo.org/feed/atom/" />
<link rel="pingback" href="http://www.afmaracaibo.org/xmlrpc.php" />
<meta name="description" content="ESPECIALIZADOS EN LA ENSEÑANZA DE LA LENGUA FRANCESA // Aquí es donde un idioma reúne vibrantes académicos rigurosos. Realiza tu futuro aquí. Su principal característica es la flexibilidad que nos permite adaptarnos a nuestros alumnos, a su nivel de conocimientos, a sus objetivos y a su disponibilidad. ALIANZA FRANCESA DE MARACAIBO Av. 8 Santa Rita con Calle 67 Cecilio Acosta - Maracaibo / Venezuela"/> 
<meta name="keywords" content="cursos, frances, cultura, francofonia, oh lala, radio, francia, frances, francaise, alliance, alianza, maracaibo, nivel, consulado, francofonia, fiesta de la musica" /> 
<meta name="Geography" CONTENT="Maracaibo Venezuela"> 
<meta name="Language" CONTENT="Español, Castellano"> 
<meta http-equiv="Expires" CONTENT="never"> 
<meta name="Revisit-After" CONTENT="2 days"> 
<meta name="distribution" CONTENT="Global"> 
<meta name="Robots" CONTENT="INDEX,FOLLOW"> 
<meta name="country" CONTENT="Venezuela"> 
<meta name="author" content="HOZT">
<!-- Meta Tags --> 
<meta charset="utf-8" />
<!-- Included CSS Files -->
<!--[if lte IE 9]>
<link rel="stylesheet" href="/stylesheets/ie.css">
<![endif]-->
<!--[if lt IE 8]>
<link rel="stylesheet" href="/stylesheets/ie7.css">
<![endif]-->
<script src="http://afmaracaibo.org/wp-content/themes/afm/assets/manifest-aa5c7200d75916da1dabed195f91aad1.js" type="text/javascript"></script>
<meta content="authenticity_token" name="csrf-param" />
<meta content="sc5L7BAZ47IeWrjZJ7nURTf6glwdBmGYxJvvkS/p0zc=" name="csrf-token" />
<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title></title>
<!-- Apple Touch Icon & Favicon -->
<link rel="apple-touch-icon" href="http://afmaracaibo.org/wp-content/themes/afm/images/misc/apple-touch-icon.png" />
<link rel="icon" type="image/ico" href="http://afmaracaibo.org/wp-content/themes/afm/images/misc/favicon.ico">
<!-- Fonts.com -->
<script type="text/javascript" src="../fast.fonts.com/jsapi/fdf2ca91-c25d-4dab-8694-d7420e4459f3.js"></script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38704736-1']);
  _gaq.push(['_setDomainName', 'afmaracaibo.org']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<?php wp_head(); ?>
</head>
<?php 
$clasebody="";
if(is_page(5)) $clasebody="top-level-why-study-here current-page-why-study-here default"; ?>
<body class="<?php echo $clasebody; ?>">
  <!-- container -->
  <div class="container">
  <!-- edit links -->
  <!-- end edit links --> <!-- Header -->
    <div class="row">

      <div class="sixteen columns header-section">

      <div class="three columns logo">

        <a href="http://afmaracaibo.org/" title="Alianza Francesa Maracaibo">Alianza francesa</a>

      </div>

      <div class="hide-on-desktops" id="tablet-search">

      </div>

      <ul class="thirteen columns primary-nav">

<li class="why-study-here two"><a href="http://afmaracaibo.org/por-que-estudiar-aqui/">¿Por qué estudiar aquí?</a>
  <div class="dropdown">
    <div class="subnav-arw"></div>
    <div class="subnav-title">¿Por qué estudiar aquí?</div>
    <div class="subnav-content-highlight">
    </div>
    <ul class="slash-number">
    </ul>
  </div>
</li>

<li class="graduate-programs two"><a href="http://afmaracaibo.org/cursos/">Cursos</a>
  <div class="dropdown">
    <div class="subnav-arw"></div>
    <div class="subnav-title">Dentro de Cursos</div>
    <div class="subnav-content-highlight">
      <p>
        <img src="http://afmaracaibo.org/wp-content/themes/afm/img/cursosmenu.jpg"><br>
      </p>
      <p>
        Cursos para todas las edades, corporaciones y planes de becas.
      </p>
      <p>
        <a href="http://afmaracaibo.org/cursos/">Informacion de cursos ></a><br>
    </div>
    <ul class="slash-number">
<?php  query_posts(array('showposts' => 20, 'post_parent' => 7, 'post_type' => 'page')); ?>
<?php if (have_posts()) : ?>
 <?php  while (have_posts()) : the_post(); ?>
          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; ?>
<?php   endif; wp_reset_query(); ?>
    </ul>
  </div>
</li>

<li class="course-listing two"><a href="http://afmaracaibo.org/cultural/">Cultural</a>
  <div class="dropdown">
    <div class="subnav-arw"></div>
    <div class="subnav-title">Dentro de Cultural</div>
    <div class="subnav-content-highlight">
      <p>
        <img src="http://afmaracaibo.org/wp-content/themes/afm/img/culturalmenu.jpg">
      </p>
      <p>
        UN IDIOMA SE APRENDE MEJOR CUANDO SE CONOCE SU CULTURA.
      </p>
      <p>
        <a href="http://afmaracaibo.org/cultural/">Ver culturales&nbsp;&gt;</a>
      </p>
    </div>
    <ul class="slash-number">
    <?php wp_list_categories('title_li=&hide_empty=0&exclude=1'); ?>
    </ul> 
  </div>
</li>

          <li class="faculty two"><a href="mediateca/index.html">MEDIATECA</a>

                <div class="dropdown">

                  <div class="subnav-arw"></div>

                  <div class="subnav-title">Dentro de la Mediateca</div>

                  <div class="subnav-content-highlight">

                            <p><img src="http://afmaracaibo.org/wp-content/themes/afm/img/mdiatecamenu.jpg?1333041245"><br></p><p>

  La Mediateca de la Alianza Francesa de Maracaibo es un espacio privilegiado que se pone a disposición del público francófono, estudiantes y publico general.

</p>



                    <!--

                    <p><strong>Top Content</strong><br />

                      Dolor sit but amet, the my our dolor sit but amet, the my our dolor sit but amet, the my our.</p>

                    <p><strong>News & Events</strong><br />

                      This is a news or event title<br />

                      This is a news or event title<br />

                      This is a news or event title</p>

                    -->

                  </div>

                  <ul class="slash-number">

                      <li class="list-1 full-time "><a href="mediateca/index.html">Instalaciones</a>

    </li>



                  </ul>

                </div>

        </li>

          <li class="admissions-finance two"><a href="instalaciones/index.html">INSTALACIONES</a>

                <div class="dropdown">

                  <div class="subnav-arw"></div>

                  <div class="subnav-title">Dentro de Instalaciones</div>

                  <div class="subnav-content-highlight">

                            

<p>

  <img src="http://afmaracaibo.org/wp-content/themes/afm/img/instalacionesmenu.jpg?1332894544"><br>

</p>

<p>

  La Mediateca de la Alianza Francesa de Maracaibo es un espacio privilegiado que pone a disposición del público francófono, estudiantes y publico general las obras, el pensamiento.

</p>





                    <!--

                    <p><strong>Top Content</strong><br />

                      Dolor sit but amet, the my our dolor sit but amet, the my our dolor sit but amet, the my our.</p>

                    <p><strong>News & Events</strong><br />

                      This is a news or event title<br />

                      This is a news or event title<br />

                      This is a news or event title</p>

                    -->

                  </div>

                  <ul class="slash-number">

                      <li class="list-6 chapel "><a href="instalaciones/campus.html">Campus</a>

    </li>

                      <li class="list-3 accessibility "><a href="instalaciones/mediateca.html">Mediateca</a>

    </li>

                      <li class="list-4 library "><a href="instalaciones/salones.html">Aulas - Salones</a>

    </li>

                      <li class="list-5 bookstore "><a href="instalaciones/galeriadearte.html">Galeria</a>

    </li>

                      <li class="list-7 lookout-gallery "><a href="instalaciones/estacionamiento.html">Estacionamiento</a>

    </li>

                      <li class="list-8 art-and-architecture "><a href="instalaciones/cafetin.html">Cafetin</a>

    </li>



                  </ul>

                </div>

        </li>

          <li class="lifelong-learning two"><a href="nosotros/index.html">ACERCA DE NOSOTROS</a>

                <div class="dropdown">

                  <div class="subnav-arw"></div>

                  <div class="subnav-title">dentro de acerca de nosotros</div>

                  <div class="subnav-content-highlight">

                            <p><img src="http://afmaracaibo.org/wp-content/themes/afm/img/nosotrosmenu.jpg?1332881536"><br></p><p>

  Reseña histórica, antecedentes y crecimiento de nuestra institucion.

</p>



                    <!--

                    <p><strong>Top Content</strong><br />

                      Dolor sit but amet, the my our dolor sit but amet, the my our dolor sit but amet, the my our.</p>

                    <p><strong>News & Events</strong><br />

                      This is a news or event title<br />

                      This is a news or event title<br />

                      This is a news or event title</p>

                    -->

                  </div>

                  <ul class="slash-number">

                      <li class="list-1 summer-programs "><a href="nosotros/antecedentes.html">Antecedentes</a>

    </li>

    <li class="list-2 distance-education "><a href="nosotros/historia.html">Historia</a>

    </li>

    <li class="list-3 weekends "><a href="nosotros/crecimiento.html">Crecimiento</a>

    </li>

    <li class="list-4 evenings "><a href="nosotros/fundacion.html">Fundacion</a>

    </li>

<li class="list-4 evenings "><a href="nosotros/reglamento.html">Reglamento</a>

    </li>



                  </ul>

                </div>

        </li>

      </ul>



      <div class="sixteen columns secondary-nav">

        <a class="show-on-phones mobile-closed" id="more-links-toggle" data-toggle="collapse" data-target="#more-links" data-dismiss="alert">Mas Enlaces</a>

        <ul class="mobile-closed" id="more-links">

            <li class="about-us "><a href="#" class="">ACCUEIL</a>

            </li>

            <li class="about-us "><a href="blog/index.html" class="">NOTICIAS Y EVENTOS</a>

            </li>           <li class="about-us "><a href="ohlala/index.html" class="">OH! LÀ LÀ! MARACAÏBO /  PROGRAMA RADIAL URBE 96.3</a>

            </li>

<li class="our-campus "><a href="evaluanos/index.html" class="">EVALUANOS</a>

          </li>

<li class="about-us external "><a href="http://www.fondation-alliancefr.org/" target="_blank" class="">FONDATION ALLIANCE FRANÇAISE </a>

</li><li class="about-us "><a href="contactos/index.html" class="">CONTACTOS </a>



</ul>

      </div>



      </div>

    </div>

    <!-- End Header -->