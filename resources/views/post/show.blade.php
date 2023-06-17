<x-app-layout>
    <div class=" grid grid-cols-8">
        <main class="lg:col-span-5 col-span-8 px-4 pb-8">
            @foreach($post->thumbnail as $image)
            <img class="w-full h-auto shadow-xl dark:shadow-green-light" src="/storage/{{ $image }}" alt="">
            @endforeach
        </main>
        <aside
            class="pb-2 self-start static lg:sticky top-0 lg:col-span-3 col-span-8 lg:row-start-auto row-start-1 px-4 lg:px-0 dark:text-white text-primary">
            <div class="flex gap-1 flex-wrap">
                <a href="/" class="mr-3">
                    <i
                        class="text-2xl self-center text-primary dark:text-white hover:text-secondary dark:hover:text-secondary transition-colors bx bx-chevron-left-circle"></i>
                </a>
                @foreach($post->categories as $category)
                <span class=" rounded-full bg-green-light px-2 py-1 mb-1 font-body text-sm text-green">{{
                    $category->title }}</span>
                @endforeach
            </div>
            <div class="text-xl pt-3 pb-4 dark:text-white">{{ $post->title }}</div>
            <div class="prose dark:prose-dark">{!!$post->body!!}</div>
        </aside>


    </div>


</x-app-layout>