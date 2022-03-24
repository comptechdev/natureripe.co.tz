@extends('layouts.website')

@section('content')   
<div class="flex flex-col items-center h-1/4">
    <img src="{{ asset('img/Main.jpg') }}" alt="1516404" class="w-full">
    <div class="absolute text-center w-3/4 pt-7 md:pt-28 text-white ">
        <h1 class="text-center text-xl md:text-7xl font-black">NATURE RIPE </br>KILIMANJARO LIMITED hhhh</h1>
        <p class="text-center text-sm md:text-2xl pt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum sunt in quis libero cum aspernatur
             ipsam. Sapiente nesciunt, veritatis deserunt architecto nobis incidunt ad blanditiis rerum quas 
             nam in fugiat!</p> 
    </div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2">
    <div class="flex justify-center">
        <img src="{{ asset('img/ab1.jpg') }}" alt="1516404" class="w-full">
        <div class="absolute text-center pt-5 md:pt-10 w-3/4 md:w-2/5 text-white ">
            <h1 class="text-center text-xl md:text-4xl font-black">RIPE VISION</h1>
            <p class="text-center text-sm md:text-2xl pt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum sunt in quis libero cum aspernatur
                ipsam. Sapiente nesciunt, veritatis deserunt architecto nobis incidunt ad blanditiis rerum quas 
                nam in fugiat!</p> 
        <div class="pt-10 pl-5 pb-5">
            <button class="bg-red-600 text-white hover:bg-white hover:border-2 hover:border-red-600 hover:text-red-600 p-3">VISIT RIPE GARDENS</button>
        </div>
        </div>
    </div>
    <div class="flex justify-center">
        <img src="{{ asset('img/ab2.jpg') }}" alt="1516404">
        <div class="absolute pt-5 md:pt-10 text-center w-3/4 md:w-2/5 text-white ">
            <h1 class="text-center text-xl md:text-4xl font-black">RIPE MISSION</h1>
            <p class="text-center text-sm md:text-2xl pt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum sunt in quis libero cum aspernatur
                ipsam. Sapiente nesciunt, veritatis deserunt architecto nobis incidunt ad blanditiis rerum quas 
                nam in fugiat!</p> 
        <div class="pt-10 pl-5 pb-5">
            <button class="bg-red-600 text-white hover:bg-white hover:border-2 hover:border-red-600 hover:text-red-600 p-3">VISIT RIPE GARDENS</button>
        </div>
        </div>
    </div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-5 py-20">
    <div class="border-2 ">
        <img src="{{ asset('img/jungle.jpg') }}" alt="jungle">
        <div class="text-left p-5">
            <h1 class="text-2xl font-bold">RIPE GARDENS</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
               Mollitia nostrum vel iure ratione alias obcaecati perspiciatis 
               aperiam earum maiores natus magnam ipsam ?</p>
        </div>
        <div class="pt-10 pl-5 pb-5">
            <button class="bg-red-600 text-white hover:bg-white hover:border-2 hover:border-red-600 hover:text-red-600 p-3">VISIT RIPE GARDENS</button>
        </div> 
    </div>
    <div class="border-2"> 
        <img src="{{ asset('img/cooking.jpg') }}" alt="jungle">
        <div class="text-left p-5">
            <h1  class="text-2xl font-bold">RIPE COOKING</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
               Mollitia nostrum vel iure ratione alias obcaecati perspiciatis 
               aperiam earum maiores natus magnam ipsam ?</p>
        </div>
        <div class="pt-10 pl-5 pb-5">
            <button class="bg-red-600 text-white hover:bg-white hover:border-2 hover:border-red-600 hover:text-red-600 p-3">VISIT RIPE GARDENS</button>
        </div>
    </div>
    <div  class="border-2">
        <img src="{{ asset('img/Culinary.jpg') }}" alt="jungle">
        <div class="text-left p-5">
            <h1  class="text-2xl font-bold">RIPE EXPERIENCE</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
               Mollitia nostrum vel iure ratione alias obcaecati perspiciatis 
               aperiam earum maiores natus magnam ipsam ?</p>
        </div>
        <div class="pt-10 pl-5 pb-5">
            <button class="bg-red-600 text-white hover:bg-white hover:border-2 hover:border-red-600 hover:text-red-600 p-3">VISIT RIPE GARDENS</button>
        </div>
    </div>
</div>

@endsection