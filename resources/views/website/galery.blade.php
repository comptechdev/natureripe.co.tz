@extends('layouts.website')

@section('content')

<div class="container">

<div x-data=" {
   openTab: 1,
   activeClasses: 'bg-primary text-red',
   inactiveClasses: 'text-body-color hover:bg-primary hover:text-black',
   }
   " class="w-full mb-14">
   <div class="
      flex flex-wrap
      rounded-lg
      py-3
      px-4
      border border-[#E4E4E4]
      ">
      <a href="javascript:void(0)" @click="openTab = 1" :class="openTab === 1 ? activeClasses : inactiveClasses" class="text-sm md:text-base font-medium rounded-md py-3 px-4 lg:px-6 bg-primary text-black">
      All
      </a>
      <a href="javascript:void(0)" @click="openTab = 2" :class="openTab === 2 ? activeClasses : inactiveClasses" class="text-sm md:text-base font-medium rounded-md py-3 px-4 lg:px-6 text-body-color hover:bg-primary hover:text-black">
      Ou Nursery
      </a>
      <a href="javascript:void(0)" @click="openTab = 3" :class="openTab === 3 ? activeClasses : inactiveClasses" class="text-sm md:text-base font-medium rounded-md py-3 px-4 lg:px-6 text-body-color hover:bg-primary hover:text-black">
      mangoes
      </a>
   </div>
   <div>
      <div x-show="openTab === 1" class="text-body-color text-base leading-relaxed p-6">
<section class="overflow-hidden text-gray-700 ">
  <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
    <div class="flex flex-wrap -m-1 md:-m-2">
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
            src="{{ asset('img/1.jpeg') }}">
        </div>
      </div>
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
            src="{{ asset('img/10.jpeg') }}">
        </div>
      </div>
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
            src="{{ asset('img/4.jpeg') }}">
        </div>
      </div>
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
            src="{{ asset('img/2.jpeg') }}">
        </div>
      </div>
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
            src="{{ asset('img/1.jpeg') }}">
        </div>
      </div>
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
            src="{{ asset('img/12.jpeg') }}">
        </div>
      </div>
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
            src="{{ asset('img/6.jpeg') }}">
        </div>
      </div>
    </div>
  </div>
</section>
      </div>
      <div x-show="openTab === 2" class="text-body-color text-base leading-relaxed p-6" style="display: none;">
      <section class="overflow-hidden text-gray-700 ">
  <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
    <div class="flex flex-wrap -m-1 md:-m-2">
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
            src="{{ asset('img/4.jpeg') }}">
        </div>
      </div>
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
            src="{{ asset('img/1.jpeg') }}">
        </div>
      </div>
    </div>
  </div>
</section>
      </div>
      <div x-show="openTab === 3" class="text-body-color text-base leading-relaxed p-6" style="display: none;">
      <section class="overflow-hidden text-gray-700 ">
  <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
    <div class="flex flex-wrap -m-1 md:-m-2">
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
            src="{{ asset('img/10.jpeg') }}">
        </div>
      </div>
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
            src="{{ asset('img/12.jpeg') }}">
        </div>
      </div>
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
            src="{{ asset('img/6.jpeg') }}">
        </div>
      </div>
    </div>
  </div>
</section>
      </div>
      <div x-show="openTab === 4" class="text-body-color text-base leading-relaxed p-6" style="display: none;">
       <section>
        
       </section>
      </div>
   </div>
</div>

</div>




<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
@endsection