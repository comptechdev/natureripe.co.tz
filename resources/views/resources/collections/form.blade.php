<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Collections / Add Collection') }}
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

                    <form method="POST" action="{{ isset($collection) ? route('resources.collections.update', ['collection' => $collection]) : route('resources.collections.store') }}" enctype="multipart/form-data" class="space-y-4">
                        @csrf
                        @isset($collection)
                            @method("patch")
                        @endisset
                        @isset($collection)
                            <img src="{{ Storage::url($collection->featured_image) }}" alt="">
                        @endisset
                        <x-ui.core.input type="file" name="featured_image" label="Featured Image" />
                        <x-ui.core.input name="name" label="Collection Name" value="{{ isset($collection) ? $collection->name : '' }}" />
                        <x-ui.core.input name="description" label="Collection Description" value="{{ isset($collection) ? $collection->description : '' }}" />
                        <x-ui.buttons.elevated type="submit" title="Submit" /> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>