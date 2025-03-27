@props([
  'tabs' => [
    [
      'label' => 'AI-Powered Surveys',
      'active' => true,
      'accent_color' => '#79C9CC',
    ],
    [
      'label' => 'Strategic Planning',
      'active' => false,
      'accent_color' => '#79C9CC',
    ],
  ],
])

@php
    // Determine the default active tab index
    $defaultActive = 0;
    foreach ($tabs as $i => $tab) {
      if ($tab['active']) {
        $defaultActive = $i;
        break;
      }
    }
@endphp

<div x-data="{ selectedTab: {{ $defaultActive }} }" x-tabs :selected="selectedTab"
     class="full-width content-grid bg-[#F5F5F2]">
    <!-- Tab List -->
    <div x-tabs:list class="divide-keyline/80 breakout bg-white full-width flex items-stretch divide-x">
        @foreach ($tabs as $tab)
            <button x-tabs:tab type="button"
                    :class="$tab.isSelected ? 'border-b-[var(--tab-accent)]' : 'border-b-keyline/80'"
                    class="bg-sand/20 inline-flex w-full cursor-pointer font-serif justify-center border-b-2 p-7 text-center text-2xl transition duration-300 focus:outline-none"
                    style="--tab-accent: {{ $tab['accent_color'] }}">
                {{ $tab['label'] }}
            </button>
        @endforeach
    </div>

    <!-- Tab Panels -->
    <div x-tabs:panels class="tab-contents breakout">
        <section x-tabs:panel class="tab-content">
            <div class="relative py-24 md:py-40">
                <div class="relative z-10 mx-auto px-4">
                    <div class="-mx-4 flex flex-wrap items-center">

                        <div class="w-full px-4 md:w-1/2">
                            <div class="md:pr-16 lg:pr-24">
                                {!!
  App\get_picture([19], 'full', false, [
    'class' => 'rounded-xl w-full mb-8 ',
  ])
!!}
                                <p>
                                    Uncover valuable insights through our innovative surveys. Participants can share
                                    detailed written responses or video recordings about a wide range of topics to better
                                    understand your institution’s culture. </p>
                            </div>

                        </div>
                        <div class="mb-16 w-full px-4 md:mb-0 md:w-1/2">
                            <ol role="list" class="divide-y divide-gray-100">
                                <li class="flex justify-between gap-x-6 py-5">

                                </li>
                            </ol>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section x-tabs:panel class="tab-content">
            <div class="relative py-24 md:py-40">
                <div class="relative z-10 mx-auto px-4">
                    <div class="-mx-4 flex flex-wrap items-center">
                        <div class="w-full px-4 md:w-1/2">
                            <div class="md:pr-16 lg:pr-24">
                                {!!
  App\get_picture([19], 'full', false, [
    'class' => 'rounded-xl w-full mb-8 ',
  ])
!!}
                                <p>
                                    Uncover valuable insights through our innovative surveys. Participants can share
                                    detailed written responses or video recordings about a wide range of topics to better
                                    understand your institution’s culture. </p>
                            </div>

                        </div>
                        <div class="mb-16 w-full px-4 md:mb-0 md:w-1/2">
                            <ul role="list" class="divide-y divide-gray-100">
                                <li class="flex justify-between gap-x-6 py-5">

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
