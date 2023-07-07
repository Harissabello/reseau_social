<script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 11,
        spaceBetween: 2,
        slidesPerGroup: 11,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
</script>