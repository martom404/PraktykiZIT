<x-layout>
    <x-slot:heading>
        Jobs listing
    </x-slot:heading>
    <div>
        <a href='/jobs/create'class='text-blue-500 font-bold block px-4 py-6 text-center border border-gray-200 rounded-lg'>Create a new job!</a>
    </div>
    <div class='space-y-4'>
    @foreach ($jobs as $job)
        <a href='/jobs/{{ $job['id'] }}' class='block px-4 py-6 border border-gray-200 rounded-lg'>
            <div class='font-bold text-blue-500 text-sm'>
                 {{$job->employer->name}}
            </div>
            <div>
                <strong>{{ $job['title'] }}:</strong> Pays {{$job['salary']}} per year.
            </div>
        </a>
    @endforeach
    </div>
    <div>
        {{ $jobs->links() }}
    </div>
</x-layout>

