<x-layout>
    <x-breadcrumb class="mb-4" :links="['Jobs'=>route('jobs.index'), $job->title => '#']"></x-breadcrumb>
    <x-job-card :job="$job"></x-job-card>
</x-layout>