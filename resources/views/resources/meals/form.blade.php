<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Meals / Add Meal') }}
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

                    <form method="POST" action="{{ isset($meal) ? route('resources.meals.update', ['meal' => $meal]) : route('resources.meals.store') }}" enctype="multipart/form-data" class="space-y-4">
                        @csrf
                        @isset($meal)
                            @method("patch")
                        @endisset
                        <x-ui.core.input type="file" name="featured_image" label="Meal Image" />
                        <x-ui.core.input name="name" label="Meal Name" value="{{ isset($meal) ? $meal->name : '' }}" />
                        
                        <x-ui.core.text-area name="descriptin" label="Description" value="{{ isset($meal) ? $meal->description : '' }}" />
                        <x-ui.core.text-area name="preparation" label="Preparation" value="{{ isset($meal) ? $meal->preparation : '' }}" />
                        <x-ui.buttons.elevated type="submit" title="Submit" /> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>