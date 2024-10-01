<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-2xl">{{ $job['title'] }}</h2>

    <p>This job is resposibile for {{ $job['description'] }}</p>

</x-layout>
