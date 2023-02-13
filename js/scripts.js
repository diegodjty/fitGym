function gymWordpress() {
  if (document.querySelector('.swiper')) {
    const options = {
      loop: true,
      autoplay: {
        delay: 3000,
      },
    };
    new Swiper('.swiper', options);
  }
}

document.addEventListener('DOMContentLoaded', gymWordpress);
