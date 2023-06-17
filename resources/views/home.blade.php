<x-app-layout>
    <div>
        <div class="container mx-auto">
            <div class="border-b border-grey-lighter py-16 lg:py-20">
                <div>
                    <img src="/storage/{{$author->author_image}}" class="h-16 w-16 object-cover rounded-full"
                        alt="author" />
                </div>
                <h1 class="pt-3 font-body text-4xl font-semibold text-primary dark:text-white md:text-5xl lg:text-6xl">
                    {{$author->intro_title}}
                </h1>
                <p class="pt-3 font-body text-xl font-light text-primary dark:text-white">
                    {{$author->intro}}
                </p>
                <a href="/about-me"
                    class="mt-12 block bg-secondary px-10 py-4 text-center font-body text-xl font-semibold text-white transition-colors hover:bg-green sm:inline-block sm:text-left sm:text-2xl">
                    More about me
                </a>
            </div>


            <div class="container py-16 md:py-20" id="portfolio">
                <h2
                    class="text-center font-header text-4xl font-semibold uppercase text-primary dark:text-white sm:text-5xl lg:text-6xl">
                    Check out my Portfolio
                </h2>
                <h3
                    class="pt-6 text-center font-header text-xl font-medium text-primary dark:text-white sm:text-2xl lg:text-3xl">
                    Here's few projects that I've done
                </h3>

                <div class="mx-auto grid w-full grid-cols-1 gap-8 pt-12 sm:w-3/4 lg:w-full lg:grid-cols-2">
                    @foreach($posts as $post)
                    <x-post-item :post="$post"></x-post-item>
                    @endforeach
                </div>
                <div class="flex place-content-end py-2">
                    <a href="/projects"
                        class="flex items-center font-body italic text-green transition-colors hover:text-secondary dark:text-green-light dark:hover:text-secondary">
                        All projects
                        <img src="/assets/img/long-arrow-right.png" class="ml-3" alt="arrow right" />
                    </a>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>