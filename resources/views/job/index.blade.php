<x-layout>
    <x-breadcrumb class="mb-4" :links="['Jobs'=>route('jobs.index')]"></x-breadcrumb>
    @foreach ($jobs as $job)
        <x-job-card class="mb-4" :job="$job">
            <div class="my-3">
                <x-link-button :href="route('jobs.show',$job)">See details</x-link-button>
            </div>
        </x-job-card>
    @endforeach
</x-layout>