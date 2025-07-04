<x-layout>
    <x-slot:heading>
        Jobs listing
    </x-slot:heading>
    <ul>
    @foreach ($jobs as $job)
        <a href='/jobs/{{ $job['id'] }}' class='hover:underline'>
            <li>
                <strong>{{ $job['title'] }}:</strong> Pays {{$job['salary']}} per year.
            </li>
        </a>
    @endforeach
    </ul>
</x-layout>

