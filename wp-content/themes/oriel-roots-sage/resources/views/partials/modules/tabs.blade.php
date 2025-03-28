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
            <div class="relative py-12 md:py-30">
                <div class="relative z-10 mx-auto px-4">
                    <div class="flex flex-wrap gap-y-12">
                        <div class="w-full px-4 md:w-1/2">
                            <div class="md:pr-16 lg:pr-24 text-lg md:text-xl">
                                {!!
  App\get_picture([19], 'full', false, [
    'class' => 'rounded-xl w-full mb-8',
  ])
!!}
                                <p class="text-lg md:text-xl">
                                    Uncover valuable insights through our innovative surveys. Participants can share
                                    detailed written responses or video recordings about a wide range of topics to
                                    better understand your institution’s culture. </p>
                            </div>

                        </div>
                        <div class="w-full px-4 md:mb-0 md:w-1/2">
                            <div class="w-full lg:pb-10">
                                <div class="">
                                    <div class="flex pb-12 mb-12 border-b border-b-slate">
                                        <div class="flex flex-shrink-0 w-15 h-15 mr-6 items-center justify-center">
                                            {!! get_svg("images.icon-number-1", 'size-full text-oriel') !!}
                                        </div>
                                        <div>
                                            <h3 class="font-sans mb-4">Planning Phase</h3>
                                            <span class="text-lg md:text-xl">We will partner with key stakeholders in your organization to define areas of focus. We create a survey brief based on our findings. </span>
                                        </div>
                                    </div>
                                    <div class="flex pb-12 mb-12 border-b border-b-slate">
                                        <div class="flex flex-shrink-0 w-15 h-15 mr-6 items-center justify-center">
                                            {!! get_svg("images.icon-number-2", 'size-full text-oriel') !!}
                                        </div>
                                        <div>
                                            <h3 class="font-sans mb-4">Survey</h3>
                                            <span class="text-lg md:text-xl">As the survey goes out to participants, the AI-Moderator will adjust questions in real time based on responses.</span>
                                        </div>
                                    </div>
                                    <div class="flex pb-12 border-b border-b-slate">
                                        <div class="flex flex-shrink-0 w-15 h-15 mr-6 items-center justify-center">
                                            {!! get_svg("images.icon-number-3", 'size-full text-oriel') !!}
                                        </div>
                                        <div>
                                            <h3 class="font-sans mb-4">Findings</h3>
                                            <span class="text-lg md:text-xl">After the survey period has been completed, you will receive a report within 5 days. </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section x-tabs:panel class="tab-content">
            <div class="relative py-12 md:py-30">
                <div class="relative z-10 mx-auto px-4">
                    <div class="flex flex-wrap gap-y-12">
                        <div class="w-full px-4 md:w-1/2">
                            <div class="md:pr-16 lg:pr-24 text-lg md:text-xl">
                                {!!
  App\get_picture([19], 'full', false, [
    'class' => 'rounded-xl w-full mb-8',
  ])
!!}
                                <p class="mb-4">
                                    Educational institutions today face rapidly evolving challenges and engaging in
                                    strategic planning provides a structured approach to align a school’s mission,
                                    resources, and goals, ensuring long-term success. Through our collaborative and
                                    technology driven process, schools can assess their strengths, identify areas for
                                    improvement, and create a roadmap for excellence.</p>
                                <p>By undergoing strategic planning, schools will position themselves to adapt to
                                    change, enhance student outcomes, and foster a thriving educational environment.</p>

                            </div>

                        </div>
                        <div class="w-full px-4 md:mb-0 md:w-1/2">
                            <div class="w-full lg:pb-10">
                                <div class="">
                                    <div class="flex pb-12 mb-12 border-b border-b-slate">
                                        <div class="flex flex-shrink-0 w-15 h-15 mr-6 items-center justify-center">
                                            {!! get_svg("images.icon-number-1", 'size-full text-khaki') !!}
                                        </div>
                                        <div>
                                            <h3 class="font-sans mb-4">Robust Community Engagement Phase</h3>
                                            <span class="text-lg md:text-xl">Successful strategic planning begins with meaningful community engagement. We will leverage our AI-powered surveys to listen to wide range of constituents and to gather diverse input from all relevant stakeholders. </span>
                                        </div>
                                    </div>
                                    <div class="flex pb-12 mb-12 border-b border-b-slate">
                                        <div class="flex flex-shrink-0 w-15 h-15 mr-6 items-center justify-center">
                                            {!! get_svg("images.icon-number-2", 'size-full text-khaki') !!}
                                        </div>
                                        <div>
                                            <h3 class="font-sans mb-4">Define Mission, Values, and Goals</h3>
                                            <span class="text-lg md:text-xl">A clear and compelling mission, supported by core values, serves as the foundation for strategic decision-making. We will help your institution to articulate your purpose, guiding principles, and long-term aspirations.</span>
                                        </div>
                                    </div>
                                    <div class="flex pb-12 mb-12 border-b border-b-slate">
                                        <div class="flex flex-shrink-0 w-15 h-15 mr-6 items-center justify-center">
                                            {!! get_svg("images.icon-number-3", 'size-full text-khaki') !!}
                                        </div>
                                        <div>
                                            <h3 class="font-sans mb-4">Examine and Planning based on Available
                                                Resources</h3>
                                            <span class="text-lg md:text-xl">Through the strategic planning process, we will determine how best to allocate resources for maximum impact and we will identify opportunities for efficiency, growth, and investment in areas that align with strategic priorities.</span>
                                        </div>
                                    </div>
                                    <div class="flex pb-12 border-b border-b-slate">
                                        <div class="flex flex-shrink-0 w-15 h-15 mr-6 items-center justify-center">
                                            {!! get_svg("images.icon-number-4", 'size-full text-khaki') !!}
                                        </div>
                                        <div>
                                            <h3 class="font-sans mb-4">Strategic Roadmap and Implementation
                                                Guidance</h3>
                                            <span class="text-lg md:text-xl">We will deliver a detailed roadmap outlining key initiatives, timelines, and accountability measures over a 5-year or 10-year time frame. Our implementation guidance Implementation will ensure that leadership, faculty, and stakeholders remain engaged, adaptable, and committed to achieving long-term success.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
</div>
