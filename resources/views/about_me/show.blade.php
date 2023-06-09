<x-app-layout>
    <div>
        <div class="container mx-auto">
            <div class="py-16 lg:py-20">
                <div>
                    <img src="/assets/img/icon-uses.png" alt="icon uses" />
                </div>
                <h1 class="pt-5 font-body text-4xl font-semibold text-primary dark:text-white md:text-5xl lg:text-6xl">
                    About me
                </h1>

                <div class="pt-16 lg:pt-20 text-primary dark:text-white">
                    <div class="prose dark:prose-dark">{!!$author->about_body!!}</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>