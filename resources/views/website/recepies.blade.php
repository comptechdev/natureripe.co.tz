@extends('layouts.website')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3">
    @foreach ($products as $product)
        <x-website.about.recepies href="{{ route('website.sauce', ['product' => $product]) }}" background="{{ Storage::url($product->background_texture) }}" bottle="{{ Storage::url($product->product_image_transparent) }}" title="{{ $product->name }}" titlestyle="text-{{ $product->color }}-600 text-4xl font-extrabold" description="{{ $product->description }}" /> 
    @endforeach
</div>
@endsection