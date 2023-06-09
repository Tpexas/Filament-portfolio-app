<x-app-layout>
    <div class=" grid grid-cols-8">
        <main class="col-span-5 px-4 pb-8">
            @foreach($post->thumbnail as $image)
            <img class="w-full h-auto shadow-xl dark:shadow-green-light" src="/storage/{{ $image }}" alt="">
            @endforeach
        </main>
        <aside class="self-start sticky top-0 col-span-3 dark:text-white text-primary">
            <div>
                @foreach($post->categories as $category)
                <span class="inline-block rounded-full bg-green-light px-2 py-1 font-body text-sm text-green">{{
                    $category->title }}</span>
                @endforeach
            </div>
            <div class="text-xl py-4 dark:text-white">{{ $post->title }}</div>
            <div class="prose dark:prose-dark">{!!$post->body!!}</div>
        </aside>


    </div>


</x-app-layout>