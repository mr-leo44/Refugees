<x-guest-layout>
    <section class="px-2 py-16 bg-gray-50 md:px-0 min-h-screen">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:w-1/2 md:px-3">
                    <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
                        <h1
                            class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl sm:text-center md:text-4xl lg:text-5xl xl:text-6xl">
                            <h3 class="text-3xl uppercase">Thanks for your request
                            </h3>
                            <!-- </h1> -->
                            <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
                                We will contact you within a week for the rest of procedure.
                            </p>
                            <div class="relative flex">
                                <a href="/"
                                    class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700 sm:w-auto">
                                    Back to Home
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                </a>
                            </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="w-full h-auto overflow-hidden rounded-md sm:rounded-xl">
                        <img src="{{ asset('imgs/story.jpg') }}" />
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
