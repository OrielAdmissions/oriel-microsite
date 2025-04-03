import Swiper from 'swiper';
import { Autoplay, Navigation, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import { gsap } from 'gsap';

Swiper.use([Navigation, Pagination, Autoplay]);

export function initStorySwiper() {
  const swiperElement = document.querySelector('.story-swiper');
  if (!swiperElement) return;

  // Grab the container and the individual text elements.
  const textContainer = document.querySelector('.text-container');
  const storyText = document.querySelector('#storyText');
  const institutionText = document.querySelector('#institutionText');
  const roleText = document.querySelector('#roleText');

  const swiper = new Swiper(swiperElement, {
    slidesPerView: 1,
    effect: 'creative',
    loop: true,
    speed: 500,
    autoplay: { delay: 5000 },
    creativeEffect: {
      prev: { shadow: true, translate: ['-20%', 0, -1] },
      next: { translate: ['100%', 0, 0] },
    },
    navigation: {
      nextEl: '.swiper-3-btn-next',
      prevEl: '.swiper-3-btn-prev',
    },
    pagination: {
      el: '.swiper-pagination-3',
      type: 'progressbar',
    },
    on: {
      slideChangeTransitionStart: function () {
        let activeSlide = this.slides[this.realIndex];
        let newStory = activeSlide.getAttribute('data-story');
        let newInstitution = activeSlide.getAttribute('data-institution');
        let newRole = activeSlide.getAttribute('data-role');

        if (textContainer && newStory && newInstitution && newRole) {
          gsap.to(textContainer, {
            opacity: 0,
            y: 20,
            duration: 0.3,
            onComplete: () => {
              // Update only the text contents, leaving the SVGs untouched.
              storyText.textContent = newStory;
              institutionText.textContent = newInstitution;
              roleText.textContent = newRole;
              gsap.to(textContainer, {
                opacity: 1,
                y: 0,
                duration: 0.5,
              });
            },
          });
        }
      },
    },
  });

  window.addEventListener('resize', () => {
    swiper.update();
  });

  // Set the initial text values.
  let initialSlide = swiper.slides[swiper.realIndex];
  if (initialSlide) {
    storyText.textContent = initialSlide.getAttribute('data-story');
    institutionText.textContent = initialSlide.getAttribute('data-institution');
    roleText.textContent = initialSlide.getAttribute('data-role');
  }
}
