@extends('layouts.main')

@section('container')
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky top-0 z-20">
        <nav class="backdrop-blur bg-white bg-opacity-80 shadow-md px-4 sm:px h-16 flex items-center">
            <div class="container max-w-xl mx-auto">
                <form action="/search">
                    <div class="flex items-center justify-between">
                        <input type="text" name="query"
                            class="rounded-s-full border-2 border-cyan-600 focus:outline-none focus:border-cyan-700 h-10 px-4 w-4/5">
                        <button type="submit"
                            class="rounded-e-full bg-cyan-600 text-white py-2 rounded-md hover:bg-cyan-700 h-10 w-1/5">Cari</button>
                    </div>
                </form>
            </div>
        </nav>
    </nav>

    <main class="flex items-center mt-4">
        <div class="container max-w-xl mx-auto">
            @if (request()->has('query'))
                @foreach ($users as $user)
                    <a href="/user/{{ $user->username }}"
                        class="block backdrop-blur bg-white bg-opacity-80 shadow-md rounded-md px-4 py-2 mb-2">
                        <div class="flex items-center">
                            <img src="img/profile.avif" alt="Profile Image" class="w-10 h-10 rounded-full mr-2">
                            <h2 class="text-gray-700 font-semibold">{{ $user->name }}</h2>
                        </div>
                    </a>
                @endforeach
            @endif
        </div>
    </main>
@endsection
