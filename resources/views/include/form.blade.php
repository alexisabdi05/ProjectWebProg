<link rel="stylesheet" href="/css/form.css">
<form class="mt-16 bg-blue-200">
    <label for="default-search" class="mb-2 text-sm font-medium text-black sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-5 pr-3 pointer-events-none border-r-2">
            <svg aria-hidden="true" class="w-12 h-12 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-6 pl-10 text-xl text-gray-90 border-white bg-white" placeholder="Search Courses..." required>
        <button type="submit" class="text-black absolute right-2.5 bottom-2.5 bg-blue-200 font-semibold rounded-3xl text-2xl px-10 py-3 hover:bg-blue-300">Search</button>
    </div>
</form>
