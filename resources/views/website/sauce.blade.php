@extends('layouts.website')

@section('content')
<div class="max-w-6xl mx-auto px-4">
    <div class="py-20 block lg:flex">
        <div>
            <img src="{{ Storage::url($product->featured_image) }}" class="w-full lg:w-60" alt="">
        </div>
        <div class="px-10">
            <h1 class="text-3xl font-extrabold pt-16 pb-10">{{ $product->name }}</h1>
            <p class="text-lg mt-2">{{ $product->description }}</p>
        </div>
    </div>
</div>

<div class="container mx-auto py-16">
    <h1 class="text-3xl font-extrabold pt-16 pb-10">{{ $product->name }} Meals</h1>
    <p class="text-2xl pb-10">Make it all delicious: fun food & menu ideas for holidays, parties, events and everyday meals.</p>
    <div class="grid md:grid-cols-4 gap-5">
        @foreach ($product->meals as $meal)
        <a href="{{ route("website.meal", ["meal" => $meal]) }}}}" class="max-w-sm rounded overflow-hidden border-2 origin-bottom-left transform hover:-rotate-3 hover:shadow-lg">
            <img class="w-full" src="{{ Storage::url($meal->featured_image) }}" alt="eggs">
         <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{ $meal->name }}</div>
            <p class="text-gray-700 text-base">
            {{ $meal->description }}
            </p>
        </div>
    </a>
        @endforeach
    </div>
</div>

@endsection