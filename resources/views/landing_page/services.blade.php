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
      <br>
      <a class="block w-full hover:bg-purple-800 hover:text-white hover:shadow-4xl hover:border-gray-200 hover:text-shadow border-indigo-900 transition-all duration-1000 ease-out py-3 px-5 text-center bg-white border border-transparent rounded-md shadow-md text-base font-medium text-indigo-700 hover:bg-gray-50 sm:inline-block sm:w-auto" href="#">Termin vereinbaren</a>
      <br>
      <br>
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
  <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1511447333015-45b65e60f6d5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1123&q=80" alt="">
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
      <div class="absolute top-0 p-5 inline-block bg-purple-600 rounded-xl shadow-lg transform -translate-y-1/2">
        <!-- Heroicon name: outline/phone -->
        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
        </svg>
      </div>
      <h3 class="text-xl font-medium text-gray-900">Development</h3>
      <p class="mt-4 text-base text-gray-500">Webdevelopment, Native/Hybride-Apps, Cloud-Dienste, Automatisierung</p>
    </div>
    <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
      <a href="#" class="text-base font-medium text-indigo-700 hover:text-indigo-600">Kontaktieren Sie uns.<span aria-hidden="true"> &rarr;</span></a>
    </div>
  </div>

  <div class="bg-white rounded-2xl shadow-xl">
    <div class="relative pt-16 px-6 pb-8 md:px-8">
      <div class="absolute top-0 p-5 inline-block bg-purple-600 rounded-xl shadow-lg transform -translate-y-1/2">
        <!-- Heroicon name: outline/support -->
        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
        </svg>
      </div>
      <h3 class="text-xl font-medium text-gray-900">Administration</h3>
      <p class="mt-4 text-base text-gray-500">Einrichtung von Serversystemen,  Administration, Absicherung</p>
    </div>
    <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
      <a href="#" class="text-base font-medium text-indigo-700 hover:text-indigo-600">Kontaktieren Sie uns.<span aria-hidden="true"> &rarr;</span></a>
    </div>
  </div>

  <div class="bg-white rounded-2xl shadow-xl">
    <div class="relative pt-16 px-6 pb-8 md:px-8">
      <div class="absolute top-0 p-5 inline-block bg-purple-600 rounded-xl shadow-lg transform -translate-y-1/2">
        <!-- Heroicon name: outline/newspaper -->
        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
        </svg>
      </div>
      <h3 class="text-xl font-medium text-gray-900">Support</h3>
      <p class="mt-4 text-base text-gray-500">IT-Sicherheit, Beratung</p>
    </div>
    <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
      <a href="#" class="text-base font-medium text-indigo-700 hover:text-indigo-600">Kontaktieren Sie uns.<span aria-hidden="true"> &rarr;</span></a>
    </div>
  </div>
</div>
</section>

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white">
<div class="max-w-7xl mx-auto px-4 sm:py-24 sm:px-6 lg:px-2">
<div class="pb-16 xl:flex xl:items-center xl:justify-between">
  <div>
    <h1 class="text-4xl font-extrabold sm:text-5xl sm:tracking-tight">
      <span class="text-gray-900">Wir warten Ihre Anwendung! </span>
      <span class="text-indigo-600">ab $79.99 mtl.</span>
    </h1>
    <p class="mt-5 text-xl text-gray-500">Sie legen Wert auf Sicherheit und Stabilität. Kein Problem mit unserem Basis Wartungspaket.</p>
  </div>
  <a href="#" class="mt-8 w-full bg-indigo-600 border border-transparent px-5 py-3 inline-flex items-center justify-center text-base font-medium rounded-md text-white hover:bg-indigo-700 sm:mt-10 sm:w-auto xl:mt-0">Get started today</a>
</div>
</div>
</div>

</div>
</div>


<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-gradient-to-r from-gray-800 via-purple-700 to-purple-600">
<div class="pt-12 px-4 sm:px-6 lg:px-8 lg:pt-20">
<div class="text-center">
  <h2 class="text-lg leading-6 font-semibold text-gray-300 uppercase tracking-wider">
    Preise
  </h2>
  <p class="mt-2 text-3xl font-extrabold text-white sm:text-4xl lg:text-5xl">
    Unabhängig von der Größe Ihres Geldbeutels
  </p>
  <p class="mt-3 max-w-4xl mx-auto text-xl text-gray-300 sm:mt-5 sm:text-2xl">
    Der Name ist da Einzige was an unserem Standardpaket gewühnlich ist.
  </p>
</div>
</div>

<div class="mt-16 bg-white pb-12 lg:mt-20 lg:pb-20">
<div class="relative z-0">
  <div class="absolute inset-0 h-5/6 bg-gradient-to-r from-gray-800 via-purple-700 to-purple-600 lg:h-2/3"></div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="relative lg:grid lg:grid-cols-7">
      <div class="mx-auto max-w-md lg:mx-0 lg:max-w-none lg:col-start-1 lg:col-end-3 lg:row-start-2 lg:row-end-3">
        <div class="h-full flex flex-col rounded-lg shadow-lg overflow-hidden lg:rounded-none lg:rounded-l-lg">
          <div class="flex-1 flex flex-col">
            <div class="bg-white px-6 py-10">
              <div>
                <h3 class="text-center text-2xl font-medium text-gray-900" id="tier-hobby">
                  Wartung Ihrer Anwendung
                </h3>
                <div class="mt-4 flex items-center justify-center">
                  <span class="px-3 flex items-start text-6xl tracking-tight text-gray-900">
                    <span class="mt-2 mr-2 text-4xl font-medium">
                      $
                    </span>
                    <span class="font-extrabold">
                      79.99
                    </span>
                  </span>
                  <span class="text-xl font-medium text-gray-500">
                    /mtl
                  </span>
                </div>
              </div>
            </div>
            <div class="flex-1 flex flex-col justify-between border-t-2 border-gray-100 p-6 bg-gray-50 sm:p-10 lg:p-6 xl:p-10">
              <ul class="space-y-4">
                <li class="flex items-start">
                  <div class="flex-shrink-0">
                    <!-- Heroicon name: outline/check -->
                    <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                  </div>
                  <p class="ml-3 text-base font-medium text-gray-500">
                    Sicherheit durch regelmäßige Updates
                  </p>
                </li>

                <li class="flex items-start">
                  <div class="flex-shrink-0">
                    <!-- Heroicon name: outline/check -->
                    <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                  </div>
                  <p class="ml-3 text-base font-medium text-gray-500">
                    Umfangreiche Reports
                  </p>
                </li>

                <li class="flex items-start">
                  <div class="flex-shrink-0">
                    <!-- Heroicon name: outline/check -->
                    <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                  </div>
                  <p class="ml-3 text-base font-medium text-gray-500">
                    Scans auf Schwachstellen
                  </p>
                </li>
              </ul>
              <div class="mt-8">
                <div class="rounded-lg shadow-md">
                  <a href="#" class="block w-full text-center rounded-lg border border-transparent bg-white px-6 py-3 text-base font-medium text-indigo-600 hover:bg-gray-50" aria-describedby="tier-hobby">
                    Jetzt Angebot einholen
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-10 max-w-lg mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-start-3 lg:col-end-6 lg:row-start-1 lg:row-end-4">
        <div class="relative z-10 rounded-lg shadow-xl">
          <div class="pointer-events-none absolute inset-0 rounded-lg border-2 border-indigo-600" aria-hidden="true"></div>
          <div class="absolute inset-x-0 top-0 transform translate-y-px">
            <div class="flex justify-center transform -translate-y-1/2">
              <span class="inline-flex rounded-full bg-indigo-600 px-4 py-1 text-sm font-semibold tracking-wider uppercase text-white">
                Am beliebtesten
              </span>
            </div>
          </div>
          <div class="bg-white rounded-t-lg px-6 pt-12 pb-10">
            <div>
              <h3 class="text-center text-3xl font-semibold text-gray-900 sm:-mx-6" id="tier-growth">
                Basis Landingpage
              </h3>
              <div class="mt-4 flex items-center justify-center">
                <span class="px-3 flex items-start text-6xl tracking-tight text-gray-900 sm:text-6xl">
                  <span class="mt-2 mr-2 text-4xl font-medium">
                    ab $
                  </span>
                  <span class="font-extrabold">
                    1449.99
                  </span>
                </span>
                <span class="text-2xl font-medium text-gray-500">
                  
                </span>
              </div>
            </div>
          </div>
          <div class="border-t-2 border-gray-100 rounded-b-lg pt-10 pb-8 px-6 bg-gray-50 sm:px-10 sm:py-10">
            <ul class="space-y-4">
              <li class="flex items-start">
                <div class="flex-shrink-0">
                  <!-- Heroicon name: outline/check -->
                  <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <p class="ml-3 text-base font-medium text-gray-500">
                  Geringe Ladezeiten
                </p>
              </li>

              <li class="flex items-start">
                <div class="flex-shrink-0">
                  <!-- Heroicon name: outline/check -->
                  <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <p class="ml-3 text-base font-medium text-gray-500">
                  High Performance
                </p>
              </li>

              <li class="flex items-start">
                <div class="flex-shrink-0">
                  <!-- Heroicon name: outline/check -->
                  <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <p class="ml-3 text-base font-medium text-gray-500">
                  Anbindung an Google Analytics oder einen anderen Tracking Dienst
                </p>
              </li>

              <li class="flex items-start">
                <div class="flex-shrink-0">
                  <!-- Heroicon name: outline/check -->
                  <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <p class="ml-3 text-base font-medium text-gray-500">
                  Hohe Konvertierungsraten
                </p>
              </li>

              <li class="flex items-start">
                <div class="flex-shrink-0">
                  <!-- Heroicon name: outline/check -->
                  <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <p class="ml-3 text-base font-medium text-gray-500">
                  Perfekt auf Ihr Unternehmen zugeschnitten
                </p>
              </li>
            </ul>
            <div class="mt-10">
              <div class="rounded-lg shadow-md">
                <a href="#" class="block w-full text-center rounded-lg border border-transparent bg-indigo-600 px-6 py-4 text-xl leading-6 font-medium text-white hover:bg-indigo-700" aria-describedby="tier-growth">
                  Kontaktieren Sie uns jetzt
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-10 mx-auto max-w-md lg:m-0 lg:max-w-none lg:col-start-6 lg:col-end-8 lg:row-start-2 lg:row-end-3">
        <div class="h-full flex flex-col rounded-lg shadow-lg overflow-hidden lg:rounded-none lg:rounded-r-lg">
          <div class="flex-1 flex flex-col">
            <div class="bg-white px-6 py-10">
              <div>
                <h3 class="text-center text-2xl font-medium text-gray-900" id="tier-scale">
                  Besondere Wünsche
                </h3>
                <div class="mt-4 flex items-center justify-center">
                  <span class="px-3 flex items-start text-6xl tracking-tight text-gray-900">
                    <span class="mt-2 mr-2 text-4xl font-medium">
                      $
                    </span>
                    <span class="font-extrabold">
                      69.99
                    </span>
                  </span>
                  <span class="text-xl font-medium text-gray-500">
                    /Stunde
                  </span>
                </div>
              </div>
            </div>
            <div class="flex-1 flex flex-col justify-between border-t-2 border-gray-100 p-6 bg-gray-50 sm:p-10 lg:p-6 xl:p-10">
              <ul class="space-y-4">
                <li class="flex items-start">
                  <div class="flex-shrink-0">
                    <!-- Heroicon name: outline/check -->
                    <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                  </div>
                  <p class="ml-3 text-base font-medium text-gray-500">
                    Anbindung externer Dienste
                  </p>
                </li>

                <li class="flex items-start">
                  <div class="flex-shrink-0">
                    <!-- Heroicon name: outline/check -->
                    <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                  </div>
                  <p class="ml-3 text-base font-medium text-gray-500">
                    Animationen
                  </p>
                </li>

                <li class="flex items-start">
                  <div class="flex-shrink-0">
                    <!-- Heroicon name: outline/check -->
                    <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                  </div>
                  <p class="ml-3 text-base font-medium text-gray-500">
                    PenetrationTest
                  </p>
                </li>
              </ul>
              <div class="mt-8">
                <div class="rounded-lg shadow-md">
                  <a href="#" class="block w-full text-center rounded-lg border border-transparent bg-white px-6 py-3 text-base font-medium text-indigo-600 hover:bg-gray-50" aria-describedby="tier-scale">
                    zum Formular
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>



</div>
</div>





@endsection

@section('javascript') <!-- LandingPage only  Javascript-->

@endsection