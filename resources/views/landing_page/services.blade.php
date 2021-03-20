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
          <h2 class="text-base font-semibold text-indigo-600 tracking-wide uppercase"><span class="text-red-400 animate-pulse">Services</span></h2>
          <p class="mt-1 text-4xl font-extrabold text-gray-100 sm:text-5xl sm:tracking-tight lg:text-6xl">Dienstleistungen und mehr</p>
          <p class="max-w-xl mt-5 mx-auto text-xl text-gray-200">Erfahren Sie mehr über unser Angebot. Wir bieten vollumfassende IT-Dienstleistungen an. Von der Programmierung bis zur Beratung.</p>
          <br><br>
          <span class="animate-ping text-gray-100 delay-1000">&#8609;&#8609;</span>
        </div>
      </div>
      
    </div>
  </div>
</div>

<!-- This example requires Tailwind CSS v2.0+ -->




<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white">
  <!-- Header -->
  <div class="relative pb-32 bg-gray-800">
    <div class="absolute inset-0">
      <img class="w-full h-full object-cover" src="{{ asset('img/services2.png')}}" alt="">
      <div class="absolute inset-0 bg-gray-800" style="mix-blend-mode: multiply;" aria-hidden="true"></div>
    </div>
    <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
      <h1 class="text-4xl font-extrabold tracking-tight text-white md:text-5xl lg:text-6xl">Was wir Ihnen anbieten.</h1>
      <p class="mt-6 max-w-3xl text-xl text-gray-300">Umfassende IT-Dienstleistungen. </p>
    </div>
  </div>

  <!-- Overlapping cards -->
  <section class="-mt-32 max-w-7xl mx-auto relative z-10 pb-32 px-4 sm:px-6 lg:px-8" aria-labelledby="contact-heading">
    <h2 class="sr-only" id="contact-heading">Contact us</h2>
    <div class="grid grid-cols-1 gap-y-20 lg:grid-cols-3 lg:gap-y-0 lg:gap-x-8">
      <div class="bg-white rounded-2xl shadow-xl">
        <div class="relative pt-16 px-6 pb-8 md:px-8">
          <div class="absolute top-0 p-5 inline-block bg-indigo-600 rounded-xl shadow-lg transform -translate-y-1/2">
            <!-- Heroicon name: outline/phone -->
            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
          </div>
          <h3 class="text-xl font-medium text-gray-900">Development</h3>
          <p class="mt-4 text-base text-gray-500">Websites, Webapplications,</p>
        </div>
        <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
          <a href="#" class="text-base font-medium text-indigo-700 hover:text-indigo-600">Kontaktieren Sie uns.<span aria-hidden="true"> &rarr;</span></a>
        </div>
      </div>

      <div class="bg-white rounded-2xl shadow-xl">
        <div class="relative pt-16 px-6 pb-8 md:px-8">
          <div class="absolute top-0 p-5 inline-block bg-indigo-600 rounded-xl shadow-lg transform -translate-y-1/2">
            <!-- Heroicon name: outline/support -->
            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
          </div>
          <h3 class="text-xl font-medium text-gray-900">Administration</h3>
          <p class="mt-4 text-base text-gray-500">Servermanagement,  Automatisierung</p>
        </div>
        <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
          <a href="#" class="text-base font-medium text-indigo-700 hover:text-indigo-600">Kontaktieren Sie uns.<span aria-hidden="true"> &rarr;</span></a>
        </div>
      </div>

      <div class="bg-white rounded-2xl shadow-xl">
        <div class="relative pt-16 px-6 pb-8 md:px-8">
          <div class="absolute top-0 p-5 inline-block bg-indigo-600 rounded-xl shadow-lg transform -translate-y-1/2">
            <!-- Heroicon name: outline/newspaper -->
            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
            </svg>
          </div>
          <h3 class="text-xl font-medium text-gray-900">Support</h3>
          <p class="mt-4 text-base text-gray-500">IT-Security</p>
        </div>
        <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
          <a href="#" class="text-base font-medium text-indigo-700 hover:text-indigo-600">Kontaktieren Sie uns.<span aria-hidden="true"> &rarr;</span></a>
        </div>
      </div>
    </div>
  </section>
</div>






@endsection

@section('javascript') <!-- LandingPage only  Javascript-->
<script>
let scrollToHelper = () =>{
  window.scrollTo({
  top: 0,
  left: 175,
  behavior: 'smooth'
});
}
</script>
@endsection