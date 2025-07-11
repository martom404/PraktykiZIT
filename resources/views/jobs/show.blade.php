<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class='font-bold text-lg'>{{$job->title}}</h2>
    <p>This job pays you {{ $job->salary }} per year</p>
    @if ($job->employer) <p class='text-sm text-blue-800'>This job is offered by <strong>{{ $job->employer?->name  ?? 'null'}}</strong></p>
    @endif
    <p class='mt-6'>
        <x-button href='/jobs/{{ $job->id }}/edit'>Edit job</x-button>
    </p>
</x-layout>

