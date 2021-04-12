@extends('layouts.landing_page')

@section('stylesheets') <!-- LandingPage only Styles -->

@endsection

@section('content')
<div class="h-screen">
  <div class="max-w-7xl mx-auto py-12 px-4 mb-4 sm:px-6 lg:py-24 lg:px-8 lg:flex lg:items-center lg:justify-between">
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="">
      <div class="max-w-7xl mx-auto py-4 px-4 sm:py-24 sm:px-6 lg:px-8">
        <div class="text-center">
          <h2 class="text-base font-semibold text-indigo-600 tracking-wide uppercase"><span class="text-red-400 animate-pulse">Kontakt</span></h2>
          <p class="mt-1 text-4xl font-extrabold text-gray-100 sm:text-5xl sm:tracking-tight lg:text-6xl">Kontaktieren Sie uns</p>
          <p class="max-w-xl mt-5 mx-auto text-xl text-gray-200">Sie haben Interesse an unseren Dienstleistungen und benötigen ein Angebot oder es sind einfach nur noch ein paar Fragen offen? Dann wenden Sie sich an uns.</p>
          <br><br>
          <span class="animate-ping text-gray-100 delay-1000">&#8609;&#8609;</span> 
        </div>
      </div>
    </div>
  </div>
</div>


</div></div>

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white w-screen">
  <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-lg mx-auto md:max-w-none md:grid md:grid-cols-2 md:gap-8">
      <div>
        <h2 class="text-2xl font-extrabold text-gray-900 sm:text-3xl">
          Sales Support
        </h2>
        <div class="mt-3">
          <p class="text-lg text-gray-500">
            Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.
          </p>
        </div>
        <div class="mt-9">
          <div class="flex">
            <div class="flex-shrink-0">
              <!-- Heroicon name: outline/phone -->
              <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
            </div>
            <div class="ml-3 text-base text-gray-500">
              <p>
                +1 (555) 123 4567
              </p>
              <p class="mt-1">
                Mon-Fri 8am to 6pm PST
              </p>
            </div>
          </div>
          <div class="mt-6 flex">
            <div class="flex-shrink-0">
              <!-- Heroicon name: outline/mail -->
              <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
            </div>
            <div class="ml-3 text-base text-gray-500">
              <p>
                support@example.com
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-12 sm:mt-16 md:mt-0">
        <h2 class="text-2xl font-extrabold text-gray-900 sm:text-3xl">
          Technical Support
        </h2>
        <div class="mt-3">
          <p class="text-lg text-gray-500">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni, repellat error corporis doloribus similique, voluptatibus numquam quam, quae officiis facilis.
          </p>
        </div>
        <div class="mt-9">
          <div class="flex">
            <div class="flex-shrink-0">
              <!-- Heroicon name: outline/phone -->
              <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
            </div>
            <div class="ml-3 text-base text-gray-500">
              <p>
                +1 (555) 123 4567
              </p>
              <p class="mt-1">
                Mon-Fri 8am to 6pm PST
              </p>
            </div>
          </div>
          <div class="mt-6 flex">
            <div class="flex-shrink-0">
              <!-- Heroicon name: outline/mail -->
              <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
            </div>
            <div class="ml-3 text-base text-gray-500">
              <p>
                support@example.com
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-gray-50">
  <div class="max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto divide-y-2 divide-gray-200">
      <h2 class="text-center text-3xl font-extrabold text-gray-900 sm:text-4xl">
        Frequently asked questions
      </h2>
      <dl class="mt-6 space-y-6 divide-y divide-gray-200">
        <div class="pt-6">
          <dt class="text-lg">
            <!-- Expand/collapse question button -->
            <button class="text-left w-full flex justify-between items-start text-gray-400">
              <span class="font-medium text-gray-900">
                What&#039;s the best thing about Switzerland?
              </span>
              <span class="ml-6 h-7 flex items-center">
                <!--
                  Expand/collapse icon, toggle classes based on question open state.

                  Heroicon name: outline/chevron-down

                  Open: "-rotate-180", Closed: "rotate-0"
                -->
                <svg class="-rotate-180 h-6 w-6 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </span>
            </button>
          </dt>
          <dd class="mt-2 pr-12">
            <p class="text-base text-gray-500">
              I don&#039;t know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
            </p>
          </dd>
        </div>

        <div class="pt-6">
          <dt class="text-lg">
            <!-- Expand/collapse question button -->
            <button class="text-left w-full flex justify-between items-start text-gray-400">
              <span class="font-medium text-gray-900">
                How do you make holy water?
              </span>
              <span class="ml-6 h-7 flex items-center">
                <!--
                  Expand/collapse icon, toggle classes based on question open state.

                  Heroicon name: outline/chevron-down

                  Open: "-rotate-180", Closed: "rotate-0"
                -->
                <svg class="-rotate-180 h-6 w-6 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </span>
            </button>
          </dt>
          <dd class="mt-2 pr-12">
            <p class="text-base text-gray-500">
              You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam aut tempora vitae odio inventore fuga aliquam nostrum quod porro. Delectus quia facere id sequi expedita natus.
            </p>
          </dd>
        </div>

        <div class="pt-6">
          <dt class="text-lg">
            <!-- Expand/collapse question button -->
            <button class="text-left w-full flex justify-between items-start text-gray-400">
              <span class="font-medium text-gray-900">
                What do you call someone with no body and no nose?
              </span>
              <span class="ml-6 h-7 flex items-center">
                <!--
                  Expand/collapse icon, toggle classes based on question open state.

                  Heroicon name: outline/chevron-down

                  Open: "-rotate-180", Closed: "rotate-0"
                -->
                <svg class="-rotate-180 h-6 w-6 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </span>
            </button>
          </dt>
          <dd class="mt-2 pr-12">
            <p class="text-base text-gray-500">
              Nobody knows. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, voluptas ipsa quia excepturi, quibusdam natus exercitationem sapiente tempore labore voluptatem.
            </p>
          </dd>
        </div>

        <div class="pt-6">
          <dt class="text-lg">
            <!-- Expand/collapse question button -->
            <button class="text-left w-full flex justify-between items-start text-gray-400">
              <span class="font-medium text-gray-900">
                Why do you never see elephants hiding in trees?
              </span>
              <span class="ml-6 h-7 flex items-center">
                <!--
                  Expand/collapse icon, toggle classes based on question open state.

                  Heroicon name: outline/chevron-down

                  Open: "-rotate-180", Closed: "rotate-0"
                -->
                <svg class="-rotate-180 h-6 w-6 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </span>
            </button>
          </dt>
          <dd class="mt-2 pr-12">
            <p class="text-base text-gray-500">
              Because they&#039;re so good at it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
            </p>
          </dd>
        </div>

        <div class="pt-6">
          <dt class="text-lg">
            <!-- Expand/collapse question button -->
            <button class="text-left w-full flex justify-between items-start text-gray-400">
              <span class="font-medium text-gray-900">
                Why can&#039;t you hear a pterodactyl go to the bathroom?
              </span>
              <span class="ml-6 h-7 flex items-center">
                <!--
                  Expand/collapse icon, toggle classes based on question open state.

                  Heroicon name: outline/chevron-down

                  Open: "-rotate-180", Closed: "rotate-0"
                -->
                <svg class="-rotate-180 h-6 w-6 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </span>
            </button>
          </dt>
          <dd class="mt-2 pr-12">
            <p class="text-base text-gray-500">
              Because the pee is silent. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, quas voluptatibus ex culpa ipsum, aspernatur blanditiis fugiat ullam magnam suscipit deserunt illum natus facilis atque vero consequatur! Quisquam, debitis error.
            </p>
          </dd>
        </div>

        <div class="pt-6">
          <dt class="text-lg">
            <!-- Expand/collapse question button -->
            <button class="text-left w-full flex justify-between items-start text-gray-400">
              <span class="font-medium text-gray-900">
                Why did the invisible man turn down the job offer?
              </span>
              <span class="ml-6 h-7 flex items-center">
                <!--
                  Expand/collapse icon, toggle classes based on question open state.

                  Heroicon name: outline/chevron-down

                  Open: "-rotate-180", Closed: "rotate-0"
                -->
                <svg class="-rotate-180 h-6 w-6 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </span>
            </button>
          </dt>
          <dd class="mt-2 pr-12">
            <p class="text-base text-gray-500">
              He couldn&#039;t see himself doing it. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet perspiciatis officiis corrupti tenetur. Temporibus ut voluptatibus, perferendis sed unde rerum deserunt eius.
            </p>
          </dd>
        </div>
      </dl>
    </div>
  </div>
</div>

@endsection

@section('javascript') <!-- LandingPage only  Javascript-->

@endsection