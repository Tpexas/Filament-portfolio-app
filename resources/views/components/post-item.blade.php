{{-- <div class="">
    <a href="/" class="">
        <img src="/storage/{{$post->thumbnail}}"
            class="w-full shadow mx-auto transform transition-all hover:scale-105 md:mx-0" alt="portfolio image" />
    </a>
    <p class="text-center">{{$post->title}}</p>
</div> --}}
{{-- <div class="flex min-h-screen items-center justify-center bg-neutral-800"> --}}
    <div>
        <div class="mx-auto max-w-6xl">
            <p class="dark:text-white text-center py-1">{{$post->title}}</p>
            <a href="/{{$post->slug}}">
                <div class="flex [&:hover>div]:w-16 [&>div:hover]:w-[30rem]">
                    <div
                        class="group relative h-96 w-[30rem] cursor-pointer overflow-hidden shadow-lg shadow-black/30 transition-all duration-200">
                        <img class="h-full w-full object-cover object-top transition-all group-hover:rotate-1 group-hover:scale-125"
                            src="/storage/{{$post->thumbnail[0]}}" alt="" />
                    </div>
                    <div
                        class="group relative h-96 w-16 cursor-pointer overflow-hidden shadow-lg shadow-black/30 transition-all duration-200">
                        <img class="h-full w-full object-cover object-top transition-all group-hover:rotate-1 group-hover:scale-125"
                            src="/storage/{{$post->thumbnail[1]}}" alt="" />
                    </div>
                    <div
                        class="group relative h-96 w-16 cursor-pointer overflow-hidden shadow-lg shadow-black/30 transition-all duration-200">
                        <img class="h-full w-full object-cover object-top transition-all group-hover:rotate-1 group-hover:scale-125"
                            src="/storage/{{$post->thumbnail[2]}}" alt="" />
                    </div>
                </div>
            </a>
        </div>
        <div class="flex place-content-between">
            <div>
                @foreach($post->categories as $category)
                <span
                    class="inline-block rounded-full bg-green-light px-2 py-1 mt-2 font-body text-sm text-green">{{$category->title}}</span>
                @endforeach
            </div>
            <a href="/{{$post->slug}}"
                class="group mt-2 flex rounded-full px-2 py-1 font-body text-sm text-white transition-colors hover:bg-green bg-secondary">details
                <img src="/assets/img/long-arrow-right.png" class="ml-3 py-1 hue-rotate-60 brightness-0 invert"
                    alt="arrow right" /></a>
        </div>

    </div>
    {{--
</div> --}}