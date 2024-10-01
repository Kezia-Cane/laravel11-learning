<x-layout>
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}">
                <li><strong>{{ $job['title'] }}:</strong> {{ $job['description'] }} </li>
            </a>
        @endforeach
    </ul>
</x-layout>
