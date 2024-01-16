<x-layout>
    <x-breadcrumb class="mb-4" :links="['Jobs'=>route('jobs.index'), $job->title => '#']"></x-breadcrumb>
    <x-job-card :job="$job">
        <p class="text-sm text-slate-500">{!!nl2br( e( $job->description))!!}</p>
    </x-job-card>
</x-layout>