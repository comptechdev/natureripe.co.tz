<div class="flex flex-col">
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
    <label for="" class="text-xl font-bold">{{ $label }}</label>
    <select name="{{ $name }}">
        <option value="">Choose...</option>
        
        @isset($options)
            @foreach ($options as $item)
                <option value="{{ $item->id }}" {{ old($name) == $item->id || $value == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
            @endforeach
        @endisset
    </select
    
    @error($name)
        <p class="text-red-700 text-xs">{{ $message }}</p>
    @enderror
</div>