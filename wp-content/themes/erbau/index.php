<?php get_header(); ?>
<header>
  <div class="wrapper">
    <div class="header-top">
      <div class="logo"></div>
      <div class="slogan">
        Производство и монтаж<br/>
        натяжных потолков в СПБ<br class="mobile-show" /> и Ленобласти
      </div>
      <div class="contacts">
        <a href="tel:<?php echo get_theme_mod('landing-setting-phone'); ?>"
           class="phone"><?php echo get_theme_mod('landing-setting-phone'); ?></a><br/>
        <span class="time">Пн-вс с 9:00 до 21:00</span>
      </div>
    </div>
    <div class="title">
      <h1>
        Натяжные потолки<br/>
        любой формы под ключ<br/>
        за 48 часов
      </h1>
    </div>
    <div class="list">
      <div class="item">
        <div class="img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/h1.png" alt="">
        </div>
        <div class="text">
          Без запаха,<br/>
          без вторсырья
        </div>
      </div>
      <div class="item">
        <div class="img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/h2.png" alt="">
        </div>
        <div class="text">
          Чистый<br/>
          монтаж
        </div>
      </div>
      <div class="item">
        <div class="img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/h3.png" alt="">
        </div>
        <div class="text">
          Расширенная<br/>
          гарантия
        </div>
      </div>
      <div class="item">
        <div class="img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/h4.png" alt="">
        </div>
        <div class="text">
          Собственный<br/>
          склад в СПБ
        </div>
      </div>
    </div>
    <div class="buttons">
      <div class="button">
        <a href="" class="m-button">
          Узнать об акциях
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-b.svg" alt="">
        </a>
      </div>
      <div class="button">
        <a href="#zamer" class="to-popup">ВЫЗВАТЬ ЗАМЕРЩИКА</a>
      </div>
    </div>
  </div>
</header>
<section id="bonus" class="bonus">
  <div class="wrapper">
    <div class="title">
      <h1>
        Получите<br/>
        приятный бонус
      </h1>
      <h3>
        Выберите одну из трех акций месяца
      </h3>
    </div>
    <ul class="bonus-list">
      <li>
        <div class="bonus-img">
          <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/bonus1.png" alt="">
        </div>
        <div class="bonus-title">
          На каждое второе<br/>
          помещение меньшей<br/>
          площадью, вы получаете<br/>
          натяжной потолок в<br/>
          подарок
        </div>
        <div class="bonus-button">
          <a class="m-button to-popup" href="#bonus">ПОЛУЧИТЬ ПОТОЛОК
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-b.svg" alt="">
          </a>
        </div>
      </li>
      <li>
        <div class="bonus-img">
          <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/bonus2.png" alt="">
        </div>
        <div class="bonus-title">
          Наши светильники<br/>
          (6 шт) при заказе<br/>
          потолка более 20 м²<br/>
          в подарок
        </div>
        <div class="bonus-button">
          <a class="m-button to-popup" href="#bonus">ПОЛУЧИТЬ СВЕТИЛЬНИКИ
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-b.svg" alt="">
          </a>
        </div>
      </li>
      <li>
        <div class="bonus-img">
          <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/bonus3.jpg" alt="">
        </div>
        <div class="bonus-title">
          <p>
            Специальное предложение<br/>
            на полотна линейки<br/>
            classic 99 ₽/м²
          </p>
        </div>
        <div class="bonus-button">
          <a class="m-button to-popup" href="#bonus">ПОЛУЧИТЬ ПОТОЛОК
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-b.svg" alt="">
          </a>
        </div>
      </li>
    </ul>
  </div>
</section>
<section class="services">
  <div class="wrapper">
    <div class="title">
      <h1>
        К вашим услугам — 5-летний<br/>
        опыт работы и более 2000 м²<br/>
        установленных потолков
      </h1>
    </div>
    <div class="services-slider">
      <div class="slider-inner owl-carousel">
        <?php
        $posts = get_posts(array('category_name' => 'cases', 'order' => 'ASC', 'numberposts' => '-1'));
        foreach ($posts as $post): setup_postdata($post);
          ?>
          <div class="services-slide">
            <div class="services-images">
              <div class="img-big">
                <img class="lazy" src="" alt="">
              </div>
              <?php
              if (have_rows('photos')):
                ?>
                <ul class="img-list owl-carousel">
                  <?php
                  while (have_rows('photos')) : the_row();
                    $small = get_sub_field('photo')['sizes']['small-img'];
                    $big = get_sub_field('photo')['sizes']['case-img'];
                    ?>
                    <li>
                      <a href="<?php echo $big; ?>">
                        <img class="lazy" src="<?php echo $small; ?>" alt="">
                        <div class="border"></div>
                      </a>
                    </li>
                  <?php
                  endwhile;
                  ?>
                </ul>
              <?php
              endif;
              ?>
            </div>
            <div class="services-info">
<!--              <div class="services-info-title">-->
<!--                --><?php //the_title(); ?>
<!--              </div>-->
              <div class="services-info-param">
                <?php if (get_field('type')): ?>
                  <p>
                    Тип: <span><?php the_field('type'); ?></span>
                  </p>
                <?php endif; ?>
                <?php if (get_field('use')): ?>
                  <p>
                    Помещение: <span><?php the_field('use'); ?></span>
                  </p>
                <?php endif; ?>
                <?php if (get_field('color')): ?>
                  <p>
                    Цвет: <span><?php the_field('color'); ?></span>
                  </p>
                <?php endif; ?>
                <?php if (get_field('area')): ?>
                  <p>
                    Площадь: <span><?php the_field('area'); ?> м²</span>
                  </p>
                <?php endif; ?>
                <?php if (get_field('installation')): ?>
                  <p>
                    Монтаж: <span><?php the_field('installation'); ?></span>
                  </p>
                <?php endif; ?>
                <?php if (get_field('include')): ?>
                  <p>
                    Включено: <span><?php the_field('include'); ?></span>
                  </p>
                <?php endif; ?>
              </div>
              <?php if (get_field('price')): ?>
                <div class="services-info-price">
                  Стоимость: <span><?php the_field('price'); ?> ₽</span>
                </div>
              <?php endif; ?>
              <div class="services-info-button">
                <a class="m-button to-popup" href="#zamer">ВЫЗВАТЬ ЗАМЕРЩИКА
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-b.svg" alt="">
                </a>
              </div>
            </div>
            <div class="i-clear"></div>
          </div>
        <?php
        endforeach;
        ?>
      </div>
      <a href="" class="prev"></a>
      <a href="" class="next"></a>
    </div>
  </div>
</section>
<section class="safe">
  <div class="wrapper">
    <div class="title">
      <h1>
        Безопасность вашего потолка<br/>
        гарантирована оригинальными<br/>
        сертификатами качества
      </h1>
    </div>
    <ul class="safe-list">
      <?php
      $posts = get_posts(array('category_name' => 'certs', 'posts_per_page' => 4));
      foreach ($posts as $post): setup_postdata($post);
        ?>
        <li>
          <a data-fancybox="certs" href="<?php echo the_post_thumbnail_url('full'); ?>">
            <img class="lazy" src="<?php echo the_post_thumbnail_url('cert-img'); ?>">
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
    <div class="sub-title">
      <h3>
        Для производства полотен<br/>
        мы используем только проверенные ткани<br/>
        и пленки из поливинилхлорида (ПВХ)
      </h3>
    </div>
    <div class="safe-material">
      <div class="material-img first">
        <img class="mobile-hide lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/cloth.jpg" alt="">
        <img class="mobile-show lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/cloth2.jpg" alt="">
      </div>
      <div class="material-info">
        <div class="material-title">
          Тканевое полотно
        </div>
        <div class="material-text mobile-hide">
          <p>
            В первом случае при изготовлении применяется<br/>
            обычная ткань. Ее пропитывают особыми составами,<br/>
            которые повышают прочность, эластичность, придают<br/>
            <span>антисептические и пылеотталкивающие свойства.</span>
          </p>
          <p>
            Благодаря этому тканевые полотна <span>гипоаллергенны</span><br/>
            <span>и безвредны для детей.</span>
          </p>
          <p>
            Полотна из ткани рекомендованы министерством<br/>
            здравоохранения для установки в детских<br/>
            и медицинских учреждениях.
          </p>
        </div>
        <div class="material-text mobile-show">
          <p>
            В первом случае при изготовлении применяется
            обычная ткань. Ее пропитывают особыми составами,
            которые повышают прочность, эластичность, придают
            <span>антисептические и пылеотталкивающие</span> <span>свойства.</span>
          </p>
          <p>
            Благодаря этому тканевые полотна <span>гипоаллергенны и безвредны</span> <span>для детей.</span>
          </p>
          <p>
            Полотна из ткани рекомендованы министерством
            здравоохранения для установки в детских
            и медицинских учреждениях.
          </p>
        </div>
      </div>
    </div>
    <div class="safe-material second">
      <div class="material-img">
        <img class="mobile-hide lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/membrane.jpg" alt="">
        <img class="mobile-show lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/membrane2.jpg" alt="">
      </div>
      <div class="material-info">
        <div class="material-title">
          Пленка ПВХ
        </div>
        <div class="material-text">
          <p>
            ПВХ-полотна мы производим только из <span>первичных экологически</span><br/>
            <span>чистых материалов.</span> Так делаются практически все окружающие<br/>
            вас предметы: обои, водопроводные трубы, детские игрушки,<br/>
            зубные щетки и т.д.
          </p>
          <div class="separator"></div>
          <p class="big">
            Наши потолки не выделяют вредных веществ,<br/>
            не имеют запаха, не накапливают пыль,<br/>
            не вызывают аллергии.
          </p>
          <div class="separator"></div>
          <p>
            ПВХ — идеальное решение для душевой, ванной комнаты или<br/>
            бассейна: за счет своего химического состава материал хорошо<br/>
            держит высокие температуры и совершенно не боится воды, а<br/>
            значит <span>препятствует образованию бактерий и черного грибка.</span>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="more">
  <div class="wrapper">
    <div class="more-text">
      <a href="#tab" class="to-modal">
        <span>Посмотрите еще 11 преимуществ<br/></span>
        <span>качественных натяжных потолков</span>
      </a>
    </div>
  </div>
</section>
<section class="work">
  <div class="wrapper">
    <div class="title">
      <h1>
        Работаем по всему<br/>
        Санкт-Петербургу и области
      </h1>
      <h3>
        В пределах 70 км от КАД <span>выезд на замер —</span><br/>
        <span>бесплатно. Даже в выходные</span>
      </h3>
    </div>
    <div class="work-top">
      <div class="work-cons">
        <span>Обратившись к нам, вы<br class="mobile-hide"/>
        получаете квалифицированную<br class="mobile-hide"/>
        консультацию</span> технического<br class="mobile-hide"/>
        специалиста, а не менеджера или<br class="mobile-hide"/>
        секретаря
      </div>
      <div class="work-time">
        <div class="time-title">
          В оговоренное время<br/>
          к вам приедет мастер
        </div>
        <div class="time-text">
          Он произведет замер потолков, покажет образцы<br/>
          материалов, поможет определиться с выбором цветов<br/>
          и фактур, предложит решение всех задач по освещению
        </div>
      </div>
    </div>
    <div class="work-form">
      <div class="form-inner form">
        <?php echo do_shortcode('[contact-form-7 id="49" title="Заявка на замер"]'); ?>
      </div>
    </div>
  </div>
</section>
<section class="price">
  <div class="wrapper">
    <div class="title">
      <h1>
        Точная стоимость вашего<br class="mobile-hide"/>
        заказа фиксируется в договоре<br class="mobile-hide"/>
        и не меняется в процессе работы
      </h1>
    </div>
    <div class="price-text mobile-hide">
      Оплата производится в два этапа: при<br/>
      подписании договора — аванс 30 %,<br/>
      остаток — по окончании работ.
      <br/><br/>
      Возможна оплата банковскими картами.
      <br/><br/>
      При заключении договора и внесении<br/>
      предоплаты <span>в день обращения вы</span><br/>
      <span>получаете скидку 10 %!</span>
    </div>
    <div class="price-text mobile-show">
      Оплата производится в два этапа: при
      подписании договора — аванс 30 %,
      остаток — по окончании работ.
      <br/><br/>
      Возможна оплата банковскими картами.
      <br/><br/>
      При заключении договора и внесении
      предоплаты <span>в день</span><span> обращения вы
      получаете скидку 10 %!</span>
    </div>
    <div class="price-button">
      <a class="m-button to-popup" href="#disc">получить скидку
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-b.svg" alt="">
      </a>
    </div>
  </div>
</section>
<section class="calc">
  <div class="wrapper">
    <div class="left">
      <div class="title">
        <h1>
          Рассчитайте стоимость<br class="mobile-hide"/>
          натяжного потолка<br class="mobile-hide"/>
          за 2 секунды
        </h1>
      </div>
      <div class="calc-range">
        <div class="range-m">
          Укажите площадь вашего потолка: <span class="wrap"><span class="val">15</span> м²</span>
        </div>
        <div class="range-input">
          <div class="range-bar"></div>
          <div class="range-val">
            <span>0</span>
            <span>50</span>
          </div>
        </div>
      </div>
      <div class="calc-price">
        <div class="calc-price-text">
          Стоимость вашего потолка:
        </div>
        <div class="calc-price-val calc-price-val1">
          <span>8235</span> ₽
        </div>
        <div class="calc-price-def">
          —
        </div>
        <div class="calc-price-val calc-price-val2">
          <span>10065</span> ₽
        </div>
      </div>
    </div>
    <div class="calc-form">
      <div class="form-inner form">
        <?php echo do_shortcode('[contact-form-7 id="50" title="Заявка на консультацию"]'); ?>
      </div>
    </div>
  </div>
</section>
<section class="factory">
  <div class="title">
    <h1>
      Все полотна производятся на<Br class="mobile-hide"/>
      крупнейших заводах Европы и Азии<br class="mobile-hide"/>
      и поступают на наш склад напрямую
    </h1>
  </div>
  <div class="factory-slider">
    <div class="slider-inner owl-carousel">
      <?php
      $posts = get_posts(array('category_name' => 'factorys'));
      foreach ($posts as $post): setup_postdata($post);
        ?>
        <div class="slider-item">
          <div class="img">
            <img class="lazy" src="<?php echo the_post_thumbnail_url('factory-img'); ?>" alt="">
          </div>
          <div class="text">
            <?php the_content(); ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <a href="" class="left">
      <span class="arrow"></span>
    </a>
    <a href="" class="right">
      <span class="arrow"></span>
    </a>
  </div>
</section>
<section class="prof">
  <div class="wrapper">
    <div class="title">
      <h1>
        Штат из 5 профессиональных<br class="mobile-hide" />
        монтажных бригад выполняет монтаж<br class="mobile-hide"/>
        любой сложности
      </h1>
    </div>
    <div class="prof-item prof-item2">
      <div class="item-img">
        <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/prof-img1.jpg" alt="">
      </div>
      <div class="item-info">
        <div class="item-title">
          Быстрый монтаж
        </div>
        <div class="item-text mobile-hide">
          Материалы приезжают на объект одновременно<br/>
          с монтажной бригадой. С помощью лазерного уровня<br/>
          определяется линия расположения полотна, далее<br/>
          по периметру помещения монтируется настенный<br/>
          профиль, в который заправляется гарпун.
          <br/><br/>
          В среднем <span>установка одного потолка занимает</span><br/>
          <span>3 часа.</span> Натяжные потолки во всей квартире мы<br/>
          устанавливаем за один рабочий день.
        </div>
        <div class="item-text mobile-show">
          Материалы приезжают на объект одновременно
          с монтажной бригадой. С помощью лазерного уровня
          определяется линия расположения полотна, далее
          по периметру помещения монтируется настенный
          профиль, в который заправляется гарпун.
          <br/><br/>
          В среднем <span>установка одного потолка занимает
          3 часа.</span> Натяжные потолки во всей квартире мы
          устанавливаем за один рабочий день.
        </div>
      </div>
    </div>
    <div class="prof-item prof-item1">
      <div class="item-info">
        <div class="item-title">
          Чистый монтаж
        </div>
        <div class="item-separator"></div>
        <div class="item-text">
          Натяжные потолки устанавливаются на завершающей стадии чистовой отделки или<br class="mobile-hide"/>
          уже в полностью обжитой квартире, поэтому при монтаже мы используем перфораторы<br class="mobile-hide"/>
          с пылесборниками и пневмоинструмент. Вам не потребуется передвигать мебель<br class="mobile-hide"/>
          или укрывать ее пленкой
        </div>
        <div class="item-separator"></div>
      </div>
    </div>
    <div class="prof-item prof-item2">
      <div class="item-img">
        <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/prof-img2.jpg" alt="">
      </div>
      <div class="item-info">
        <div class="item-title">
          Безопасный монтаж
        </div>
        <div class="item-text mobile-hide">
          Чтобы получить необходимое натяжение полотна, мы<br/>
          нагреваем помещение <span>с помощью</span> газовой тепловой<br/>
          пушки и взрывобезопасных <span>полимерно-композитных</span><br/>
          <span>газовых баллонов нового образца.</span>
          <br/><br/>
          Диэлектрические свойства баллона полностью<br/>
          исключают возможность образования искры, а<br/>
          специальная защитная пленка предотвращает<br/>
          воздействие метанола на стенки композита.
          <br/><br/>
          Безопасность работы с тепловой пушки обеспечивает<br/>
          так называемый клапан-контроллер, который при<br/>
          перегреве, выбросе пламени или отключении<br/>
          электроэнергии перекроет подачу газа
        </div>
        <div class="item-text mobile-show">
          Чтобы получить необходимое натяжение полотна, мы
          нагреваем помещение <span>с помощью</span> газовой тепловой
          пушки и взрывобезопасных <span>полимерно-</span><span>композитных
          газовых баллонов нового образца.</span>
          <br/><br/>
          Диэлектрические свойства баллона полностью
          исключают возможность образования искры, а
          специальная защитная пленка предотвращает
          воздействие метанола на стенки композита.
          <br/><br/>
          Безопасность работы с тепловой пушки обеспечивает
          так называемый клапан-контроллер, который при
          перегреве, выбросе пламени или отключении
          электроэнергии перекроет подачу газа
        </div>
      </div>
    </div>
  </div>
</section>
<section class="light">
  <div class="wrapper">
    <div class="title">
      <h1>
        Специалисты Erbau помогут вам<br class="mobile-hide"/>
        решить все задачи по освещению
      </h1>
      <h3>
        В каждой бригаде есть мастер с допуском к электромонтажным<br class="mobile-hide"/>
        работам и действующим удостоверением электрика
      </h3>
      <h4>
        Вам останется только выбрать светильники
      </h4>
    </div>
    <div class="light-form">
      <div class="form-inner form">
        <?php echo do_shortcode('[contact-form-7 id="51" title="Заявка на каталог"]'); ?>
      </div>
    </div>
  </div>
</section>
<section class="gift">
  <div class="wrapper">
    <div class="title">
      <h1>
        Закажите более 20 м² потолков<br class="mobile-hide"/>
        и получите 6 энергосберегающих<br class="mobile-hide"/>
        светильников Ecola в подарок
      </h1>
    </div>
    <div class="gift-slider">
      <div class="slider-inner owl-carousel">
        <div class="slider-item">
          <div class="img">
            <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/lamp1.png" alt="">
          </div>
          <div class="info">
            <div class="info-price">
              320 ₽
            </div>
            <div class="info-text">
              Стоимость<br/>
              светильника<br/>
              и лампы
            </div>
          </div>
        </div>
        <div class="slider-item">
          <div class="img">
            <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/lamp2.png" alt="">
          </div>
          <div class="info">
            <div class="info-price">
              320 ₽
            </div>
            <div class="info-text">
              Стоимость<br/>
              светильника<br/>
              и лампы
            </div>
          </div>
        </div>
        <div class="slider-item">
          <div class="img">
            <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/lamp3.png" alt="">
          </div>
          <div class="info">
            <div class="info-price">
              320 ₽
            </div>
            <div class="info-text">
              Стоимость<br/>
              светильника<br/>
              и лампы
            </div>
          </div>
        </div>
        <div class="slider-item">
          <div class="img">
            <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/lamp4.png" alt="">
          </div>
          <div class="info">
            <div class="info-price">
              320 ₽
            </div>
            <div class="info-text">
              Стоимость<br/>
              светильника<br/>
              и лампы
            </div>
          </div>
        </div>
        <div class="slider-item">
          <div class="img">
            <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/lamp5.png" alt="">
          </div>
          <div class="info">
            <div class="info-price">
              320 ₽
            </div>
            <div class="info-text">
              Стоимость<br/>
              светильника<br/>
              и лампы
            </div>
          </div>
        </div>
        <div class="slider-item">
          <div class="img">
            <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/lamp6.png" alt="">
          </div>
          <div class="info">
            <div class="info-price">
              320 ₽
            </div>
            <div class="info-text">
              Стоимость<br/>
              светильника<br/>
              и лампы
            </div>
          </div>
        </div>
        <div class="slider-item">
          <div class="img">
            <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/lamp7.png" alt="">
          </div>
          <div class="info">
            <div class="info-price">
              320 ₽
            </div>
            <div class="info-text">
              Стоимость<br/>
              светильника<br/>
              и лампы
            </div>
          </div>
        </div>
        <div class="slider-item">
          <div class="img">
            <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/lamp8.png" alt="">
          </div>
          <div class="info">
            <div class="info-price">
              320 ₽
            </div>
            <div class="info-text">
              Стоимость<br/>
              светильника<br/>
              и лампы
            </div>
          </div>
        </div>
      </div>
      <a href="" class="left">
        <span class="arrow"></span>
      </a>
      <a href="" class="right">
        <span class="arrow"></span>
      </a>
    </div>
    <div class="gift-info">
      <div class="gift-title">
        Компактные размеры
      </div>
      <div class="gift-text">
        Плоские лампы GX53 позволяют уменьшить запотолочное<br class="mobile-hide"/>
        пространство, сведя к минимуму потерю высоты вашего потолка.
      </div>
      <div class="gift-params">
        <div class="gift-param">
          Высота: 38 мм
        </div>
        <div class="gift-param">
          Диаметр: 106 мм
        </div>
      </div>
      <div class="gift-title">
        Низкий уровень электропотребления
      </div>
      <div class="gift-text">
        Светодиодные лампы (LED) потребляют энергии и выделяют тепла<br class="mobile-hide"/>
        в 10 раз меньше, чем галогенные
      </div>
      <div class="gift-params">
        <div class="gift-param">
          Мощность: 4,2 Вт
        </div>
      </div>
      <div class="gift-title">
        Увеличенный срок службы
      </div>
      <div class="gift-text">
        По сравнению с теми же галогенными лампами, при одинаковом<br class="mobile-hide"/>
        световом потоке LED-лампы служат в 25—30 раз дольше
      </div>
    </div>
    <div class="i-clear"></div>
    <div class="gift-get">
      <a href="#bonus" class="m-button to-popup">Получить подарок
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-b.svg" alt="">
      </a>
    </div>
  </div>
</section>
<section class="guarantee">
  <div class="wrapper">
    <div class="title">
      <h1>
        Расширенная гарантия<br/>
        на все работы и материалы
      </h1>
    </div>
    <div class="guarantee-text">
      <p class="text first">
        Мы входим в группу компаний «АльбиНаст»,<br class="mobile-hide"/>
        имеющую успешный опыт предпринимательской<br class="mobile-hide"/>
        деятельности в Германии
      </p>
      <p class="text second">
        На всех этапах выполнения вашего заказа ведется<br class="mobile-hide"/>
        многоуровневый контроль качества.
      </p>
      <p class="text-b">
        <span class="separator"></span>
        <span class="text">
          Благодаря строгому соблюдению стандарта ISO<br class="mobile-hide"/>
          9001:2015, вместе c потолком вы приобретаете<br class="mobile-hide"/>
          расширенную гарантию: 15 лет — на все<br class="mobile-hide"/>
          материалы и комплектующие, 3 года — на<br class="mobile-hide"/>
          монтажные работы
        </span>
        <span class="separator"></span>
      </p>
      <p class="text third">
        После установки потолка вам будет выдан сертификат на<br class="mobile-hide"/>
        бесплатное сервисное обслуживание, дающий право на<br class="mobile-hide"/>
        единовременное устранение следующих повреждений<br class="mobile-hide"/>
        натяжного потолка без замены полотна:<br/>
        <span>
          искажение полотна вследствие залива водой
        </span>
        <br/>
        <span>
          механические повреждения (порезы, проколы,
          размер которых не превышает 100 мм
        </span>
      </p>
    </div>
  </div>
</section>
<section class="map">
  <div class="title">
    <h1>
      Работаем по всему<br/>
      Санкт-Петербургу и области
    </h1>
  </div>
  <div class="map-inner">
    <div id="map"></div>
    <div class="wrapper">
<!--      <div class="map-info">-->
<!--        <div class="img">-->
<!--          <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/office.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="office">-->
<!--          <div class="name">-->
<!--            Офис, склад:-->
<!--          </div>-->
<!--          <div class="address">-->
<!--            Санкт-Петербург,<br/>-->
<!--            ул. Моисеенко 22б-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="phone">-->
<!--          <a href="tel:--><?php //echo get_theme_mod('landing-setting-phone'); ?><!--">--><?php //echo get_theme_mod('landing-setting-phone'); ?><!--</a>-->
<!--        </div>-->
<!--      </div>-->
    </div>
  </div>
</section>
<div class="fade"></div>
  <div class="popup-form" id="zamer">
    <div class="popup-close"></div>
    <div class="form-inner form">
      <?php echo do_shortcode('[contact-form-7 id="49" title="Заявка на замер"]'); ?>
    </div>
  </div>
  <div class="popup-form" id="bonus">
    <div class="popup-close"></div>
    <div class="form-inner form">
      <?php echo do_shortcode('[contact-form-7 id="52" title="Заявка на подарок"]'); ?>
    </div>
  </div>
  <div class="popup-form" id="disc">
    <div class="popup-close"></div>
    <div class="form-inner form">
      <?php echo do_shortcode('[contact-form-7 id="53" title="Заявка на скидку"]'); ?>
    </div>
  </div>
  <div class="tab modal" id="tab">
    <div class="tab-row tab-row_header">
      <div class="tab-col tab-col-1"></div>
      <div class="tab-col tab-col-2 tab-col-2_fix">Натяжные потолки Erbau</div>
      <div class="tab-col tab-col-3">Натяжные потолки непровереннго производителя</div>
      <div class="tab-col tab-col-4">Потолки из гипсокартона</div>
      <div class="tab-col tab-col-5">Оштукатуренные потолки</div>
    </div>
    <!--tab-row-->
    <div class="tab-row">
      <div class="tab-col tab-col-1">
        Стоимость
      </div>
      <div class="tab-col tab-col-2">
        От 500 руб.
      </div>
      <div class="tab-col tab-col-3">
        От 250 руб.
      </div>
      <div class="tab-col tab-col-4">
        От 1200 руб.
      </div>
      <div class="tab-col tab-col-5">
        От 800 руб.
      </div>
    </div>
    <div class="tab-row">
      <div class="tab-col tab-col-1">
        Скорость выполнения (на одно помещение)
      </div>
      <div class="tab-col tab-col-2">
        3 часа
      </div>
      <div class="tab-col tab-col-3">
        3 часа
      </div>
      <div class="tab-col tab-col-4">
        1—3 дня
      </div>
      <div class="tab-col tab-col-5">
        1—2 дня
      </div>
    </div>
    <div class="tab-row">
      <div class="tab-col tab-col-1">
        Чистота
      </div>
      <div class="tab-col tab-col-2">
        Чистый монтаж: используем перфораторы с пылесборниками, пневмоинструмент. Стены и мебель можно не укрывать
      </div>
      <div class="tab-col tab-col-3">
        Работа с перфоратором без пылесборника, стены и мебель необходимо укрывать. По окончании требуется уборка помещений
      </div>
      <div class="tab-col tab-col-4">
        Необходимо укрывать мебель, защищать полы. После монтажа все равно остается много строительной пыли
      </div>
      <div class="tab-col tab-col-5">
        Необходимо укрывать мебель, защищать полы
      </div>
    </div>
    <div class="tab-row">
      <div class="tab-col tab-col-1">
        Безопасность монтажа
      </div>
      <div class="tab-col tab-col-2">
        Используем взрывобезопасные полимерно-композитные газовые баллоны нового образца. Тканевые потолки возможно устанавливать без применения тепловой пушки
      </div>
      <div class="tab-col tab-col-3">
        Техника безопасности соблюдается не всегда. Используются обычные бытовые газовые баллоны
      </div>
      <div class="tab-col tab-col-4">
        Требуется возведение строительных лесов
      </div>
      <div class="tab-col tab-col-5">
        Требуется возведение строительных лесов
      </div>
    </div>
    <div class="tab-row">
      <div class="tab-col tab-col-1">
        Экологичность
      </div>
      <div class="tab-col tab-col-2">
        Используем только первичные экологически чистые материалы, без запаха, без вторсырья
      </div>
      <div class="tab-col tab-col-3">
        Производство с добавлением вторсырья (переработанного пластика, бутылок). Полотно может иметь стойкий едкий запах
      </div>
      <div class="tab-col tab-col-4">
        Производство с добавлением формальдегида или фенола. Вдыхание способно привести к раздражению слизистых оболочек, возникновению аллергических реакций
      </div>
      <div class="tab-col tab-col-5">
        Штукатурка не подлежит обязательной сертификации, есть только условная градация безопасности (А+, А, B, C)
      </div>
    </div>
    <div class="tab-row">
      <div class="tab-col tab-col-1">
        Уход
      </div>
      <div class="tab-col tab-col-2">
        Дополнительный уход не требуется. Материал антистатичен, при необходимости легко моется
      </div>
      <div class="tab-col tab-col-3">
        Материал слишком тонкий, возможен разрыв пленки при использовании моющих средств
      </div>
      <div class="tab-col tab-col-4">
        Периодически требуется подштукатурить, подкрасить. Других видов убрать грязь нету
      </div>
      <div class="tab-col tab-col-5">
        Периодически требуется подштукатурить, подкрасить. Других видов убрать грязь нету. Со временем штукатурка выцветает, шелушится
      </div>
    </div>
    <div class="tab-row">
      <div class="tab-col tab-col-1">
        Если соседи залили
      </div>
      <div class="tab-col tab-col-2">
        Полотно выдерживает давление до 150 кг/м², гарпунная система надежно удерживает края. Воду просто сливают, полотно сушат и возвращают в начальное состояние
      </div>
      <div class="tab-col tab-col-3">
        Полотно не выдерживает и 25 л воды на 1 м²
      </div>
      <div class="tab-col tab-col-4">
        Материал гигроскопичен, при высыхании может провиснуть. Возможно, придется вскрывать, сушить и заменять покрытие. В лучшем случае достаточно перешпаклевать и перекрасить
      </div>
      <div class="tab-col tab-col-5">
        Все нужно переделывать заново
      </div>
    </div>
    <div class="tab-row">
      <div class="tab-col tab-col-1">
        Направляющие, подготовка поверхности
      </div>
      <div class="tab-col tab-col-2">
        Выравнивание стен и перекрытия не требуется. Стеновые профили — алюминиевые или из белого пластика (без вторсырья), только по периметру помещения. Также используем уникальный бесщелевой профиль
      </div>
      <div class="tab-col tab-col-3">
        Выравнивание стен и перекрытия не требуется. Стеновые профили —из серого пластика (с добавлением вторсырья), только по периметру помещения
      </div>
      <div class="tab-col tab-col-4">
        Требуется выравнивание стен, выравнивание перекрытия не требуется. Несущий каркас — целая система алюминиевых профилей, направляющих и креплений
      </div>
      <div class="tab-col tab-col-5">
        Зачастую необходимо выравнивание потолка. Направляющие не требуются
      </div>
    </div>
    <div class="tab-row">
      <div class="tab-col tab-col-1">
        Электропроводка
      </div>
      <div class="tab-col tab-col-2">
        Перекрытие не нужно штробить. Для потолочных светильников делаются закладные
      </div>
      <div class="tab-col tab-col-3">
        Перекрытие не нужно штробить. Для потолочных светильников делаются закладные
      </div>
      <div class="tab-col tab-col-4">
        Перекрытие не нужно штробить, закладные для потолочных светильников не требуются
      </div>
      <div class="tab-col tab-col-5">
        Необходимо делать штробы для прокладки кабеля, светильники — только внешние
      </div>
    </div>
    <div class="tab-row">
      <div class="tab-col tab-col-1">
        Дизайн
      </div>
      <div class="tab-col tab-col-2">
        Широкий выбор фактур и оттенков поверхности. Возможны любые конструкции. Фотопечать. Галтели не нужны
      </div>
      <div class="tab-col tab-col-3">
        Цветовых решений мало, фотопечать не качественная. Галтели не нужны
      </div>
      <div class="tab-col tab-col-4">
        Возможны практически любые конструкции. Фотопечать не сделать. Нужны галтели
      </div>
      <div class="tab-col tab-col-5">
        Возможна только роспись. Галтели нужны не всегда
      </div>
    </div>
    <div class="tab-row tab-row_bottom">
      <div class="tab-col tab-col-1">
        Срок службы
      </div>
      <div class="tab-col tab-col-2 tab-col-2_bt">
        Более 15 лет
      </div>
      <div class="tab-col tab-col-3">
        До 2 лет
      </div>
      <div class="tab-col tab-col-4">
        5—7 лет
      </div>
      <div class="tab-col tab-col-5">
        3—5 лет
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>