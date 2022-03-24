<div class="bg-cover hidden md:block " style="background-image: url({{ $background ?? asset('img/bk4.jpg') }}) ">
<div class="flex justify-center">
    <div class="z-10 hover:rotate-6 duration-1000 transition">
        <img src=" {{ asset('img/bt1.png') }}" alt="bt" class="md:h-4/5">
    </div> 
    <div class="w-1/2 h-96 bg-white mt-40 -ml-44 md:py-10 md:px-28">
        <div class="">
            <h1 class="md:text-5xl font-extrabold pb-3 text-green-700">MANGO <br>PICKLE</h1>
            <P>Spice up your business with a splash of TABASCO® Sauce. 
                Visit our Foodservice website to learn more about our 
            </P>
        </div>
    </div>
</div>
</div>
<div class="md:hidden">
<x-website.about.recepies background="{{ asset('img/bk4.jpg') }}" title="MANGO <br>PICKLE" titlestyle="md:text-5xl font-extrabold pb-3 text-green-700" description="Spice up your business with a splash of TABASCO® Sauce. Visit our Foodservice website to learn more about our"/> 
</div>