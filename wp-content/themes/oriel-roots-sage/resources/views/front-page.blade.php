@php use function App\get_picture; @endphp@extends('layouts.app')

@section('content')
    @php($page_id = get_the_ID())
    <div class="full-width">
        <div class="the-stack">
            <div class="overflow-hidden h-svh min-h-[500px]">
                @if (has_post_thumbnail($page_id))
                    {!! App\get_picture([get_post_thumbnail_id($page_id)], 'full', false, ['loading' => false, 'class' => 'w-full h-full  object-cover kenburns-top']) !!}
                @endif
            </div>
            <div class="relative bg-[black] opacity-50"></div>
            <div class="content-grid">
                <div class="breakout relative flex flex-col items-center justify-center">
                    <h1 class="text-8xl-fluid text-center text-white fade-in-bottom">
                        Unlock insights. <br> Drive meaningful impact. </h1>
                </div>
            </div>
        </div>
    </div>

    <div></div>

    <section class="full-width content-grid py-20 lg:pt-24 lg:pb-6">
        <div>
            <h2 class="text-5xl-fluid mb-12 max-w-200">We are redefining how educational institutions understand and
                improve their schools.</h2>
        </div>
        <div class="breakout mx-auto">
            <div class="grid grid-cols-12 gap-x-4 gap-y-6 items-center">
                <div class="col-span-full lg:col-span-7">
                    <div>
                        <?php
                        echo App\get_picture([22], 'full', false, [
                            'class' => 'object-cover object-right w-full rounded-xl',
                        ]); ?>
                    </div>
                </div>
                <div class="col-span-full lg:col-span-4 lg:col-start-9">
                    <div class="space-y-8 font-normal xl:max-w-[400px] text-2xl-fluid">
                        <p>Our <span class="text-oriel">AI-powered surveys</span> enable students, faculty, staff and
                            anyone within your community to provide rich, detailed feedback for a deeper understanding
                            of their experiences.</p>

                        <p>By harnessing the power of AI, we deliver <span class="text-oriel">in-depth insights</span>
                            that <span class="text-oriel">drive meaningful change</span>. Within days, we <span
                                    class="text-oriel">transform this data into actionable reports</span> that empower
                            schools and colleges to make informed decisions and build thriving communities.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="full-width content-grid">
        @include(
  'partials.modules.tabs'
)
    </section>

    <section class="full-width text-center text-white py-12 md:py-30 bg-khaki">
        {!! get_svg('images.micro-shape', 'mx-auto mb-6') !!}
        <h2 class="text-6xl-fluid">We are <span x-data="textCycler()" x-ref="text"
                                                 data-words="Innovators, Results-oriented, Your Partners in Change"
                                                 class="block">
        Innovators
      </span></h2>
    </section>

    <section class="bg-slate full-width-constrained py-12 md:py-30">
        <h2 class="text-6xl-fluid pb-12 text-center">
            Why work with us? </h2>

        @include(
          'partials.modules.mba-cards',
          [
            'features' => [
              [
                'icon' => '<svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M44.743 0H11.2549V55.9999H44.743V47.0045C43.5267 47.1367 42.2929 47.3479 41.0569 47.6425C34.8555 49.1208 30.0929 52.3428 27.9993 55.9952C25.9057 52.3427 21.1432 49.1207 14.9418 47.6425C13.7056 47.3478 12.4717 47.1366 11.2553 47.0044V8.43574C12.5975 8.30805 13.963 8.08415 15.3314 7.75795C21.1925 6.36081 25.7683 3.40605 28.0204 0.00242996C30.2724 3.40623 34.8483 6.36118 40.7096 7.75838C42.0635 8.0811 43.4146 8.3037 44.743 8.43207V0Z" fill="#BB9571"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M56.0002 44.7438V11.2559L1.46381e-06 11.2559L0 44.7437H8.99269C8.86048 43.528 8.64934 42.2948 8.35482 41.0592C6.87639 34.8572 3.65381 30.0943 0.000847137 28.0011C3.65452 25.9084 6.87789 21.1449 8.35655 14.9419C8.65117 13.706 8.86234 12.4724 8.99455 11.2563L47.5623 11.2563C47.69 12.5975 47.9138 13.962 48.2398 15.3293C49.6371 21.1911 52.5925 25.7673 55.9967 28.019C52.5922 30.2706 49.6366 34.8471 48.2392 40.7092C47.9164 42.0635 47.6937 43.4149 47.5654 44.7438H56.0002Z" fill="#BB9571"/>
<path d="M26.32 43C26.56 41.32 26.64 39.88 26.64 37.72V15.72C25.48 17.76 23 19.48 20.92 20.28L20.8 18.56C23.48 18.2 26.84 15.72 27.72 11.8H32.52V37.72C32.52 39.88 32.6 41.36 32.84 43H26.32Z" fill="#BB9571"/>
</svg>
',
                'title' => 'Expertise in the Educational Sector',
                'content' =>
                  '<p>We are solely focused on the educational sector and we understand the unique challenges and opportunities schools face. We draw from our deep expertise to collaborate with schools to bring out the best in themselves.</p>',
              ],

                   [
                'icon' => '<svg width="57" height="56" viewBox="0 0 57 56" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M41.253 43H18.573C20.413 34.64 24.973 31.64 29.453 28.28C33.773 25.12 36.733 22.44 36.733 18.04C36.733 13.8 34.213 10.96 30.173 10.96C26.093 10.96 23.413 13.6 23.413 16.76C23.413 19.36 25.173 21.04 27.613 21.92L24.173 25.08C21.093 23.4 19.293 20.96 19.293 17.84C19.293 13.12 24.773 10.2 30.613 10.2C36.533 10.2 42.293 13.04 42.293 18.76C42.293 24.44 37.093 26.88 32.573 29.16C26.613 31.72 22.773 33.84 20.093 39.8L31.333 39.72C35.773 39.68 38.533 39.48 43.133 37.44L41.253 43Z" fill="#BB9571"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M45.076 0H11.5879V55.9999H45.076V47.0045C43.8597 47.1367 42.6259 47.3479 41.3899 47.6425C35.1885 49.1208 30.4259 52.3428 28.3323 55.9952C26.2388 52.3427 21.4762 49.1207 15.2748 47.6425C14.0386 47.3478 12.8047 47.1366 11.5883 47.0044V8.43574C12.9305 8.30805 14.296 8.08415 15.6644 7.75795C21.5255 6.36081 26.1013 3.40605 28.3534 0.00242996C30.6054 3.40623 35.1813 6.36118 41.0427 7.75838C42.3965 8.0811 43.7476 8.3037 45.076 8.43207V0Z" fill="#BB9571"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M56.3332 44.7438V11.2559L0.333009 11.2559L0.333008 44.7437H9.3257C9.19348 43.528 8.98235 42.2948 8.68782 41.0592C7.2094 34.8572 3.98682 30.0943 0.333855 28.0011C3.98753 25.9084 7.2109 21.1449 8.68956 14.9419C8.98418 13.706 9.19535 12.4724 9.32756 11.2563L47.8953 11.2563C48.023 12.5975 48.2468 13.962 48.5728 15.3293C49.9701 21.1911 52.9255 25.7673 56.3297 28.019C52.9252 30.2706 49.9696 34.8471 48.5722 40.7092C48.2494 42.0635 48.0267 43.4149 47.8984 44.7438H56.3332Z" fill="#BB9571"/>
</svg>
',
                'title' => 'Understand community',
                'content' => '<p>We go beyond what is possible through a traditional survey or strategic planning engagement. Through our AI-powered surveys, participants are able to provide rich, video-based feedback, which can capture the nuance of their experience and a better understanding of your community.</p>'
              ],
                   [
                'icon' => '<svg width="57" height="56" viewBox="0 0 57 56" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M30.307 43.8C23.067 43.8 18.227 40.16 17.507 32.96H18.147C19.067 39.48 23.587 42.16 28.627 42.16C34.267 42.16 36.827 38.32 36.827 33.76C36.827 29.24 33.827 25.6 27.187 27.08L27.067 26.32C32.867 23.24 34.587 19.88 34.587 15.92C34.587 13.24 33.347 10.96 30.107 10.96C26.067 10.96 24.227 14.56 23.107 19L19.067 17.16C20.747 13.8 24.467 10.2 30.267 10.2C35.427 10.2 39.467 12.68 39.467 16.96C39.467 21.48 35.787 23.88 31.747 25.48C37.467 25.04 42.067 27.56 42.067 33.76C42.067 39.72 37.027 43.8 30.307 43.8Z" fill="#BB9571"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M45.41 0H11.9219V55.9999H45.41V47.0045C44.1937 47.1367 42.9599 47.3479 41.7239 47.6425C35.5225 49.1208 30.7599 52.3428 28.6663 55.9952C26.5727 52.3427 21.8102 49.1207 15.6088 47.6425C14.3726 47.3478 13.1387 47.1366 11.9223 47.0044V8.43574C13.2645 8.30805 14.63 8.08415 15.9984 7.75795C21.8595 6.36081 26.4353 3.40605 28.6874 0.00242996C30.9393 3.40623 35.5153 6.36118 41.3766 7.75838C42.7305 8.0811 44.0816 8.3037 45.41 8.43207V0Z" fill="#BB9571"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M56.6672 44.7438V11.2559L0.666994 11.2559L0.666992 44.7437H9.65968C9.52747 43.528 9.31633 42.2948 9.02181 41.0592C7.54338 34.8572 4.3208 30.0943 0.667839 28.0011C4.32151 25.9084 7.54488 21.1449 9.02355 14.9419C9.31817 13.706 9.52934 12.4724 9.66155 11.2563L48.2293 11.2563C48.357 12.5975 48.5808 13.962 48.9068 15.3293C50.3041 21.1911 53.2595 25.7673 56.6637 28.019C53.2592 30.2706 50.3036 34.8471 48.9062 40.7092C48.5834 42.0635 48.3607 43.4149 48.2324 44.7438H56.6672Z" fill="#BB9571"/>
</svg>
',
                'title' => 'Natural and Efficient Survey Methods',
                'content' => '<p>The collection method of a traditional survey is restrictive. Our video driven surveys are a more natural way of collecting feedback. With our AI-powered technology we are able to streamline feedback collection and analysis, making for a better user experience.</p>'
              ],
                   [
                'icon' => '<svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M34.72 42H29.2C29.56 38.4 29.56 36.72 29.56 34.4V32.96H13.6V32.2C23.04 23.16 28.12 14.04 29.44 10H34.72C34.36 14.08 34.36 15.56 34.36 18.24V29.48C36.48 29.2 38.56 28.64 41.28 27.48L39.64 32.96H34.36V34.4C34.36 36.72 34.36 38.4 34.72 42ZM28.08 29.76H29.56V11.68C28 15.44 24 22.44 17.2 29.36C20.64 29.68 24.24 29.76 28.08 29.76Z" fill="#BB9571"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M44.743 0H11.2549V55.9999H44.743V47.0045C43.5267 47.1367 42.2929 47.3479 41.0569 47.6425C34.8555 49.1208 30.0929 52.3428 27.9993 55.9952C25.9057 52.3427 21.1432 49.1207 14.9418 47.6425C13.7056 47.3478 12.4717 47.1366 11.2553 47.0044V8.43574C12.5975 8.30805 13.963 8.08415 15.3314 7.75795C21.1925 6.36081 25.7683 3.40605 28.0204 0.00242996C30.2724 3.40623 34.8483 6.36118 40.7096 7.75838C42.0635 8.0811 43.4146 8.3037 44.743 8.43207V0Z" fill="#BB9571"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M56.0002 44.7438V11.2559L1.46381e-06 11.2559L0 44.7437H8.99269C8.86048 43.528 8.64934 42.2948 8.35482 41.0592C6.87639 34.8572 3.65381 30.0943 0.000847137 28.0011C3.65452 25.9084 6.87789 21.1449 8.35655 14.9419C8.65117 13.706 8.86234 12.4724 8.99455 11.2563L47.5623 11.2563C47.69 12.5975 47.9138 13.962 48.2398 15.3293C49.6371 21.1911 52.5925 25.7673 55.9967 28.019C52.5922 30.2706 49.6366 34.8471 48.2392 40.7092C47.9164 42.0635 47.6937 43.4149 47.5654 44.7438H56.0002Z" fill="#BB9571"/>
</svg>
',
                'title' => 'Cost Effective',
                'content' => '<p>Our solutions are cost effective. You will receive high-quality and data-driven insights at a fraction of the cost of traditional consulting firms, allowing institutions to maximize impact in a financially sustainable way.</p>'
              ],
                   [
                'icon' => '<svg width="57" height="56" viewBox="0 0 57 56" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M28.373 43.8C21.013 43.8 17.333 40.24 16.773 33.64H17.413C18.013 40.08 21.573 42.52 26.413 42.52C31.373 42.52 34.813 38.36 34.813 32.04C34.813 26.56 31.933 23.44 27.733 23.44C25.453 23.44 23.013 24.24 19.493 27.08L19.093 26.72L21.333 11H37.933L39.613 16.48C34.813 14.4 32.293 14.2 26.613 14.2H21.613L19.973 25.88C22.933 23.44 26.013 22.28 29.613 22.28C34.973 22.28 40.733 25.28 40.733 32.32C40.733 40.2 34.533 43.8 28.373 43.8Z" fill="#BB9571"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M45.076 0H11.5879V55.9999H45.076V47.0045C43.8597 47.1367 42.6259 47.3479 41.3899 47.6425C35.1885 49.1208 30.4259 52.3428 28.3323 55.9952C26.2388 52.3427 21.4762 49.1207 15.2748 47.6425C14.0386 47.3478 12.8047 47.1366 11.5883 47.0044V8.43574C12.9305 8.30805 14.296 8.08415 15.6644 7.75795C21.5255 6.36081 26.1013 3.40605 28.3534 0.00242996C30.6054 3.40623 35.1813 6.36118 41.0427 7.75838C42.3965 8.0811 43.7476 8.3037 45.076 8.43207V0Z" fill="#BB9571"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M56.3332 44.7438V11.2559L0.333009 11.2559L0.333008 44.7437H9.3257C9.19348 43.528 8.98235 42.2948 8.68782 41.0592C7.2094 34.8572 3.98682 30.0943 0.333855 28.0011C3.98753 25.9084 7.2109 21.1449 8.68956 14.9419C8.98418 13.706 9.19535 12.4724 9.32756 11.2563L47.8953 11.2563C48.023 12.5975 48.2468 13.962 48.5728 15.3293C49.9701 21.1911 52.9255 25.7673 56.3297 28.019C52.9252 30.2706 49.9696 34.8471 48.5722 40.7092C48.2494 42.0635 48.0267 43.4149 47.8984 44.7438H56.3332Z" fill="#BB9571"/>
</svg>
',
                'title' => 'Fast Results',
                'content' => '<p>Once a survey has closed, you will receive a comprehensive insights report within days, allowing your organization to take immediate, data-driven action. Our rapid turnaround ensures that you stay ahead of challenges and can make informed decisions with confidence and efficiency.</p>'
              ],
                   [
                'icon' => '<svg width="57" height="56" viewBox="0 0 57 56" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M45.41 0H11.9219V55.9999H45.41V47.0045C44.1937 47.1367 42.9599 47.3479 41.7239 47.6425C35.5225 49.1208 30.7599 52.3428 28.6663 55.9952C26.5727 52.3427 21.8102 49.1207 15.6088 47.6425C14.3726 47.3478 13.1387 47.1366 11.9223 47.0044V8.43574C13.2645 8.30805 14.63 8.08415 15.9984 7.75795C21.8595 6.36081 26.4353 3.40605 28.6874 0.00242996C30.9393 3.40623 35.5153 6.36118 41.3766 7.75838C42.7305 8.0811 44.0816 8.3037 45.41 8.43207V0Z" fill="#BB9571"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M56.6672 44.7438V11.2559L0.666994 11.2559L0.666992 44.7437H9.65968C9.52747 43.528 9.31633 42.2948 9.02181 41.0592C7.54338 34.8572 4.3208 30.0943 0.667839 28.0011C4.32151 25.9084 7.54488 21.1449 9.02355 14.9419C9.31817 13.706 9.52934 12.4724 9.66155 11.2563L48.2293 11.2563C48.357 12.5975 48.5808 13.962 48.9068 15.3293C50.3041 21.1911 53.2595 25.7673 56.6637 28.019C53.2592 30.2706 50.3036 34.8471 48.9062 40.7092C48.5834 42.0635 48.3607 43.4149 48.2324 44.7438H56.6672Z" fill="#BB9571"/>
<path d="M29.067 43.68C20.427 43.68 15.387 36.68 15.387 27.56C15.387 17.68 21.507 11.32 29.387 11.32C33.427 11.32 37.467 12.68 39.667 14.48C39.787 16.16 38.987 17.6 37.267 17.6C35.707 17.6 34.827 16.6 34.067 15.44C32.947 13.96 31.827 12.12 29.107 12.12C23.707 12.12 21.467 20.2 21.467 27.64V28.76C23.467 24.68 27.187 22.68 30.867 22.68C36.707 22.68 40.627 27.24 40.627 32.88C40.627 38.56 36.667 43.68 29.067 43.68ZM21.547 30.48C22.027 37.88 24.467 42.88 28.667 42.88C32.507 42.88 34.627 38.92 34.627 33.84C34.627 28.12 32.307 24.72 28.467 24.72C25.627 24.72 22.747 26.68 21.547 30.48Z" fill="#BB9571"/>
</svg>
',
                'title' => 'Data-Driven Rankings',
                'content' => '<p>Drawing on our extensive expertise and our wealth of data, we are able to provide schools with a ranking to compare their performance to peer institutions. This ranking will also allow school leaders to track the institution’s performance over time.</p>'
              ],

            ],
          ]
        )
    </section>
    <?php
    $args = array(
        'post_type'      => 'case_study',
        'posts_per_page' => -1,
    );
    $query = new WP_Query( $args );
    ?>

    <?php if ( $query->have_posts() ) : ?>
    <section class="full-width content-grid py-12 md:py-30 bg-[#F5F5F2]">
        <h2 class="text-center text-6xl-fluid mb-12">Case Studies</h2>
        <div class="breakout grid grid-cols-12 gap-4">
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="col-span-full lg:col-span-4">
                <article class="group relative flex h-full flex-col items-start justify-between overflow-hidden rounded-xl bg-white transition duration-500">
                    <div class="bg-sand relative aspect-16/9 w-full overflow-hidden rounded-t-lg">
                            <?php if ( has_post_thumbnail() ) : ?>
                        {!! get_picture([get_post_thumbnail_id()], 'full', false, ['class'=>'w-full h-full object-cover aspect-16/9']) !!}
                        <?php endif; ?>
                    </div>
                    <div class="flex w-full grow flex-col gap-y-6 px-6 pt-10 pb-6">
                        <div class="flex grow flex-col gap-2">
                            <div class="mb-4">
                                    <span class="pill bg-khaki text-white">
                                        <?php
                                            $terms = get_the_terms( get_the_ID(), 'category' );
                                            echo ( $terms && ! is_wp_error( $terms ) ) ? esc_html( $terms[0]->name ) : 'Category';
                                            ?>
                                    </span>
                            </div>
                            <h3 class="text-3xl-fluid leading-tight mb-4">
                                <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                </a>
                            </h3>
                            <?php
                            $text = get_the_excerpt();
                            if ( empty( $text ) ) {
                            // Apply filters so shortcodes and formatting are processed.
                            $text = apply_filters( 'the_content', get_the_content() );
                            }
                            ?>
                            <p class="line-clamp-3 min-h-[75px] pb-8">
                                    <?php echo wp_trim_words( $text, 30, '...' ); ?>
                            </p>
                        </div>
                        <div>
                            <a href="<?php the_permalink(); ?>" class="stretched-link">
                                <span class="btn btn-outline">Read More</span>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
            <?php endwhile; ?>
        </div>
    </section>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>

@endsection
