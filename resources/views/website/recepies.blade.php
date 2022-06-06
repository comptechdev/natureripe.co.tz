@extends('layouts.website')

@section('content')
{{-- <div class="text-slate-600 text-gray-600 text-zinc-600 text-neutral-600 text-stone-600 text-red-600 text-orange-600 text-amber-600 text-yellow-600 text-lime-600 text-green-600 text-emerald-600 text-teal-600 text-cyan-600 text-sky-600 text-blue-600 text-indigo-600 text-violet-600 text-purple-600 text-fuchsia-600 text-pink-600 text-rose-600"></div> --}}
<div class="grid grid-cols-1 md:grid-cols-3">
    @foreach ($sauces as $product)
        <x-website.about.recepies href="{{ route('website.sauce', ['product' => $product]) }}" background="{{ Storage::url($product->background_texture) }}" bottle="{{ Storage::url($product->product_image_transparent) }}" title="{{ $product->name }}" titlestyle="text-{{ $product->color }}-600 text-4xl font-extrabold" description="{{ $product->description }}" /> 
    @endforeach
</div>

@foreach ($groups as $group)
    <div class="max-w-5xl mx-auto">
        <div class="container mx-auto py-5">
            <h1 class="text-5xl font-extrabold pt-16 pb-10">{{ $group->name }}</h1>
            <p class="text-2xl pb-10">{{ $group->description }}</p>
        </div>

        <div class="flex flex-nowrap gap-5 overflow-x-scroll">
            @foreach ($group->products as $product)
                <div class="shrink-0 w-60 inline-block rounded overflow-hidden border-2 origin-bottom-left transform hover:-rotate-3 hover:shadow-lg">
                    <img class="w-full" src="{{ Storage::url($product->featured_image) }}" alt="eggs">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $product->name }}</div>
                        {{-- {!! $meal->description !!} --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endforeach
@endsection  
