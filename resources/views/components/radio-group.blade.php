<div>
    <x-label for="{{$name}}" class="flex items-center space-x-1 mb-1">
        <input type="radio" name="{{$name}}" value="" @checked(!request($name)) id="{{$name}}">
        <span>All</span>
    </x-label>
    @foreach ($options as $option)
        <x-label for="{{$option}}" class="flex items-center space-x-1 mb-1">
            <input type="radio" id="{{$option}}" name="{{$name}}" value="{{$option}}" @checked($option === request('experience'))>
            <span>{{$option}}</span>
        </x-label>       
    @endforeach
    @error($name)
    <div class="mt-1 text-xs text-red-500">
      {{ $message }}
    </div>
  @enderror

</div>