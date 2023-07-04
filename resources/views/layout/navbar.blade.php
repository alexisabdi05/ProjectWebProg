{{-- @dd(auth()->user()) --}}
<nav class="fixed top-0 bg-white shadow z-50 w-full">
    <div class="max-w-screen flex flex-wrap items-center justify-between ml-10 p-2">
        <div class="flex items-center">
            <a href="/" class="flex items-center">
                <img src="{{ asset('/img/cvlogoo.png') }}" class="h-9" alt="Logo">
            </a>
        </div>
        <div class="flex items-center">
            <div class="hidden sm:block sm:ml-10">
                <div class="flex space-x-3">
                    <a href="/home/"
                        class="px-3 py-2 rounded-md text-lg font-bold text-gray-500 hover:text-gray-900">Home</a>
                    <a href="/categories/"
                        class="px-3 py-2 rounded-md text-lg font-bold text-gray-500 hover:text-gray-900">Course</a>
                    <a href="/colorpalette/"
                        class="px-3 py-2 rounded-md text-lg font-bold text-gray-500 hover:text-gray-900">Color
                        Palette</a>
                    <a href="/achievement/"
                        class="px-3 py-2 rounded-md text-lg font-bold text-gray-500 hover:text-gray-900">Achievement</a>
                </div>
            </div>

            <a href="/profile/" class="px-3 py-2 rounded-md text-lg font-bold text-gray-500 hover:text-gray-900">Hi,
                {{ auth()->user()->username }}</a>

        </div>
    </div>
    <div id="mobile-menu" class="sm:hidden hidden">
        <div class="px-2 pt-2 pb-3">
            <a href="#"
                class="block px-3 py-2 rounded-md text-lg font-medium text-gray-500 hover:text-gray-900">Home</a>
            <a href="#"
                class="block px-3 py-2 rounded-md text-lg font-medium text-gray-500 hover:text-gray-900">About Us</a>
            <a href="#"
                class="block px-3 py-2 rounded-md text-lg font-medium text-gray-500 hover:text-gray-900">Course</a>
            <a href="#"
                class="block px-3 py-2 rounded-md text-lg font-medium text-gray-500 hover:text-gray-900">Color
                Palette</a>
        </div>
    </div>
</nav>

<script>
    const mobileMenuButton = document.getElementById("mobile-menu-button");
    const mobileMenu = document.getElementById("mobile-menu");

    mobileMenuButton.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
    });
</script>
