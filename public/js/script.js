var swiper = new Swiper(".card-slider", {
    slidesPerView: 3,
    spaceBetween: 25,
    centerSlide: true,
    fade: true,
    loop: true,
    grabCursor: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    breakpoints: {
      0: {
          slidesPerView: 1,
      },
      528: {
          slidesPerView: 2,
      },
      950: {
          slidesPerView: 3,
      }
    }
});


