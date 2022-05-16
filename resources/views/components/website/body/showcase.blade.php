<div>
    <div class="max-w-sm rounded overflow-hidden flex flex-col items-center">
        <img src="{{ Storage::url($product->featured_meal_picture) }}" alt="staffedpappers">
        <div class="relative  -mt-16 w-11/12 ">                    
            <div class="p-3 bg-white shadow-lg px-4 pb-8 rounded-md">
                <h2>
                    <div class="font-extrabold font-baton, sans-serif text-3xl tracking-wider">{{ $product->name }}</div>
                <h2>
                <P>
                    {{ $product->description }}
                </P>
            </div>
        
            <div class="pt-4 pb-2 -mt-10 ml-5 cursor-pointer">
                <a href="{{ route("website.sauce", ["product" => $product]) }}" class=" rounded-sm inline-block bg-red-600 px-3 py-3 text-sm font-semibold text-white mr-2 mb-2 hover:bg-white hover:text-red-600 hover:border-2 hover:border-red-600">VIEW RECEPIES</a>
            </div>
        </div>
    </div>
</div>