<x-app-layout>
    <script src="{{ asset('assets/flickity.pkgd.min.js') }}"></script>
    <link rel="stylesheet" href="{{ 'assets/flickity.css' }}" media="screen">
    {{-- <script src="{{ asset('assets/flickity-fullscreen.js') }}"></script>
    --}}
    <link rel="stylesheet" href="{{ 'assets/flickity-fullscreen.css' }}" media="screen">
    {{--
    <link rel="stylesheet" href="https://unpkg.com/flickity-fullscreen@1/fullscreen.css"> --}}
    <script src="https://unpkg.com/flickity-fullscreen@1/fullscreen.js"></script>

    <script>
        function carousel() {
            return {
                active: 0,
                init() {
                    var flkty = new Flickity(this.$refs.carousel, {
                        wrapAround: true,
                        fullscreen: true,
                    });
                    flkty.on('change', i => this.active = i);
                }
            }
        }

        function carouselFilter() {
            return {
                active: 0,
                changeActive(i) {
                    this.active = i;

                    this.$nextTick(() => {
                        let flkty = Flickity.data(this.$el.querySelectorAll('.carousel')[i]);
                        flkty.resize();

                        console.log(flkty);
                    });
                }
            }
        }

    </script>
    <div>
        <div class="container mx-auto">
            <div class="py-16 lg:py-20">
                <div>
                    <img src="/assets/img/icon-blog.png" alt="icon envelope" />
                </div>

                <h1 class="pt-5 font-body text-4xl font-semibold text-primary dark:text-white md:text-5xl lg:text-6xl">
                    Projects
                </h1>

                <div class="pt-3 sm:w-3/4">
                    <p class="font-body text-xl font-light text-primary dark:text-white">
                        Here's collection of web projects that I've developed during my university studies and beyond
                    </p>
                </div>

                <div class="pt-8 lg:pt-12">
                    @foreach($posts as $post)
                    <div class="border-b border-grey-lighter pt-10 pb-8 grid grid-cols-3 max-h-max">
                        <div class="md:col-span-1 col-span-3">

                            <div>
                                @foreach($post->categories as $category)
                                <span
                                    class="mb-4 inline-block rounded-full bg-green-light px-2 py-1 font-body text-sm text-green">{{
                                    $category->title }}</span>
                                @endforeach
                            </div>
                            <a href="/{{ $post->slug }}" class="block font-body text-lg font-semibold text-primary transition-colors hover:text-green
                                 dark:text-white dark:hover:text-secondary mb-4">{{ $post->title }}</a>
                        </div>
                        <div class="md:col-span-2 col-span-3">
                            <div class="text-white flex items-center justify-center" x-data="carouselFilter()">
                                <div class="container grid grid-cols-1">

                                    <div class="row-start-2 col-start-1 z-40" x-show="active == 0"
                                        x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="opacity-0 transform scale-90"
                                        x-transition:enter-end="opacity-100 transform scale-100"
                                        x-transition:leave="transition ease-in duration-300"
                                        x-transition:leave-start="opacity-100 transform scale-100"
                                        x-transition:leave-end="opacity-0 transform scale-90">
                                        <div class="grid grid-cols-1 grid-rows-1" x-data="carousel()" x-init="init()">


                                            <div class="carousel col-start-1 row-start-1"
                                                data-flickity='{ "fullscreen": true }' x-ref="carousel">
                                                <div class="w-3/5 px-2">

                                                    <img class="object-cover h-full w-full aspect-video"
                                                        src="/storage/{{ $post->thumbnail[0] }}" alt=""
                                                        loading="lazy" />
                                                </div>
                                                <div class="w-3/5 px-2">
                                                    <img class="object-cover h-full w-full aspect-video"
                                                        src="/storage/{{ $post->thumbnail[1] }}" alt=""
                                                        loading="lazy" />
                                                </div>
                                                <div class="w-3/5 px-2">
                                                    <img class="object-cover h-full w-full aspect-video "
                                                        src="/storage/{{ $post->thumbnail[2] }}" alt=""
                                                        loading="lazy" />
                                                </div>
                                                {{-- <div class="w-3/5 px-2">
                                                    <img src="https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&auto=format&fit=crop&w=770&q=80"
                                                        loading="lazy">
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            {{-- <div
                                class="z-30 group relative left-52 aspect-video w-112 cursor-pointer  shadow-lg shadow-black/30 transition-all duration-200">
                                <img class="object-cover h-full w-full transition-all group-hover:scale-125"
                                    src="/storage/{{ $post->thumbnail[0] }}" alt="" />
                            </div>
                            <div
                                class="z-20 hover:z-40 relative left-64 group h-full aspect-video cursor-pointer  shadow-lg shadow-black/30 transition-all duration-200">
                                <img class="object-cover h-full w-full transition-all group-hover:scale-125"
                                    src="/storage/{{ $post->thumbnail[1] }}" alt="" />
                            </div>
                            <div
                                class="z-10 hover:z-50 relative left-76 group aspect-video cursor-pointer  shadow-lg shadow-black/30 transition-all duration-200">
                                <img class="object-cover h-full w-full transition-all group-hover:scale-125"
                                    src="/storage/{{ $post->thumbnail[2] }}" alt="" />
                            </div> --}}
                        </div>
                    </div>
                    @endforeach
                    <div class="pt-2">{{ $posts->links() }}</div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>