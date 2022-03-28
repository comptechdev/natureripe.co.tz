@extends('layouts.website')

@section('content')
<div class="container mx-auto py-16">
    <h1 class="text-5xl font-extrabold pt-16 pb-10">RIPE SAUCES COLLECTION</h1>
    <p class="text-2xl pb-10">Make it all delicious: fun food & menu ideas for holidays, parties, events and everyday meals.</p>
    <div class="grid md:grid-cols-4 gap-5">
        <div class="max-w-sm rounded overflow-hidden border-2 origin-bottom-left transform hover:-rotate-3 hover:shadow-lg">
                <img class="w-full" src="{{ asset('img/eggs.jpg') }}" alt="eggs">
             <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">EGGS</div>
                <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, 
                nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                </p>
            </div>

        </div>
        <div class="max-w-sm rounded overflow-hidden border-2 origin-bottom-left transform hover:-rotate-3 hover:shadow-lg">
                <img class="w-full" src="{{ asset('img/mexican.jpg') }}" alt="eggs">
             <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">MAXICAN CLASSICS</div>
                <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, 
                nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                </p>
            </div>

        </div>
        <div class="max-w-sm rounded overflow-hidden border-2 origin-bottom-left transform hover:-rotate-3 hover:shadow-lg">
                <img class="w-full" src="{{ asset('img/grilled.jpg') }}" alt="eggs">
             <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">GRILLED LIKE A PRO</div>
                <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, 
                nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                </p>
            </div>

        </div>
        <div class="max-w-sm rounded overflow-hidden border-2 origin-bottom-left transform hover:-rotate-3 hover:shadow-lg">
                <img class="w-full" src="{{ asset('img/healthy.jpg') }}" alt="eggs">
             <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">LIGHT MEALS</div>
                <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, 
                nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                </p>
            </div>

        </div>
    </div>
</div>
<div class="container mx-auto pb-16">
        <h1 class="text-5xl font-extrabold pt-16 pb-10">DRINKS</h1>
        <p class="text-2xl pb-10">Whether it's a Bloody Mary or spicing up your favorite cocktail, discover the difference a dash of NATURE RIPE® Sauce makes.</p>
        <div class="grid md:grid-cols-4 gap-5">
        <div class="max-w-sm rounded overflow-hidden border-2 origin-bottom-left transform hover:-rotate-3 hover:shadow-lg">
                <img class="w-full" src="{{ asset('img/d1.jpg') }}" alt="eggs">
             <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">BROTHER MARY</div>
                <div class="flex justify-start">
                    <img src="{{ asset('img/av.png') }}"class="z-0 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                    <img src="{{ asset('img/av.png') }}"class="z-10 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                </div>
             </div>

        </div>        <div class="max-w-sm rounded overflow-hidden border-2 origin-bottom-left transform hover:-rotate-3 hover:shadow-lg">
                <img class="w-full" src="{{ asset('img/d2.jpg') }}" alt="eggs">
             <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">BLOODY MARY</div>
                <div class="flex justify-start">
                    <img src="{{ asset('img/av.png') }}"class="z-0 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                    <img src="{{ asset('img/av.png') }}"class="z-10 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                </div>
             </div>

        </div>
        <div class="max-w-sm rounded overflow-hidden border-2 origin-bottom-left transform hover:-rotate-3 hover:shadow-lg">
                <img class="w-full" src="{{ asset('img/d3.jpg') }}" alt="eggs">
             <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">BLOODY MARIA</div>
                <div class="flex justify-start">
                    <img src="{{ asset('img/av.png') }}"class="z-0 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                    <img src="{{ asset('img/av.png') }}"class="z-10 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                </div>
             </div>

        </div>
        <div class="max-w-sm rounded overflow-hidden border-2 origin-bottom-left transform hover:-rotate-3 hover:shadow-lg">
                <img class="w-full" src="{{ asset('img/d4.jpg') }}" alt="eggs">
             <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">MICHELADA</div>
                <div class="flex justify-start">
                    <img src="{{ asset('img/av.png') }}"class="z-0 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                    <img src="{{ asset('img/av.png') }}"class="z-10 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                </div>
             </div>

        </div>

        </div>
</div>
<div class="container mx-auto pb-16">
        <h1 class="text-5xl font-extrabold pt-16 pb-10">MARINADES</h1>
        <p class="text-2xl pb-10">Discover how nothing enhances flavor like NATURE RIPE® Sauce</p>
        <div class="grid md:grid-cols-4 gap-5">
        <div class="max-w-sm rounded overflow-hidden border-2 origin-bottom-left transform hover:-rotate-3 hover:shadow-lg">
                <img class="w-full" src="{{ asset('img/m1.jpg') }}" alt="eggs">
             <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">SPICY GREEN</div>
                <div class="flex justify-start">
                    <img src="{{ asset('img/av.png') }}"class="z-0 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                    <img src="{{ asset('img/av.png') }}"class="z-10 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                </div>
             </div>

        </div>        <div class="max-w-sm rounded overflow-hidden border-2 origin-bottom-left transform hover:-rotate-3 hover:shadow-lg">
                <img class="w-full" src="{{ asset('img/m2.jpg') }}" alt="eggs">
             <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">SPICY CANE SYRUP BUTTER</div>
                <div class="flex justify-start">
                    <img src="{{ asset('img/av.png') }}"class="z-0 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                    <img src="{{ asset('img/av.png') }}"class="z-10 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                </div>
             </div>

        </div>
        <div class="max-w-sm rounded overflow-hidden border-2 origin-bottom-left transform hover:-rotate-3 hover:shadow-lg">
                <img class="w-full" src="{{ asset('img/m3.jpg') }}" alt="eggs">
             <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">CHOCOLATE CHIPOTLE</div>
                <div class="flex justify-start">
                    <img src="{{ asset('img/av.png') }}"class="z-0 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                    <img src="{{ asset('img/av.png') }}"class="z-10 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                </div>
             </div>

        </div>
        <div class="max-w-sm rounded overflow-hidden border-2 origin-bottom-left transform hover:-rotate-3 hover:shadow-lg">
                <img class="w-full" src="{{ asset('img/d4.jpg') }}" alt="eggs">
             <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">BBQ SAUCE</div>
                <div class="flex justify-start">
                    <img src="{{ asset('img/av.png') }}"class="z-0 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                    <img src="{{ asset('img/av.png') }}"class="z-10 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                </div>
             </div>

        </div>

        </div>
</div>
<div class="container mx-auto pb-16">
        <h1 class="text-5xl font-extrabold pt-16 pb-10">MEALS</h1>
        <p class="text-2xl pb-10">Bring out the best in every bite with these recipes.</p>
        <div class="grid md:grid-cols-4 gap-5">
        <div class="max-w-sm rounded overflow-hidden border-2 origin-bottom-left transform hover:-rotate-3 hover:shadow-lg">
                <img class="w-full" src="{{ asset('img/ml1.jpg') }}" alt="eggs">
             <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">POAHED EGG</div>
                <div class="flex justify-start">
                    <img src="{{ asset('img/av.png') }}"class="z-0 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                    <img src="{{ asset('img/av.png') }}"class="z-10 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                </div>
             </div>

        </div>        <div class="max-w-sm rounded overflow-hidden border-2 origin-bottom-left transform hover:-rotate-3 hover:shadow-lg">
                <img class="w-full" src="{{ asset('img/ml2.jpg') }}" alt="eggs">
             <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">BREAKFAST BURITTO</div>
                <div class="flex justify-start">
                    <img src="{{ asset('img/av.png') }}"class="z-0 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                    <img src="{{ asset('img/av.png') }}"class="z-10 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                </div>
             </div>

        </div>
        <div class="max-w-sm rounded overflow-hidden border-2 origin-bottom-left transform hover:-rotate-3 hover:shadow-lg">
                <img class="w-full" src="{{ asset('img/ml3.jpg') }}" alt="eggs">
             <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">EGGS VERDE</div>
                <div class="flex justify-start">
                    <img src="{{ asset('img/av.png') }}"class="z-0 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                    <img src="{{ asset('img/av.png') }}"class="z-10 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                </div>
             </div>

        </div>
        <div class="max-w-sm rounded overflow-hidden border-2 origin-bottom-left transform hover:-rotate-3 hover:shadow-lg">
                <img class="w-full" src="{{ asset('img/ml4.jpg') }}" alt="eggs">
             <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">EGGS WITH FRESH AVOCADO</div>
                <div class="flex justify-start">
                    <img src="{{ asset('img/av.png') }}"class="z-0 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                    <img src="{{ asset('img/av.png') }}"class="z-10 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                </div>
             </div>

        </div>

        </div>
</div>
<div class="container mx-auto pb-16">
        <h1 class="text-5xl font-extrabold pt-16 pb-10">SNACKS</h1>
        <p class="text-2xl pb-10">Quick & easy ways to enhance your favorite foods.</p>
        <div class="grid md:grid-cols-4 gap-5">
        <div class="max-w-sm rounded overflow-hidden border-2 origin-bottom-left transform hover:-rotate-3 hover:shadow-lg">
                <img class="w-full" src="{{ asset('img/s1.jpg') }}" alt="eggs">
             <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">DEVILED EGGS</div>
                <div class="flex justify-start">
                    <img src="{{ asset('img/av.png') }}"class="z-0 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                    <img src="{{ asset('img/av.png') }}"class="z-10 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                </div>
             </div>

        </div>        <div class="max-w-sm rounded overflow-hidden border-2 origin-bottom-left transform hover:-rotate-3 hover:shadow-lg">
                <img class="w-full" src="{{ asset('img/s2.jpg') }}" alt="eggs">
             <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">ICED-SPICED MEXICAN</div>
                <div class="flex justify-start">
                    <img src="{{ asset('img/av.png') }}"class="z-0 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                    <img src="{{ asset('img/av.png') }}"class="z-10 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                </div>
             </div>

        </div>
        <div class="max-w-sm rounded overflow-hidden border-2 origin-bottom-left transform hover:-rotate-3 hover:shadow-lg">
                <img class="w-full" src="{{ asset('img/s3.jpg') }}" alt="eggs">
             <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">GARLIC BREAD</div>
                <div class="flex justify-start">
                    <img src="{{ asset('img/av.png') }}"class="z-0 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                    <img src="{{ asset('img/av.png') }}"class="z-10 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                </div>
             </div>

        </div>
        <div class="max-w-sm rounded overflow-hidden border-2 origin-bottom-left transform hover:-rotate-3 hover:shadow-lg">
                <img class="w-full" src="{{ asset('img/s4.jpg') }}" alt="eggs">
             <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">GRILLED WATERMELLON</div>
                <div class="flex justify-start">
                    <img src="{{ asset('img/av.png') }}"class="z-0 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                    <img src="{{ asset('img/av.png') }}"class="z-10 rounded-full w-2.5 h-5 shadow-lg border-solid border-2 " alt="Avatar"/>
                </div>
             </div>

        </div>

        </div>
</div>



@endsection  
