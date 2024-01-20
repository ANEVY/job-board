@if ('textarea' != $type)
    <input type="{{$type}}" name="{{$name}}" 
    placeholder="{{$placeholder}}" value="{{ old($name,$value) }}" id="{{$id}}"
    @class([
        'w-full rounded-md border-0 py-2 px-3 text-sm ring-1 placeholder:text-slate-400 focus:ring-2',
        'ring-slate-400' => !$errors->has($name),
        'ring-red-400' => $errors->has($name),
    ])
    >
@else
    <textarea name="{{$name}}" 
    @class([
        'w-full rounded-md border-0 py-2 px-3 text-sm ring-1 placeholder:text-slate-400 focus:ring-2',
        'ring-slate-400' => !$errors->has($name),
        'ring-red-400' => $errors->has($name),
    ])
    placeholder="{{$placeholder}}" 
     id="{{$id}}" cols="30" rows="10">{{ old($name,$value) }}</textarea>
@endif

@error($name)
<div class="alert alert-danger text-red-600 text-xs">{{ $message }}</div>
@enderror