@extends('layouts.website')

@section('content')
<!-- <div class="container mx-auto">
  <div class="grid md:grid-cols-2 py-5 md:py-10">
      <div class="py-10 md:py-2">
          <h1 class="text-2xl md:text-4xl pb-3 md:pb-5 pr-48 font-bold md:font-bold">We are a chain of stores with over 3500 points of sale across UK</h1>
          <p class="pr-10 md:text-2xl">Duis egestas, felis sit amet mattis cursus, ligula justo tempor diam, 
            id pellentesque odio dui eu nisi. Quisque rhoncus leo sed eleifend consequat.ligula justo tempor diam, 
            id pellentesque odio dui eu nisi. Quisque rhoncus leo sed eleifend consequat.ligula justo tempor diam, 
            id pellentesque odio dui eu nisi. Quisque rhoncus leo sed eleifend consequat.</p>
         <div class="pt-10">
            <button class="bg-transparent hover:bg-red-600 text-red-600 font-semibold hover:text-white py-2 px-12 border border-red-600 hover:border-transparent rounded">
                Fint Store
            </button>
        </div>
      </div>
      <div class="pt-2">
          <img src="{{ asset('img/ab1.webp') }}" alt="">
      </div>
  </div>
</div>   -->
<div class="container-fluid  h-screen bg-auto md:bg-contain" style="background-image: url('{{asset("img/htr.png") }}'); background-size: cover;background-repeat: no-repeat;background-position:center;">
     <div class="grid md:grid-cols-7">
         <div class="md:col-span-4">&nbsp;</div>
         <div class="md:col-span-3 py-16 md:py-36 pr-14 md:pr-32">
             <h1 class="py-3 font-extrabold">THE HISTORY OF NATURERIPE® BRAND</h1>
             <p>NATURERIPE® Brand products are made by NatureRipe Company, 
                 founded by NatureRipe in Year .
                  It was here that they developed the recipe for NATURERIPE® Original 
                  Red Pepper Sauce that's been passed down from generation to generation.
                   To this day, the company is still family-owned and -operated 
                   on that very same island.</p>
         </div>
     </div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2">
    <div class="flex justify-center">
        <img src="{{ asset('img/a1.png') }}" alt="1516404" class="w-full">
        <div class="absolute text-center pt-5 md:pt-10 w-3/4 md:w-2/5 text-white ">
            <h1 class="text-center text-xl md:text-4xl font-black">RIPE VISION</h1>
            <p class="text-center text-sm md:text-2xl pt-5">We foresee NatureRipe Kilimanjaro Ltd to be recognized leaders in Africa for fresh Tanzanian fruits and savory products with reputation that is claimed
            by Tanzania business community. We are confident at delivering the best products at the lowest prices.</p> 
        <div class="pt-10 pl-5 pb-5">
            <button class="bg-red-600 text-white hover:bg-white hover:border-2 hover:border-red-600 hover:text-red-600 p-3">VISIT RIPE GARDENS</button>
        </div>
        </div>
    </div>
    <div class="flex justify-center">
        <img src="{{ asset('img/msv.png') }}" alt="1516404">
        <div class="absolute pt-5 md:pt-10 text-center w-3/4 md:w-2/5 text-white ">
            <h1 class="text-center text-xl md:text-4xl font-black">RIPE MISSION</h1>
            <p class="text-center text-sm md:text-2xl pt-5">Our core competence is in produce, process and export unique Tanzanian products. 
                We are committed to be one of the largest fruit producers with full commitment of benefiting our customers with full values of 
                their money.
           s</p> 
        <div class="pt-10 pl-5 pb-5">
            <button class="bg-red-600 text-white hover:bg-white hover:border-2 hover:border-red-600 hover:text-red-600 p-3">VISIT RIPE GARDENS</button>
        </div>
        </div>
    </div>
</div>
<section class="pt-20 px-16 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
   <div class="container">
      <div class="flex flex-wrap justify-between items-center -mx-4">
         <div class="w-full lg:w-6/12 px-4">
            <div class="flex items-center -mx-3 sm:-mx-4">
               <div class="w-full xl:w-1/2 px-3 sm:px-4">
                  <div class="py-3 sm:py-4">
                     <img
                        src="{{ asset('img/embe.jpeg') }}"
                        alt=""
                        class="rounded-2xl w-full"
                        />
                  </div>
                  <div class="py-3 sm:py-4">
                     <img
                        src="{{ asset('img/kiwanda.jpeg') }}"
                        alt=""
                        class="rounded-2xl w-full"
                        />
                  </div>
               </div>
               <div class="w-full xl:w-1/2 px-3 sm:px-4">
                  <div class="my-4 relative z-10">
                     <img
                        src="{{ asset('img/kwnd.jpeg') }}"
                        alt=""
                        class="rounded-2xl w-full"
                        />
                     <span class="absolute -right-7 -bottom-7 z-[-1]">
                        <svg
                           width="134"
                           height="106"
                           viewBox="0 0 134 106"
                           fill="none"
                           xmlns="http://www.w3.org/2000/svg"
                           >
                           <circle
                              cx="1.66667"
                              cy="104"
                              r="1.66667"
                              transform="rotate(-90 1.66667 104)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="16.3333"
                              cy="104"
                              r="1.66667"
                              transform="rotate(-90 16.3333 104)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="31"
                              cy="104"
                              r="1.66667"
                              transform="rotate(-90 31 104)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="45.6667"
                              cy="104"
                              r="1.66667"
                              transform="rotate(-90 45.6667 104)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="60.3334"
                              cy="104"
                              r="1.66667"
                              transform="rotate(-90 60.3334 104)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="88.6667"
                              cy="104"
                              r="1.66667"
                              transform="rotate(-90 88.6667 104)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="117.667"
                              cy="104"
                              r="1.66667"
                              transform="rotate(-90 117.667 104)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="74.6667"
                              cy="104"
                              r="1.66667"
                              transform="rotate(-90 74.6667 104)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="103"
                              cy="104"
                              r="1.66667"
                              transform="rotate(-90 103 104)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="132"
                              cy="104"
                              r="1.66667"
                              transform="rotate(-90 132 104)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="1.66667"
                              cy="89.3333"
                              r="1.66667"
                              transform="rotate(-90 1.66667 89.3333)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="16.3333"
                              cy="89.3333"
                              r="1.66667"
                              transform="rotate(-90 16.3333 89.3333)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="31"
                              cy="89.3333"
                              r="1.66667"
                              transform="rotate(-90 31 89.3333)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="45.6667"
                              cy="89.3333"
                              r="1.66667"
                              transform="rotate(-90 45.6667 89.3333)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="60.3333"
                              cy="89.3338"
                              r="1.66667"
                              transform="rotate(-90 60.3333 89.3338)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="88.6667"
                              cy="89.3338"
                              r="1.66667"
                              transform="rotate(-90 88.6667 89.3338)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="117.667"
                              cy="89.3338"
                              r="1.66667"
                              transform="rotate(-90 117.667 89.3338)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="74.6667"
                              cy="89.3338"
                              r="1.66667"
                              transform="rotate(-90 74.6667 89.3338)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="103"
                              cy="89.3338"
                              r="1.66667"
                              transform="rotate(-90 103 89.3338)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="132"
                              cy="89.3338"
                              r="1.66667"
                              transform="rotate(-90 132 89.3338)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="1.66667"
                              cy="74.6673"
                              r="1.66667"
                              transform="rotate(-90 1.66667 74.6673)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="1.66667"
                              cy="31.0003"
                              r="1.66667"
                              transform="rotate(-90 1.66667 31.0003)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="16.3333"
                              cy="74.6668"
                              r="1.66667"
                              transform="rotate(-90 16.3333 74.6668)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="16.3333"
                              cy="31.0003"
                              r="1.66667"
                              transform="rotate(-90 16.3333 31.0003)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="31"
                              cy="74.6668"
                              r="1.66667"
                              transform="rotate(-90 31 74.6668)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="31"
                              cy="31.0003"
                              r="1.66667"
                              transform="rotate(-90 31 31.0003)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="45.6667"
                              cy="74.6668"
                              r="1.66667"
                              transform="rotate(-90 45.6667 74.6668)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="45.6667"
                              cy="31.0003"
                              r="1.66667"
                              transform="rotate(-90 45.6667 31.0003)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="60.3333"
                              cy="74.6668"
                              r="1.66667"
                              transform="rotate(-90 60.3333 74.6668)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="60.3333"
                              cy="30.9998"
                              r="1.66667"
                              transform="rotate(-90 60.3333 30.9998)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="88.6667"
                              cy="74.6668"
                              r="1.66667"
                              transform="rotate(-90 88.6667 74.6668)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="88.6667"
                              cy="30.9998"
                              r="1.66667"
                              transform="rotate(-90 88.6667 30.9998)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="117.667"
                              cy="74.6668"
                              r="1.66667"
                              transform="rotate(-90 117.667 74.6668)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="117.667"
                              cy="30.9998"
                              r="1.66667"
                              transform="rotate(-90 117.667 30.9998)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="74.6667"
                              cy="74.6668"
                              r="1.66667"
                              transform="rotate(-90 74.6667 74.6668)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="74.6667"
                              cy="30.9998"
                              r="1.66667"
                              transform="rotate(-90 74.6667 30.9998)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="103"
                              cy="74.6668"
                              r="1.66667"
                              transform="rotate(-90 103 74.6668)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="103"
                              cy="30.9998"
                              r="1.66667"
                              transform="rotate(-90 103 30.9998)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="132"
                              cy="74.6668"
                              r="1.66667"
                              transform="rotate(-90 132 74.6668)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="132"
                              cy="30.9998"
                              r="1.66667"
                              transform="rotate(-90 132 30.9998)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="1.66667"
                              cy="60.0003"
                              r="1.66667"
                              transform="rotate(-90 1.66667 60.0003)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="1.66667"
                              cy="16.3333"
                              r="1.66667"
                              transform="rotate(-90 1.66667 16.3333)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="16.3333"
                              cy="60.0003"
                              r="1.66667"
                              transform="rotate(-90 16.3333 60.0003)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="16.3333"
                              cy="16.3333"
                              r="1.66667"
                              transform="rotate(-90 16.3333 16.3333)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="31"
                              cy="60.0003"
                              r="1.66667"
                              transform="rotate(-90 31 60.0003)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="31"
                              cy="16.3333"
                              r="1.66667"
                              transform="rotate(-90 31 16.3333)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="45.6667"
                              cy="60.0003"
                              r="1.66667"
                              transform="rotate(-90 45.6667 60.0003)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="45.6667"
                              cy="16.3333"
                              r="1.66667"
                              transform="rotate(-90 45.6667 16.3333)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="60.3333"
                              cy="60.0003"
                              r="1.66667"
                              transform="rotate(-90 60.3333 60.0003)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="60.3333"
                              cy="16.3333"
                              r="1.66667"
                              transform="rotate(-90 60.3333 16.3333)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="88.6667"
                              cy="60.0003"
                              r="1.66667"
                              transform="rotate(-90 88.6667 60.0003)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="88.6667"
                              cy="16.3333"
                              r="1.66667"
                              transform="rotate(-90 88.6667 16.3333)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="117.667"
                              cy="60.0003"
                              r="1.66667"
                              transform="rotate(-90 117.667 60.0003)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="117.667"
                              cy="16.3333"
                              r="1.66667"
                              transform="rotate(-90 117.667 16.3333)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="74.6667"
                              cy="60.0003"
                              r="1.66667"
                              transform="rotate(-90 74.6667 60.0003)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="74.6667"
                              cy="16.3333"
                              r="1.66667"
                              transform="rotate(-90 74.6667 16.3333)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="103"
                              cy="60.0003"
                              r="1.66667"
                              transform="rotate(-90 103 60.0003)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="103"
                              cy="16.3333"
                              r="1.66667"
                              transform="rotate(-90 103 16.3333)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="132"
                              cy="60.0003"
                              r="1.66667"
                              transform="rotate(-90 132 60.0003)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="132"
                              cy="16.3333"
                              r="1.66667"
                              transform="rotate(-90 132 16.3333)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="1.66667"
                              cy="45.3333"
                              r="1.66667"
                              transform="rotate(-90 1.66667 45.3333)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="1.66667"
                              cy="1.66683"
                              r="1.66667"
                              transform="rotate(-90 1.66667 1.66683)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="16.3333"
                              cy="45.3333"
                              r="1.66667"
                              transform="rotate(-90 16.3333 45.3333)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="16.3333"
                              cy="1.66683"
                              r="1.66667"
                              transform="rotate(-90 16.3333 1.66683)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="31"
                              cy="45.3333"
                              r="1.66667"
                              transform="rotate(-90 31 45.3333)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="31"
                              cy="1.66683"
                              r="1.66667"
                              transform="rotate(-90 31 1.66683)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="45.6667"
                              cy="45.3333"
                              r="1.66667"
                              transform="rotate(-90 45.6667 45.3333)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="45.6667"
                              cy="1.66683"
                              r="1.66667"
                              transform="rotate(-90 45.6667 1.66683)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="60.3333"
                              cy="45.3338"
                              r="1.66667"
                              transform="rotate(-90 60.3333 45.3338)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="60.3333"
                              cy="1.66683"
                              r="1.66667"
                              transform="rotate(-90 60.3333 1.66683)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="88.6667"
                              cy="45.3338"
                              r="1.66667"
                              transform="rotate(-90 88.6667 45.3338)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="88.6667"
                              cy="1.66683"
                              r="1.66667"
                              transform="rotate(-90 88.6667 1.66683)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="117.667"
                              cy="45.3338"
                              r="1.66667"
                              transform="rotate(-90 117.667 45.3338)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="117.667"
                              cy="1.66683"
                              r="1.66667"
                              transform="rotate(-90 117.667 1.66683)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="74.6667"
                              cy="45.3338"
                              r="1.66667"
                              transform="rotate(-90 74.6667 45.3338)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="74.6667"
                              cy="1.66683"
                              r="1.66667"
                              transform="rotate(-90 74.6667 1.66683)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="103"
                              cy="45.3338"
                              r="1.66667"
                              transform="rotate(-90 103 45.3338)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="103"
                              cy="1.66683"
                              r="1.66667"
                              transform="rotate(-90 103 1.66683)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="132"
                              cy="45.3338"
                              r="1.66667"
                              transform="rotate(-90 132 45.3338)"
                              fill="#3056D3"
                              />
                           <circle
                              cx="132"
                              cy="1.66683"
                              r="1.66667"
                              transform="rotate(-90 132 1.66683)"
                              fill="#3056D3"
                              />
                        </svg>
                     </span>
                  </div>
               </div>
            </div>
         </div>
         <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
            <div class="mt-10 lg:mt-0">
               <span class="font-semibold text-lg text-primary mb-2 block">
               Why Choose Us
               </span>
               <h2 class="font-bold text-3xl sm:text-4xl text-dark mb-8">
                  Make your customers happy by giving services.
               </h2>
               <p class="text-base text-body-color mb-8">
                  It is a long established fact that a reader will be distracted
                  by the readable content of a page when looking at its layout.
                  The point of using Lorem Ipsum is that it has a more-or-less.
               </p>
               <p class="text-base text-body-color mb-12">
                  A domain name is one of the first steps to establishing your
                  brand. Secure a consistent brand image with a domain name that
                  matches your business.
               </p>
               <a
                  href="javascript:void(0)"
                  class="
                  py-4
                  px-10
                  lg:px-8
                  xl:px-10
                  inline-flex
                  items-center
                  justify-center
                  text-center text-white text-base
                  bg-primary
                  hover:bg-opacity-90
                  font-normal
                  rounded-lg
                  "
                  >
               Get Started
               </a>
            </div>
         </div>
      </div>
   </div>
</section>


<div class="container mx-auto py-20 bg-slate-50 px-5">
    <h1 class="font-bold text-4xl text-center md:py-14">Our raw materials</h1>
    <div class="grid md:grid-cols-3 gap-5">
        <div class="text-center p-7 shadow-2xl rounded-3xl ">
                <h3 class="py-5 text-red-600 font-bold">Mango</h3>
                <h2 class="text-3xl font-semibold">Every monday and wednesday</h2>
                <img src="{{ asset('img/mg.png') }}" alt="mg" class="p-10">
        </div>
        <div class="text-center p-7 shadow-2xl rounded-3xl">
                <h3 class="py-5 text-red-600 font-bold">Ukwaju</h3>
                <h2 class="text-3xl font-semibold">From Local Farmers</h2>
                <img src="{{ asset('img/uk.png') }}" alt="mg" class="p-10">
        </div>
        <div class="text-center p-7 shadow-2xl rounded-3xl ">
                <h3 class="py-5 text-red-600 font-bold">Groundnuts</h3>
                <h2 class="text-3xl font-semibold">Every monday and wednesday</h2>
                <img src="{{ asset('img/gn.png') }}" alt="mg" class="p-10">
        </div>
    </div>
</div>

<!-- <div class="container mx-auto bg-red-600 py-5 rounded-tl-3xl rounded-br-3xl">
   <div class="grid md:grid-cols-2 p-20 text-white">
       <div>
                <h3 class="py-5 text-black font-bold">Partner</h3>
                <h1 class="text-4xl font-bold">Join our Team and open a business that will guarantee you income</h1>
                <img src="{{ asset('img/abc.webp') }}" alt="mg" class="pt-10">
       </div>
       <div class="px-5 text-white">
            <p class="py-14">Praesent sit amet metus id sapien ullamcorper cursus posuere quis ex. 
                In faucibus nec metus sit amet mollis. Aliquam vehicula tellus ut 
                scelerisque scelerisque. Fusce aliquet blandit lorem, eget scelerisque sapien.</p>
                <h3 class="pt-7 tbext-black font-bold text-3xl">276 cities & towns</h3>
                <h3 class="text-black font-bold">276 cities & towns</h3>
                <h1 class="py-10 text-4xl font-bold">We are a chain of stores with over 60 points of sale 
                our network is growing very fast.</h1>
                <h1 class="py-7 text-4xl font-bold">Thanks to our patners, our network is growing very fast.
                    Get Intouch with us now</h1>
                
       </div>
   </div>

</div> -->
<div class="container mx-auto py-20 px-8">
           <h1 class="text-4xl font-extrabold text-center pb-10 border-b-2">Our Values</h1>

    <div class="grid md:grid-cols-3 space-x-4 md:space-x-6">
        <div>
           <img src="{{ asset('img/one.png') }}" alt="one" class="py-10">
           <h3 class="text-3xl font-semibold">Excellence in quality products</h3>
           <p class="py-5">In food and beverage industry, product quality is 
              one dimension that could able to judge by the consumers after
               the dining based on the taste of the food,.</p>
        </div>
        <div>
           <img src="{{ asset('img/two.png') }}" alt="one" class="py-10">
           <h3 class="text-3xl font-semibold">Integrity and reliability</h3>
           <p class="py-5">We establish open and honest relationships. 
              We pursue relationships based on transparency, persistence, 
              mutual trust and integrity with our employees,</p>
        </div>
        <div>
           <img src="{{ asset('img/two.png') }}" alt="one" class="py-10">
           <h3 class="text-3xl font-semibold">Integrity and reliability</h3>
           <p class="py-5">We establish open and honest relationships. 
              We pursue relationships based on transparency, persistence, 
              mutual trust and integrity with our employees,</p>
        </div>
    </div>

</div>



<!-- ====== About Section Start -->

<!-- ====== About Section End -->


@endsection