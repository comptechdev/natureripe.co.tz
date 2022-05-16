<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->

    <div class="flex flex-nowrap gap-2 overflow-x-scroll scrollbar-hide">
        @foreach ($meals as $meal)
        <div class="flex-none rounded-lg shadow-lg bg-white max-w-sm">
            <a href="{{ route("website.meal", ["meal" => $meal]) }}">
                <img src="{{ $meal->featured_image_url }}" alt="tb1" class="rounded-1-lg">
            </a>
            <div class="pt-2">
                <button type="button" class="inline-block w-full  px-6 py-6 bg-slate-700 text-white font-bold text-xl leading-tight uppercase shadow-md hover:bg-red-600 hover:shadow-lg focus:bg-red-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-600 active:shadow-lg transition duration-150 ease-in-out">{{ $meal->name }}</button>
            </div>
        </div>
        @endforeach
        
        {{-- <div class="flex-none rounded-lg shadow-lg bg-white max-w-sm">
            <a href="#">
                <img src="{{ asset('img/tb2.png') }}" alt="tb1" class="rounded-1-lg">
            </a>
            <div class="pt-2">
                <button type="button" class="inline-block w-full  px-6 py-6 bg-slate-700 text-white font-bold text-xl leading-tight uppercase shadow-md hover:bg-red-600 hover:shadow-lg focus:bg-red-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-600 active:shadow-lg transition duration-150 ease-in-out">RED PILIPILI MBUZI SAUCE</button>
            </div>
        </div>
        <div class="flex-none rounded-lg shadow-lg bg-white max-w-sm">
            <a href="#">
                <img src="{{ asset('img/tb3.png') }}" alt="tb3" class="rounded-1-lg">
            </a>
            <div class="pt-2">
                <button type="button" class="inline-block w-full  px-6 py-6 bg-slate-700 text-white font-bold text-xl leading-tight uppercase shadow-md hover:bg-red-600 hover:shadow-lg focus:bg-red-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-600 active:shadow-lg transition duration-150 ease-in-out">RED PILIPILI MBUZI SAUCE</button>
            </div>
        </div>
        <div class="flex-none rounded-lg shadow-lg bg-white max-w-sm">
            <a href="#">
                <img src="{{ asset('img/Mezcal-Negroni.png') }}" alt="tb4" class="rounded-1-lg">
            </a>
            <div class="pt-2">
                <button type="button" class="inline-block w-full  px-6 py-6 bg-slate-700 text-white font-bold text-xl leading-tight uppercase shadow-md hover:bg-red-600 hover:shadow-lg focus:bg-red-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-600 active:shadow-lg transition duration-150 ease-in-out">RED PILIPILI MBUZI SAUCE</button>
            </div>
        </div> --}}
        

</div>