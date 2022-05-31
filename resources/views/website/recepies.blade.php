@extends('layouts.website')

@section('content')
{{-- <div class="text-slate-600 text-gray-600 text-zinc-600 text-neutral-600 text-stone-600 text-red-600 text-orange-600 text-amber-600 text-yellow-600 text-lime-600 text-green-600 text-emerald-600 text-teal-600 text-cyan-600 text-sky-600 text-blue-600 text-indigo-600 text-violet-600 text-purple-600 text-fuchsia-600 text-pink-600 text-rose-600"></div> --}}
<div class="grid grid-cols-1 md:grid-cols-3">
    @foreach ($products as $product)
        <x-website.about.recepies href="{{ route('website.sauce', ['product' => $product]) }}" background="{{ Storage::url($product->background_texture) }}" bottle="{{ Storage::url($product->product_image_transparent) }}" title="{{ $product->name }}" titlestyle="text-{{ $product->color }}-600 text-4xl font-extrabold" description="{{ $product->description }}" /> 
    @endforeach
</div>
@endsection