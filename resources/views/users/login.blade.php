<x-layout>
    <div class="max-w-96 mx-auto">
        <form action="/authenticate"  class="flex flex-col items-center p-4" method="POST">
            @csrf
            <div>
                <label class="text-sm" for="email">Email</label>
                <input class="block rounded-md border p-1 mb-2 max-w-full w-60" type="email" name="email">

                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label class="text-sm" for="password">Password</label>
                <input class="block rounded-md border p-1 max-w-full w-60" type="password" name="password">
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <button type="submit" class="my-4 py-2 max-w-32 w-32 bg-green-400">Login</button>
        </form>
    </div>
</x-layout>