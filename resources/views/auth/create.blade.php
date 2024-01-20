<x-layout>
    <h1 class="my-16 text-4xl font-medium mx-auto text-center">Sign in to your account</h1>
    <x-card class="py-8 px-16">
        <form action="{{route('auth.store')}}" method="post">
            @csrf
            <div class="mb-8">
                <label for="email" class="text-sm text-slate-800 font-medium mb-2 block">Email</label>
                <x-text-input name="email"></x-text-input>
            </div>
            <div class="mb-8">
                <label for="password" class="text-sm text-slate-800 font-medium mb-2 block">Password</label>
                <x-text-input name="password" type="password"></x-text-input>
            </div>
            <div class="mb-8 flex justify-between text-sm font-medium">
                <div>
                  <div class="flex items-center space-x-2">
                    <input type="checkbox" name="remember"
                      class="rounded-sm border border-slate-400">
                    <label for="remember">Remember me</label>
                  </div>
                </div>
                <div>
                  <a href="#" class="text-indigo-600 hover:underline">
                    Forget password?
                  </a>
                </div>
              </div>
        
              <x-button class="w-full bg-green-50">Login</x-button>
        
        </form>
    </x-card>
</x-layout>