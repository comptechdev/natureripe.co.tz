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
<section class="pt-20 px-16 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
   <div class="container">
      <div class="flex flex-wrap justify-between items-center -mx-4">
         <div class="w-full lg:w-6/12 px-4">
            <div class="flex items-center -mx-3 sm:-mx-4">
               <div class="w-full xl:w-1/2 px-3 sm:px-4">
                  <div class="py-3 sm:py-4">
                     <img
                        src="https://cdn.tailgrids.com/1.0/assets/images/services/image-1.jpg"
                        alt=""
                        class="rounded-2xl w-full"
                        />
                  </div>
                  <div class="py-3 sm:py-4">
                     <img
                        src="https://cdn.tailgrids.com/1.0/assets/images/services/image-2.jpg"
                        alt=""
                        class="rounded-2xl w-full"
                        />
                  </div>
               </div>
               <div class="w-full xl:w-1/2 px-3 sm:px-4">
                  <div class="my-4 relative z-10">
                     <img
                        src="https://cdn.tailgrids.com/1.0/assets/images/services/image-3.jpg"
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

    <div class="grid md:grid-cols-3">
        <div>
           <img src="{{ asset('img/one.png') }}" alt="one" class="py-10">
           <h3 class="text-3xl font-semibold">Find location for store</h3>
           <p class="py-5">Praesent sit amet metus id sapien ullamcorper cursus posuere quis ex. 
                In faucibus nec metus sit amet mollis. Aliquam vehicula tellus ut 
                scelerisque scelerisque. Fusce aliquet blandit lorem, eget scelerisque sapien.</p>
        </div>
        <div>
           <img src="{{ asset('img/two.png') }}" alt="one" class="py-10">
           <h3 class="text-3xl font-semibold">Make an appointment</h3>
           <p class="py-5">Praesent sit amet metus id sapien ullamcorper cursus posuere quis ex. 
                In faucibus nec metus sit amet mollis. Aliquam vehicula tellus ut 
                scelerisque scelerisque. Fusce aliquet blandit lorem, eget scelerisque sapien.</p>
        </div>
        <div>
           <img src="{{ asset('img/three.png') }}" alt="one" class="py-10">
           <h3 class="text-3xl font-semibold">Become our partner</h3>
           <p class="py-5">Praesent sit amet metus id sapien ullamcorper cursus posuere quis ex. 
                In faucibus nec metus sit amet mollis. Aliquam vehicula tellus ut 
                scelerisque scelerisque. Fusce aliquet blandit lorem, eget scelerisque sapien.</p>
        </div>
    </div>

</div>



<!-- ====== About Section Start -->

<!-- ====== About Section End -->


@endsection