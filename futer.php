				<!-- begin footer -->
			<div class="footer">
			<div class="container">
			<div class="row">
			<div class="sixteen columns footer-section">
				<div class="four columns">
					<ul class="footer-links level-1">
					<li class="list-1 why-study-here "><a href="#">¿Por qué estudiar aquí?</a>
						<ul class="level-2"></ul>
					</li>
					<li class="list-2 graduate-programs "><a href="#">Cursos</a>
						<ul class="level-2">
						<?php  query_posts(array('showposts' => 20, 'post_parent' => 7, 'post_type' => 'page', 'order' => 'ASC')); ?>
						<?php $cont=0; if (have_posts()) : ?>
						 <?php  while (have_posts()) : the_post(); ?>
		 <li class="list-<?php $cont++; echo $cont; ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php endwhile; ?>
						<?php 	endif; wp_reset_query(); ?>
						</ul>
					</li>

					<li class="list-3 course-listing "><a href="#">Cultural</a>
						<ul class="level-2">
							<?php wp_list_categories('title_li=&hide_empty=0&child_of=1'); ?>
						</ul>
					</li>

					<li class="list-4 faculty "><a href="#">Mediateca</a>
						<ul class="level-2">
					<li class="list-1 full-time "><a href="#">Instalaciones</a>		</li>
						</ul>
					</li>
				</div>

				<div class="four columns">
					<ul class="footer-links level-1">
				<li class="list-6 lifelong-learning "><a href="#">Instalaciones</a>
	        			<ul class="level-2">
            		<li class="list-1 course-details"><a href="#">Campus</a> </li>
		            <li class="list-2 course-details"><a href="#">Mediateca</a> </li>
		            <li class="list-3 course-details"><a href="#">Aulas y Salones</a> </li>
		            <li class="list-4 course-details"><a href="#">Galeria</a> </li>
		            <li class="list-5 course-details"><a href="#">Estacionamiento</a> </li>
		            <li class="list-5 course-details"><a href="#">Cafetin</a> </li>
          				</ul>
		<li class="list-6 lifelong-learning "><a href="http://afmaracaibo.org/nosotros/">Acerca de Nosotros</a>

			<ul class="level-2">

		<li class="list-2 distance-education "><a href="http://afmaracaibo.org/nosotros/historia.html">Historia</a>

		</li>

		<li class="list-3 weekends "><a href="http://afmaracaibo.org/nosotros/antecedentes.html">Antecedentes</a>

		</li>

		<li class="list-4 evenings "><a href="http://afmaracaibo.org/nosotros/cecimiento.html">Crecimiento</a>

		</li>

		<li class="list-5 public-lectures "><a href="http://afmaracaibo.org/nosotros/fundacion.html">Fundacion</a>

		</li>



			</ul>

		<li class="list-5 admissions-finance "><a href="http://afmaracaibo.org/">Accueil</a>

			                      <ul class="level-2">

			                        <li class="list-1 president-and-cabinet "></li>

			                        

              </ul>

		</li>

		<li class="list-8 our-campus "><a href="http://afmaracaibo.org/blog">Noticias y Eventos</a>

		  <ul class="level-2">

		    <li class="list-3 accessibility "></li>

		    

		    </ul>

		<li class="list-8 our-campus "><a href="http://afmaracaibo.org/ohlala">Oh La La Maracaibo - Radio</a>

		  <ul class="level-2">

		    <li class="list-3 accessibility "></li>

		    

		    </ul>

		<li class="list-8 support "><a href="http://afmaracaibo.org/evaluanos">Evaluanos</a>

			<ul class="level-2">

				

			</ul>

		</li>

		<li class="list-9 contact "><a href="http://afmaracaibo.org/cursos-sabatinos">Cursos Sabatinos (PRONTO)</a>		</li>



				  </ul>

                  

			  </div>

				<div class="four columns">

					<ul class="footer-links level-1">

								<li class="list-11 alumni "><a href="http://afmaracaibo.org/contactos">Contactos</a>

                                  <ul class="level-2">

                                    <li class="list-1 events "><a href="http://afmaracaibo.org/contactos">Formulario</a> </li>

                                    <li class="list-2 directory "><a href="http://afmaracaibo.org/contactos">Personal</a> </li>

                                  </ul>

		<li class="list-8 support "><a href="http://www.fondation-alliancefr.org/" target="_blank">Fondation Alliance Française FRANCIA</a>			</li>

                      </li>

		<li class="list-12 give-to-alianzamcboweb "><a href="http://afmaracaibo.org/enlaces">Enlaces Interesantes</a>

          <ul class="level-2">

            <li class="list-1 events "><a href="http://www.france.fr/" target="_blank">France</a> </li>

            <li class="list-2 directory "><a href="http://www.france24.com/fr/" target="_blank">France 24</a> </li>

            <li class="list-1 events "><a href="http://www.institutfrancais.com/" target="_blank">Institut Française</a> </li>

            <li class="list-2 directory "><a href="http://www.ciep.fr/es/delfdalf/" target="_blank">Centre International D'études Pédagogiques</a> </li>

            <li class="list-1 events "><a href="http://www.immigration-quebec.gouv.qc.ca/fr/index.html" target="_blank">QUEBEC Immigration et Communautés Culturelles </a> </li>

            <li class="list-2 directory "><a href="http://www.rfi.fr/" target="_blank">RFI</a> </li>

            <li class="list-1 events "><a href="http://www.campusfrance.org/fr/" target="_blank">Campus France</a> </li>

            <li class="list-2 directory "><a href="http://www.afvenezuela.org/" target="_blank">Alianza Francesa venezuela</a> </li>

          </ul>

		</li>

        

					</ul>

				</div>



				<div class="four columns">

				  <h5>Mantente Conectado</h5>

				  <ul class="social-media">

				    <li><a href="https://www.facebook.com/alianzademcbo" class="social-media facebook" target="_blank">Facebook <span>Me Gusta</span></a></li>

				    <li><a href="http://twitter.com/alianzademcbo" class="social-media twitter" target="_blank">Twitter <span>Seguir</span></a></li>				  <li><a href="http://instagram.com/alianzademcbo" class="social-media ytube" target="_blank">Instagram <span>Siguenos</span></a></li>

				    <li><a href="http://vimeo.com/alianzademcbo" class="social-media linkedin" target="_blank">Vimeo <span>Seguir</span></a></li>

</ul>

				  <div class="address">				    <h6>Alianza Francesa de Maracaibo</h6>

				    <p>Av. 8 Santa Rita con Calle 67 Cecilio Acosta - Maracaibo / Venezuela</p>

				    <p>Telf.:  +58 (0261) 798 2176 <br />

				      Telf.: +58 (0261) 797 2108 </p>

				    <p><strong>Horario de Atención</strong><br />

				      <strong>Martes a Viernes:</strong></br> 8:00am - 12:00pm / 3:00pm - 7:00pm</br>

				      <strong>Sábados:</strong></br> 8:00am - 1:00pm / 2:00pm - 5:00pm

</p>

<p><a href="mailto:info@afmaracaibo.org">info@afmaracaibo.org</a></p>

<p><small>Desarrollado por:</small></br> <a href="http://hozt.com.ve" target="_blank"><img src="http://afmaracaibo.org/wp-content/themes/afm/images/logob.png" width="150"></a></p>



				  </div>

				  <div class="enewsletter">

						<h6>&nbsp;</h6>

						  <!-- Start Alliance Francaise Newsletter signup popup -->

<div style="display:none">

	<div id="alianzamcboweb-newsletter-form" style="padding:10px 20px; background:#fff;">

	</div>

</div>

<!-- End Alliance Francaise Newsletter Signup popup -->



				  </div>

				</div>



			  </div>

			  </div>

			  </div>

				<div class="footer-bottom">

				<div class="container">

				<div class="row">

				<div class="sixteen columns footer-section">

				<a href="index.html" class="footer-logo">Alianza Francesa Maracaibo</a>

				<p class="copyright">En Alianza Francesa de Maracaibo, centro especializado en la enseñanza de la lengua francesa, los cursos se basan en una metodología propia y experimentada.</p>

				</div>

				</div>

				</div>

				</div>



			</div>

			<!-- end footer -->



			<!-- Google Analytics Allianza Francesa Maracaibo custom -->

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
<?php wp_footer(); ?>
</body>
</html>