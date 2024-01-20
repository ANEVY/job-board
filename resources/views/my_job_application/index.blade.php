<x-layout>
    <x-breadcrumb :links="['My Job Applications' => '#']"></x-breadcrumb>
    <div class="my-3">
        @forelse ($applications as $application)
            <x-job-card :job="$application->job">
                <div class="flex justify-between text-xs align-middle">
                    <div>
                        <div>
                            <div>Applied {{$application->created_at->diffForHumans()}}</div>
                            <div>Other {{Str::plural('applicant',$application->job->job_applications_count-1)}} {{$application->job->job_applications_count-1}}</div>
                            <div>Your asking salary {{$application->salary}}</div>
                            <div>Average asking salary {{ number_format($application->job->job_applications_avg_salary)}}</div>
                        </div>
                        
                    </div>
                    <div>
                        <form action="{{route('my-job-application.destroy',$application)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <x-button>Cancel</x-button>
                        </form>
                    </div>
                    
                </div>
            </x-job-card>
        @empty
        <div>
            <p class="mb-2">No job application yet</p>
            <x-link-button :href="route('jobs.index')">Apply</x-link-button>
        </div>
        @endforelse
    </div>

</x-layout>