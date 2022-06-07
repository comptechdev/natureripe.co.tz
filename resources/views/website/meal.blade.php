@extends('layouts.website')

@section('content')
<div class="container mx-auto py-10">
      <h1 class="text-start text-3xl md:text-7xl font-black">{{ $meal->name }}</h1>
</div>
<div class="container mx-auto">
    <div class="grid grid-cols-1">
        <img src="{{ $meal->featured_image_url }}" alt="">
    </div>
</div>

<div class="container mx-auto">
  <div class="grid md:grid-cols-2 py-5 md:py-10">
      <div class="py-10 md:py-2">
          <h1 class="text-start text-3xl font-black pb-5">INGREDIENTS</h1>
          @foreach ($meal->ingridients as $ingridient)
              @isset($ingridient->ingridientable->product)
                <p class="pr-10 md:text-2xl">{{ $ingridient->ingridientable->product->name }}<p>
                @else 
                <p class="pr-10 md:text-2xl">{{ $ingridient->name }}<p>
              @endisset

          @endforeach
          
      </div>
      <div class="py-4">
            <h1 class="text-start text-3xl font-black pb-5">PREPARATION</h1>
            {!! $meal->preparation !!}

                    {{-- <ol class="list-decimal text-2xl">
                    <li>Now this is a story all about how, my life got flipped turned upside down</li>
                    <!-- ... -->
                    </ol> --}}
      </div>
  </div>

  <div class="max-w-5xl mx-auto">
    <div class="container mx-auto py-16">
        <h1 class="text-5xl font-extrabold pt-16 pb-10">Similar Products</h1>
        <p class="text-2xl pb-10">It Goes better with this meals.</p>
    </div>

    <div class="flex flex-nowrap gap-5 overflow-x-scroll" x-data>
        @foreach ($meal->products as $product)
            <div class="shrink-0 w-60 inline-block rounded overflow-hidden border-2 origin-bottom-left transform hover:-rotate-3 hover:shadow-lg" x-on:click="window.location = '{{ route("website.sauce", ["product" => $product]) }}'">
                <img class="w-full" src="{{ Storage::url($product->featured_image) }}" alt="eggs">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $product->name }}</div>
                    {{-- {!! $meal->description !!} --}}
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection