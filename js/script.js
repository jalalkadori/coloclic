// JavaScript for Swiper Initialization
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1, // Number of slides to show at a time
    spaceBetween: 20, // Space between slides (in pixels)
    navigation: {
      nextEl: '.swiper-button-next', // Next button selector
      prevEl: '.swiper-button-prev', // Previous button selector
    },
    pagination: {
      el: '.swiper-pagination', // Pagination dots selector
      clickable: true, // Allow clicking on pagination dots to navigate
    },
  });