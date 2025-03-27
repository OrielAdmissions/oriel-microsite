<section class="content-grid py-12 sm:py-21 bg-slate">
  <div class="breakout grid grid-cols-12 items-center gap-4">
    <div class="col-span-12 md:col-span-5">
      <h3 class="text-center font-sans text-2xl font-normal md:text-left">
        Sign up for our newsletter
      </h3>
    </div>
    <div class="col-span-12 md:col-span-7">
      <div class="mx-auto md:mr-0">
        <div class="flex flex-wrap">

          <div class="border-keyline/80 relative w-full rounded-full border bg-white px-6 leading-tight text-black h-20">
            {!! do_shortcode('[forminator_form id="20"]') !!}
            {!! get_svg('images.chevron-right', 'absolute right-6 top-1/2 -translate-y-1/2') !!}
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<footer class="content-grid bg-khaki relative" role="contentinfo">
  <div class="breakout">
    {!! get_svg('images.footer-window', 'absolute top-0 right-8 w-1/3 max-sm:hidden text-cardinal/40') !!}
    <section class="overflow-hidden">
      <div class="pb-6 lg:pb-37">
        <div class="flex flex-wrap pt-6 md:pt-13 lg:items-center">
          <div class="w-full md:w-2/3">
            <h2 class="text-6xl-fluid mb-12 max-w-100 font-medium">
              We are your experts in education.
            </h2>
          </div>
        </div>
      </div>
      <div class="max-lg:pt-6">
        <div class="text-oriel">
          <a href="{{ home_url('/') }}">
            {!! get_svg('images.oriel-microsite-logo-large', 'max-w-full h-auto') !!}
          </a>
        </div>
        <div class="flex flex-wrap items-center pt-6 pb-5 max-lg:gap-4">
          <div class="w-full max-lg:order-last lg:w-1/2">
            <p class="text-sm">
              ©Oriel Admissions

              <?php
              echo date('Y'); ?>

              . All Rights Reserved
            </p>
          </div>
          <div class="w-full lg:w-1/2">
            <div class="flex flex-wrap justify-end max-md:space-y-4 md:gap-6">
              <div class="hidden w-full md:w-auto lg:px-4">
                <a
                  class="animate-underline inline-block text-sm font-light"
                  href="/accessibility-statement"
                >
                  Accessibility Statement
                </a>
              </div>
              <div class="w-full md:w-auto lg:px-4">
                <a
                  class="animate-underline inline-block text-sm font-light"
                  href="/privacy-policy"
                >
                  Privacy Policy
                </a>
              </div>
              <div class="hidden w-full md:w-auto lg:px-4">
                <a
                  class="animate-underline inline-block text-sm font-light"
                  href="/terms-and-conditions"
                >
                  Terms & Conditions
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</footer>
