@extends('public.layouts.default')

@section('content')
<section class="container">
    <img src="{{ asset('img/dummy/dummy-image-2.jpg') }}" alt="Dummy Image" class="rounded-lg mt-8">
    <h2 class="text-4xl p-6 mt-5 text-zinc-900 dark:text-white text-left">How to set up a front-end project with Vite, React, and TypeScript</h2>
    <div class="flex justify-between">
        <div>
            <p class="text-blue-800 text-xs font-medium inline-flex items-center my-3 mx-1 px-2.5 py-0.5 rounded dark:text-blue-100">
                Written on 29 March 2022, by Febryan Sambuari
            </p>
        </div>
        <div>
            <span
                class="bg-blue-100 text-blue-800 text-xs font-semibold my-3 mx-1 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                Development
            </span>
            <span
                class="bg-blue-100 text-blue-800 text-xs font-semibold my-3 mx-1 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                UX
            </span>
            <span
                class="bg-blue-100 text-blue-800 text-xs font-semibold my-3 mx-1 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                Technology
            </span>
            <span
                class="bg-blue-100 text-blue-800 text-xs font-semibold my-3 mx-1 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                Technology
            </span>
            <span
                class="bg-blue-100 text-blue-800 text-xs font-semibold my-3 mx-1 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                Technology
            </span>
        </div>
    </div>

    <hr>

    <p class="p-6 mt-5 dark:text-slate-300">
        Software development entails a lot of work like building new features, fixing bugs, infrastructure maintenance, keeping track of dependencies, phasing deprecated solutions out, etc. All of this works even without considering product, people, or operations. <br> <br>
        A slice of the work mentioned above constantly requires input from a human brain. Software is fundamentally 1s and 0s, but the end goal is to provide value to humans. Without any breakthrough in artificial intelligence, figuring out features that can be implemented and suit human needs programmatically remains a dream. <br> <br>
        Either way, there are a lot of tedious tasks like running tests, publishing releases, deploying features, keeping a repository clean. This task follows the same pattern every time, and they are not less important than others. <br> <br>
        We don't need any artificial or otherwise intelligence for these tasks every single time. We need to do it once to create some job and have that same job run based on some triggers.
    </p>

    <p class="p-6 mt-5 dark:text-slate-300">
        Software development entails a lot of work like building new features, fixing bugs, infrastructure maintenance, keeping track of dependencies, phasing deprecated solutions out, etc. All of this works even without considering product, people, or operations. <br> <br>
        A slice of the work mentioned above constantly requires input from a human brain. Software is fundamentally 1s and 0s, but the end goal is to provide value to humans. Without any breakthrough in artificial intelligence, figuring out features that can be implemented and suit human needs programmatically remains a dream. <br> <br>
        Either way, there are a lot of tedious tasks like running tests, publishing releases, deploying features, keeping a repository clean. This task follows the same pattern every time, and they are not less important than others. <br> <br>
        We don't need any artificial or otherwise intelligence for these tasks every single time. We need to do it once to create some job and have that same job run based on some triggers.
    </p>

    <div class="mt-10 mb-10 text-center flex flex-col">
        <div>
            <button type="button" class="text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:focus:ring-blue-800">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        <div class="mt-3">
            <span class="dark:text-slate-300 text-sm">5 loves</span>
        </div>
    </div>

    <hr>

    <div class="mt-10 mb-10 text-left">
        <p class="mb-3 dark:text-white">Share this post if you like it: </p>
        <button type="button" class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-xs px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2">
            <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M279.1 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.4 0 225.4 0c-73.22 0-121.1 44.38-121.1 124.7v70.62H22.89V288h81.39v224h100.2V288z"></path></svg>
            Share on Facebook
        </button>
        <button type="button" class="text-white bg-[#1da1f2] hover:bg-[#1da1f2]/90 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-medium rounded-lg text-xs px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#1da1f2]/55 mr-2 mb-2">
            <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M459.4 151.7c.325 4.548 .325 9.097 .325 13.65 0 138.7-105.6 298.6-298.6 298.6-59.45 0-114.7-17.22-161.1-47.11 8.447 .974 16.57 1.299 25.34 1.299 49.06 0 94.21-16.57 130.3-44.83-46.13-.975-84.79-31.19-98.11-72.77 6.498 .974 12.99 1.624 19.82 1.624 9.421 0 18.84-1.3 27.61-3.573-48.08-9.747-84.14-51.98-84.14-102.1v-1.299c13.97 7.797 30.21 12.67 47.43 13.32-28.26-18.84-46.78-51.01-46.78-87.39 0-19.49 5.197-37.36 14.29-52.95 51.65 63.67 129.3 105.3 216.4 109.8-1.624-7.797-2.599-15.92-2.599-24.04 0-57.83 46.78-104.9 104.9-104.9 30.21 0 57.5 12.67 76.67 33.14 23.72-4.548 46.46-13.32 66.6-25.34-7.798 24.37-24.37 44.83-46.13 57.83 21.12-2.273 41.58-8.122 60.43-16.24-14.29 20.79-32.16 39.31-52.63 54.25z"></path></svg>
            Share on Twitter
        </button>
        <button type="button" class="text-white bg-[#23ec4e] hover:bg-[#23ec4e]/90 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-medium rounded-lg text-xs px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#1da1f2]/55 mr-2 mb-2">
            <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path></svg>
            Share on Whatsapp
        </button>
        <button type="button" class="text-white bg-[#1f60d8] hover:bg-[#1f60d8]/90 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-medium rounded-lg text-xs px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#1da1f2]/55 mr-2 mb-2">
            <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="telegram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z"></path></svg>
            Share on Telegram
        </button>
    </div>
</section>

<section class="container mt-36">
    <h2 class="text-zinc-900 dark:text-slate-300 text-4xl">Other post that you might like</h2>

    <div class="mt-5 grid sm:grid-cols-3 sm:gap-3">
        <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 m-1">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('img/dummy/dummy-image-1.jpg') }}" alt="Dummy Image">
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-white dark:hover:text-sky-400">Noteworthy technology
                        acquisitions 2021</h5>
                </a>
                <span
                    class="bg-blue-100 text-blue-800 text-xs font-semibold my-3 mx-1 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                    Development
                </span>
                <span
                    class="bg-blue-100 text-blue-800 text-xs font-semibold my-3 mx-1 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                    UX
                </span>
                <span
                    class="bg-blue-100 text-blue-800 text-xs font-semibold my-3 mx-1 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                    Technology
                </span>
                <p class="mt-6 mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
                <div class="flex justify-between">
                    <span
                        class="text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:text-blue-100">
                        <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                clip-rule="evenodd"></path>
                        </svg>
                        3 days ago
                    </span>
                    <a href="#"
                        class="inline-flex items-center py-2 px-3 text-xs font-medium text-center text-gray-900 focus:outline-none hover:shadow-sm hover:bg-gray-100 dark:text-blue-100 dark:hover:text-zinc-900">
                        Read more
                        <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 m-1">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('img/dummy/dummy-image-1.jpg') }}" alt="Dummy Image">
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-white dark:hover:text-sky-400">Noteworthy technology
                        acquisitions 2021</h5>
                </a>
                <span
                    class="bg-blue-100 text-blue-800 text-xs font-semibold my-3 mx-1 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                    Development
                </span>
                <span
                    class="bg-blue-100 text-blue-800 text-xs font-semibold my-3 mx-1 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                    UX
                </span>
                <span
                    class="bg-blue-100 text-blue-800 text-xs font-semibold my-3 mx-1 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                    Technology
                </span>
                <p class="mt-6 mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
                <div class="flex justify-between">
                    <span
                        class="text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:text-blue-100">
                        <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                clip-rule="evenodd"></path>
                        </svg>
                        3 days ago
                    </span>
                    <a href="#"
                        class="inline-flex items-center py-2 px-3 text-xs font-medium text-center text-gray-900 focus:outline-none hover:shadow-sm hover:bg-gray-100 dark:text-blue-100 dark:hover:text-zinc-900">
                        Read more
                        <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 m-1">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('img/dummy/dummy-image-1.jpg') }}" alt="Dummy Image">
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-white dark:hover:text-sky-400">Noteworthy technology
                        acquisitions 2021</h5>
                </a>
                <span
                    class="bg-blue-100 text-blue-800 text-xs font-semibold my-3 mx-1 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                    Development
                </span>
                <span
                    class="bg-blue-100 text-blue-800 text-xs font-semibold my-3 mx-1 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                    UX
                </span>
                <span
                    class="bg-blue-100 text-blue-800 text-xs font-semibold my-3 mx-1 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                    Technology
                </span>
                <p class="mt-6 mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
                <div class="flex justify-between">
                    <span
                        class="text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:text-blue-100">
                        <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                clip-rule="evenodd"></path>
                        </svg>
                        3 days ago
                    </span>
                    <a href="#"
                        class="inline-flex items-center py-2 px-3 text-xs font-medium text-center text-gray-900 focus:outline-none hover:shadow-sm hover:bg-gray-100 dark:text-blue-100 dark:hover:text-zinc-900">
                        Read more
                        <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
