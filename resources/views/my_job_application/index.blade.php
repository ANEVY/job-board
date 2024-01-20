<x-layout>
    <x-breadcrumb :links="['My Job Applications' => '#']"></x-breadcrumb>
    <div class="my-3">
        @foreach ($applications as $application )
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
                
            </div>
        </x-job-card>
    
        @endforeach
    </div>

</x-layout>