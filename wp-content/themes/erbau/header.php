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
      'menu_class'=>'list-inline',
      'theme_location'=>'primary',
      'container_id'=>'top-nav',
      'container_class'=>'top-nav',
      'after'=>'',
      'depth'=>1,
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

  <script>
    $(document).ready(function(){
      $("#top_nav").on("click","a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();
        //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href'),
        //узнаем высоту от начала страницы до блока на который ссылается якорь
        top = $(id).offset().top;
        //анимируем переход на расстояние - top за 500 мс
        $('body,html').animate({scrollTop: top}, 500);
      });
    });
  </script>
  <!-- <script>
      var h_hght = 145; // высота шапки
      var h_mrg = 0;    // отступ когда шапка уже не видна
                       
      $(function(){
       
          var elem = $('#top_nav');
          var top = $(this).scrollTop();
           
          if(top > h_hght){
              elem.css('top', h_mrg);
          }           
           
          $(window).scroll(function(){
              top = $(this).scrollTop();
               
              if (top+h_mrg < h_hght) {
                  elem.css('top', (h_hght-top));
              } else {
                  elem.css('top', h_mrg);
              }
          });
       
      });
  </script> -->

</head>