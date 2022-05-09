<div class="flex flex-col">
    <!-- Be present above all else. - Naval Ravikant -->
    @push('scripts')
        <x-head.tinymce-config/>
    @endpush

    <label for="" class="text-xl font-bold">{{ $label }}</label>
    <textarea class="tiny-mce" name="{{ $name }}" placeholder="{{ $placeholder??$label??"" }}">{{ old($name) ?? $value ?? '' }}</textarea>
</div>