<x-layout>
    <x-breadcrumb class="mb-4" :links="['Jobs'=>route('jobs.index'), $job->title => '#']"></x-breadcrumb>
    <x-job-card :job="$job">
        <p class="text-sm text-slate-500">{!!nl2br( e( $job->description))!!}</p>
        @can('apply', $job)
        <x-link-button :href="route('job.application.create', $job)">
          Apply
        </x-link-button>
      @else
        <div class="text-center text-sm font-medium text-slate-500">
          You already applied to this job
        </div>
      @endcan
    </x-job-card>
    @if ( count($job->employer->jobs ))
    <x-card class="mb-4">
        <h2 class="mb-4 ">Other {{$job->employer->company_name}} jobs</h2>
        @foreach ($job->employer->jobs as $employer_job )
        <x-job-card :job="$employer_job"></x-job-card>
    
        @endforeach
    </x-card>
    @endif

</x-layout>