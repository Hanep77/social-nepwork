@extends('layouts.main')
@include('layouts.navbar')

@section('container')
    <main class="flex items-center">
        <div class="container max-w-xl mx-auto">

            <div class="backdrop-blur bg-white bg-opacity-80 shadow-md rounded-b-lg p-4 mb-4">
                <div class="flex flex-col items-center">
                    <img src="../img/profile.avif" alt="Profile Image" class="w-24 h-24 rounded-full mr-2">
                    <h4 class="text-lg font-semibold my-3">{{ $user->name }}</h4>
                </div>
                <div class="flex justify-evenly border-t border-cyan-500 py-3">
                    <div class="text-center">
                        <h4 class="text-md font-semibold">{{ count($user->posts) }}</h4>
                        <p>postingan</p>
                    </div>
                    <div class="text-center">
                        <h4 class="text-md font-semibold">{{ count($user->likes) }}</h4>
                        <p>menyukai</p>
                    </div>
                </div>
            </div>

            @foreach ($user->posts as $post)
                <div
                    class="backdrop-blur bg-white bg-opacity-80 shadow-md rounded-lg p-4 mb-4 posts post->{{ $post->id }}">
                    <!-- Konten Postingan -->
                    <div class="flex items-center mb-4">
                        <img src="../img/profile.avif" alt="Profile Image" class="w-10 h-10 rounded-full mr-2">
                        <div>
                            <h2 class="text-gray-700 font-semibold">{{ $user->name }}</h2>
                            <p class="text-gray-600 text-sm">{{ $post->time_ago }}</p>
                        </div>
                    </div>
                    <p class="text-gray-800">{{ $post->content }}</p>
                    <h6 class="font-semibold mt-2">
                        @if (count($post->likes) > 0)
                            <span class="likeTotal">{{ count($post->likes) }}</span><span> Likes</span>
                        @endif
                        @if (count($post->comments) > 0)
                            <span>{{ count($post->comments) }} Comments</span>
                        @endif
                    </h6>
                    <div class="flex justify-evenly mt-4">
                        @if (count(App\Models\Like::isLiked($post->id, auth()->user()->id)) > 0)
                            <button class="text-gray-500 hover:underline"
                                onclick="likeToggle({{ $post->id }}, {{ auth()->user()->id }})"><i
                                    class="bi bi-hand-thumbs-up-fill"></i></button>
                        @else
                            <button class="text-gray-500 hover:underline"
                                onclick="likeToggle({{ $post->id }}, {{ auth()->user()->id }})"><i
                                    class="bi bi-hand-thumbs-up"></i></button>
                        @endif
                        <a href="/post/{{ $post->id }}" class="text-gray-500 hover:underline"><i
                                class="bi bi-chat"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
