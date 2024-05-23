<x-layout>
    <div>
        {{-- POST DATE LINE --}}
        <div class="outline outline-offset-4 outline-1 outline-gray-400">
            <div class="w-full h-[50dvh] overflow-hidden flex justify-center items-center">
                <img src="{{ asset('images/img.jpg') }}" class="object-cover">
            </div>
        </div>
        <div class="flex items-center mb-6 mt-12">
            <div class="h-[1px] bg-gray-400 flex-grow"></div>
            <div class="mx-3 text-sm">{{$post->created_at}}</div>
            <div class="h-[1px] bg-gray-400 flex-grow"></div>
        </div>
        {{-- POST HEADING --}}
        <div class="px-5">
            <h1 class="text-4xl mb-5">{{$post->title}}</h1>
            <div class="left-side-content flex justify-between">
                <div class="max-w-[80%]">
                    <p class="font-serif flex-grow">{{$post->content}}</p>
                </div>
            </div>
        </div>
        <div class="mt-20">
            <div class="flex items-center mb-10 mt-12">
                <div class="h-[1px] bg-gray-400 flex-grow"></div>
                <div class="mx-3 uppercase text-lg">Related posts</div>
                <div class="h-[1px] bg-gray-400 flex-grow"></div>
            </div>

            <div class="flex justify-evenly mb-96">
                @unless ($related_posts->isEmpty())
                    @foreach ($related_posts as $post)
                    <a href="/posts/{{$post->id}}">
                        <div class="w-[16rem] h-[29rem] flex flex-col justify-between items-center hover:bg-gray-100 p-3 cursor-pointer">
                            <div class="h-4/5 overflow-hidden flex justify-center items-end">
                                <img src="/images/img.jpg" alt="" class="object-cover">
                            </div>
                            <div class="flex-grow text-center flex flex-col justify-between">
                                <h3 class="font-semibold text-lg text-center">{{$post->title}}</h3>
                                <p class="text-xs">{{ explode(' ', $post->created_at)[0] }}</p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                @endunless
            </div>
        </div>
    </div>
</x-layout>