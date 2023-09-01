<nav class="navbar navbar-expand-lg navbar-light bg-light sticky top-0 z-20">
    <nav class="backdrop-blur bg-white bg-opacity-80 shadow-md px-4 sm:px h-16 flex items-center">
        <div class="container max-w-xl mx-auto">
            <div class="flex items-center justify-between">
                <a class="text-xl font-semibold" href="/">Social Nepwork</a>
                <ul class="flex space-x-4">
                    <li><a class="flex items-center" href="/"><i class="bi bi-house-door text-2xl"></i></a></li>
                    <li><a class="flex items-center" href="/post/create"><i class="bi bi-plus-square text-2xl"></i></a>
                    </li>
                    <li><a class="flex items-center" href="/search"><i class="bi bi-search text-2xl"></i></a></li>

                    @if (auth()->user())
                        <li class="relative"><button type="button" class="flex items-center" id="dropdown-button"><i
                                    class="bi bi-person text-2xl"></i></button>

                            <div class="backdrop-blur bg-white bg-opacity-80 origin-top-right hidden absolute right-0 mt-2 w-36 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-30"
                                id="dropdown-menu">
                                <a href="/user/{{ auth()->user()->username }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-white"
                                    role="menuitem">Profil</a>
                                <form action="/logout" method="post" class="p-0 m-0">
                                    @csrf
                                    <button type="submit"
                                        class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-white"
                                        role="menuitem">logout</button>
                                </form>
                            </div>
                        </li>
                    @else
                        <li><a class="flex items-center" href="/login"><i
                                    class="bi bi-box-arrow-in-right text-2xl"></i></a>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>
</nav>
