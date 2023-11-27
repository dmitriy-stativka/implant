document.addEventListener('DOMContentLoaded', function(){
  const select = document.querySelectorAll(".select"); // select-box
  const mobileBurgers = document.querySelectorAll('.mobile-burger'); // burger-button
  const headerItem = document.querySelector('.header__item'); // mobile-menu
  const body = document.body; // body
  const width = document.documentElement.clientWidth;
  const reviewModal = document.querySelector('[data-modal="review"]');
  const questionsModal = document.querySelector('[data-modal="questions"]');
  const reviewBtn = document.querySelector('[data-btn="reviews"]');
  const questionsBtn = document.querySelector('[data-btn="questions"]');
  const overlay = document.querySelector('.overlay');
  const modal = document.querySelector('.modal');

  const replaceSlider = document.querySelector('.replace-slider');
  const newSliderParent = document.querySelector('.new-slider-parent');
  const oldSliderParent = document.querySelector('.services-third__box');

 

  const galleryItems = document.querySelectorAll(".sub-tabs");
  const galleryDocrorsItems = document.querySelectorAll(".single-doctor__slider .swiper-wrapper");

  if (galleryItems) {
    for (const galleryItem of galleryItems) {
      lightGallery(galleryItem, {
        download: false,
      });
    }
  }

  if (galleryDocrorsItems) {
    for (const galleryDocrorsItem of galleryDocrorsItems) {
      lightGallery(galleryDocrorsItem, {
        download: false,
      });
    }
  }


  if (reviewBtn) {
    reviewBtn.addEventListener('click', function() {
      overlay.classList.add('active');
      reviewModal.classList.add('active');
    });
  }

  if (questionsBtn) {
    questionsBtn.addEventListener('click', function() {
      overlay.classList.add('active');
      questionsModal.classList.add('active');
    });
  }

  if (overlay) {
    overlay.addEventListener('click', function(e) {
      e.stopPropagation();
      let curentTargetWrapper = document.querySelector('.modals-wrapper')
      if (event.target === curentTargetWrapper) {
        overlay.classList.remove('active');
        questionsModal.classList.remove('active');
        reviewModal.classList.remove('active');
      }
    })
  }

  for (const mobileBurger of mobileBurgers) {
    mobileBurger.addEventListener('click', function(){
      mobileBurger.classList.toggle('active');
      headerItem.classList.toggle('active');
      body.classList.toggle('fixed');
    });
  }


  let serviceSlider = new Swiper(".service-slider", {
    spaceBetween: 34,
    slidesPerView: 3,
    breakpointsInverse: true,
    loop: false,
    navigation: {
      nextEl: ".service-next",
      prevEl: ".service-prev",
    },
    breakpoints: {
      320: {
        slidesPerView: 'auto',
        spaceBetween: 10,
      },
      576: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 15,
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 34,
      }
    }
  });


  let medicSlider = new Swiper(".medic-slider", {
    spaceBetween: 60,
    slidesPerView: 3,
    // autoHeight: true,
    loop: true,
    navigation: {
      nextEl: ".medic-next",
      prevEl: ".medic-prev",
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 50,
        centeredSlides: true,
      },
      576: {
        slidesPerView: 'auto',
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1240: {
        slidesPerView: 3,
        spaceBetween: 20,
      }
    }
  });

  let aboutSlider = new Swiper(".about-slider", {
    spaceBetween: 22,
    slidesPerView: 'auto',
    
    observer: true,
    loop: true,
    navigation: {
      nextEl: ".about-next",
      prevEl: ".about-prev",
    },
    breakpoints: {
      320: {
        slidesPerView: 'auto',
        spaceBetween: 10,
        centeredSlides: true,
      },
      576: {
        slidesPerView: 'auto',
        spaceBetween: 20,
      },
      992: {
        slidesPerView: 'auto',
        spaceBetween: 22,
      }
    }

  });

  if (select.length) {
    select.forEach((item) => {
      const selectCurrent = item.querySelector(".select__current");
      item.addEventListener("click", (event) => {
        const el = event.target.dataset.choice;
        const text = event.target.innerText;
        if (el === "choosen" && selectCurrent.innerText !== text) {
          selectCurrent.innerText = text;
        }
        item.classList.toggle("is-active");
      });
    });
  }

  var tabNavs = document.querySelectorAll("[data-tab]");
  var tabPanes = document.querySelectorAll("[data-tab-content]");

  for (var i = 0; i < tabNavs.length; i++) {
    tabNavs[i].addEventListener("click", function(e){
      e.preventDefault();
      var activeTabAttr = e.target.getAttribute("data-tab");
      for (var j = 0; j < tabNavs.length; j++) {
        var contentAttr = tabPanes[j].getAttribute("data-tab-content");
        if (activeTabAttr === contentAttr) {
          tabNavs[j].classList.add("active");
          tabPanes[j].classList.add("active");
        } else {
          tabNavs[j].classList.remove("active");
          tabPanes[j].classList.remove("active");
        }
      };
    });
  }

  window.addEventListener("DOMContentLoaded", function() {
    [].forEach.call( document.querySelectorAll('[type="tel"]'), function(input) {
    var keyCode;
    function mask(event) {
        event.keyCode && (keyCode = event.keyCode);
        var pos = this.selectionStart;
        if (pos < 3) event.preventDefault();
        var matrix = "+38 (___) ___-__-__",
            i = 0,
            def = matrix.replace(/\D/g, ""),
            val = this.value.replace(/\D/g, ""),
            new_value = matrix.replace(/[_\d]/g, function(a) {
                return i < val.length ? val.charAt(i++) || def.charAt(i) : a
            });
        i = new_value.indexOf("_");
        if (i != -1) {
            i < 5 && (i = 3);
            new_value = new_value.slice(0, i)
        }
        var reg = matrix.substr(0, this.value.length).replace(/_+/g,
            function(a) {
                return "\\d{1," + a.length + "}"
            }).replace(/[+()]/g, "\\$&");
        reg = new RegExp("^" + reg + "$");
        if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
        if (event.type == "blur" && this.value.length < 5)  this.value = ""
    }

    input.addEventListener("input", mask, false);
    input.addEventListener("focus", mask, false);
    input.addEventListener("blur", mask, false);
    input.addEventListener("keydown", mask, false)
    });
  });
});


$(document).ready(function() {
  $('.first-sec__link').click(function() {
      // Найдем текущую секцию
      var currentSection = $(this).closest('section');
      
      // Найдем следующую секцию
      var nextSection = currentSection.next('section');
      
      // Если следующая секция существует, выполним прокрутку
      if (nextSection.length > 0) {
          $('html, body').animate({
              scrollTop: nextSection.offset().top
          }, 1000); // 1000 миллисекунд (1 секунда) для плавной прокрутки
      }
  });
});


let doctorSlider = new Swiper(".single-doctor__slider .swiper-container", {
		loop: true,
    spaceBetween: 0,
		centeredSlides: true,
		slidesPerView: 3,
    lazyLoading: true,
    lazyLoadingInPrevNext: true,
    speed: 1000,   
    additionalSlide: 1,

  // coverflow: {
  //   rotate: 0,
  //   stretch: 150,
  //   depth: 200,
  //   modifier: 1,
  //   slideShadows : false,
  // }
  // loop: true,
  navigation: {
    nextEl: document.querySelector('.single-doctor__next'),
    prevEl: document.querySelector('.single-doctor__prev'),
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 10,
      centeredSlides: true,
    },
    1024: {
      slidesPerView: 3,
    }
  }
});




$(".services-single-first__title:first").addClass("active");
$(".services-single-first__sub-list:first").slideDown(400);

$(".services-single-first__title").on("click", function(e) {

  e.preventDefault();
  var $this = $(this);

  if (!$this.hasClass("active")) {
    $(".services-single-first__sub-list").slideUp(400);
  }

  $this.toggleClass("active");
  $this.next().slideToggle();




});



$(document).ready(function() {
  // Добавляем кнопку к каждому элементу списка с подменю
  $(".nav__item:has(.sub-menu)").append("<button class='sub-menu-toggle'>+</button>");

  // Обработчик клика по кнопке для открытия/закрытия подменю
  $(".sub-menu-toggle").on("click", function() {
      var $subMenu = $(this).siblings(".sub-menu");
      $(this).parent().toggleClass('active');
      $subMenu.slideToggle();
  });
});

