@php
    // Example array for dynamic slides (replace with your actual data)
    $slides = [
      [
        'image_id' => 27,

        'story' => 'Oriel Insights has been an absolute game-changer for our high school’s decision-making process. The depth of analysis and clarity of insights from our end-of-year surveys have been incredibly valuable for providing us with a comprehensive understanding of our strengths and areas for growth. Working with Oriel Insights has given us the tools to proactively shape our future with confidence and to make the best changes to grow as an institution.',
      ],
      [
        'image_id' => 27,

        'story' => 'Oriel Insights has been an invaluable tool for our admissions office in understanding and addressing barriers to application completion. By surveying students who started but never completed their applications, we gained critical insights into the hesitations that prospective students face. The survey results helped us to streamline our application process and improve communication with prospective students. By working with Oriel Insights, we were able to strengthen our enrollment efforts and expand access to our institution.',
      ],
      [
        'image_id' => 27,
        'story' => 'Working with Oriel Insights for our school’s strategic planning was an incredibly smooth and rewarding experience. From the very beginning, their team provided expert guidance, ensuring that every step of the process was clear, efficient, and tailored to our institution’s unique needs. Oriel Insights not only helped us identify key areas for growth and improvement but also equipped us with a clear roadmap for success. Their professionalism, responsiveness, and expertise made for an outstanding experience, and I highly recommend them to any school looking to take a data-informed approach to strategic planning.',
      ],
    ];
@endphp

<div class="window-overlay full-width relative">
    <div class="the-stack">
        <div class="swiper story-swiper h-[750px] max-w-full">
            <div class="swiper-wrapper">
                @foreach ($slides as $index => $slide)
                    <div class="swiper-slide" data-story="{{ $slide['story'] }}">
                        {!! App\get_picture([$slide['image_id']], 'full', false, ['class' => 'h-full w-full object-cover object-center']) !!}
                    </div>
                @endforeach
            </div>
        </div>
        <div class="content-grid">
            <div class="breakout relative z-[2] grid grid-cols-1 items-center justify-center gap-6 lg:grid-cols-3">
                <div class="lg:col-span-1 lg:col-start-1">
                    <h2 class="text-6xl-fluid text-white max-lg:mb-12 max-lg:text-center mb-6">
                        What our customers have to say </h2>
                    <div class="flex items-center gap-4 max-lg:flex-col max-lg:items-center max-lg:hidden">
                        <div class="flex gap-4">
                            <x-button-round :direction="'left'" classes="swiper-3-btn-prev text-white"></x-button-round>
                            <x-button-round classes="swiper-3-btn-next text-white"></x-button-round>
                        </div>
                        <div class="relative inline-block w-[112px]">
                            <div class="swiper-pagination-3 text-white" style="--swiper-theme-color: #fff"></div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-1 lg:col-start-2 flex items-center justify-center">
                    <svg class="w-full h-auto max-lg:hidden" width="478" height="478" viewBox="0 0 478 478" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.3">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M381.902 0.0185547H96.0786V477.981H381.902V401.207C371.52 402.335 360.99 404.138 350.44 406.652C297.511 419.269 256.863 446.77 238.994 477.943C221.125 446.77 180.476 419.269 127.547 406.652C116.995 404.137 106.464 402.335 96.0818 401.206V72.0197C107.538 70.9299 119.193 69.0188 130.872 66.2347C180.897 54.3101 219.952 29.0911 239.173 0.0409783C258.394 29.0929 297.45 54.3139 347.477 66.2391C359.032 68.9936 370.564 70.8934 381.902 71.989V0.0185547Z"
                                  fill="#E0DDD4"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M477.984 381.909V96.088L0.0184451 96.088L0.0184326 381.909H76.7711C75.6426 371.533 73.8406 361.008 71.327 350.463C58.7085 297.529 31.2036 256.877 0.025377 239.011C31.2097 221.15 58.7213 180.494 71.3418 127.551C73.8564 117.002 75.6588 106.473 76.7872 96.0925L405.966 96.0925C407.056 107.54 408.966 119.185 411.748 130.855C423.674 180.886 448.899 219.945 477.954 239.163C448.896 258.381 423.67 297.441 411.743 347.475C408.987 359.034 407.087 370.568 405.992 381.909H477.984Z"
                                  fill="#E0DDD4"/>
                        </g>
                    </svg>
                </div>
                <div class="text-white lg:col-span-1 lg:col-start-3 lg:space-y-4 lg:max-xl:pl-6">
                    <div class="mx-auto flex max-w-[400px] flex-col gap-6">
                        <p class="text-lg max-lg:mb-12 font-light" id="storyText">
                            {{ $slides[0]['story'] }}
                        </p>
                        <ul role="list" class="divide-khaki divide-y text-xl max-lg:mb-24 ">
                            <li class="py-4 flex items-center font-light">
                                <svg class="text-khaki mr-2 inline-block h-5 w-5 align-baseline" viewBox="0 0 22 22"
                                     fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path d="M20.75 18.4999V9.8748H21.125C21.2244 9.8748 21.32 9.83543 21.3903 9.76512C21.4606 9.6948 21.5 9.59918 21.5 9.4998V7.9998C21.5 7.90042 21.4606 7.8048 21.3903 7.73448C21.32 7.66416 21.2244 7.62479 21.125 7.62479H16.9999V20.7499H16.2499V6.87503H17.7499C17.8492 6.87503 17.9449 6.83566 18.0152 6.76534C18.0855 6.69503 18.1249 6.5994 18.1249 6.50002V5.00002C18.1249 4.90065 18.0855 4.80502 18.0152 4.7347C17.9449 4.66438 17.8493 4.62501 17.7499 4.62501H11.375V3.87501H14.7499C14.8492 3.87501 14.9449 3.83564 15.0152 3.76533C15.0855 3.69501 15.1249 3.59939 15.1249 3.50001V1.25001C15.1249 1.15063 15.0855 1.05501 15.0152 0.984687C14.9449 0.914367 14.8493 0.875 14.7499 0.875H11.375C11.375 0.667813 11.2072 0.5 11 0.5C10.7928 0.5 10.625 0.667813 10.625 0.875V4.625H4.25011C4.04293 4.625 3.87511 4.79281 3.87511 5V6.5C3.87511 6.59938 3.91449 6.695 3.9848 6.76532C4.05511 6.83564 4.15074 6.87501 4.25012 6.87501H5.75012V20.7499H5.00012V7.62477H0.875C0.667813 7.62477 0.5 7.79258 0.5 7.99977V9.49977C0.5 9.59914 0.539374 9.69477 0.609687 9.76509C0.68 9.83541 0.775626 9.87477 0.875007 9.87477H1.25001V20.7497H0.875007C0.66782 20.7497 0.500007 20.9175 0.500007 21.1247C0.500007 21.3318 0.66782 21.4997 0.875007 21.4997H21.125C21.3322 21.4997 21.5 21.3318 21.5 21.1247C21.5 20.9175 21.3322 20.7497 21.125 20.7497H20.75L20.75 18.4999ZM3.49999 16.6249H2.74999V15.1249H3.49999V16.6249ZM3.49999 12.8749H2.74999V11.3749H3.49999V12.8749ZM11 8.37492C11.9103 8.37492 12.7306 8.92337 13.0784 9.76431C13.4272 10.6043 13.2341 11.5728 12.591 12.2159C11.9478 12.859 10.9794 13.0522 10.1394 12.7034C9.29842 12.3556 8.74997 11.5353 8.74997 10.6249C8.74997 9.38276 9.7578 8.37492 11 8.37492ZM10.625 20.7498H9.12499V17.3749H10.625V20.7498ZM12.875 20.7498H11.375V17.3749H12.875V20.7498ZM14.75 16.6247H7.62487V15.4997H14.75V16.6247ZM19.25 16.6247H18.5V15.1247H19.25V16.6247ZM19.25 12.8747H18.5V11.3747H19.25V12.8747Z"
                                          fill="currentColor"></path>
                                </svg>
                                Private K-8 Institution
                            </li>
                            <li class="py-4 flex items-center font-light">
                                <svg class="text-khaki mr-2 inline-block h-5 w-5 align-baseline" width="25" height="24"
                                     viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_29_449)">
                                        <path d="M22.26 4.5H16.26C15.4644 4.5 14.7013 4.81607 14.1387 5.37868C13.5761 5.94129 13.26 6.70435 13.26 7.5V15.7247C13.2626 15.9182 13.1918 16.1056 13.0619 16.2491C12.932 16.3926 12.7526 16.4816 12.5597 16.4981C12.4571 16.5049 12.3542 16.4906 12.2574 16.456C12.1606 16.4213 12.0719 16.3672 11.9969 16.2968C11.922 16.2265 11.8622 16.1415 11.8215 16.0471C11.7807 15.9527 11.7598 15.8509 11.76 15.7481V7.5C11.76 6.70435 11.4439 5.94129 10.8813 5.37868C10.3187 4.81607 9.55566 4.5 8.76001 4.5H2.76001C2.5611 4.5 2.37033 4.57902 2.22968 4.71967C2.08903 4.86032 2.01001 5.05109 2.01001 5.25V18.75C2.01001 18.9489 2.08903 19.1397 2.22968 19.2803C2.37033 19.421 2.5611 19.5 2.76001 19.5H9.51001C10.1058 19.5 10.6772 19.7363 11.099 20.157C11.5208 20.5778 11.7585 21.1486 11.76 21.7444C11.757 21.8975 11.8016 22.0478 11.8875 22.1746C11.9735 22.3013 12.0966 22.3983 12.24 22.4522C12.3538 22.4961 12.4766 22.5116 12.5978 22.4973C12.719 22.483 12.8348 22.4394 12.9353 22.3702C13.0358 22.3011 13.1179 22.2084 13.1745 22.1003C13.231 21.9923 13.2604 21.872 13.26 21.75C13.26 21.1533 13.4971 20.581 13.919 20.159C14.341 19.7371 14.9133 19.5 15.51 19.5H22.26C22.4589 19.5 22.6497 19.421 22.7903 19.2803C22.931 19.1397 23.01 18.9489 23.01 18.75V5.25C23.01 5.05109 22.931 4.86032 22.7903 4.71967C22.6497 4.57902 22.4589 4.5 22.26 4.5ZM20.01 15.75H16.2853C16.0918 15.7526 15.9044 15.6818 15.7609 15.5519C15.6174 15.422 15.5285 15.2425 15.5119 15.0497C15.5051 14.9471 15.5194 14.8442 15.5541 14.7474C15.5887 14.6506 15.6428 14.5619 15.7132 14.4869C15.7835 14.4119 15.8685 14.3522 15.9629 14.3115C16.0573 14.2707 16.1591 14.2498 16.2619 14.25H19.9866C20.1801 14.2474 20.3675 14.3182 20.511 14.4481C20.6545 14.578 20.7434 14.7575 20.76 14.9503C20.7668 15.0529 20.7525 15.1558 20.7178 15.2526C20.6832 15.3494 20.629 15.4381 20.5587 15.5131C20.4884 15.5881 20.4034 15.6478 20.309 15.6885C20.2146 15.7293 20.1128 15.7502 20.01 15.75ZM20.01 12.75H16.2853C16.0918 12.7526 15.9044 12.6818 15.7609 12.5519C15.6174 12.422 15.5285 12.2425 15.5119 12.0497C15.5051 11.9471 15.5194 11.8442 15.5541 11.7474C15.5887 11.6506 15.6428 11.5619 15.7132 11.4869C15.7835 11.4119 15.8685 11.3522 15.9629 11.3115C16.0573 11.2707 16.1591 11.2498 16.2619 11.25H19.9866C20.1801 11.2474 20.3675 11.3182 20.511 11.4481C20.6545 11.578 20.7434 11.7575 20.76 11.9503C20.7668 12.0529 20.7525 12.1558 20.7178 12.2526C20.6832 12.3494 20.629 12.4381 20.5587 12.5131C20.4884 12.5881 20.4034 12.6478 20.309 12.6885C20.2146 12.7293 20.1128 12.7502 20.01 12.75ZM20.01 9.75H16.2853C16.0914 9.75308 15.9036 9.68252 15.7597 9.55255C15.6158 9.42258 15.5266 9.24288 15.51 9.04969C15.5032 8.9471 15.5176 8.8442 15.5522 8.74739C15.5868 8.65059 15.641 8.56193 15.7113 8.48694C15.7816 8.41194 15.8666 8.35221 15.961 8.31145C16.0554 8.27069 16.1572 8.24977 16.26 8.25H19.9847C20.1786 8.24692 20.3664 8.31748 20.5103 8.44745C20.6542 8.57742 20.7434 8.75713 20.76 8.95031C20.7668 9.0529 20.7525 9.1558 20.7178 9.25261C20.6832 9.34942 20.629 9.43807 20.5587 9.51306C20.4884 9.58806 20.4034 9.64779 20.309 9.68855C20.2146 9.72931 20.1128 9.75023 20.01 9.75Z"
                                              fill="#BB9571"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_29_449">
                                            <rect width="24" height="24" fill="white" transform="translate(0.51001)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                Head of School
                            </li>
                        </ul>
                        <div class="flex items-center gap-4 max-lg:flex-col max-lg:items-center lg:hidden">
                            <div class="flex gap-4">
                                <x-button-round :direction="'left'"
                                                classes="swiper-3-btn-prev text-white"></x-button-round>
                                <x-button-round classes="swiper-3-btn-next text-white"></x-button-round>
                            </div>
                            <div class="relative inline-block w-[112px]">
                                <div class="swiper-pagination-3 text-white" style="--swiper-theme-color: #fff"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
