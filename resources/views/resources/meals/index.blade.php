<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Meals') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-ui.buttons.elevated title="Add Meal" href="{{ route('resources.meals.create') }}"/>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="mt-5">
                        <thead>
                            <tr>
                                <th>S/n</th>
                                <th>Meal</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($meals as $meal)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $meal->name }}</td>
                                    <td>
                                        <form action="{{ route('resources.meals.destroy', ['meal' => $meal]) }}" method="post">
                                            @csrf
                                            @method("delete")
                                            <a href="{{ route('resources.meals.show', ['meal' => $meal]) }}" class="btn-sm">view</a>
                                            <a href="{{ route('resources.meals.edit', ['meal' => $meal]) }}" class="btn-sm">edit</a>
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

