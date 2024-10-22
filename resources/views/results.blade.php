<x-layout>
    <x-page-heading>
        Job Search Result
    </x-page-heading>
    <section>
        <x-section-heading>Recent Jobs</x-section-heading>
        <div class="mt-6 space-y-4">
            @foreach ($jobs as $job)
                <x-job-card-wide :job="$job" />
            @endforeach
        </div>
    </section>
</x-layout>
