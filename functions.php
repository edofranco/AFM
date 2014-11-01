<?php
$themename = "banado2013";
$shortname = str_replace(' ', '_', strtolower($themename));

function gallery_first( $content) {
    $expr = '/\[gallery(.*?)\]/i';
    return (" [gallery] " . preg_replace( $expr, '', $content)); // deletes all existing gallery shortcodes
}
//add_filter( 'the_content', 'gallery_first', 6); // level '6' executes this function previous to all other filter functions


add_filter('the_content', 'do_shortcode', 11); // From shortcodes.php

function just_gallery( $content) {
    $expr = '/\[gallery(.*?)\]/i';
    return $expr;
}
function delete_gallery( $content) {
    $expr = '/\[gallery(.*?)\]/i';
    return (" [gallery] " . preg_replace( $expr, '', $content));
}



function laimagen($anchox=390,$altox=1200,$elidx)
{  

		  $altox=$altox;
		  
		  $imgdest = get_post_meta($elidx,'imgdest', true); //BUSCAR PARAMERO IMGDEST COMO PRIORIDAD
			  if($imgdest==''){ //SI EL PARAMETRO IMGDEST ESTA VACIO BUSCA LA IMAGEN DESTACADA
				 $imagx = wp_get_attachment_image_src( get_post_thumbnail_id( $elidx ), 'large' ); //BUSCA EL URL DE LA IMAGEN DESTACADA
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
 } //FIN HABEMUSIMX

 function laimagen2($anchox=390,$altox=1200,$elidx) //TIENE RESIZE EL DE ARRIBA NO
{  
		  $clx=''; //CLASE
		  $altox=$altox;
		  
		  $imgdest = get_post_meta($elidx,'imgdest', true); //BUSCAR PARAMERO IMGDEST COMO PRIORIDAD
			  if($imgdest==''){ //SI EL PARAMETRO IMGDEST ESTA VACIO BUSCA LA IMAGEN DESTACADA
				 $imagx = wp_get_attachment_image_src( get_post_thumbnail_id( $elidx ), 'large' ); //BUSCA EL URL DE LA IMAGEN DESTACADA
				 $imgdest = $imagx[0]; //BUSCA SI HAY UN CAMPO PERSONALIZADO COMO IMGDEST
				 if($imgdest==''){
	$attachments = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order'));
	$img = array_shift($attachments);
	$imagelink = wp_get_attachment_image_src($img->ID,'full');
	$imgdest = $imagelink[0];
					 }//ultimo if para buscar img en caso de que no este como imgdest ni como destacada
				  }
		if($imgdest!=''){resize_imx($anchox,$altox,$imgdest,$clx);} //SI HAY IMG SI SE HACE LA FUNCION SINO MAMANDISIMO
		//LLAMA LA FUNCION LOS PARAMETROS SON EN ESTE ORDEN: ANCHO,ALTO,IMGDEST,CLASE
 } //FIN HABEMUSIMX

 function laimagen3($elidx,$ignorar=false) //SOLO BUSCA EL IMGDEST
{  
	$imgdest ='';

			if(!$ignorar){
            $imgdest = get_post_meta($elidx,'wpcf-sliderimg', true); //
            if($imgdest=='') $imgdest = get_post_meta($elidx,'wpcf-sliderimx', true);
        	}

			  if($imgdest==''){ //SI EL PARAMETRO IMGDEST ESTA VACIO BUSCA LA IMAGEN DESTACADA
				 $imagx = wp_get_attachment_image_src( get_post_thumbnail_id( $elidx ), 'large' ); //BUSCA EL URL DE LA IMAGEN DESTACADA
				 $imgdest = $imagx[0]; //BUSCA SI HAY UN CAMPO PERSONALIZADO COMO IMGDEST
				 if($imgdest==''){
	$attachments = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order'));
	$img = array_shift($attachments);
	$imagelink = wp_get_attachment_image_src($img->ID,'full');
	$imgdest = $imagelink[0];
					 }//ultimo if para buscar img en caso de que no este como imgdest ni como destacada
				  }
	return $imgdest;
 } //FIN HABEMUSIMX


function bannerside($identy)
{
	 //$option = get_theme_option('ad_sidebar1_bottom');
	 global $shortname;
	 $option_name = $shortname."_ads_125";
	 $option = get_option($option_name);
	 $values = explode("\n", $option);
	 //$cant = count($values);
	 //$rand = rand(1,$cant);
	// $nomber = ($rand-1);
	$nomber = $identy;
	
	 $item = $values[$nomber];
		 	$ad = explode(',', $item);
		 	$banner = trim($ad['0']);
		 	$url = trim($ad['1']);

		 		echo "<a href=\"$url\" target=\"_new\"><img  src=\"$banner\" height=\"150\" width=\"320\" /></a> \n";


}//FIN BANNERS ARRIBA

function bannertop($identy)
{
	 //$option = get_theme_option('ad_sidebar1_bottom');
	 global $shortname;
	 //$option_name = $shortname."_ad_header";
	 $option_name = $shortname."_head";
	 $option = get_option($option_name);
	 $values = explode("\n", $option);
	 //$cant = count($values);
	 //$rand = rand(1,$cant);
	// $nomber = ($rand-1);
	$nomber = $identy;
	
	 $item = $values[$nomber];
		 	$ad = explode(',', $item);
		 	$banner = trim($ad['0']);
		 	$url = trim($ad['1']);

		 		echo "<a href=\"$url\" target=\"_new\"><img  src=\"$banner\" height=\"120\" width=\"980\" /></a> \n";


}//FIN BANNERS ARRIBA

function bannerindex($identy)
{
	 //$option = get_theme_option('ad_sidebar1_bottom');
	 global $shortname;
	 $option_name = $shortname."_ad_header";
	 $option = get_option($option_name);
	 $values = explode("\n", $option);
	 //$cant = count($values);
	 //$rand = rand(1,$cant);
	// $nomber = ($rand-1);
	$nomber = $identy;
	
	 $item = $values[$nomber];
		 	$ad = explode(',', $item);
		 	$banner = trim($ad['0']);
		 	$url = trim($ad['1']);

		 		echo "<a href=\"$url\" target=\"_new\"><img  src=\"$banner\" height=\"85\" width=\"630\" /></a> \n";


}//FIN BANNERS ARRIBA

function imx_dest($width,$height,$imgdest,$clx) {
	 $scriptpath = get_bloginfo('template_directory');     
		 if ($imgdest!='') {
          //echo '<img class="'.$clx.'" src="'.$scriptpath.'/scripts/timthumb.php?src='.$imgdest.'&w='.$width.'&h='.$height.'&zc=1" alt="" />';
          echo '<img src="'.$imgdest.'" alt="" class="autowid" />';
          }//if
          else { 
    $attachments = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order'));
    if (!is_array($attachments)) {
    $image = $scriptpath."/images/empty.gif";
        //echo '<img class="'.$clx.'" style="border:none;margin:0;" src="'.$scriptpath.'/scripts/timthumb.php?src='.$image.'&zc=1" alt="" />';
    	echo '<img src="'.$image.'" alt="" class="autowid" />';
    }//if
    else {
    $img = array_shift($attachments);
    $imagelink = wp_get_attachment_image_src($img->ID,'full');
    $image = $imagelink[0];
        //echo '<img class="'.$clx.'" src="'.$scriptpath.'/scripts/timthumb.php?src='.$image.'&w='.$width.'&h='.$height.'&zc=1" alt="" />';
		echo '<img src="'.$image.'" alt="" class="autowid" />';
	

		}//else
	}//else
}//fuction imx_dest

function resize_imx($anchox,$altox,$imgdest,$clx) {
		//Ruta de la imagen original
			$rutaImagenOriginal=$imgdest;
			//Se define el maximo ancho y alto que tendra la imagen final
			$max_ancho = $anchox;
			$max_alto = $altox;	
			//Ancho y alto de la imagen original
			list($ancho,$alto)=getimagesize($rutaImagenOriginal);
			//Se calcula ancho y alto de la imagen final
			$x_ratio = $max_ancho / $ancho;
			$y_ratio = $max_alto / $alto;
			//Si el ancho y el alto de la imagen no superan los maximos,
			//ancho final y alto final son los que tiene actualmente
			if( ($ancho <= $max_ancho) && ($alto <= $max_alto) ){//Si ancho
			$ancho_final = $ancho;
			$alto_final = $alto;
			}
			/*
			* si proporcion horizontal*alto mayor que el alto maximo,
			* alto final es alto por la proporcion horizontal
			* es decir, le quitamos al ancho, la misma proporcion que
			* le quitamos al alto
			*/
			elseif (($x_ratio * $alto) < $max_alto){
			$alto_final = ceil($x_ratio * $alto);
			$ancho_final = $max_ancho;
			}
			/*
			* Igual que antes pero a la inversa
			*/
			else{
			$ancho_final = ceil($y_ratio * $ancho);
			$alto_final = $max_alto;
			}  
		 imx_dest($ancho_final,$alto_final,$imgdest,$clx); 
}//fuction imx_dest


function url_resize_imx($anchox,$altox,$imgdest,$clx) {
		//Ruta de la imagen original
			$rutaImagenOriginal=$imgdest;
			//Se define el maximo ancho y alto que tendra la imagen final
			$max_ancho = $anchox;
			$max_alto = $altox;	
			//Ancho y alto de la imagen original
			list($ancho,$alto)=getimagesize($rutaImagenOriginal);
			//Se calcula ancho y alto de la imagen final
			$x_ratio = $max_ancho / $ancho;
			$y_ratio = $max_alto / $alto;
			//Si el ancho y el alto de la imagen no superan los maximos,
			//ancho final y alto final son los que tiene actualmente
			if( ($ancho <= $max_ancho) && ($alto <= $max_alto) ){//Si ancho
			$ancho_final = $ancho;
			$alto_final = $alto;
			}
			/*
			* si proporcion horizontal*alto mayor que el alto maximo,
			* alto final es alto por la proporcion horizontal
			* es decir, le quitamos al ancho, la misma proporcion que
			* le quitamos al alto
			*/
			elseif (($x_ratio * $alto) < $max_alto){
			$alto_final = ceil($x_ratio * $alto);
			$ancho_final = $max_ancho;
			}
			/*
			* Igual que antes pero a la inversa
			*/
			else{
			$ancho_final = ceil($y_ratio * $ancho);
			$alto_final = $max_alto;
			}  

	 $scriptpath = get_bloginfo('template_directory');  
	return $scriptpath.'/scripts/timthumb.php?src='.$imgdest.'&w='.$width.'&h='.$height.'&zc=1'; 

}//fuction imx_dest

function resize_imx_related($anchox,$altox,$imgdest,$clx,$aidi) { //FUNCION PARA RELATED POSTS
		//Ruta de la imagen original
			$rutaImagenOriginal=$imgdest;
			//Se define el maximo ancho y alto que tendra la imagen final
			$max_ancho = $anchox;
			$max_alto = $altox;	
			//Ancho y alto de la imagen original
			list($ancho,$alto)=getimagesize($rutaImagenOriginal);
			//Se calcula ancho y alto de la imagen final
			$x_ratio = $max_ancho / $ancho;
			$y_ratio = $max_alto / $alto;
			//Si el ancho y el alto de la imagen no superan los maximos,
			//ancho final y alto final son los que tiene actualmente
			if( ($ancho <= $max_ancho) && ($alto <= $max_alto) ){//Si ancho
			$ancho_final = $ancho;
			$alto_final = $alto;
			}
			/*
			* si proporcion horizontal*alto mayor que el alto maximo,
			* alto final es alto por la proporcion horizontal
			* es decir, le quitamos al ancho, la misma proporcion que
			* le quitamos al alto
			*/
			elseif (($x_ratio * $alto) < $max_alto){
			$alto_final = ceil($x_ratio * $alto);
			$ancho_final = $max_ancho;
			}
			/*
			* Igual que antes pero a la inversa
			*/
			else{
			$ancho_final = ceil($y_ratio * $ancho);
			$alto_final = $max_alto;
			}  
		 imx_dest_related($ancho_final,$alto_final,$imgdest,$clx,$aidi); 
}//fuction imx_dest

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<span class="titpurple2">',
        'after_title' => '</span>',
    ));
}


if ( function_exists('register_sidebar') )
register_sidebar(array(
'name'=>'normalsidebar', //Nombre de nuestro sidebar (en este caso Blog)
        'before_widget' => '<div id="populars">',
        'after_widget' => '</div>',
        'before_title' => '<div style="width:340px; float:right; clear:both; margin:10px 0px;"><span class="verderightx"><p>',
        'after_title' => '</p><img src="http://www.culturazoom.com/wp-content/themes/zoom/imx/verderight.jpg" width="27" height="38" /></span></div>',
));

if ( function_exists('register_sidebar') )
register_sidebar(array(
'name'=>'foot', //Nombre de nuestro sidebar (en este caso Blog)
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<span>',
        'after_title' => '</span>',
));


function get_theme_option($option)
{
	global $shortname;
	return stripslashes(get_option($shortname . '_' . $option));
}

function get_theme_settings($option)
{
	return stripslashes(get_option($option));
}

function cats_to_select()
{
	$categories = get_categories('hide_empty=0'); 
	$categories_array[] = array('value'=>'0', 'title'=>'Select');
	foreach ($categories as $cat) {
		if($cat->category_count == '0') {
			$posts_title = 'No posts!';
		} elseif($cat->category_count == '1') {
			$posts_title = '1 post';
		} else {
			$posts_title = $cat->category_count . ' posts';
		}
		$categories_array[] = array('value'=> $cat->cat_ID, 'title'=> $cat->cat_name . ' ( ' . $posts_title . ' )');
	  }
	return $categories_array;
}

$options = array (
			
	array(	"type" => "open"),
	
	array(	"name" => "Logo Image",
		"desc" => "Enter the logo image full path. Leave it blank if you don't want to use logo image.",
		"id" => $shortname."_logo",
		"std" =>  get_bloginfo('template_url') . "/images/logo.png",
		"type" => "text"),array(	"name" => "Streaming de Radio?",
			"desc" => "Activa esto para mostrar el streaming.",
			"id" => $shortname."_featured_posts",
			"std" => "true",
			"type" => "checkbox"),
		array(	"name" => "Featured Posts Category", 
 "desc" => "Last 5 posts form the selected categoey will be listed as featured at homepage. <br />The selected category should contain at last 2 posts with images. <br /> <br /> <b>How to add images to your featured posts slideshow?</b> <br />
            <b>&raquo;</b> If you are using WordPress version 2.9 and above: Just set \"Post Thumbnail\" when adding new post for the posts in selected category above. <br /> 
            <b>&raquo;</b> If you are using WordPress version under 2.9  you have to add custom fields in each post on the  category  you set as featured category. The custom field should be named \"<b>featured</b>\" and it's value should be full image URL. <a href=\"http://newwpthemes.com/public/featured_custom_field.jpg\" target=\"_blank\">Click here</a> for a screenshot. <br /> <br />
            In both situation, the image sizes should be: Width: <b>620 px</b>. Height: <b>320 px.</b>",
			"id" => $shortname."_featured_posts_category",
			"options" => cats_to_select(),
			"std" => "0",
			"type" => "select"),
            	array(	"name" => "Index Banners (660x120 px)",
			"desc" => "Header banner code. You may use any html code here, including your 468x60 px Adsense code.",
            "id" => $shortname."_ad_header",
            "type" => "textarea",
			"std" => '<a href="http://mmohut.com/"><img src="' . get_bloginfo('template_url') .'/images/mmohut.gif" style="border: 0;" alt="MMO" title="MMO" /></a>'
			),
            	array(	"name" => "Sidebar",
		"desc" => "Formato: url,link",
        "id" => $shortname."_ads_125",
        "type" => "textarea",
		"std" => 'http://newwpthemes.com/uploads/newwp/newwp12.png,http://newwpthemes.com/
http://flexithemes.com/wp-content/partners/fta.gif, http://flexithemes.com/?partner=19'
		),	array(	"name" => "Featured Video",
		"desc" => "Enter youtube paly video id. Example: http://www.youtube.com/watch?v=<b>ekD8Pm8yDow</b>.",
		"id" => $shortname."_video",
		"std" =>  'ekD8Pm8yDow',
		"type" => "text"),	array(	"name" => "Twitter",
			"desc" => "Enter your twitter account url here.",
			"id" => $shortname."_twitter",
			"std" => "http://twitter.com/WPTwits",
			"type" => "text"),
			
	array(	"name" => "Twitter Text",
			"desc" => "",
			"id" => $shortname."_twittertext",
			"std" => "Follow me on Twitter!",
			"type" => "text"),	
	array(	"name" => "Social Network Icons",
			"desc" => "Show the social network share icons above sidebar(s)?",
			"id" => $shortname."_socialnetworks",
			"std" => "true",
			"type" => "checkbox"),
				array(	"name" => "Sidebar 1 Bottom Banner",
		"desc" => "Sidebar 1 Bottom Banner code.",
        "id" => $shortname."_ad_sidebar1_bottom",
        "type" => "textarea",
		"std" => '<a href="http://flexithemes.com/?partner=19"><img src="http://flexithemes.com/wp-content/partners/ftf.gif" style="border: 0;" alt="Premium WordPress Themes" /></a>'
		),	array(	"name" => "Header Banners (980x120 px)",
		"desc" => "The content of this box will be added immediately before &lt;/head&gt; tag. Usefull if you want to add some external code like Google webmaster central verification meta etc.",
        "id" => $shortname."_head",
        "type" => "textarea"	
		),
		
	array(	"name" => "BANNERS DEL SIDE 150x150",
		"desc" => "Solo se muestran en las noticias",
        "id" => $shortname."_footer",
        "type" => "textarea"	
		),
					
	array(	"type" => "close")
	
);

function mytheme_add_admin() {
    global $themename, $shortname, $options;
	
    if ( $_GET['page'] == basename(__FILE__) ) {
    
        if ( 'save' == $_REQUEST['action'] ) {

                foreach ($options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

                echo '<meta http-equiv="refresh" content="0;url=themes.php?page=functions.php&saved=true">';
                die;

        } 
    }

    add_theme_page($themename." Options", "".$themename." Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');
}

function mytheme_admin_init() {

    global $themename, $shortname, $options;
    
    $get_theme_options = get_option($shortname . '_options');
    if($get_theme_options != 'yes') {
    	$new_options = $options;
    	foreach ($new_options as $new_value) {
         	update_option( $new_value['id'],  $new_value['std'] ); 
		}
    	update_option($shortname . '_options', 'yes');
    }
}


if(!function_exists('get_sidebars')) {
	function get_sidebars()
	{
		 get_sidebar();
	}
}
	

function mytheme_admin() {

    global $themename, $shortname, $options;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    
?>
<div class="wrap">
<h2><?php echo $themename; ?> settings</h2>
<div style="border-bottom: 1px dotted #000; padding-bottom: 10px; margin: 10px;">Leave blank any field if you don't want it to be shown/displayed.</div>
<form method="post">



<?php foreach ($options as $value) { 
    
	switch ( $value['type'] ) {
	
		case "open":
		?>
        <table width="100%" border="0" style=" padding:10px;">
		
        
        
		<?php break;
		
		case "close":
		?>
		
        </table><br />
        
        
		<?php break;
		
		case "title":
		?>
		<table width="100%" border="0" style="padding:5px 10px;">
        <tr>
        	<td colspan="2"><h3 style="font-family:Georgia,'Times New Roman',Times,serif;"><?php echo $value['name']; ?></h3></td>
        </tr>
                
        
		<?php break;

		case 'text':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><input style="width:100%;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php echo get_theme_settings( $value['id'] ); ?>" /></td>
        </tr>

        <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php 
		break;
		
		case 'textarea':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><textarea name="<?php echo $value['id']; ?>" style="width:100%; height:140px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php echo get_theme_settings( $value['id'] ); ?></textarea></td>
            
        </tr>

        <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php 
		break;
		
		case 'select':
		?>
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%">
				<select style="width:240px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
					<?php 
						foreach ($value['options'] as $option) { ?>
						<option value="<?php echo $option['value']; ?>" <?php if ( get_theme_settings( $value['id'] ) == $option['value']) { echo ' selected="selected"'; } ?>><?php echo $option['title']; ?></option>
						<?php } ?>
				</select>
			</td>
       </tr>
                
       <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
       </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php
        break;
            
		case "checkbox":
		?>
            <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
                <td width="80%"><? if(get_theme_settings($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                        <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
                        </td>
            </tr>
                        
            <tr>
                <td><small><?php echo $value['desc']; ?></small></td>
           </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
            
        <?php 		break;
	
 
} 
}
?>

<!--</table>-->

<p class="submit">
<input name="save" type="submit" value="Save changes" />    
<input type="hidden" name="action" value="save" />
</p>
</form>

<?php
}
mytheme_admin_init();

add_action('admin_menu', 'mytheme_add_admin');

function sidebar_ads_125()
{
	 global $shortname;
	 $option_name = $shortname."_footer";
	 $option = get_option($option_name);
	 $values = explode("\n", $option);
	 if(is_array($values)) {
	 	foreach ($values as $item) {
		 	$ad = explode(',', $item);
		 	$banner = trim($ad['0']);
		 	$url = trim($ad['1']);
		 	if(!empty($banner) && !empty($url)) {
		 		echo "<a href=\"$url\" target=\"_new\"><img class=\"ad125\" src=\"$banner\" /></a> \n";
		 	}
		 }
	 }
}//FIN BANNERS DEL SIDEBAR

function bannersdeltop()
{
	 $option = get_theme_option('head');
	 $values = explode("\n", $option);
	 $cant = count($values);
	 $rand = rand(1,$cant);
	 $nomber = ($rand-1);
	 $item = $values[$nomber];
		 	$ad = explode(',', $item);
		 	$banner = trim($ad['0']);
		 	$url = trim($ad['1']);

				if($url=='SWF'){
						echo "<div class=\"divsban\"><object style=\"margin-bottom:10px; background:#000; border:3px #333 solid;\" data=\"$banner\" type=\"application/x-shockwave-flash\" width=\"660\" height=\"80\" vspace=\"0\"><param name=\"movie\" value=\"$banner\" /> <param name=\"quality\" value=\"high\" /><param name=\"wmode\" value=\"transparent\" /></object></div>";
						}
						else {
				if($url=='#'){
				echo "<img class=\"bannersdeltop\" style=\"margin-bottom:10px;\" src=\"$banner\" height=\"90\" width=\"980\" /> \n";	
					} else {
			if(!empty($banner) && !empty($url)) {
		 		echo "<a href=\"$url\" target=\"_new\"><img class=\"bannersdeltop\" style=\"margin-bottom:10px;\" src=\"$banner\" height=\"90\" width=\"980\" /></a> \n";
		    }
						} }//else LOS DOS ELSE
}//FIN BANNERS DEL TOP

function bannersdelindex()
{
	 $option = get_theme_option('ad_header');
	 $values = explode("\n", $option);
	 $cant = count($values);
	 $rand = rand(1,$cant);
	 $nomber = ($rand-1);
	 $item = $values[$nomber];
		 	$ad = explode(',', $item);
		 	$banner = trim($ad['0']);
		 	$url = trim($ad['1']);
			
				if($url=='SWF'){
				echo "<div class=\"divsban\"><object style=\"margin-bottom:10px; background:#000; border:3px #333 solid;\" data=\"$banner\" type=\"application/x-shockwave-flash\" width=\"660\" height=\"80\" vspace=\"0\"><param name=\"movie\" value=\"$banner\" /> <param name=\"quality\" value=\"high\" /><param name=\"wmode\" value=\"transparent\" /></object></div>";
					} else {		
				if($url=='#'){
				echo "<div class=\"divsban\"><img class=\"bannersdeltop\" style=\"margin-bottom:10px;\" src=\"$banner\" height=\"90\" width=\"660\" /></div> \n";	
					} else {	
		 		if(!empty($banner) && !empty($url)) {
		 		echo "<div class=\"divsban\"><a href=\"$url\" target=\"_new\"><img class=\"bannersdeltop\" style=\"margin-bottom:10px;\" src=\"$banner\" height=\"90\" width=\"660\" /></a></div> \n";
		    }
				
				} }//else LOS DOS ELSE
}//FIN BANNERS DEL TOP

if ( function_exists("add_theme_support") ) { add_theme_support("post-thumbnails"); } 
    if(function_exists('add_custom_background')) {
        add_custom_background();
    }
    
    if ( function_exists( 'register_nav_menus' ) ) {
    	register_nav_menus(
    		array(
    		  'men_up' => 'Menu UP',
    		  'menu_2' => 'Menu 2'
    		)
    	);
    }
	
	
function get_parent_id($idHijo) {
  global $wpdb;
  return $wpdb->get_var(sprintf("SELECT parent FROM $wpdb->term_taxonomy WHERE term_id = %d", $idHijo));
}


function videoframe($post_id) { 
$_video_type = get_post_meta($post_id, "wpcf-tipo", true);
$_video_link = get_post_meta($post_id, "wpcf-id", true);
if($_video_type == "youtube") { 		?>

<iframe width="100%" height="338" src="//www.youtube.com/embed/dk0j82_5Qpc" frameborder="0" allowfullscreen></iframe>

	<?php } elseif ($_video_type == "vimeo"){ ?>
	        <iframe width="100%" height="338" 
	        src="http://player.vimeo.com/video/<?php echo $_video_link;  ?>?title=0&amp;byline=0&amp;portrait=0" 
	        frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>

	<?php } ?>
                
<?php } //MULTIMULTIMEDIA

// CAMBIAR EL EXCERPT GLOBAL 
function new_excerpt_length($length) {
return 600;
}
add_filter('excerpt_length', 'new_excerpt_length');

// FUNCION PARA CAMBIAR EL [...] del EXCERPT
function new_excerpt_more($more) {
       global $post;
	return '...    <br /><a href="'. get_permalink($post->ID) . '">' . 'Leer M&aacute;s &raquo;' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

//FUNCION PARA CAMBIAR LA CANTIDAD DE PALABRAS DEL EXCERPT
function excerpt($limit,$leermas="Leer_M&aacute;s_&raquo;") {
$excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...  <a href="'. get_permalink($post->ID) . '">' . $leermas . '</a>';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

//FUNCION PARA CAMBIAR LA CANTIDAD DE PALABRAS DEL EXCERPT
function excerpt2($limit,$leermas="Leer_M&aacute;s_&raquo;") {
$excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}



// Adds rel="sexylightbox" to the WordPress built-in gallery

function autoexpand_rel_wlightbox ($content) {
	global $post;
	$pattern        = "/(<a(?![^>]*?rel=['\"]lightbox.*)[^>]*?href=['\"][^'\"]+?\.(?:bmp|gif|jpg|jpeg|png)['\"][^\>]*)>/i";
	$replacement    = '$1 rel="lightbox['.$post->ID.']" onclick="return hs.expand(this, config1 )">';
	$content = preg_replace($pattern, $replacement, $content);
	return $content;
}
	add_filter('the_content', 'autoexpand_rel_wlightbox', 99);
	add_filter('the_excerpt', 'autoexpand_rel_wlightbox', 99);
	
function get_post_thumbnail_wurl( $post_id = NULL, $size = 'post-thumbnail', $attr = '' ) {
	global $id;
	$post_id = ( NULL === $post_id ) ? $id : $post_id;
	$post_thumbnail_id = get_post_thumbnail_id( $post_id );
	$size = apply_filters( 'post_thumbnail_size', $size );
	if ( $post_thumbnail_id ) {
		$imagx = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
	
		do_action( 'begin_fetch_post_thumbnail_html', $post_id, $post_thumbnail_id, $size ); // for "Just In Time" filtering of all of wp_get_attachment_image()'s filters
		$html = wp_get_attachment_image( $post_thumbnail_id, $size, false, $attr );
		do_action( 'end_fetch_post_thumbnail_html', $post_id, $post_thumbnail_id, $size );

	} else {
		$html = '';
	}
	$rex='<a class="aimxeven" href="'.$imagx[0].'" onclick="return hs.expand(this, config1 )"  style="display:block; text-align:center;">';
	$rex.=apply_filters( 'post_thumbnail_html', $html, $post_id, $post_thumbnail_id, $size, $attr );
	$rex.= '</a>';
	return $rex;
}
//PARA QUE LOS COLABORADORES SUBAN IMAGENES
if ( current_user_can('contributor') && !current_user_can('upload_files') )
    add_action('admin_init', 'allow_contributor_uploads');
 
function allow_contributor_uploads() {
    $contributor = get_role('contributor');
    $contributor->add_cap('upload_files');
}

add_filter('user_contactmethods','hide_profile_fields',10,1);
function hide_profile_fields( $contactmethods ) {
unset($contactmethods['aim']);
unset($contactmethods['jabber']);
unset($contactmethods['yim']);
return $contactmethods;
}
function postimage_l($width,$height) {
    $scriptpath = get_bloginfo('template_directory'); 
    $attachments = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order'));
    if (!is_array($attachments)) {
    $image = $scriptpath."/images/empty.gif";
        echo '<img style="border:none;margin:0;" src="'.$scriptpath.'/scripts/timthumb.php?src='.$image.'&zc=1" hspace="10" align="left" />';
    }
    else {
    $img = array_shift($attachments);
    $imagelink = wp_get_attachment_image_src($img->ID,'full');
    $image = $imagelink[0];
        echo '<img src="'.$scriptpath.'/scripts/timthumb.php?src='.$image.'&w='.$width.'&h='.$height.'&zc=1" hspace="10" align="left" />';
}
}

function postimage_r($width,$height) {
    $scriptpath = get_bloginfo('template_directory'); 
    $attachments = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order'));
    if (!is_array($attachments)) {
    $image = $scriptpath."/images/empty.gif";
        echo '<img style="border:none;margin:0;" src="'.$scriptpath.'/scripts/timthumb.php?src='.$image.'&zc=1" hspace="10" align="right" />';
    }
    else {
    $img = array_shift($attachments);
    $imagelink = wp_get_attachment_image_src($img->ID,'full');
    $image = $imagelink[0];
        echo '<img src="'.$scriptpath.'/scripts/timthumb.php?src='.$image.'&w='.$width.'&h='.$height.'&zc=1" hspace="10" align="right" />';
}
}
?>