<x-mail::message>
# Portfolio contact from {{ $name }}
Email: {{$email}}
<br>
{{$content}}

    {{-- <x-mail::button :url="''">
        Button Text
    </x-mail::button> --}}

    {{-- Thanks,<br>
    {{ config('app.name') }} --}}
</x-mail::message>
