@extends('layouts.main')
@include('layouts.navbar')

@section('container')
    <main class="flex items-center mt-4">
        <div class="container max-w-xl mx-auto">

            <div class="backdrop-blur bg-white bg-opacity-80 shadow-md rounded-lg p-4 mb-4">
                <div class="flex flex-col items-center">
                    <img src="../img/profile.avif" alt="Profile Image" class="w-24 h-24 rounded-full mr-2">
                    <h4 class="text-lg font-semibold my-3">John Doe</h4>
                </div>
                <div class="flex justify-evenly border-t border-cyan-500 py-3">
                    <div class="text-center">
                        <h4 class="text-md font-semibold">6</h4>
                        <p>postingan</p>
                    </div>
                    <div class="text-center">
                        <h4 class="text-md font-semibold">101</h4>
                        <p>disukai</p>
                    </div>
                </div>
            </div>

            <div class="backdrop-blur bg-white bg-opacity-80 shadow-md rounded-lg p-4 mb-4">
                <!-- Konten Postingan -->
                <div class="flex items-center mb-4">
                    <img src="../img/profile.avif" alt="Profile Image" class="w-10 h-10 rounded-full mr-2">
                    <div>
                        <h2 class="text-gray-700 font-semibold">John Doe</h2>
                        <p class="text-gray-600 text-sm">2 hours ago</p>
                    </div>
                </div>
                <p class="text-gray-800">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et venenatis dolor. Nulla facilisi.
                    Phasellus non dolor eu metus hendrerit suscipit.
                </p>
                <h6 class="font-semibold mt-2">101 likes 8 comments</h6>
                <div class="flex justify-evenly mt-4">
                    <button class="text-gray-500 hover:underline"><i class="bi bi-hand-thumbs-up"></i></button>
                    <button class="text-gray-500 hover:underline"><i class="bi bi-chat"></i></button>
                </div>
            </div>
            <div class="backdrop-blur bg-white bg-opacity-80 shadow-md rounded-lg p-4 mb-4">
                <!-- Konten Postingan -->
                <div class="flex items-center mb-4">
                    <img src="../img/profile.avif" alt="Profile Image" class="w-10 h-10 rounded-full mr-2">
                    <div>
                        <h2 class="text-gray-700 font-semibold">John Doe</h2>
                        <p class="text-gray-600 text-sm">2 hours ago</p>
                    </div>
                </div>
                <p class="text-gray-800">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et venenatis dolor. Nulla facilisi.
                    Phasellus non dolor eu metus hendrerit suscipit.
                </p>
                <h6 class="font-semibold mt-2">101 likes 8 comments</h6>
                <div class="flex justify-evenly mt-4">
                    <button class="text-gray-500 hover:underline"><i class="bi bi-hand-thumbs-up"></i></button>
                    <button class="text-gray-500 hover:underline"><i class="bi bi-chat"></i></button>
                </div>
            </div>
            <div class="backdrop-blur bg-white bg-opacity-80 shadow-md rounded-lg p-4 mb-4">
                <!-- Konten Postingan -->
                <div class="flex items-center mb-4">
                    <img src="../img/profile.avif" alt="Profile Image" class="w-10 h-10 rounded-full mr-2">
                    <div>
                        <h2 class="text-gray-700 font-semibold">John Doe</h2>
                        <p class="text-gray-600 text-sm">2 hours ago</p>
                    </div>
                </div>
                <p class="text-gray-800">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et venenatis dolor. Nulla facilisi.
                    Phasellus non dolor eu metus hendrerit suscipit.
                </p>
                <h6 class="font-semibold mt-2">101 likes 8 comments</h6>
                <div class="flex justify-evenly mt-4">
                    <button class="text-gray-500 hover:underline"><i class="bi bi-hand-thumbs-up"></i></button>
                    <button class="text-gray-500 hover:underline"><i class="bi bi-chat"></i></button>
                </div>
            </div>
            <div class="backdrop-blur bg-white bg-opacity-80 shadow-md rounded-lg p-4 mb-4">
                <!-- Konten Postingan -->
                <div class="flex items-center mb-4">
                    <img src="../img/profile.avif" alt="Profile Image" class="w-10 h-10 rounded-full mr-2">
                    <div>
                        <h2 class="text-gray-700 font-semibold">John Doe</h2>
                        <p class="text-gray-600 text-sm">2 hours ago</p>
                    </div>
                </div>
                <p class="text-gray-800">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et venenatis dolor. Nulla facilisi.
                    Phasellus non dolor eu metus hendrerit suscipit.
                </p>
                <h6 class="font-semibold mt-2">101 likes 8 comments</h6>
                <div class="flex justify-evenly mt-4">
                    <button class="text-gray-500 hover:underline"><i class="bi bi-hand-thumbs-up"></i></button>
                    <button class="text-gray-500 hover:underline"><i class="bi bi-chat"></i></button>
                </div>
            </div>
            <div class="backdrop-blur bg-white bg-opacity-80 shadow-md rounded-lg p-4 mb-4">
                <!-- Konten Postingan -->
                <div class="flex items-center mb-4">
                    <img src="../img/profile.avif" alt="Profile Image" class="w-10 h-10 rounded-full mr-2">
                    <div>
                        <h2 class="text-gray-700 font-semibold">John Doe</h2>
                        <p class="text-gray-600 text-sm">2 hours ago</p>
                    </div>
                </div>
                <p class="text-gray-800">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et venenatis dolor. Nulla facilisi.
                    Phasellus non dolor eu metus hendrerit suscipit.
                </p>
                <h6 class="font-semibold mt-2">101 likes 8 comments</h6>
                <div class="flex justify-evenly mt-4">
                    <button class="text-gray-500 hover:underline"><i class="bi bi-hand-thumbs-up"></i></button>
                    <button class="text-gray-500 hover:underline"><i class="bi bi-chat"></i></button>
                </div>
            </div>
            <div class="backdrop-blur bg-white bg-opacity-80 shadow-md rounded-lg p-4 mb-4">
                <!-- Konten Postingan -->
                <div class="flex items-center mb-4">
                    <img src="../img/profile.avif" alt="Profile Image" class="w-10 h-10 rounded-full mr-2">
                    <div>
                        <h2 class="text-gray-700 font-semibold">John Doe</h2>
                        <p class="text-gray-600 text-sm">2 hours ago</p>
                    </div>
                </div>
                <p class="text-gray-800">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et venenatis dolor. Nulla facilisi.
                    Phasellus non dolor eu metus hendrerit suscipit.
                </p>
                <h6 class="font-semibold mt-2">101 likes 8 comments</h6>
                <div class="flex justify-evenly mt-4">
                    <button class="text-gray-500 hover:underline"><i class="bi bi-hand-thumbs-up"></i></button>
                    <button class="text-gray-500 hover:underline"><i class="bi bi-chat"></i></button>
                </div>
            </div>
        </div>
    </main>
@endsection
