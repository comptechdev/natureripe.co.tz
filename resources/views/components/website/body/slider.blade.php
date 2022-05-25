<div class="relative" style="background: pink; height: 70vh;" x-data="{index: 0}" 
    x-init="$nextTick(() => { 
      let count = {{ isset($products) ? $products->count() : -1 }};
      if (count == -1) {
        return;
      }
      setInterval(() => {  
        console.log('timout', index, count);
        if (index < count) {
          index++;
        } else {
          index = 0;
        }
      }, 10000); 
    })">
    @isset($products)
      @foreach ($products as $product)
        <div x-bind:style="index == {{ $loop->index }} ? 'transform: translateX(0px)' : (index > {{ $loop->index }} ? 'transform: translateX(-100%)' : 'transform: translateX(100%)')" class="absolute z-0 inset-0 w-screen h-full transition-all ease-in-out duration-1000 transform flex">
            <div class="flex-1 bg-center bg-cover bg-no-repeat md:block hidden" style="background-image: url('{{ Storage::url($product->picture_one) }}')">
            </div>
            <div class="flex-1 bg-center bg-cover bg-no-repeat md:block hidden" style="background-image: url('{{ Storage::url($product->picture_two) }}')">
            </div>
            <div class="flex-1 bg-center bg-cover bg-no-repeat md:block hidden" style="background-image: url('{{ Storage::url($product->picture_three) }}')">
            </div>

            <div class="flex-1 bg-center bg-cover bg-no-repeat flex items-center sm:hidden" style="background-image: url('{{ Storage::url($product->picture_four)  }}')">  
            </div>
        </div>
      @endforeach
    @endisset

    <div class="absolute bottom-0 z-10 flex w-full justify-center">
      @isset($products)
        @foreach ($products as $product)
          <img x-on:click="index = {{ $loop->index }}" src="{{ Storage::url($product->product_image_transparent) }}" alt="" class="h-10 px-1 transition-all ease-in-out duration-1000 transform" x-bind:style="index == {{ $loop->index }} && 'transform: scale(2)'" />
        @endforeach
      @endisset
    </div>
</div>