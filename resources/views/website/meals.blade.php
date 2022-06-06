@extends('layouts.website')

@section('content')
<div class="max-w-5xl mx-auto">
    @foreach ($collections as $collection)
        <div class="container mx-auto py-16" x-data>
            <h1 class="text-5xl font-extrabold pt-16 pb-10">{{ $collection->name }}</h1>
            <p class="text-2xl pb-10">{{ $collection->description }}</p>
            <div class="flex flex-nowrap gap-5 overflow-x-scroll">
                @foreach ($collection->meals as $meal)
                    <div class="shrink-0 w-60 inline-block rounded overflow-hidden border-2 origin-bottom-left transform hover:-rotate-3 hover:shadow-lg" x-on:click="window.location = '{{ route("website.meal", ["meal" => $meal]) }}'">
                        <img class="w-full" src="{{ Storage::url($meal->featured_image) }}" alt="eggs">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $meal->name }}</div>
                            {{-- {!! $meal->description !!} --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
@endsection  
