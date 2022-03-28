@extends('layouts.website')

@section('content')
<div class="container mx-auto">
  <div class="grid md:grid-cols-2 py-5 md:py-10">
      <div class="py-10 md:py-2">
          <h1 class="text-2xl md:text-4xl pb-3 md:pb-5 pr-48 font-bold md:font-bold">We are a chain of stores with over 3500 points of sale across UK</h1>
          <p class="pr-10 md:text-2xl">Duis egestas, felis sit amet mattis cursus, ligula justo tempor diam, 
            id pellentesque odio dui eu nisi. Quisque rhoncus leo sed eleifend consequat.ligula justo tempor diam, 
            id pellentesque odio dui eu nisi. Quisque rhoncus leo sed eleifend consequat.ligula justo tempor diam, 
            id pellentesque odio dui eu nisi. Quisque rhoncus leo sed eleifend consequat.</p>
         <div class="pt-10">
            <button class="bg-transparent hover:bg-red-600 text-red-600 font-semibold hover:text-white py-2 px-12 border border-red-600 hover:border-transparent rounded">
                Fint Store
            </button>
        </div>
      </div>
      <div class="pt-2">
          <img src="{{ asset('img/ab1.webp') }}" alt="">
      </div>
  </div>
</div>  


<div class="container mx-auto py-10">
    <h1 class="font-bold text-4xl text-center md:py-14">Our raw materials</h1>
    <div class="grid md:grid-cols-3 gap-5">
        <div class="text-center p-7 shadow-2xl rounded-3xl ">
                <h3 class="py-5 text-red-600 font-bold">Mango</h3>
                <h1 class="text-3xl font-semibold">Every monday and wednesday</h1>
                <img src="{{ asset('img/mg.png') }}" alt="mg" class="p-10">
        </div>
        <div class="text-center p-7 shadow-2xl rounded-3xl">
                <h3 class="py-5 text-red-600 font-bold">Ukwaju</h3>
                <h1 class="text-3xl font-semibold">From Local Farmers</h1>
                <img src="{{ asset('img/uk.png') }}" alt="mg" class="p-10">
        </div>
        <div class="text-center p-7 shadow-2xl rounded-3xl ">
                <h3 class="py-5 text-red-600 font-bold">Groundnuts</h3>
                <h1 class="text-3xl font-semibold">Every monday and wednesday</h1>
                <img src="{{ asset('img/gn.png') }}" alt="mg" class="p-10">
        </div>
    </div>
</div>

<div class="container mx-auto bg-red-600 py-5 rounded-tl-3xl rounded-br-3xl">
   <div class="grid md:grid-cols-2 p-20 text-white">
       <div>
                <h3 class="py-5 text-black font-bold">Partner</h3>
                <h1 class="text-4xl font-bold">Join our Team and open a business that will guarantee you income</h1>
                <img src="{{ asset('img/abc.webp') }}" alt="mg" class="pt-10">
       </div>
       <div class="px-5 text-white">
            <p class="py-14">Praesent sit amet metus id sapien ullamcorper cursus posuere quis ex. 
                In faucibus nec metus sit amet mollis. Aliquam vehicula tellus ut 
                scelerisque scelerisque. Fusce aliquet blandit lorem, eget scelerisque sapien.</p>
                <h3 class="pt-7 tbext-black font-bold text-3xl">276 cities & towns</h3>
                <h3 class="text-black font-bold">276 cities & towns</h3>
                <h1 class="py-10 text-4xl font-bold">We are a chain of stores with over 60 points of sale 
                our network is growing very fast.</h1>
                <h1 class="py-7 text-4xl font-bold">Thanks to our patners, our network is growing very fast.
                    Get Intouch with us now</h1>
                
       </div>
   </div>

</div>
<div class="container mx-auto py-20">
           <h1 class="text-4xl font-semibold">Would you like <br>to BE with us?</h1>

    <div class="grid md:grid-cols-3">
        <div>
           <img src="{{ asset('img/one.png') }}" alt="one" class="py-10">
           <h1 class="text-3xl font-semibold">Find location for store</h1>
           <p class="py-5">Praesent sit amet metus id sapien ullamcorper cursus posuere quis ex. 
                In faucibus nec metus sit amet mollis. Aliquam vehicula tellus ut 
                scelerisque scelerisque. Fusce aliquet blandit lorem, eget scelerisque sapien.</p>
        </div>
        <div>
           <img src="{{ asset('img/two.png') }}" alt="one" class="py-10">
           <h1 class="text-3xl font-semibold">Make an appointment</h1>
           <p class="py-5">Praesent sit amet metus id sapien ullamcorper cursus posuere quis ex. 
                In faucibus nec metus sit amet mollis. Aliquam vehicula tellus ut 
                scelerisque scelerisque. Fusce aliquet blandit lorem, eget scelerisque sapien.</p>
        </div>
        <div>
           <img src="{{ asset('img/three.png') }}" alt="one" class="py-10">
           <h1 class="text-3xl font-semibold">Become our partner</h1>
           <p class="py-5">Praesent sit amet metus id sapien ullamcorper cursus posuere quis ex. 
                In faucibus nec metus sit amet mollis. Aliquam vehicula tellus ut 
                scelerisque scelerisque. Fusce aliquet blandit lorem, eget scelerisque sapien.</p>
        </div>
    </div>

</div>
@endsection