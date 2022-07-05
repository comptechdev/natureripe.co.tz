@extends('layouts.website')

@section('content')
<x-website.body.slider />

<div class="relative grid grid-cols-1 md:grid-cols-3  p-3 md:p-24 justify-center gap-2">
    @foreach ($collections as $collection)
    <div>
        <div class="max-w-sm rounded overflow-hidden flex flex-col items-center">
            <img src="{{ Storage::url($collection->featured_image) }}" alt="staffedpappers">
            <div class="relative  -mt-16 w-11/12 ">                    
                <div class="p-3 bg-white shadow-lg px-4 pb-8 rounded-md">
                    <h2>
                        <div class="font-extrabold font-baton, sans-serif text-3xl tracking-wider">{{ $collection->name }}</div>
                    <h2>
                    {{-- <P>
                        {{ $collection->description }}
                    </P> --}}
                </div>
            
                <div class="pt-4 pb-2 -mt-10 ml-5 cursor-pointer">
                    <a href="{{ route("website.meals") }}" class=" rounded-sm inline-block bg-red-600 px-3 py-3 text-sm font-semibold text-white mr-2 mb-2 hover:bg-white hover:text-red-600 hover:border-2 hover:border-red-600">VIEW ALL</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>


<header class="flex items-center justify-center py-10 mb-12 bg-fixed bg-center bg-cover custom-img" style="background-image:url('{{asset("img/htr.png") }}') ;">
  <div class="p-5 text-2xl text-white bg-opacity-50 rounded-xl">
  <div class="grid grid-cols-8">
        <div class="lg:col-span-2"></div>
        <div class="col-span-8 lg:col-span-4 text-center"><h1 class="font-bold md:text-4xl md:pb-5">About Us</h1>
        <div class="space-y-3">
            <p>The company maintains a nursery of mango seedlings and other horticultural fruits for sale.</p>
            <p>Our company is also engaged in distribution of foodstuffs to supermarkets, variety stores, fast food stores, restaurants,e.t.c </p>
            <p>We have been professional in the exporting, developing and trading of foodstuff for years.</p>
        </div>
        </div>
        <div class="lg:col-span-2"></div>
    </div>
  </div>
</header>

<div class="container mx-auto py-20 bg-slate-50 px-5">
    <h1 class="font-bold text-4xl text-center py-7 md:py-14">Our raw materials</h1>
    <div class="grid md:grid-cols-3 gap-5">
        <div class="text-center p-7 shadow-2xl rounded-3xl ">
                <h3 class="py-5 text-red-600 font-bold">Mango</h3>
                Our mango filling is elaborated with the best raw materials 
                and the most appropriate facilities for fruit processing. Enjoy it's taste!</p>
                <img src="{{ asset('img/mg.png') }}" alt="mg" class="p-10">
        </div>
        <div class="text-center p-7 shadow-2xl rounded-3xl ">
                <h3 class="py-5 text-red-600 font-bold">Groundnuts</h3>
                <p>Groundnuts are a popular source of food throughout the world, 
                  consumed either as peanut butter or crushed and used for groundnut</p>
                <img src="{{ asset('img/gn.png') }}" alt="mg" class="p-10">
        </div>
        <div class="text-center p-7 shadow-2xl rounded-3xl">
                <h3 class="py-5 text-red-600 font-bold">Ukwaju</h3>
                <p>From Local Farmers, Tamarind is a tree. 
                  Its partially dried fruit is used to make medicine and other products,
                   you will be amazed what we make of it.</p>
                <img src="{{ asset('img/uk.png') }}" alt="mg" class="p-10">
        </div>

    </div>
</div>
<x-website.body.patners />
<div class="container-fluid">
    <div class="grid grid-cols-1 md:grid-cols-2">
        
            <div class="text-center bg-cover">
            <img src="{{ asset('img/mult.jpeg') }}">
            </div>
            <div class="text-center py-8 md:py-20 px-8">
                    <h3 class="py-5 text-red-600 font-bold">LIGHT THINGS UP</h3>
                    <p class="md:text-2xl">
                    We are pursuing superior quality is "Fresh, Safe and Healthy". 
                    Your total satisfaction is our main objective. Welcome to contact
                    us anytime and look forward to working with you. 
                    Thanks for choosing Naturipe Kilimanjaro Limited, 
                    we sincerely believe our further cooperation will be better and better!
                    </p>
            </div>
    

    </div>

</div>

<x-website.body.section />


@endsection   