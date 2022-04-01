<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products / Add Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ isset($product) ? route('resources.products.update', ['product' => $product]) : route('resources.products.store') }}" enctype="multipart/form-data" class="space-y-4">
                        @csrf
                        @isset($product)
                            @method("patch")
                        @endisset
                        <x-ui.core.input type="file" name="featured_image" label="Product Image" />
                        <x-ui.core.input name="name" label="Product Name" value="{{ isset($product) ? $product->name : '' }}" />
                        <x-ui.core.input name="description" label="Description" value="{{ isset($product) ? $product->description : '' }}" />
                        <x-ui.core.input name="nutrition_unit" label="Nutrition Unit of Meansurement" value="{{ isset($product) ? $product->nutrition_unit : '' }}" />
                        <x-ui.core.input name="nutrition_calories" label="Calories" value="{{ isset($product) ? $product->nutrition_calories : '' }}" />
                        <x-ui.core.input name="nutrition_total_fat" label="Total Fat" value="{{ isset($product) ? $product->nutrition_total_fat : '' }}" />
                        <x-ui.core.input name="nutrition_saturated_fat" label="Saturated Fat" value="{{ isset($product) ? $product->nutrition_saturated_fat : '' }}" />
                        <x-ui.core.input name="nutrition_cholesterol" label="Cholesterol" value="{{ isset($product) ? $product->nutrition_cholesterol : '' }}" />
                        <x-ui.core.input name="nutrition_sodium" label="Sodium" value="{{ isset($product) ? $product->nutrition_sodium : '' }}" />
                        <x-ui.core.input name="nutrition_carbohydrates" label="Carbohydrates" value="{{ isset($product) ? $product->nutrition_carbohydrates : '' }}" />
                        <x-ui.core.input name="nutrition_dietary_fiber" label="Dietary Fiber" value="{{ isset($product) ? $product->nutrition_dietary_fiber : '' }}" />
                        <x-ui.core.input name="nutrition_sugers" label="Sugers" value="{{ isset($product) ? $product->nutrition_sugers : '' }}" />
                        <x-ui.core.input name="nutrition_protein" label="Protein" value="{{ isset($product) ? $product->nutrition_protein : '' }}" />
                        <x-ui.core.input name="nutrition_vitamin_c" label="Vitamin C" value="{{ isset($product) ? $product->nutrition_vitamin_c : '' }}" />
                        <x-ui.buttons.elevated type="submit" title="Submit" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>