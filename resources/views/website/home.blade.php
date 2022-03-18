@extends('layouts.website')

@section('content')
<x-website.body.slider />

<div class="relative grid grid-cols-1 md:grid-cols-3  p-3 md:p-24 justify-center gap-2">
    <x-website.body.showcase />
    <x-website.body.showcase />
    <x-website.body.showcase />
</div>
<x-website.body.section />


@endsection   