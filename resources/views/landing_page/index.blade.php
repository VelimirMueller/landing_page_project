@extends('layouts.landing_page')

@section('stylesheets') <!-- LandingPage only Styles -->

@endsection

@section('content')

<main class="mt-8 sm:mt-8">
      <div class="mx-auto max-w-7xl sm:mt-12">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">
          <div class="px-4 sm:px-6 md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left lg:flex lg:items-center">
            <div>
              <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:leading-none lg:mt-6 lg:text-5xl xl:text-6xl">
                <span class="md:block">VLM</span>
                <span class="text-indigo-400 md:block">Fullstack Webdevelopment</span>
              </h1>

              
              <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                Sie benötigen eine komplexe Webanwendung, einen Online Shop oder eine einfache Landingpage? 
                <br><br>
                Kein Problem, wir kreieren für Sie maßgeschneiderte IT-Lösungen die sich nicht nur durch einwandfreie Technik auszeichnet, sondern auch optisch überzeugt. 
              </p>
              
            </div>
          </div>
          <div class="mt-16 sm:mt-24 lg:mt-0 lg:col-span-6">
            <div class="sm:max-w-md sm:w-full sm:mx-auto sm:rounded-lg sm:overflow-hidden">
              <img class="" src="{{ asset('img/hero.png') }}" alt="hero-image-developer">
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>



<!-- This example requires Tailwind CSS v2.0+ -->



<!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ]
  }
  ```
-->
<div class="relative shadow-2xl lg:py-16">
  <div class=" absolute top-0 inset-x-0 h-1/2 bg-gray-50 lg:block" aria-hidden="true"></div>
  <div class="max-w-7xl mx-auto  lg:bg-transparent lg:px-8">
    <div class="lg:grid lg:grid-cols-12">
      <div class="relative z-10 lg:col-start-1 lg:row-start-1 lg:col-span-4 lg:py-16 lg:bg-transparent">
        
        <div class="max-w-md mx-auto px-4 sm:max-w-3xl sm:px-6 lg:max-w-none lg:p-0">
          <div class="aspect-w-10 aspect-h-6 sm:aspect-w-2 sm:aspect-h-1 lg:aspect-w-1">
            <img class="animate-spin hover:animate:none delay-150 object-cover object-center rounded-3xl hidden lg:block" src="{{asset('img/community.svg')}}" alt="">
          </div>
        </div>
      </div>

      <div class="relative bg-gradient-to-r from-gray-800 via-purple-700 to-purple-600 lg:col-start-3 lg:row-start-1 lg:col-span-10 lg:rounded-3xl lg:grid lg:grid-cols-10 lg:items-center">
        <div class="hidden absolute inset-0 overflow-hidden rounded-3xl lg:block" aria-hidden="true">
          <svg class="absolute bottom-full left-full transform translate-y-1/3 -translate-x-2/3 xl:bottom-auto xl:top-0 xl:translate-y-0" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
            <defs>
              <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                <rect x="0" y="0" width="4" height="4" class="text-indigo-500" fill="currentColor" />
              </pattern>
            </defs>
            <rect width="404" height="384" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)" />
          </svg>
          <svg class="absolute top-full transform-gpu -translate-y-1/3 -translate-x-1/3 xl:-translate-y-1/2" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
            <defs>
              <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                <rect x="0" y="0" width="4" height="4" class="text-indigo-500" fill="currentColor" />
              </pattern>
            </defs>
            <rect width="404" height="384" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)" />
          </svg>
        </div>
        <div class="delay-demo relative max-w-md mx-auto py-12 px-4 space-y-6 sm:max-w-3xl sm:py-16 sm:px-6 lg:max-w-none lg:p-0 lg:col-start-4 lg:col-span-6">
          <h2 class="el text-3xl font-extrabold text-white" id="join-heading">Mach mit!</h2>
          <p class="el text-lg text-white">
          Die Welt wird von Tag zu Tag digitaler. Man könnte sogar sagen, dass sich ein großteil des Lebens mitlerweile online abspielt. 
          Solche Veränderungen spürt man in allen Lebenslagen. Auch die Märkte haben sich angepasst und es sprießen Onlinegeschäfte nur so aus dem Boden.
          <br><br>

          Damit Ihre Geschäft weiterhin und auch online funktioniert, schaffen wir Ihnen Ihre IT-Infrastruktur. Sicher, schnell, modern.
          Gerne beraten wir Sie hierbei auch fachkundig.
          </p>
          <a class="block w-full hover:bg-purple-800 hover:text-white hover:shadow-4xl hover:border-gray-200 hover:text-shadow border-indigo-900 transition-all duration-1000 ease-out py-3 px-5 text-center bg-white border border-transparent rounded-md shadow-md text-base font-medium text-indigo-700 hover:bg-gray-50 sm:inline-block sm:w-auto" href="#">Unsere Dienstleistungen</a>
          
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<!-- This example requires Tailwind CSS v2.0+ -->
<div id="bar-event-starter" class="relative bg-gray-900">
  <div id="bar-event-starter-mobile" class="h-80 w-full absolute bottom-0 xl:inset-0 xl:h-full">
    <div class="h-full w-full xl:grid xl:grid-cols-2">
      <div class="h-full xl:relative xl:col-start-2">
      

        <img class="h-full w-full object-cover opacity-25 xl:absolute xl:inset-0" src="{{ asset('img/stats-robo.png') }}" alt="Statistik Robo">

        <div aria-hidden="true" class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-gray-900 xl:inset-y-0 xl:left-0 xl:h-full xl:w-32 xl:bg-gradient-to-r"></div>
      </div>
    </div>
  </div>
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8 xl:grid xl:grid-cols-2 xl:grid-flow-col-dense xl:gap-x-8">
    <div class="relative pt-12 pb-64 sm:pt-24 sm:pb-64 xl:col-start-1 xl:pb-24">
      <h2 class="text-sm font-semibold text-indigo-300 tracking-wide uppercase">
        Messbare Erfolge
      </h2>
      <p class="mt-3 text-3xl font-extrabold text-white">Was wir erreicht haben</p>
        <div class="h-3 relative max-w-xl rounded-full overflow-hidden"> <!-- Progress bar Start -->
          <div id="bar-wrap" class="w-full h-full bg-gray-200 absolute"></div>
          <div id="bar" class="transition-all duration-1000 h-full bg-green-400 relative w-0 ease-in-out"></div>
        </div>                                                           <!-- Progress bar End -->
      <p class="mt-5 text-lg text-gray-300"></p>
      <div class="mt-12 grid grid-cols-1 gap-y-12 gap-x-6 sm:grid-cols-2">
        <p class="featuresValues opacity-0 transition-all duration-1000 ease-in-out">
          <span class="block text-2xl font-bold text-white">30+</span>
          <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Begeisterte Kunden</span></span>
        </p>

        <p class="featuresValues opacity-0 transition-all duration-1000 ease-in-out">
          <span class="block text-2xl font-bold text-white">30K+</span>
          <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Codezeilen</span></span>
        </p>

        <p class="featuresValues opacity-0 transition-all duration-1000 ease-in-out">
          <span class="block text-2xl font-bold text-white dom-attribute-demo"><span>98%</span>
          <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Durchschnittliche Kundenzufriedenheit</span></span>
        </p>

        <p class="featuresValues opacity-0 transition-all duration-1000 ease-in-out">
          <span class="block text-2xl font-bold text-white">150%</span>
          <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Performance unserer Apps</span></span>
        </p>
      </div>
    </div>
  </div>
</div>


<!-- This example requires Tailwind CSS v2.0+ -->
<section class="bg-white overflow-hidden" id="progressbar-event">
  <div class="relative max-w-7xl mx-auto pt-20 pb-12 px-4 sm:px-6 lg:px-8 lg:py-20">
    <svg class="absolute top-full left-0 transform translate-x-80 -translate-y-24 lg:hidden" width="784" height="404" fill="none" viewBox="0 0 784 404" aria-hidden="true">
      <defs>
        <pattern id="e56e3f81-d9c1-4b83-a3ba-0d0ac8c32f32" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
          <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
        </pattern>
      </defs>
      <rect width="784" height="404" fill="url(#e56e3f81-d9c1-4b83-a3ba-0d0ac8c32f32)" />
    </svg>

    <svg class="hidden lg:block absolute right-full top-1/2 transform translate-x-1/2 -translate-y-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784" aria-hidden="true">
      <defs>
        <pattern id="56409614-3d62-4985-9a10-7ca758a8f4f0" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
          <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
        </pattern>
      </defs>
      <rect width="404" height="784" fill="url(#56409614-3d62-4985-9a10-7ca758a8f4f0)" />
    </svg>

    <div class="relative lg:flex lg:items-center">
      <div class="hidden lg:block lg:flex-shrink-0">
        <img class="h-64 w-64 rounded-full xl:h-80 xl:w-80" src="https://robohash.org/mrrobot23.png?set=set3" alt="">
      </div>

      <div class="relative lg:ml-10">
        <svg class="absolute top-0 left-0 transform -translate-x-8 -translate-y-24 h-36 w-36 text-indigo-200 opacity-50" stroke="currentColor" fill="none" viewBox="0 0 144 144" aria-hidden="true">
          <path stroke-width="2" d="M41.485 15C17.753 31.753 1 59.208 1 89.455c0 24.664 14.891 39.09 32.109 39.09 16.287 0 28.386-13.03 28.386-28.387 0-15.356-10.703-26.524-24.663-26.524-2.792 0-6.515.465-7.446.93 2.327-15.821 17.218-34.435 32.11-43.742L41.485 15zm80.04 0c-23.268 16.753-40.02 44.208-40.02 74.455 0 24.664 14.891 39.09 32.109 39.09 15.822 0 28.386-13.03 28.386-28.387 0-15.356-11.168-26.524-25.129-26.524-2.792 0-6.049.465-6.98.93 2.327-15.821 16.753-34.435 31.644-43.742L121.525 15z" />
        </svg>
        <blockquote class="relative">
          <div class="text-2xl leading-9 font-medium text-gray-900">
            <p>
              Damit unsere Produkte die Anforderungen der heutigen Märkte erfüllen können, verwenden wir einen modernen Techstack. Damit Ihre Anwendungen auch morgen noch up2date sind.
            </p>
          </div>
          <footer class="mt-8">
            <div class="flex hidden md:block">
              <div class="flex-shrink-0 lg:hidden">
                <img class="h-12 w-12 rounded-full" src="https://robohash.org/mrrobot.png?set=set3" alt="">
              </div>
              <div class="ml-4 lg:ml-0">
                <div class="text-base font-medium text-gray-900">Robo Bot</div>
                <div class="text-base font-medium text-indigo-600">CEO, Matrix</div>
              </div>
            </div>
          </footer>
        </blockquote>
      </div>
    </div>
  </div>
</section>




<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white">
  <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-2 gap-8 sm:flex-row md:grid-cols-6 lg:grid-cols-6">

      <div class="hover-bounce-images col-span-2 flex justify-center sm:col-span-2 md:col-span-2 lg:col-span-1">
        <img class="h-12 hover-bounce-images" src="{{ asset('img/logos-tech/laralogo.png') }}" alt="laravel">
      </div>

      <div class="hover-bounce-images col-span-2 flex justify-center sm:col-span-2 md:col-span-2 lg:col-span-1">
        <img class="h-12 hover-bounce-images" src="{{ asset('img/logos-tech/tailwind.svg') }}" alt="tailwind">
      </div>

      <div class="hover-bounce-images col-span-2 flex justify-center sm:col-span-2 md:col-span-2 lg:col-span-1 delay-150">
        <img class="h-12 hover-bounce-images" src="{{ asset('img/logos-tech/chartjs.png') }}" alt="chartjs">
      </div>

      <div class="hover-bounce-images col-span-2 flex justify-center sm:col-span-2 md:col-span-2 lg:col-span-1 delay-150">
        <img class="h-12 hover-bounce-images" src="{{ asset('img/logos-tech/sass.png') }}" alt="sass">
      </div>

      <div class="hover-bounce-images col-span-2 flex justify-center sm:col-span-2 md:col-span-2 lg:col-span-1 delay-150">
        <img class="h-12 hover-bounce-images" src="{{ asset('img/logos-tech/npm.png') }}" alt="npm">
      </div>

      <div class="hover-bounce-images col-span-2 flex justify-center sm:col-span-2 md:col-span-2 lg:col-span-1 delay-150">
        <img class="h-12 hover-bounce-images" src="{{ asset('img/logos-tech/nginx.png') }}" alt="nginx">
      </div>
      

    </div>
  </div>
</div>


<!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ]
  }
  ```
-->
<div class="bg-gray-900">
  <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
    <div class="relative bg-white shadow-xl">
      <h2 class="sr-only">Haben wir Ihr Interesse geweckt?</h2>

      <div class="grid grid-cols-1 lg:grid-cols-3">
        <!-- Contact information -->
        <div class="relative overflow-hidden py-10 px-6 bg-gradient-to-r from-gray-800 via-purple-700 to-purple-600 sm:px-10 xl:p-12 ">
          <div class="absolute inset-0 pointer-events-none sm:hidden" aria-hidden="true">
            <svg class="absolute inset-0 w-full h-full" width="343" height="388" viewBox="0 0 343 388" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
              <path d="M-99 461.107L608.107-246l707.103 707.107-707.103 707.103L-99 461.107z" fill="url(#linear1)" fill-opacity=".1" />
              <defs>
                <linearGradient id="linear1" x1="254.553" y1="107.554" x2="961.66" y2="814.66" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#fff"></stop>
                  <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                </linearGradient>
              </defs>
            </svg>
          </div>
          <div class="hidden absolute top-0 right-0 bottom-0 w-1/2 pointer-events-none sm:block lg:hidden" aria-hidden="true">
            <svg class="absolute inset-0 w-full h-full" width="359" height="339" viewBox="0 0 359 339" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
              <path d="M-161 382.107L546.107-325l707.103 707.107-707.103 707.103L-161 382.107z" fill="url(#linear2)" fill-opacity=".1" />
              <defs>
                <linearGradient id="linear2" x1="192.553" y1="28.553" x2="899.66" y2="735.66" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#fff"></stop>
                  <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                </linearGradient>
              </defs>
            </svg>
          </div>
          <div class="hidden absolute top-0 right-0 bottom-0 w-1/2 pointer-events-none lg:block" aria-hidden="true">
            <svg class="absolute inset-0 w-full h-full" width="160" height="678" viewBox="0 0 160 678" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
              <path d="M-161 679.107L546.107-28l707.103 707.107-707.103 707.103L-161 679.107z" fill="url(#linear3)" fill-opacity=".1" />
              <defs>
                <linearGradient id="linear3" x1="192.553" y1="325.553" x2="899.66" y2="1032.66" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#fff"></stop>
                  <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                </linearGradient>
              </defs>
            </svg>
          </div>
          <h3 class="text-lg font-medium text-white">Kontaktinformationen</h3>
          <p class="mt-6 text-base text-indigo-50 max-w-3xl">Haben wir Ihr Interesse geweckt oder haben Sie Fragen? Dann melden Sie sich gerne bei uns.</p>
          <dl class="mt-8 space-y-6">
            <dt><span class="sr-only">Telefonnummer</span></dt>
            <dd class="flex text-base text-indigo-50">
              <!-- Heroicon name: outline/phone -->
              <svg class="flex-shrink-0 w-6 h-6 text-indigo-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              <span class="ml-3">+1 (456) 123-4567</span>
            </dd>
            <dt><span class="sr-only">Email</span></dt>
            <dd class="flex text-base text-indigo-50">
              <!-- Heroicon name: outline/mail -->
              <svg class="flex-shrink-0 w-6 h-6 text-indigo-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <span class="ml-3">info@velimir-mueller.de</span>
            </dd>
          </dl>
          <ul class="mt-8 flex space-x-12" role="list">
            <li>
              <a class="text-indigo-200 hover:text-indigo-100" href="#">
                <span class="sr-only">Facebook</span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" aria-hidden="true">
                  <path d="M22.258 1H2.242C1.556 1 1 1.556 1 2.242v20.016c0 .686.556 1.242 1.242 1.242h10.776v-8.713h-2.932V11.39h2.932V8.887c0-2.906 1.775-4.489 4.367-4.489 1.242 0 2.31.093 2.62.134v3.037l-1.797.001c-1.41 0-1.683.67-1.683 1.653v2.168h3.362l-.438 3.396h-2.924V23.5h5.733c.686 0 1.242-.556 1.242-1.242V2.242C23.5 1.556 22.944 1 22.258 1" fill="currentColor" />
                </svg>
              </a>
            </li>
            <li>
              <a class="text-indigo-200 hover:text-indigo-100" href="#">
                <span class="sr-only">GitHub</span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" aria-hidden="true">
                  <path d="M11.999 0C5.373 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.386.6.11.819-.26.819-.578 0-.284-.01-1.04-.017-2.04-3.337.724-4.042-1.61-4.042-1.61-.545-1.386-1.332-1.755-1.332-1.755-1.09-.744.082-.73.082-.73 1.205.086 1.838 1.238 1.838 1.238 1.07 1.833 2.81 1.304 3.493.996.109-.775.419-1.303.762-1.603C7.145 17 4.343 15.97 4.343 11.373c0-1.31.468-2.382 1.236-3.22-.124-.304-.536-1.524.118-3.176 0 0 1.007-.323 3.3 1.23.956-.266 1.983-.4 3.003-.404 1.02.005 2.046.138 3.005.404 2.29-1.553 3.296-1.23 3.296-1.23.655 1.652.243 2.872.12 3.176.77.838 1.233 1.91 1.233 3.22 0 4.61-2.806 5.624-5.478 5.921.43.37.814 1.103.814 2.223 0 1.603-.015 2.898-.015 3.291 0 .321.217.695.825.578C20.565 21.796 24 17.3 24 12c0-6.627-5.373-12-12.001-12" fill="currentColor" />
                </svg>
              </a>
            </li>
            <li>
              <a class="text-indigo-200 hover:text-indigo-100" href="#">
                <span class="sr-only">Twitter</span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" aria-hidden="true">
                  <path d="M7.548 22.501c9.056 0 14.01-7.503 14.01-14.01 0-.213 0-.425-.015-.636A10.02 10.02 0 0024 5.305a9.828 9.828 0 01-2.828.776 4.94 4.94 0 002.165-2.724 9.867 9.867 0 01-3.127 1.195 4.929 4.929 0 00-8.391 4.491A13.98 13.98 0 011.67 3.9a4.928 4.928 0 001.525 6.573A4.887 4.887 0 01.96 9.855v.063a4.926 4.926 0 003.95 4.827 4.917 4.917 0 01-2.223.084 4.93 4.93 0 004.6 3.42A9.88 9.88 0 010 20.289a13.941 13.941 0 007.548 2.209" fill="currentColor" />
                </svg>
              </a>
            </li>
          </ul>
        </div>

        <!-- Contact form -->
        <div class="py-10 px-6 sm:px-10 lg:col-span-2 xl:p-12">
          <h3 class="text-lg font-medium text-gray-900">Senden Sie uns eine Nachricht</h3>
          <form action="#" method="POST" class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
            <div>
              <label for="first_name" class="block text-sm font-medium text-gray-900">Vorname</label>
              <div class="mt-1">
                <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="form-focus-bottom py-3 px-4 block w-full shadow-sm text-gray-900 border-gray-300 rounded-md">
              </div>
            </div>
            <div>
              <label for="last_name" class="block text-sm font-medium text-gray-900">Nachname</label>
              <div class="mt-1">
                <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="form-focus-bottom py-3 px-4 block w-full shadow-sm text-gray-900 border-gray-300 rounded-md">
              </div>
            </div>
            <div>
              <label for="email" class="block text-sm font-medium text-gray-900">E-Mail</label>
              <div class="mt-1">
                <input id="email" name="email" type="email" autocomplete="email" class="form-focus-bottom py-3 px-4 block w-full shadow-sm text-gray-900 border-gray-300 rounded-md">
              </div>
            </div>
            <div>
              <div class="flex justify-between">
                <label for="phone" class="block text-sm font-medium text-gray-900">Telefon</label>
                <span id="phone-optional" class="text-sm text-gray-500">Optional</span>
              </div>
              <div class="mt-1">
                <input type="text" name="phone" id="phone" autocomplete="tel" class="form-focus-bottom py-3 px-4 block w-full shadow-sm text-gray-900 border-gray-300 rounded-md" aria-describedby="phone-optional">
              </div>
            </div>
            <div class="sm:col-span-2">
              <label for="subject" class="block text-sm font-medium text-gray-900">Betreff</label>
              <div class="mt-1">
                <input type="text" name="subject" id="subject" class="form-focus-bottom py-3 px-4 block w-full shadow-sm text-gray-900 border-gray-300 rounded-md">
              </div>
            </div>
            <div class="sm:col-span-2">
              <div class="flex justify-between">
                <label for="message" class="block text-sm font-medium text-gray-900">Nachricht</label>
                <span id="message-max" class="text-sm text-gray-500">Max. 500 Zeichen</span>
              </div>
              <div class="mt-1">
                <textarea id="message" name="message" rows="4" class="form-focus-bottom py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" aria-describedby="message-max"></textarea>
              </div>
            </div>
            <div class="sm:col-span-2 sm:flex sm:justify-end">
              <button type="submit" class="block w-full hover:bg-purple-800 hover:text-white hover:shadow-4xl hover:border-gray-200 hover:text-shadow border-indigo-900 transition-all duration-1000 ease-out py-3 px-5 text-center bg-white border border-transparent rounded-md shadow-md text-base font-medium text-indigo-700 hover:bg-gray-50 sm:inline-block sm:w-auto">
                Submit
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection

@section('javascript') <!-- LandingPage only  Javascript-->

@endsection