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
          <h2 class="text-base font-semibold text-indigo-600 tracking-wide uppercase"><span class="text-red-400 animate-pulse">Blog</span></h2>
          <p class="mt-1 text-4xl font-extrabold text-gray-100 sm:text-5xl sm:tracking-tight lg:text-6xl">Besseres SEO durch Blogs</p>
          <p class="max-w-xl mt-5 mx-auto text-xl text-gray-200">Wenn Sie über einen Webauftritt verfügen oder damit starten wollen, sollten Sie sich überlegen, zusätzlich einen Blog zu führen. Dadurch haben Sie die Möglichkeit Ihren Traffic zu steigen und mehr potentielle Kunden könnten auf Sie aufmerksam werden.</p>
          <br><br>
          <span class="animate-ping text-gray-100 delay-1000">&#8609;&#8609;</span> 
        </div>
      </div>
    </div>
  </div>
</div>

@foreach ($posts as $post)


<section class="bg-gray-100 dark:bg-gray-900 lg:py-12 lg:flex lg:justify-center">
  <hr>
        
  <div class="bg-white dark:bg-gray-800 lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg lg:rounded-lg">
    <div class="lg:w-1/2">
      <div class="h-64 bg-cover lg:rounded-lg lg:h-full" style="background-image:url('{{ asset($post->picture) }}')"></div>
    </div>

    <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-1/2">
      <h5>{{ $post->genre }}</h5><br>
      <h2 class="text-2xl font-bold text-gray-800 dark:text-white md:text-3xl">{{ $post->headline }}</h2>
      <p class="mt-4 text-gray-600 dark:text-gray-400">{{ $post->description }}</p>
                
      <div class="mt-8">
      <a class="block w-full hover:bg-purple-800 hover:text-white hover:shadow-4xl hover:border-gray-200 hover:text-shadow border-indigo-900 transition-all duration-1000 ease-out py-3 px-5 text-center bg-white border border-transparent rounded-md shadow-md text-base font-medium text-indigo-700 hover:bg-gray-50 sm:inline-block sm:w-auto" href="#">Weiterlesen</a>
      </div>

      {{ $post->created_at }}<br>
    <span> Von: {{ $post->user->name }} </span>

    </div>
    
  </div>
  <hr>
</section>



@endforeach
@endsection

@section('javascript') <!-- LandingPage only  Javascript-->

@endsection