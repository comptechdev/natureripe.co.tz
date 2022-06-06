@extends('layouts.website')

@section('content')
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
<div class="container-fluid  h-screen bg-auto md:bg-contain"></div>






<div class="container min-h-min" style="background-image: url('{{asset("img/timeline-section-header-bg-desktop-5x.png") }}'); background-size: cover;background-repeat: no-repeat;background-position:center;">
   <div class="grid md:grid-cols-9">
       <div class="md:col-span-2">&nbsp;</div>
       <div class="md:col-span-5 text-center font-bold mt-48 mb-80"><h1>NATURERIPE BRAND</h1></div>
       <div class="md:col-span-2">&nbsp;</div>
   </div>

<h1 class="text-4xl font-semibold text-center">Our Values</h1>
<div class="grid grid-cols-9">
    <div class="col-span-3 px-6">
        <img src="{{ asset('img/one.png') }}" alt="one" class="py-10">
            <h1 class="text-2xl font-semibold">Find location for store</h1>
            <p class="py-5">Praesent sit amet metus id sapien ullamcorper cursus posuere quis ex. 
                    In faucibus nec metus sit amet mollis. Aliquam vehicula tellus ut 
                    scelerisque scelerisque. Fusce aliquet blandit lorem, eget scelerisque sapien.</p>
    </div>
    <div class="col-span-3 px-6">
        <img src="{{ asset('img/two.png') }}" alt="one" class="py-10">
            <h1 class="text-3xl font-semibold">Excellence in quality products</h1>
            <p class="py-5">in food and beverage industry, product quality is one dimension that 
                could able to judge by the consumers after the dining based on the taste of the food,.</p>
    </div>
    <div class="col-span-3 px-6">
        <img src="{{ asset('img/three.png') }}" alt="one" class="py-10">
            <h1 class="text-2xl font-semibold">Integrity and reliability</h1>
            <p class="py-5">We establish open and honest relationships. We pursue relationships based on 
                transparency, persistence, mutual trust and integrity with our employees,</p>
    </div>
  

</div>

@endsection