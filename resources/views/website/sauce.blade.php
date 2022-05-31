@extends('layouts.website')

@section('content')
<div class="container-fluid  h-screen" style="background-image: url('{{asset("img/green.jpg") }}'); background-size: cover;background-repeat: no-repeat;background-position:center;">
     <div class="grid grid-cols-7">
         <div class="col-span-2">&nbsp;</div>
         <div class="col-span-5 py-48 px-10">
             <h1 class="text-start text-xl md:text-7xl font-black">{{ $product->name }}</h1>
             <p class="text-start text-2xl py-5">{{ $product->description }}</p>
         </div>
     </div>
</div>
@endsection