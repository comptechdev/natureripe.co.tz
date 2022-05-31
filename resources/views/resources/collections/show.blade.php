<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Collections') }} / {{ $collection->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- <p>{{ $product->featured_image_url }}</p> --}}
                    <div class="container mx-auto">
                        <x-ui.buttons.elevated title="Assign Meals" href='{{ route("resources.collections.meals.create", ["collection" => $collection]) }}'></x-ui.buttons.elevated>
                        <h1 class="text-5xl font-extrabold">{{ $collection->name }}</h1>
                        <p class="text-2xl pb-10">{{ $collection->description }}</p>
                        <div class="flex flex-nowrap gap-5 overflow-x-scroll">
                            @foreach ($collection->meals as $meal)
                                <div class="shrink-0 w-60 inline-block rounded overflow-hidden border-2 origin-bottom-left transform hover:-rotate-3 hover:shadow-lg">
                                    <img class="w-full" src="{{ Storage::url($meal->featured_image) }}" alt="eggs">
                                    <div class="px-6 py-4">
                                        <div class="font-bold text-xl mb-2">{{ $meal->name }}</div>
                                        {{-- {!! $meal->description !!} --}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>