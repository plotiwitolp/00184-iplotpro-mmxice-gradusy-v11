(function ($) {
  $(document).ready(function () {
    // главный слайдер
    const heroSlider = new Swiper('.hero__slider', {
      fadeEffect: { crossFade: true },
      virtualTranslate: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: true,
      },
      speed: 500,
      slidesPerView: 1,
      effect: 'fade',
      loop: true,
      navigation: {
        nextEl: '.hero__slider_nav-next',
        prevEl: '.hero__slider_nav-prev',
      },
      pagination: {
        el: '.hero__slider_pag_el',
        type: 'bullets',
        bulletClass: 'hero__slider_pag_el_item',
        bulletActiveClass: 'active',
        clickable: true,
      },
    });

    // слайдер "Подробнее о клинике"
    // const aboutBodySlider = new Swiper('.about__body_slider_el', {
    //   slidesPerView: 1.1,
    //   spaceBetween: 15,
    //   breakpoints: {
    //     768: { spaceBetween: 25 },
    //   },
    // });

    // слайдер "услуги"
    // const servBodySlider = new Swiper('.serv__body_slider', {
    //   slidesPerView: 1,
    //   spaceBetween: 15,
    //   scrollbar: {
    //     el: '.serv__body_slider_scrollbar_el',
    //     draggable: true,
    //   },
    //   breakpoints: {
    //     1200: { slidesPerView: 4, spaceBetween: 20 },
    //     768: { slidesPerView: 3, spaceBetween: 20 },
    //   },
    // });

    // слайдер "аппараты"
    const clientBodySlider = new Swiper('.client__body_slider', {
      slidesPerView: 1.1,
      spaceBetween: 20,
      breakpoints: {
        1000: { spaceBetween: 20, slidesPerView: 3.1 },
        620: { spaceBetween: 10, slidesPerView: 2.1 },
      },
    });

    // слайдер "онлайн бутик"
    const onlineBodySlider = new Swiper('.online__body_slider', {
      slidesPerView: 1.1,
      spaceBetween: 15,
      breakpoints: {
        1200: { spaceBetween: 20, slidesPerView: 4.1 },
        768: { spaceBetween: 20, slidesPerView: 3.1 },
      },
    });

    // слайдер "наша команда"
    // const aboutPageTeamSlider = new Swiper('.about-page__team_slider', {
    //   slidesPerView: 1,
    //   spaceBetween: 15,
    //   breakpoints: {
    //     1000: { spaceBetween: 10, slidesPerView: 6 },
    //     768: { slidesPerView: 4, spaceBetween: 10 },
    //     620: { slidesPerView: 2, spaceBetween: 10 },
    //   },
    // });

    // слайдер "атмосфера"
    const aboutPageAtmSlider = new Swiper('.about-page__atm_slider', {
      slidesPerView: 1.1,
      spaceBetween: 5,
      breakpoints: {
        1000: { spaceBetween: 10, slidesPerView: 3.1 },
        768: { spaceBetween: 8, slidesPerView: 2.1 },
        620: { spaceBetween: 5, slidesPerView: 2.1 },
      },
    });

    // верхнее меню
    $('.header__burger').on('click', function () {
      $('.header__burger').toggleClass('active');
      $('.menu').toggleClass('active');
    });

    // подменю верхнего меню
    $('.menu__part_item_arrow').on('click', function () {
      $(this).toggleClass('active');
      $(this).next().slideToggle('700');
    });

    // слайдер на главной "проблемы и решения"
    const problemSolutionBodySlider = new Swiper('.problem-solution__body_slider', {
      speed: 500,
      slidesPerView: 1.1,
      spaceBetween: 10,
      loop: false,
      breakpoints: {
        1250: { spaceBetween: 20, slidesPerView: 4.1 },
        1000: { spaceBetween: 20, slidesPerView: 3.1 },
        768: { spaceBetween: 15, slidesPerView: 2.1 },
        620: { spaceBetween: 10, slidesPerView: 1.1 },
      },
    });

    // start внутри услуги (item)
    const servicesTeamBodySlider = new Swiper('.services-team__body_slider', {
      slidesPerView: 1.1,
      spaceBetween: 15,
      breakpoints: {
        1000: { slidesPerView: 3.1, spaceBetween: 10 },
        768: { slidesPerView: 2.1, spaceBetween: 10 },
        620: { slidesPerView: 1.1, spaceBetween: 10 },
      },
    });
    // end внутри услуги (item)

    // start галлерея "до после"
    $('[data-fancybox]').fancybox();
    // end галлерея "до после"

    // start внутри услуги (item)
    let advantagesSwiper = null;
    function initAdvantagesSwiper() {
      if (window.innerWidth < 768) {
        if (advantagesSwiper === null) {
          advantagesSwiper = new Swiper('.advantages__swiper', {
            slidesPerView: 1.1,
            spaceBetween: 15,
            breakpoints: {
              1000: { slidesPerView: 5.1, spaceBetween: 10 },
              768: { slidesPerView: 4.1, spaceBetween: 10 },
              620: { slidesPerView: 2.1, spaceBetween: 10 },
            },
          });
        }
      } else if (advantagesSwiper !== null) {
        advantagesSwiper.destroy();
        advantagesSwiper = null;
      }
    }
    initAdvantagesSwiper();
    window.addEventListener('resize', initAdvantagesSwiper);
    // end внутри услуги (item)

    // start
    const specLicenzSlider = new Swiper('.spec-licenz__slider', {
      speed: 500,
      slidesPerView: 1.1,
      spaceBetween: 10,
      loop: false,
      breakpoints: {
        1000: { spaceBetween: 20, slidesPerView: 3.1 },
        768: { spaceBetween: 15, slidesPerView: 2.1 },
        620: { spaceBetween: 10, slidesPerView: 1.1 },
      },
    });
    // end

    // start popup общий
    function popupActive() {
      $('html').addClass('popup-active');
      $('.popup-layer').addClass('active');
      $('.popup-inner').addClass('active');
    }
    function popupDeactivate() {
      $('html').removeClass('popup-active');
      $('.popup-layer').removeClass('active');
      $('.popup-inner').removeClass('active');
    }
    $('.popup-layer').on('click', function () {
      popupDeactivate();
    });
    $('.popup-sign-up__close').on('click', function () {
      popupDeactivate();
    });
    // end popup общий

    // START popup записаться к специалисту
    $('.spec-btn-wrap__zapis, .zapisatsya_na_vizit').on('click', function () {
      popupActive();
    });

    // start эмуляция отправки письма
    $('.feedback-form__item-submit').on('click', function () {
      $('.feedback-form__message').addClass('active');
      setTimeout(function () {
        $('.feedback-form__message').removeClass('active');
        popupDeactivate();
      }, 5000);

      let timer = 5;

      let popupTimer = setInterval(function () {
        if (timer > 0) {
          timer--;
          $('.popup_timer').text(timer);
        } else {
          clearInterval(popupTimer);
          $('.popup_timer').text(5);
        }
      }, 1000);
    });
    // end эмуляция отправки письма
    // END popup записаться к специалисту

    // start FAQ
    $('.faq__list-head').on('click', function () {
      $(this).next('.faq__list-body').slideToggle();
      $(this).find('.faq__list-arrow').toggleClass('active');
    });
    // end FAQ

    // start открытые пункты меню по умолчанию
    // function toggleClassOnResize() {
    //   var $myDiv = $('#myDiv');

    //   if ($(window).width() < 748) {
    //     $myDiv.addClass('responsive-class');
    //   } else {
    //     $myDiv.removeClass('responsive-class');
    //   }
    // }
    // toggleClassOnResize();
    // $(window).on('resize', toggleClassOnResize);
    // end открытые пункты меню по умолчанию

    // start скачать pdf
    // let specialElementHandler = {
    //   '#editor': function (element, renderer) {
    //     return true;
    //   },
    // };

    // window.jsPDF = window.jspdf.jsPDF;
    // $('.services-price__action_btn').on('click', function () {
    //   let pdf = new jsPDF();
    //   pdf.html($('.price-page__for-pdf').html(), {
    //     callback: function (pdf) {
    //       pdf.save('prices_gradusy_clinic_ru.pdf');
    //     },
    //     x: 15,
    //     y: 15,
    //     width: 170,
    //     elementHandlers: specialElementHandler,
    //   });
    // });
    // end скачать pdf
  });
})(jQuery);
