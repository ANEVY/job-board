<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Job board</title>
        @vite(['resources/css/app.css','resources/css/app.js '])
    </head>
    <body class="mx-auto mt-10 max-w-2xl">
        <nav class="mb-8 flex justify-between text-lg font-medium">
            <ul class="flex space-x-2">
              <li>
                <a href="{{ route('jobs.index') }}">Home</a>
              </li>
            </ul>
        
            <ul class="flex space-x-2">
              @auth
                <li>
                  <a href="{{route('my-job-application.index')}}">{{ auth()->user()->name ?? 'Anynomus' }}</a>
                </li>
                <li>
                  <form action="{{ route('auth.destroy') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Logout</button>
                  </form>
                </li>
              @else
                <li>
                  <a href="{{ route('auth.create') }}">Sign in</a>
                </li>
              @endauth
            </ul>
          </nav>
          @if(session('success'))
          <div class="bg-blue-300 border-l-4 border-blue-800 text-slate-100 p-4 my-4" role="alert">
            <p class="font-bold">Success</p>
            <p>{{ session('success') }}</p>
          </div>
        @endif
        {{$slot}}
    </body>
</html>
