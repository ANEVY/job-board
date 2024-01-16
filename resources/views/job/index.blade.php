<x-layout>
    <x-breadcrumb class="mb-4" :links="['Jobs'=>route('jobs.index')]"></x-breadcrumb>
    <x-card class="mb-4 text-sm">
        <form action="" method="get">
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <div class="mb-1 font-semibold">Search</div>
                    <x-text-input name="search" value="{{request('search')}}" placeholder="Search for any text" ></x-text-input>
                </div>
                <div>
                    <div class="mb-1 font-semibold">Salary</div>
                    <div class="flex space-x-4">
                        <x-text-input name="min_salary" value="{{request('min_salary')}}" placeholder="From" ></x-text-input>
                        <x-text-input name="max_salary" value="{{request('max_salary')}}" placeholder="To" ></x-text-input>
                    </div>
                </div>
    
            </div>
            <button type="submit" class="btn w-full">Filter</button>
        </form>

    </x-card>
    @foreach ($jobs as $job)
        <x-job-card class="mb-4" :job="$job">
            <div class="my-3">
                <x-link-button :href="route('jobs.show',$job)">See details</x-link-button>
            </div>
        </x-job-card>
    @endforeach
</x-layout>