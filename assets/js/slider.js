export function doSlider(){
  const swiper = new Swiper(".mySwiper", {
      loop: true,
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
      breakpoints:{
         320: {
      slidesPerView: 2,
      spaceBetween: 10
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 3,
      spaceBetween: 10
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 4,
      spaceBetween: 10
    }
      },
    });
    const swiper2 = new Swiper(".mySwiper2", {
      loop: true,
      spaceBetween: 10,
       navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
      },
      thumbs: {
        swiper: swiper,
      },
    });
    const swiperRino = new Swiper(".rinoSwiper",{
      loop: true,
      spaceBetween: 10,
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
      }
    })
    const swiperRinoBig = new Swiper(".rinoSwiperBig",{
      loop: true,
      spaceBetween: 10,
      breakpoints:{
         0: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    // when window width is >= 480px
   576: {
      slidesPerView: 2,
      spaceBetween: 10
    },
    // when window width is >= 640px
    768: {
      slidesPerView: 3,
      spaceBetween: 10
    },
    1500: {
      slidesPerView: 4,
      spaceBetween: 10
    }
      },
      // freeMode: true,
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
      }
    })
}