@extends('layouts.website')

@section('content')
<div class="container-fluid  h-screen bg-auto md:bg-contain" style="background-image: url('{{asset("img/green.jpg") }}'); background-size: cover;background-repeat: no-repeat;background-position:center;">
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
<div class="container min-h-min" style="background-image: url('{{asset("img/timeline-section-header-bg-desktop-5x.png") }}'); background-size: cover;background-repeat: no-repeat;background-position:center;">
   <div class="grid md:grid-cols-9">
       <div class="md:col-span-2">&nbsp;</div>
       <div class="md:col-span-5 text-center font-bold mt-48 mb-48"><h1>NATURERIPE BRAND</h1></div>
       <div class="md:col-span-2">&nbsp;</div>
   </div>
</div
@endsection