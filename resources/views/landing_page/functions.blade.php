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
          <h2 class="text-base font-semibold text-indigo-600 tracking-wide uppercase"><span class="text-red-400 animate-pulse">Beispielfunktionen</span></h2>
          <p class="mt-1 text-4xl font-extrabold text-gray-100 sm:text-5xl sm:tracking-tight lg:text-6xl">Funktionen und APIs</p>
          <p class="max-w-xl mt-5 mx-auto text-xl text-gray-200">Anhand dieser Seite zeigen wir Ihnen denkbare Funktionen, über die Ihre Webanwendung verfügen könnte.</p>
          <br><br>
          <span class="animate-ping text-gray-100 delay-1000">&#8609;&#8609;</span> 
        </div>
      </div>
    </div>
  </div>
</div>

</div></div>


<section class="w-screen">

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="py-12 bg-white">
  <div class="max-w-xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
    <h2 class="sr-only">A better way to send money.</h2>
    <dl class="space-y-10 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-8">
      <div>
        <dt>
          <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
            <!-- Heroicon name: outline/globe-alt -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
            </svg>
          </div>
          <p class="mt-5 text-lg leading-6 font-medium text-gray-900">Competitive exchange rates</p>
        </dt>
        <dd class="mt-2 text-base text-gray-500">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
        </dd>
      </div>

      <div>
        <dt>
          <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
            <!-- Heroicon name: outline/scale -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
            </svg>
          </div>
          <p class="mt-5 text-lg leading-6 font-medium text-gray-900">No hidden fees</p>
        </dt>
        <dd class="mt-2 text-base text-gray-500">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
        </dd>
      </div>

      <div>
        <dt>
          <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
            <!-- Heroicon name: outline/lightning-bolt -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
          </div>
          <p class="mt-5 text-lg leading-6 font-medium text-gray-900">Transfers are instant</p>
        </dt>
        <dd class="mt-2 text-base text-gray-500">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
        </dd>
      </div>
    </dl>
  </div>
</div>

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="py-12 bg-white">
  <div class="max-w-xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
    <h2 class="sr-only">A better way to send money.</h2>
    <dl class="space-y-10 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-8">
      <div>
        <dt>
          <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
            <!-- Heroicon name: outline/globe-alt -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
            </svg>
          </div>
          <p class="mt-5 text-lg leading-6 font-medium text-gray-900">Competitive exchange rates</p>
        </dt>
        <dd class="mt-2 text-base text-gray-500">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
        </dd>
      </div>

      <div>
        <dt>
          <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
            <!-- Heroicon name: outline/scale -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
            </svg>
          </div>
          <p class="mt-5 text-lg leading-6 font-medium text-gray-900">No hidden fees</p>
        </dt>
        <dd class="mt-2 text-base text-gray-500">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
        </dd>
      </div>

      <div>
        <dt>
          <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
            <!-- Heroicon name: outline/lightning-bolt -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
          </div>
          <p class="mt-5 text-lg leading-6 font-medium text-gray-900">Transfers are instant</p>
        </dt>
        <dd class="mt-2 text-base text-gray-500">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
        </dd>
      </div>
    </dl>
  </div>
</div>


<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-gray-50 pt-16 overflow-hidden sm:pt-24 lg:pt-32">
  <div class="mx-auto max-w-md px-4 text-center sm:px-6 sm:max-w-3xl lg:px-8 lg:max-w-7xl">
    <div>
      <h2 class="text-base font-semibold tracking-wider text-indigo-600 uppercase">Serverless</h2>
      <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">
        No server? No problem.
      </p>
      <p class="mt-5 max-w-prose mx-auto text-xl text-gray-500">
        Phasellus lorem quam molestie id quisque diam aenean nulla in. Accumsan in quis quis nunc, ullamcorper malesuada. Eleifend condimentum id viverra nulla.
      </p>
    </div>
    <div class="mt-12 -mb-10 sm:-mb-24 lg:-mb-80">
      <img class="rounded-lg shadow-xl ring-1 ring-black ring-opacity-5" src="https://tailwindui.com/img/component-images/top-nav-with-multi-column-layout-screenshot.jpg" alt="">
    </div>
  </div>
</div>



</section>




@endsection

@section('javascript') <!-- LandingPage only  Javascript-->

@endsection