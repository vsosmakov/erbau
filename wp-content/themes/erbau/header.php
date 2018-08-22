<!doctype html>
<html lang="ru">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta id="vp" name="viewport" content="width=630">
  <link id="favicon" rel="shortcut icon" href="" type="image/png">
  <title><?php bloginfo('name'); ?> <?php wp_title("", true); ?></title>
  <?php 
    wp_nav_menu( array(
      'menu_class'=>'menu',
      'theme_location'=>'primary',
      'after'=>' /'
    ) );
  ?>
  <?php wp_head(); ?>
  <script>
  if (screen.width > 736) {
  document.getElementById('vp').setAttribute('content','width=1170');
  }
  </script>
<script>(function(w,d,s,l,i,cid){w[l]=w[l]||[];w.pclick_client_id=cid;w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:''; j.async=true; j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P23G9N', '73670');</script>	
</head>