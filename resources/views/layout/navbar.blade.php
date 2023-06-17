<nav class="fixed top-0 bg-white shadow z-50 w-full">
    <div class="max-w-screen flex flex-wrap items-center justify-between ml-10 p-2">
        <div class="flex items-center">
            <a href="/" class="flex items-center">
                <img src="{{ asset('img/cvlogoo.png') }}" class="h-9" alt="Logo">
            </a>
        </div>
        <div class="flex items-center">
            <div class="hidden sm:block sm:ml-10">
                <div class="flex space-x-3">
                    <?php if($user == NULL) : ?>
                    <a href="/"
                        class="px-3 py-2 rounded-md text-lg font-bold text-gray-500 hover:text-gray-900">Home</a>
                    <a href="/categories"
                        class="px-3 py-2 rounded-md text-lg font-bold text-gray-500 hover:text-gray-900">Course</a>
                    <a href="/colorpalette"
                        class="px-3 py-2 rounded-md text-lg font-bold text-gray-500 hover:text-gray-900">Color
                        Palette</a>
                    <?php else : ?>
                    <a href="/{{ $user->id }}"
                        class="px-3 py-2 rounded-md text-lg font-bold text-gray-500 hover:text-gray-900">Home</a>

                    <a href="/categories/{{ $user->id }}"
                        class="px-3 py-2 rounded-md text-lg font-bold text-gray-500 hover:text-gray-900">Course</a>
                    <a href="/colorpalette/{{ $user->id }}"
                        class="px-3 py-2 rounded-md text-lg font-bold text-gray-500 hover:text-gray-900">Color
                        Palette</a>
                    <?php endif; ?>
                </div>
            </div>
            <?php if($user == NULL) : ?>
            <a href="/signin"
                class="ml-3 mr-10 inline-flex items-center justify-center flex-1 px-10 py-1 border border-transparent text-lg font-bold rounded-full text-white bg-gradient-to-r from-indigo-500 to-pink-500 hover:text-white shadow-md"
                style="background: linear-gradient(138.13deg, #7479DC 20.2%, #F58A96 76.37%); box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.35); border-radius: 38px;">
                Sign In
            </a>
            <div class="block sm:hidden">
                <button id="mobile-menu-button" type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                    aria-label="Main menu" aria-expanded="false">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <?php else : ?>
            <a href="/profile/{{ $user->id }}"
                class="px-3 py-2 rounded-md text-lg font-bold text-gray-500 hover:text-gray-900">Hi,
                {{ $user->username }}</a>
            <?php endif; ?>
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
