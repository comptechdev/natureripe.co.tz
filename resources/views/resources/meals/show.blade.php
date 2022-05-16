<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }} / {{ $meal->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- <p>{{ $meal->featured_image_url }}</p> --}}
                    <div class="columns-3 mt-3">
                        <img src="{{ $meal->featured_image_url }}" alt="" class="w-full">

                        <div class="space-y-2">
                            <div>
                                <h6>Meal Name</h6>
                                <p>{{ $meal->name }}</p>
                            </div>
                            <div>
                                {!! $meal->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-3">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="mb-4">Meal Preparation</h2>
                    {!! $meal->preparation !!}
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-3">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-ui.buttons.elevated title="Add Ingridients" href='{{ route("resources.meals.ingridients.create", ["meal" => $meal]) }}'></x-ui.buttons.elevated>
                    <div class="my-2"></div>
                    <table class="mt-5">
                        <thead>
                            <tr>
                                <th>S/n</th>
                                <th>Ingridient</th>
                                <th>Product</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($meal->ingridients as $ingridient)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ingridient->name }}</td>
                                    <td>
                                        <form action="{{ route('resources.meals.ingridients.destroy', compact('meal', 'ingridient')) }}" method="post">
                                            @csrf
                                            @method("delete")
                                            <a href="{{ route('resources.meals.ingridients.show', compact('meal', 'ingridient')) }}" class="btn-sm">view</a>
                                            <a href="{{ route('resources.meals.ingridients.edit', compact('meal', 'ingridient')) }}" class="btn-sm">edit</a>
                                            <button type="submit" class="btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-3">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-ui.buttons.elevated title="Add Product" href='{{ route("resources.meals.products.create", ["meal" => $meal]) }}'></x-ui.buttons.elevated>
                    <div class="my-2"></div>
                    <table class="mt-5">
                        <thead>
                            <tr>
                                <th>S/n</th>
                                <th>Product</th>
                                <th>Featured Image</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($meal->products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td><img src="{{ Storage::url($product->pivot->featured_image) }}" alt="" height="200px" width="200px"></td>
                                    <td>
                                        <form action="{{ route('resources.meals.products.destroy', compact('meal', 'product')) }}" method="post">
                                            @csrf
                                            @method("delete")
                                            <a href="{{ route('resources.meals.products.show', compact('meal', 'product')) }}" class="btn-sm">view</a>
                                            <a href="{{ route('resources.meals.products.edit', compact('meal', 'product')) }}" class="btn-sm">edit</a>
                                            <button type="submit" class="btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</x-app-layout>