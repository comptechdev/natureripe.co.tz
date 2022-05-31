<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Collections') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-ui.buttons.elevated title="Add Collection" href="{{ route('resources.collections.create') }}"/>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="mt-5">
                        <thead>
                            <tr>
                                <th>S/n</th>
                                <th>Collection</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($collections as $collection)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $collection->name }}</td>
                                    <td>
                                        <form action="{{ route('resources.collections.destroy', ['collection' => $collection]) }}" method="post">
                                            @csrf
                                            @method("delete")
                                            <a href="{{ route('resources.collections.show', ['collection' => $collection]) }}" class="btn-sm">view</a>
                                            <a href="{{ route('resources.collections.edit', ['collection' => $collection]) }}" class="btn-sm">edit</a>
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

