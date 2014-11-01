<!DOCTYPE>
<html lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> Ductus</title>
<link rel="shortcut icon" href="http://ductus.com.ve/web/favicon.png" type="image/png" />
<link rel="stylesheet" href="wp-content/themes/ductus/style.css" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="http://www.ductus.com.ve/feed/" />
<link rel="alternate" type="application/atom+xml" title="Atom Feed" href="http://www.ductus.com.ve/feed/atom/" />
<link rel="pingback" href="http://www.ductus.com.ve/xmlrpc.php" />
<?php wp_head(); ?>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>
</head>


<body> 
  <header>
    <div id="logo">  
      <img src="wp-content/themes/ductus/imx/logo.png">  
    </div>
    <nav>
      <ul>
        <li><a class="<?php  if(is_home()) echo "activin";  ?>"  href="http://ductus.com.ve/web/">Blog</a></li>
        <li><a class="<?php  if(is_category("5")) echo "activin";  ?>"  href="http://ductus.com.ve/web/?cat=5">Series</a></li> 
        <li><a class="<?php  if(is_category("3")) echo "activin";  ?>"  href="http://ductus.com.ve/web/?cat=3">Productos</a></li>
        <li><a class="<?php  if(is_category("4")) echo "activin";  ?>"  href="http://ductus.com.ve/web/?cat=4">Media</a></li>
        <li><a class="<?php  if(is_page(4)) echo "activin";  ?>"  href="http://ductus.com.ve/web/?page_id=4">Acerca</a></li>
        <li><a class="<?php  if(is_page(6)) echo "activin";  ?>"  href="http://ductus.com.ve/web/?page_id=6">Contacto</a></li>
      </ul>
    </nav>
    <div style="clear:both; "></div>
  </header>

  <div id="esce">