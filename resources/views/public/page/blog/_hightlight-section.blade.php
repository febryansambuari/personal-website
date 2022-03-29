<div class="grid grid-cols-3 gap-2">
    <div class="col-span-2">
        <img src="{{ asset('img/dummy/dummy-image-2.jpg') }}" alt="Dummy Image" class="rounded-md w-full h-3/4">
    </div>
    <div class="px-5">
        <a href="{{ route('blog.show', ['slug' => 'coba']) }}">
            <h3 class="text-4xl text-gray-900 dark:text-white dark:hover:text-sky-400">How to set up a front-end project with Vite, React, and TypeScript</h3>
        </a>

        <hr class="my-3 dark:border dark:border-slate-400">

        <p class="font-normal text-gray-700 dark:text-gray-400">
            Software development entails a lot of work like building new features, fixing bugs, infrastructure maintenance, keeping track of dependencies, phasing
        </p>
        <div class="flex justify-between mt-16">
            <span
                class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                Development
            </span>
            <span
                class="text-blue-800 text-sm font-medium inline-flex items-center rounded dark:text-blue-100">
                <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                        clip-rule="evenodd"></path>
                </svg>
                18 March 2022
            </span>
        </div>
    </div>
</div>
