$(document).ready(function () {
  $('.popup-form form').prepend('<div class="popup-close"></div>');
  function toPopup() {
    $('.to-popup').click(function(event){
      var form_name = $(this).attr('href');
      $('.fade').show().css({'z-index': '5'});
      $(form_name).show();
      $(form_name).css({'top': $(window).scrollTop()+50, 'z-index': '6'});
      event.preventDefault();
    });
    $('.popup-close, .fade').click(function (event) {
      $('.popups, .popup, .fade, .popup-form').hide().removeAttr('style');
      event.preventDefault();
    })
  }
  toPopup();
  function toModal() {
    $('.to-modal').click(function(event){
      var form_name = $(this).attr('href');
      $('.fade').show().css({'z-index': '5'});
      $('#vp').attr('content','width=1170');
      $(form_name).show();
      $(form_name).css({'top': $(window).scrollTop()+50, 'z-index': '6'});
      event.preventDefault();
    });
    $('.fade').click(function (event) {
      $('.fade, #tab').hide().removeAttr('style');
      if (screen.width <= 736) {
        $('#vp').attr('content', 'width=630');
      }
      event.preventDefault();
    })
  }
  toModal();
  $('header .m-button').click(function(){
    $('html, body').animate({ scrollTop: $('.bonus').offset().top }, 500);
    return false;
  })
  $('.calc .range-bar').slider({
    range: "min",
    min: 1,
    max: 50,
    value: 15,
    slide: function( event, ui ) {
      $('.calc .val').text( ui.value );
      $('.calc-price-val1 span').text(ui.value*549);
      $('.calc-price-val2 span').text(ui.value*671);
    }
  });
  $('.form-time').click(function () {
    $(this).animate({
      opacity: 0,
      height: 0
    }, 500, function () {
      $(this).css({
        'display': 'none'
      })
      $(this).siblings('.hidden').css({
        'display': 'block',
        'height': '0'
      })
      $(this).siblings('.hidden').animate({
        'height': '84'
      }, 500)
    });
  })

  function setPhoto(){
    $(".services-images").each(function(indx, element){
      var img = $(element).find('.img-list a');
      $(element).find('.img-big img').attr('src', img.first().attr('href'));
      // $(".lazy").lazyload({
      //   effect: "fadeIn",
      //   threshold: 200
      // });
      img.click(function () {
        $(element).find('.img-big img').attr('src', $(this).attr('href'));
        return false;
      })
    });
  }
  function setGallery() {
    var owl = $('.factory .slider-inner');
    var owl1 = $('.gift .slider-inner');
    var owl2 = $('.services .slider-inner');
    var owl3 = $('.services .img-list');
    owl.owlCarousel({
      items:3,
      loop: true,
      center:true,
      autoWidth:true,
      mouseDrag: false,
      touchDrag: false,
      pullDrag: false,
      margin: 180,
      responsive: {
        0: {
          items: 1,
          center:true,
        }
      }
    });
    $('.factory .right').click(function() {
      owl.trigger('next.owl.carousel', [300]);
      return false;
    })
    $('.factory .left').click(function() {
      owl.trigger('prev.owl.carousel', [300]);
      return false;
    })
    owl1.owlCarousel({
      items:1,
      loop: true,
      center:true,
      autoWidth:true,
      mouseDrag: false,
      touchDrag: false,
      pullDrag: false,
      margin: 100,
      responsive: {
        0: {
          items: 1,
          center:true,
        }
      }
    });
    $('.gift .right').click(function() {
      owl1.trigger('next.owl.carousel', [300]);
      return false;
    })
    $('.gift .left').click(function() {
      owl1.trigger('prev.owl.carousel', [300]);
      return false;
    })
    owl2.owlCarousel({
      items:1,
      loop: true,
      center:true,
      autoWidth:true,
      mouseDrag: false,
      touchDrag: false,
      pullDrag: false,
      margin: 100,
      responsive: {
        0: {
          items: 1,
          center:true,
        }
      }
    });
    $('.services .next').click(function() {
      owl2.trigger('next.owl.carousel', [300]);
      return false;
    })
    $('.services .prev').click(function() {
      owl2.trigger('prev.owl.carousel', [300]);
      return false;
    })
    owl3.owlCarousel({
      items:6,
      loop: false,
      margin: 18,
      onInitialized: callback
    });
    function callback(event) {
      setPhoto();
    }
  }
  document.addEventListener( 'wpcf7submit', function( event ) {
    console.log('s3562')
    try{
      yaCounter48905579.reachGoal('order');
    }catch(e){

    }
  }, false );

  setGallery();
  $('input[type=tel]').mask('+7 (000) 000-00-00')
    .on('focus', function(e) {
      var p = $(this);
      p.attr('placeholder', '+7 (___) ___-__-__');
    })
    .on('blur', function(e) {
      var p = $(this);
      p.attr('placeholder', 'Контактный телефон');
    });
  ymaps.ready(init);
  var myMap;

  function init(){
    myMap = new ymaps.Map("map", {
      center: [ 59.939095, 30.735868],
      zoom: 8,
      controls: ['zoomControl']
    });
    // myMap.geoObjects.events
    //   .add('balloonopen', function (e) {
    //     $('.map-info').hide();
    //   })
    myMap.behaviors.disable('scrollZoom');

    var mainOffice = new ymaps.Placemark([ 59.939095, 30.315868 ],
      {hintContent:'<strong>Потолки Erbau в СПб</strong><div class="balloon__info">Бесплатный выезд менеджера на дом, в течении дня, после обращения. </div>',
        balloonContent:'2',
        balloonContentBody:' <div class="map-info"><div class="img"><img src="wp-content/themes/erbau/assets/images/office.jpg" alt=""></div><div class="office"><div class="name">Офис, склад:</div><div class="address">Санкт-Петербург,<br/>ул. Моисеенко 22б</div></div><div class="phone"><a href="tel:+812-922-11-25">922-11-25</a></div></div>',
        balloonContentFooter:''});

    office = new ymaps.GeoObjectCollection(null, {
      iconLayout: 'default#image',
      // iconImageHref: 'assets/template/img/pin.svg',
      // iconImageSize: [43, 37]
    }),
      office.add(mainOffice);
    office.add(new ymaps.Placemark([ 59.903961, 29.769664 ],
      {hintContent:'<strong>Потолки Erbau в Ломоносове</strong><div class="balloon__info">Бесплатный выезд менеджера на дом, в течении дня, после обращения. </div>',
        balloonContent:'2',
        balloonContentBody:'<div class="balloon"><div class="balloon__title">Потолки Erbau в Ломоносове</div><div class="balloon__office">Мобильный офис продаж</div><a href="tel:+78129221125" class="balloon__phone">+7 (812) 922-11-25 <span>доб. 101</span></a><div class="balloon__time">ежедневно с 9:00 &mdash; 21:00</div><div class="balloon__info">Бесплатный выезд менеджера на дом, в течении дня, после обращения. </div></div>',
        balloonContentFooter:''}));
    office.add(new ymaps.Placemark([ 59.871943, 29.913262 ],
      {hintContent:'<strong>Потолки Erbau в Петергофе</strong><div class="balloon__info">Бесплатный выезд менеджера на дом, в течении дня, после обращения. </div>',
        balloonContent:'2',
        balloonContentBody:'<div class="balloon"><div class="balloon__title">Потолки Erbau в Петергофе</div><div class="balloon__office">Мобильный офис продаж</div><a href="tel:+78129221125" class="balloon__phone">+7 (812) 922-11-25 <span>доб. 102</span></a><div class="balloon__time">ежедневно с 9:00 &mdash; 21:00</div><div class="balloon__info">Бесплатный выезд менеджера на дом, в течении дня, после обращения. </div></div>',
        balloonContentFooter:''}));
    office.add(new ymaps.Placemark([ 59.734303, 30.080697 ],
      {hintContent:'<strong>Потолки Erbau в Красном Селе</strong><div class="balloon__info">Бесплатный выезд менеджера на дом, в течении дня, после обращения. </div>',
        balloonContent:'2',
        balloonContentBody:'<div class="balloon"><div class="balloon__title">Потолки Erbau в Красном Селе</div><div class="balloon__office">Мобильный офис продаж</div><a href="tel:+78129221125" class="balloon__phone">+7 (812) 922-11-25 <span>доб. 103</span></a><div class="balloon__time">ежедневно с 9:00 &mdash; 21:00</div><div class="balloon__info">Бесплатный выезд менеджера на дом, в течении дня, после обращения. </div></div>',
        balloonContentFooter:''}));
    office.add(new ymaps.Placemark([ 59.726843, 30.406775 ],
      {hintContent:'<strong>Потолки Erbau в Пушкине</strong><div class="balloon__info">Бесплатный выезд менеджера на дом, в течении дня, после обращения. </div>',
        balloonContent:'2',
        balloonContentBody:'<div class="balloon"><div class="balloon__title">Потолки Erbau в Пушкине</div><div class="balloon__office">Мобильный офис продаж</div><a href="tel:+78129221125" class="balloon__phone">+7 (812) 922-11-25 <span>доб. 104</span></a><div class="balloon__time">ежедневно с 9:00 &mdash; 21:00</div><div class="balloon__info">Бесплатный выезд менеджера на дом, в течении дня, после обращения. </div></div>',
        balloonContentFooter:''}));
    office.add(new ymaps.Placemark([  59.555325, 30.132177 ],
      {hintContent:'<strong>Потолки Erbau в Гатчине</strong><div class="balloon__info">Бесплатный выезд менеджера на дом, в течении дня, после обращения. </div>',
        balloonContent:'2',
        balloonContentBody:'<div class="balloon"><div class="balloon__title">Потолки Erbau в Гатчине</div><div class="balloon__office">Мобильный офис продаж</div><a href="tel:+78129221125" class="balloon__phone">+7 (812) 922-11-25 <span>доб. 105</span></a><div class="balloon__time">ежедневно с 9:00 &mdash; 21:00</div><div class="balloon__info">Бесплатный выезд менеджера на дом, в течении дня, после обращения. </div></div>',
        balloonContentFooter:''}));
    office.add(new ymaps.Placemark([ 59.546504, 30.859515 ],
      {hintContent:'<strong>Потолки Erbau в Тосно</strong><div class="balloon__info">Бесплатный выезд менеджера на дом, в течении дня, после обращения. </div>',
        balloonContent:'2',
        balloonContentBody:'<div class="balloon"><div class="balloon__title">Потолки Erbau в Тосно</div><div class="balloon__office">Мобильный офис продаж</div><a href="tel:+78129221125" class="balloon__phone">+7 (812) 922-11-25 <span>доб. 106</span></a><div class="balloon__time">ежедневно с 9:00 &mdash; 21:00</div><div class="balloon__info">Бесплатный выезд менеджера на дом, в течении дня, после обращения. </div></div>',
        balloonContentFooter:''}));
    office.add(new ymaps.Placemark([ 60.015647, 30.647486 ],
      {hintContent:'<strong>Потолки Erbau в Всеволожске</strong><div class="balloon__info">Бесплатный выезд менеджера на дом, в течении дня, после обращения. </div>',
        balloonContent:'2',
        balloonContentBody:'<div class="balloon"><div class="balloon__title">Потолки Erbau в Всеволожске</div><div class="balloon__office">Мобильный офис продаж</div><a href="tel:+78129221125" class="balloon__phone">+7 (812) 922-11-25 <span>доб. 107</span></a><div class="balloon__time">ежедневно с 9:00 &mdash; 21:00</div><div class="balloon__info">Бесплатный выезд менеджера на дом, в течении дня, после обращения. </div></div>',
        balloonContentFooter:''}));
    office.add(new ymaps.Placemark([  60.164642, 30.541717 ],
      {hintContent:'<strong>Потолки Erbau в Токсово</strong><div class="balloon__info">Бесплатный выезд менеджера на дом, в течении дня, после обращения. </div>',
        balloonContent:'2',
        balloonContentBody:'<div class="balloon"><div class="balloon__title">Потолки Erbau в Токсово</div><div class="balloon__office">Мобильный офис продаж</div><a href="tel:+78129221125" class="balloon__phone">+7 (812) 922-11-25 <span>доб. 108</span></a><div class="balloon__time">ежедневно с 9:00 &mdash; 21:00</div><div class="balloon__info">Бесплатный выезд менеджера на дом, в течении дня, после обращения. </div></div>',
        balloonContentFooter:''}));
    office.add(new ymaps.Placemark([ 60.122855, 30.163463 ],
      {hintContent:'<strong>Потолки Erbau в Курортном районе</strong><div class="balloon__info">Бесплатный выезд менеджера на дом, в течении дня, после обращения. </div>',
        balloonContent:'2',
        balloonContentBody:'<div class="balloon"><div class="balloon__title">Потолки Erbau в Курортном районе</div><div class="balloon__office">Мобильный офис продаж</div><a href="tel:+78129221125" class="balloon__phone">+7 (812) 922-11-25 <span>доб. 109</span></a><div class="balloon__time">ежедневно с 9:00 &mdash; 21:00</div><div class="balloon__info">Бесплатный выезд менеджера на дом, в течении дня, после обращения. </div></div>',
        balloonContentFooter:''}));
    office.add(new ymaps.Placemark([ 59.758649, 30.609042 ],
      {hintContent:'<strong>Потолки Erbau в Колпино</strong><div class="balloon__info">Бесплатный выезд менеджера на дом, в течении дня, после обращения. </div>',
        balloonContent:'2',
        balloonContentBody:'<div class="balloon"><div class="balloon__title">Потолки Erbau в Колпино</div><div class="balloon__office">Мобильный офис продаж</div><a href="tel:+78129221125" class="balloon__phone">+7 (812) 922-11-25 <span>доб. 110</span></a><div class="balloon__time">ежедневно с 9:00 &mdash; 21:00</div><div class="balloon__info">Бесплатный выезд менеджера на дом, в течении дня, после обращения. </div></div>',
        balloonContentFooter:''}));


    myMap.geoObjects.add(office);
    mainOffice.balloon.open();
  }
})