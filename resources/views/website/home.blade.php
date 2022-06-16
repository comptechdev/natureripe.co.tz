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
<div class="container">
    <div class="grid grid-cols-8">
        <div class="col-span-2"></div>
        <div class="col-span-4 text-center pb-10 md:pb-24"><h1 class="font-bold text-4xl md:pb-5">About Us</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque,
             at sit culpa vel iste officia placeat aliquid aut corporis,
              unde alias delectus exercitationem sunt odit deserunt libero incidunt aperiam in.</p></div>
        <div class="col-span-2"></div>
    </div>
</div>
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

<div class="container mx-auto px-5">
    <div class="grid md:grid-cols-7">
        <div class="col-span-4 text-center" style="background-image: url('{{asset("img/mult.jpeg") }}');">
               
        </div>
        <div class="text-center py-40 px-8 col-span-3">
                <h3 class="py-5 text-red-600 font-bold">LIGHT THINGS UP</h3>
                <h2 class="text-2xl font-semibold">
                Nature Ripe Kilimanjaro BBQ Sauces onto all of your grilling favorites 
                this summer. Find your favorite BBQ sauces, hot sauces and more in our online store.
                </h2>
        </div>
    </div>
</div>
<x-website.body.section />


@endsection   