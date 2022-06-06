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
<x-website.body.section />


@endsection   