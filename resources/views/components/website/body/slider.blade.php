<div class="relative" style="background: pink; height: 70vh;" x-data="{index: 0}" 
    x-init="$nextTick(() => { setInterval(() => {
        console.log('timout', index, {{ $products->count() }});
        if (index < {{ $products->count() - 1 }}) {
          index++;
        } else {
          index = 0;
        }
      }, 10000); 
    })">
    @foreach ($products as $product)
      <div x-bind:style="index == {{ $loop->index }} ? 'transform: translateX(0px)' : (index > {{ $loop->index }} ? 'transform: translateX(-100%)' : 'transform: translateX(100%)')" class="absolute z-0 inset-0 w-screen h-full transition-all ease-in-out duration-1000 transform flex">
          <div class="flex-1 bg-center bg-cover bg-no-repeat flex items-center" style="background-image: url('{{ Storage::url($product->background_texture)  }}')">  
              <div class="px-10">
                  {!! $product->poster_message !!}  
              </div>
          </div>
          <div class="flex-1 bg-center bg-cover bg-no-repeat" style="background-image: url('{{ Storage::url($product->background_color)  }}')">
              <img src="{{ Storage::url($product->product_image_transparent) }}" alt="" class="h-full" />
          </div>
          <div class="flex-1 bg-center bg-cover bg-no-repeat" style="background-image: url('{{ Storage::url($product->featured_meal_picture) }}')">
          </div>
      </div>
    @endforeach'

    <div class="absolute bottom-0 z-10 flex w-full justify-center">
      @foreach ($products as $product)
        <img x-on:click="index = {{ $loop->index }}" src="{{ Storage::url($product->product_image_transparent) }}" alt="" class="h-20 w-20 transition-all ease-in-out duration-1000 transform" x-bind:style="index == {{ $loop->index }} && 'transform: scale(2)'" />
      @endforeach
    </div>
</div>