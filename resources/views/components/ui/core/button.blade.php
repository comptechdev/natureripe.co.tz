<button type="{{ $type }}" {{ $attributes->merge(["class" => "bg-slate-100 inline-block px-5 py-2"]) }} x-data x-on:click="window.location.href = '{{ $type == 'submit' ? '#' : $href }}'">
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    {{ $slot }}
</button>