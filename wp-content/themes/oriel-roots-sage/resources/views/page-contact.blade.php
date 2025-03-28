@extends('layouts.app')

@section('content')
  <div class="breakout mt-[150px] py-16">
    <h1
      class="text-6xl-fluid max-w-screen-lg mb-8 max-md:text-center"
    >
      Ready to learn more?
    </h1>
    <p class="text-2xl-fluid mb-12">
      Fill out the form and we will be in touch soon.
    </p>
  </div>
  <div class="breakout">
    <section class="grid gap-8 pb-12 lg:grid-cols-12 lg:gap-x-12 lg:pb-30">
      <div class="lg:col-span-6">
        {!!
          App\get_picture([25], 'full', false, [
            'class' => 'object-cover max-lg:w-full mx-lg:mx-auto pin-content rounded-xl',
          ])
        !!}
      </div>
      <div class="long-content lg:col-span-6">
        {!! do_shortcode('[forminator_form id="21"]') !!}
      </div>
    </section>

  </div>
  @include('partials.modules.bio-slider')
@endsection
