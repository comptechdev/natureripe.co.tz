<div class="row-span-3" style="background-image: url({{ $background ?? asset('img/bg1.png') }}) ">
    <div class="flex justify-center py-5">
        <div class="z-10 hover:rotate-12 duration-1000 transition">
            <img src=" {{ $bottle??'#' }}" alt="bt" class="h-64">
        </div> 
        <div class="w-64 bg-white p-10 -ml-10">
            <div class="">
                <h1 class="{{ $titlestyle }}">{!! $title !!}</h1>
                <P class="{{ $descriptionstyle }}">{{ $description }}</P>
            </div>
        </div>
    </div>
</div>