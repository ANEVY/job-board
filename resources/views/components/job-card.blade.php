<x-card class="mb-4">
    <div class="flex justify-between mb-4">
        <h2 class="text-lg font-medium">{{$job->title}}</h2>
        <div class="text-slate-500">
            ${{number_format($job->salary)}}
        </div>
    </div>
    <div class="flex mb-4 justify-between items-center">
        <div class="flex space-x-4">
             <div>Company</div>
             <div>{{$job->location}}</div>
        </div>
        <div class="flex space-x-1 text-xs align-middle items-center">
            <x-tag>{{Str::ucfirst($job->experience)}}</x-tag>
            <x-tag>{{$job->category}}</x-tag>
        </div>
    </div>
    <p class="text-sm text-slate-500">{!!nl2br( e( $job->description))!!}</p>
    {{$slot}}    
</x-card>