@extends('layouts.website')

@section('content')
<x-website.body.slider />

<div class="relative grid grid-cols-1 md:grid-cols-3  p-3 md:p-24 justify-center gap-2">
    @foreach ($products as $product)
        <x-website.body.showcase :product="$product" />
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
<x-website.body.section />


@endsection   