<?php

$header_class =
  ! has_post_thumbnail() || is_single() || is_archive() || is_home() || is_page(['contact'])
    ? 'header-light'
    : 'header-dark';
?>

<header
  id="site-header"
  role="banner"
  class="<?= $header_class ?>"
  x-data="{
    isMobileMenuOpen: false,
    isDesktop: window.matchMedia('(min-width: 1200px)').matches,
    updateMenuAttributes() {
      this.isDesktop = window.matchMedia('(min-width: 1200px)').matches

      // Set aria-hidden for both menus
      document
        .querySelector('#mainMenu')
        ?.setAttribute('aria-hidden', ! this.isDesktop)
      document
        .querySelector('#mobile-menu')
        ?.setAttribute('aria-hidden', this.isDesktop || ! this.isMobileMenuOpen)

      // Set tabindex for navigation links/buttons
      document.querySelectorAll('#mainMenu a, #mainMenu button').forEach((el) => {
        el.setAttribute('tabindex', this.isDesktop ? '0' : '-1')
      })
    },
  }"
  x-init="
    updateMenuAttributes()
    window
      .matchMedia('(min-width: 1200px)')
      .addEventListener('change', () => updateMenuAttributes())
  "
>
  <div id="sticky-header" class="py-4">
    <nav class="mx-auto flex items-center justify-between px-4 sm:gap-6">
      <div
        class="header-logo hover:text-oriel relative z-10 transition duration-300 group-[.header-dark]:text-white group-[.header-light]:text-black"
      >
        <x-header-logo></x-header-logo>
      </div>
      <div class="flex items-stretch">
        <div
          id="mainMenu"
          class="main-nav-menu relative flex h-12 shrink-0 grow rounded-full p-[2px]"
          aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}"
        >
          <x-navigation></x-navigation>
        </div>
        <div
          class="grid flex-1 grid-cols-[0fr] transition-all  max-xl:hidden"
        >
          <div class="pl-4 flex gap-3 items-center">
            <a
                    href="/blog"
                    class="btn btn-khaki whitespace-nowrap"
            >
              Blog
            </a>
            <a
              href="/contact"
              class="btn btn-khaki whitespace-nowrap"
            >
              Contact Us
            </a>
          </div>
        </div>
      </div>

      <button
        @click="
    isMobileMenuOpen = !isMobileMenuOpen;
    updateMenuAttributes();
    document.body.classList.toggle('menu-opened', isMobileMenuOpen);
    $el.classList.toggle('menu-opened', isMobileMenuOpen);
  "
        :aria-expanded="isMobileMenuOpen"
        aria-label="Menu"
        class="menu-toggle-button hamburger hamburger--spin js-hamburger bg-chalk relative z-20 size-10 rounded-[9px] xl:hidden"
        type="button"
      >
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
    </nav>
  </div>
  <div
    id="mobile-menu"
    class="main-nav-menu bg-chalk z-10 flex flex-col gap-y-8 shadow xl:hidden"
    aria-label="{{ wp_get_nav_menu_name('mobile_navigation') }}"
    :class="{ 'active': isMobileMenuOpen }"
  >
    <x-mobile-navigation name="mobile_navigation"></x-mobile-navigation>
  </div>
</header>
