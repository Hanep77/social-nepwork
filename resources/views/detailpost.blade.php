@extends('layouts.main')

@section('container')
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky top-0 z-20">
        <div class="backdrop-blur bg-white bg-opacity-80 shadow-md px-4 sm:px h-16 flex items-center">
            <div class="container max-w-xl mx-auto text-center">
                <h3 class="text-xl">Postingan {{ $post->user->name }}</h3>
            </div>
        </div>
        <div
            class="backdrop-blur bg-white bg-opacity-90 max-w-xl mx-auto sm:px h-14 flex items-center border-y border-slate-300">
            <form action="/comment/store" method="post" class="w-full h-full">
                @csrf
                <div class="container mx-auto text-center w-full h-full flex justify-center items-center">
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <input type="text" name="content"
                        class="rounded-s-full border-2 px-4 border-cyan-500 focus:outline-none focus:border-cyan-600 h-10 w-2/3"
                        placeholder="tulis komentar..." autocomplete="off" required>
                    <button type="submit"
                        class="rounded-e-full bg-cyan-500 text-white py-2 rounded-md hover:bg-cyan-600 h-10 w-1/5 flex items-center justify-center">send</button>
                </div>
            </form>
        </div>
    </nav>

    <main class="flex items-center">
        <div class="container max-w-xl mx-auto">
            <div class="backdrop-blur bg-white bg-opacity-80 shadow-md pt-4 px-4 pb-1 mb-4">
                <!-- Konten Postingan -->
                <div class="flex items-center mb-4 relative">
                    <img src="../img/profile.avif" alt="Profile Image" class="w-10 h-10 rounded-full mr-2">
                    <div>
                        <h2 class="text-gray-700 font-semibold">{{ $post->user->name }}</h2>
                        <p class="text-gray-600 text-sm">{{ $post->time_ago }}</p>
                    </div>
                </div>
                <p class="text-gray-800">{{ $post->content }}</p>
                <h6 class="font-semibold mt-2">101 likes 8 comments</h6>
                <div class="flex justify-evenly mt-4 mb-2">
                    <button class="text-gray-500 hover:underline"><i class="bi bi-hand-thumbs-up"></i></button>
                    <button class="text-gray-500 hover:underline"><i class="bi bi-chat"></i></button>
                </div>

                @foreach ($post->comments as $comment)
                    <div class="flex items-center mb-4 border-t border-slate-300 py-2 relative ps-12">
                        <img src="../img/profile.avif" alt="Profile Image"
                            class="w-10 h-10 rounded-full mr-2 absolute top-2 left-0">
                        <div>
                            <div class="flex items-center">
                                <h2 class="text-gray-700 font-semibold mr-2">{{ $comment->user->name }}</h2>
                                <p class="text-gray-600 text-sm">{{ $comment->time_ago }}</p>
                            </div>
                            <p class="text-gray-700">{{ $comment->content }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </main>
@endsection
