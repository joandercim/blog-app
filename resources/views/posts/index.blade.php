<x-layout>
    <div class="px-5">
        <h1 class="text-2xl my-28 uppercase text-center tracking-[.4rem]">Joandercim</h1>
        <ul class="flex gap-5 text-xs mb-5">
            <li class="{{ request('category') ? '' : 'font-semibold' }}"><a href="/">All</a></li>
            <li class="{{ request('category') == 'travel' ? 'font-semibold' : '' }}"><a href="/?category=travel">Travel</a></li>
            <li class="{{ request('category') == 'study' ? 'font-semibold' : '' }}"><a href="/?category=study">Study</a></li>
            <li class="{{ request('category') == 'life' ? 'font-semibold' : '' }}"><a href="/?category=life">Life</a></li>
        </ul>
        <section id="posts">
            {{-- POST --}}
            @unless ($posts->isEmpty()) 
                @foreach ($posts as $post)
                <div class="mb-5">
                    {{-- POST DATE LINE --}}
                    <div class="flex items-center my-2">
                        <div class="h-[1px] bg-gray-400 flex-grow"></div>
                        <div class="mx-3 text-sm">{{$post->created_at}}</div>
                        <div class="h-[1px] bg-gray-400 flex-grow"></div>
                    </div>
                    {{-- POST HEADING --}}
                    <div class="left-side-content flex justify-between">
                        <div class="max-w-[80%] flex flex-col justify-between">
                            <h2 class="font-semibold text-lg mb-1">{{$post->title}}</h2>
                            <p class="font-serif flex-grow">    {{ implode(' ', array_slice(explode(' ', $post->content), 0, 30)) . '...' }}</p>
                            <a class="w-32 text-center mt-8 inline-block uppercase tracking-widest text-sm border hover:bg-orange-100 px-3 py-1 bg-orange-50 rounded-md" href="posts/{{$post->id}}">Read more</a>
                        </div>
                        <div class="border">
                            <div class="w-36 h-36 border border-black overflow-hidden">
                                <img src="{{ asset('images/img.jpg') }}" class="object-cover">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
                @else
                <p>No blog posts found</p>
            @endunless
            <div class="mt-6 py-4">
                {{ $posts->links() }}
            </div>
        </section>
    </div>
</x-layout>