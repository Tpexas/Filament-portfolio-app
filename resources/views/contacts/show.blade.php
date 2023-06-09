<x-app-layout>

    <div>
        <div class="container mx-auto">
            <div class="py-16 lg:py-20">
                <div>
                    <img src="/assets/img/icon-contact.png" alt="icon envelope" />
                </div>
                <h1 class="pt-5 font-body text-4xl font-semibold text-primary dark:text-white md:text-5xl lg:text-6xl">
                    Contact
                </h1>
                <div class="pr-2 pt-3 sm:pt-0">
                    <p class="font-body text-xl font-light text-primary dark:text-white">
                        Feel free to use the contact form below to send me a message directly
                    </p>
                </div>
                <form method="POST" action="{{ route('contact.submit') }}" class="pt-16">
                    @csrf
                    <div class="flex flex-col sm:flex-row">
                        <div class="w-full sm:mr-3 sm:w-1/2">
                            <label class="block pb-3 font-body font-medium text-primary dark:text-white">Your
                                Name</label>
                            <input type="text" id="name" name="name"
                                class="w-full border border-primary bg-grey-lightest px-5 py-4 font-body font-light text-primary placeholder-primary transition-colors focus:border-secondary focus:outline-none focus:ring-2 focus:ring-secondary" />
                            @error('name')
                            <p class="text-red text-sm mt-1">Type in your name</p>
                            @enderror
                        </div>
                        <div class="w-full pt-6 sm:ml-3 sm:w-1/2 sm:pt-0">
                            <label class="block pb-3 font-body font-medium text-primary dark:text-white">Email
                                Address</label>
                            <input type="email" id="email" name="email"
                                class="w-full border border-primary bg-grey-lightest px-5 py-4 font-body font-light text-primary placeholder-primary transition-colors focus:border-secondary focus:outline-none focus:ring-2 focus:ring-secondary" />
                            @error('email')
                            <p class="text-red text-sm mt-1">Type in your email</p>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full pt-6 sm:pt-10">
                        <label class="block pb-3 font-body font-medium text-primary dark:text-white">Your
                            Message</label>
                        <textarea id="content" name="content" cols="30" rows="9"
                            class="w-full border border-primary bg-grey-lightest px-5 py-4 font-body font-light text-primary placeholder-primary transition-colors focus:border-secondary focus:outline-none focus:ring-2 focus:ring-secondary"></textarea>
                        @error('content')
                        <p class="text-red text-sm mt-1">Write a message</p>
                        @enderror
                    </div>
                    <button
                        class="mt-10 mb-12 block bg-secondary px-10 py-4 text-center font-body text-xl font-semibold text-white transition-colors hover:bg-green sm:inline-block sm:text-left sm:text-2xl">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>