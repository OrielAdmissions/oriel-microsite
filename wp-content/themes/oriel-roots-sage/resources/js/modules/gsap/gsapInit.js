import { gsap } from './gsapConfig.js';
import { initStickyHeader } from './stickyHeader.js';
import { initPinnedElements } from './pinnedElements.js';
import { initSmoothScroll, smootherInstance } from './smoothScroll.js';

export function gsapAnimations() {
  initSmoothScroll();
  initStickyHeader();
  let mm = gsap.matchMedia();

  mm.add('(min-width: 1024px)', () => {
    initPinnedElements();
  });
}

export { smootherInstance };
