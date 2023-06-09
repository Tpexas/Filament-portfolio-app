@if($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}"
        class="flex items-center justify-between">
        <div class="flex flex-1 justify-between sm:hidden">
            @if($paginator->onFirstPage())
                <span class="invisible">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}"
                    class="group mr-3 flex cursor-pointer items-center border-2 border-primary px-3 py-1 font-body font-medium text-primary transition-colors hover:border-secondary hover:text-secondary dark:border-green-light dark:text-white dark:hover:border-secondary dark:hover:text-secondary">
                    <i
                        class="bx bx-left-arrow-alt mr-1 text-primary transition-colors group-hover:text-secondary dark:text-white"></i>
                    Prev
                </a>
            @endif

            @if($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                    class="group flex cursor-pointer  items-center border-2 border-primary px-3 py-1 font-body font-medium text-primary transition-colors hover:border-secondary hover:text-secondary dark:border-green-light dark:text-white dark:hover:border-secondary dark:hover:text-secondary">
                    Next
                    <i
                        class="bx bx-right-arrow-alt ml-1 text-primary transition-colors group-hover:text-secondary dark:text-white"></i>
                </a>
            @else
                <span class="invisible">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">

            <div>
                <span class="relative z-0 inline-flex rounded-md">
                    {{-- Previous Page Link --}}
                    @if(!$paginator->onFirstPage())
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                            class="group mr-3 flex cursor-pointer items-center border-2 border-primary px-3 py-1 font-body font-medium text-primary transition-colors hover:border-secondary hover:text-secondary dark:border-green-light dark:text-white dark:hover:border-secondary dark:hover:text-secondary"
                            aria-label="{{ __('pagination.previous') }}">

                            <i
                                class="bx bx-left-arrow-alt mr-1 text-primary transition-colors group-hover:text-secondary dark:text-white"></i>
                            Prev
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if(is_string($element))
                            <span aria-disabled="true">
                                <span
                                    class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5">{{
                        $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if(is_array($element))
                            @foreach($element as $page => $url)
                                @if($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span
                                            class="relative inline-flex bottom-0 mr-3 cursor-pointer border-2 border-secondary px-3 py-1 font-body font-medium text-secondary">{{ $page }}</span>
                                    </span>
                                @else
                                    <a href="{{ $url }}"
                                        class="mr-3 cursor-pointer border-2 border-primary px-3 py-1 font-body font-medium text-primary transition-colors hover:border-secondary hover:text-secondary dark:border-green-light dark:text-white dark:hover:border-secondary dark:hover:text-secondary"
                                        aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                            class="group flex cursor-pointer items-center border-2 border-primary px-3 py-1 font-body font-medium text-primary transition-colors hover:border-secondary hover:text-secondary dark:border-green-light dark:text-white dark:hover:border-secondary dark:hover:text-secondary"
                            aria-label="{{ __('pagination.next') }}">
                            Next
                            <i
                                class="bx bx-right-arrow-alt ml-1 text-primary transition-colors group-hover:text-secondary dark:text-white"></i>
                        </a>
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif
