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
            <div class="flex-1 bg-center bg-cover bg-no-repeat flex items-center" style="background-image: url('{{ Storage::url($product->background_texture)  }}')">  
                <div class="px-10">
                    {!! $product->poster_message !!}  
                </div>
            </div>
            <div class="flex-1 bg-center bg-cover bg-no-repeat flex justify-center items-center" style="background-image: url('{{ Storage::url($product->background_color)  }}')">
                <img src="{{ Storage::url($product->product_image_transparent) }}" alt="" class="h-full" style="height: 50vh" />
            </div>
            <div class="flex-1 bg-center bg-cover bg-no-repeat" style="background-image: url('{{ Storage::url($product->featured_meal_picture) }}')">
            </div>
        </div>
      @endforeach
    @endisset

    <div class="absolute bottom-0 z-10 flex w-full justify-center">
      @isset($products)
        @foreach ($products as $product)
          <img x-on:click="index = {{ $loop->index }}" src="{{ Storage::url($product->product_image_transparent) }}" alt="" class="h-20 transition-all ease-in-out duration-1000 transform" x-bind:style="index == {{ $loop->index }} && 'transform: scale(2)'" />
        @endforeach
      @endisset
    </div>
</div>