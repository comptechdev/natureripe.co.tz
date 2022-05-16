@extends('layouts.website')

@section('content')
<x-website.body.slider />

<div class="relative grid grid-cols-1 md:grid-cols-3  p-3 md:p-24 justify-center gap-2">
    @foreach ($products as $product)
        <x-website.body.showcase :product="$product" />
    @endforeach
</div>
<x-website.body.section />


@endsection   