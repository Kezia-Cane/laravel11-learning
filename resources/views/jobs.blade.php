<x-layout>
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>

    @foreach ($jobs as $job)
        <li><strong>{{ $job['title'] }}:</strong> {{ $job['description'] }} </li>
    @endforeach

</x-layout>
