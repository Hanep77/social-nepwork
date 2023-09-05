@extends('layouts.main')
@include('layouts.navbar')

@section('container')
    <main class="flex items-center mt-4">
        <div class="container max-w-xl mx-auto">

            @foreach ($posts as $post)
                <div class="backdrop-blur bg-white bg-opacity-80 shadow-md rounded-lg p-4 mb-4">
                    <!-- Konten Postingan -->
                    <div class="flex items-center mb-4">
                        <img src="img/profile.avif" alt="Profile Image" class="w-10 h-10 rounded-full mr-2">
                        <div>
                            <h2 class="text-gray-700 font-semibold">{{ $post->user->name }}</h2>
                            <p class="text-gray-600 text-sm">{{ $post->time_ago }}</p>
                        </div>
                    </div>
                    <p class="text-gray-800">{{ $post->content }}</p>
                    <h6 class="font-semibold mt-2">101 likes
                        @if (count($post->comments) > 0)
                            <span>{{ count($post->comments) }} Comments</span>
                        @endif
                    </h6>
                    <div class="flex justify-evenly mt-4">
                        <button class="text-gray-500 hover:underline"><i class="bi bi-hand-thumbs-up"></i></button>
                        <a href="/post/{{ $post->id }}" class="text-gray-500 hover:underline"><i
                                class="bi bi-chat"></i></a>
                    </div>
                </div>
            @endforeach

        </div>
    </main>
    <!-- <div class="backdrop-blur bg-white bg-opacity-60 p-8 rounded-md shadow-md w-full sm:w-96 mx-4 sm:mx-0"></div> -->
@endsection
