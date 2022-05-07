@extends('layouts.website')

@section('content')
<div class="container-fluid  h-screen" style="background-image: url('{{ asset("img/green.jpg") }}'); background-size: cover;background-repeat: no-repeat;background-position:center">
     <div class="grid grid-cols-7">
         <div class="col-span-2">&nbsp;</div>
         <div class="col-span-5 py-48 px-10">
             <h1 class="text-start text-xl md:text-7xl font-black">NATURERIPE KILIMANJARO LIMITED</h1>
             <p class="text-start text-2xl py-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                 Nemo, sunt rerum quidem accusantium eaque aspernatur iste dolores 
                 exercitationem consectetur porro magnam quos voluptatum, ratione,
                  maxime id a odit iusto fugit?</p>
         </div>
     </div>
</div>
@endsection