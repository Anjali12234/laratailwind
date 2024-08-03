@extends('layout.master')
@section('content')
    <section>
        <div class="relative overflow-hidden h-1/2 md:h-5/6">
            <video src="{{ asset('assets/frontend/video.mp4') }}" autoplay loop muted class="w-full h-full object-cover">
            </video>
        </div>
    </section>
    <div class="mt-12 md:mt-24 mx-4 md:mx-60 ">

        <h1 class="uppercase text-black text-center font-bold text-2xl"><span class="text-blue-800">Introduction</span> </h1>
        <div class="mt-7">
            <p class="text-center md:text-justify mt-0 md:mt-10
">It is the aim of Samriddhi School to provide K-12 education
                that every student deserves. We, at Samriddhi School, appreciate diversity and realize that each student is
                different and should be treated as an unique individual. Our constant endeavor is to help each student
                realize his/her full potential and discover new horizons in learning.

                We believe in bringing out the best in our students so that they can rise to the top ever empowered by a
                belief in unlimited human potential. At Samriddhi School, creativity is nurtured, with learners being
                treated as just learners, imbued with a passion for knowledge and discovery and not as rote machines.

                In terms of overall academic orientation, we place a pronounced emphasis on Science, Technology, English,
                Arts, and Mathematics (STEAM), along with other domains critical to overall academic achievement and
                sustained academic excellence</p>
            In terms of overall academic orientation, we place a pronounced emphasis on Science, Technology, English, Arts,
            and Mathematics (STEAM), along with other domains critical to overall academic achievement and sustained
            academic excellence</p>

        </div>
    </div>
    {{-- <div id="stats" class="bg-white ">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <dl class="grid  gap-x-8 gap-y-16 text-center grid-cols-3">
                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-xl">
                        <span
                            class="animate-[counter_3s_ease-out_forwards] tabular-nums [counter-set:_num_var(--num-transactions)] before:content-[counter(num)]">
                            <span class="sr-only">44</span>million </span>
                    </dd>
                </div>
                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-xl">
                        $<span
                            class="animate-[counter_3s_ease-out_forwards] tabular-nums [counter-set:_num_var(--num-assets)] before:content-[counter(num)]">
                            <span class="sr-only">119</span> trillion </span>
                    </dd>
                </div>
                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-xl">
                        <span
                            class="animate-[counter_3s_ease-out_forwards] tabular-nums [counter-set:_num_var(--num-users)] before:content-[counter(num)] before:left-[calc(0.4em * var(--n, 1))]">
                            <span class="sr-only">4600</span>
                        </span>
                    </dd>
                </div>
            </dl>
        </div>
    </div> --}}
    <div class="mx-auto max-w-7xl p-6 md:pl-[7.5rem] md:pr-[7.5rem] mb-10 mt-4">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 sm:gap-4  text-center borde">
            <div class="mx-auto max-w-xs flex-col flex shadow-lg shadow-neutral-300 py-3 px-4 mt-5 md:w-[19rem]">
                <dd class="order-first text-2xl font-semibold tracking-tight ">
                    <i class="ti ti-school"></i>
                    <span
                        class="animate-[counter_3s_ease-out_forwards] tabular-nums [counter-set:_num_var(--num-transactions)] before:content-[counter(num)]">
                        <span class="sr-only">1000</span>+ &nbsp;Students
                    </span>
                </dd>
            </div>
            <div class="mx-auto max-w-xs flex-col flex shadow-lg shadow-neutral-300 py-3 px-4 mt-5 md:w-[19rem]">
                <dd class="order-first text-2xl font-semibold tracking-tight ">
                    <i class="ti ti-school"></i>
                    $<span
                    class="animate-[counter_3s_ease-out_forwards] tabular-nums [counter-set:_num_var(--num-assets)] before:content-[counter(num)]">
                    <span class="sr-only">119</span> %&nbsp;Excellence </span>
                </dd>
            </div>
            <div class="mx-auto max-w-xs flex-col flex shadow-lg shadow-neutral-300 py-3 px-4 mt-5 md:w-[19rem]">
                <dd class="order-first text-2xl font-semibold tracking-tight ">
                    <i class="ti ti-school"></i>
                    <span
                    class="animate-[counter_3s_ease-out_forwards] tabular-nums [counter-set:_num_var(--num-users)] before:content-[counter(num)] before:left-[calc(0.4em * var(--n, 1))]">
                    <span class="sr-only">4600</span>% &nbsp; Service
                </span>
                </dd>
            </div>
        </div>
    </div>

    {{-- <section
    id="thumbnail-carousel"
    class="splide"
    aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel."
  >
    <div class="splide__track">
          <ul class="splide__list">
              <li class="splide__slide">
                  <img src="{{ asset('assets/frontend/slider1.jpg') }}" alt="">
              </li>
              <li class="splide__slide">
                  <img src="{{ asset('assets/frontend/slider2.jpg') }}" alt="">
              </li>
              <li class="splide__slide">
                  <img src="{{ asset('assets/frontend/slider3.jpg') }}" alt="">
              </li>
          </ul>
    </div>
  </section> --}}


@endsection
