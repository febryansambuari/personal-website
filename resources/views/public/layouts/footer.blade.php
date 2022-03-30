<footer class="px-2 sm:px-4 py-2.5 md:flex md:items-center md:justify-between mt-48 mb-3">
    <span class="text-sm text-zinc-800 md:p-0 font-medium text-center dark:text-gray-400">© {{ now()->year }} <a
        href="{{ route('home') }}" class="hover:underline">{{ config('app.name') }}</a>. All Rights Reserved.
    </span>
    <ul class="hidden sm:flex sm:flex-wrap items-center mt-3 text-sm text-gray-500 dark:text-gray-400 sm:mt-0">
        <li>
            <a href="#" class="mr-4 hover:underline md:mr-6 ">Blog</a>
        </li>
        <li>
            <a href="#" class="mr-4 hover:underline md:mr-6">Projects</a>
        </li>
        <li>
            <a href="#" class="mr-4 hover:underline md:mr-6">Albums</a>
        </li>
        <li>
            <a href="#" class="hover:underline">Contact</a>
        </li>
    </ul>
</footer>
