<div class="flex flex-col">
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <label for="" class="text-xl font-bold">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder??$label??"" }}" value="{{ old($name) ?? $value ?? '' }}" />
</div>