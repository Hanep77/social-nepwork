<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Detail Post</title>
</head>

<body class="bg-gradient-to-r from-indigo-500 via-sky-600 to-emerald-700">
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky top-0 z-20">
        <div class="backdrop-blur bg-white bg-opacity-80 shadow-md px-4 sm:px h-16 flex items-center">
            <div class="container max-w-xl mx-auto text-center">
                <h3 class="text-xl">Postingan John Doe</h3>
            </div>
        </div>
        <div
            class="backdrop-blur bg-white bg-opacity-90 max-w-xl mx-auto sm:px h-14 flex items-center border-y border-slate-300">
            <form action="" class="w-full h-full">
                <div class="container mx-auto text-center w-full h-full flex justify-center items-center">
                    <input type="text" name="comment"
                        class="rounded-s-full border-2 px-4 border-cyan-500 focus:outline-none focus:border-cyan-600 h-10 w-2/3"
                        placeholder="tulis komentar...">
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
                        <h2 class="text-gray-700 font-semibold">John Doe</h2>
                        <p class="text-gray-600 text-sm">2 hours ago</p>
                    </div>
                </div>
                <p class="text-gray-800">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et venenatis dolor. Nulla facilisi.
                    Phasellus non dolor eu metus hendrerit suscipit.
                </p>
                <h6 class="font-semibold mt-2">101 likes 8 comments</h6>
                <div class="flex justify-evenly mt-4 mb-2">
                    <button class="text-gray-500 hover:underline"><i class="bi bi-hand-thumbs-up"></i></button>
                    <button class="text-gray-500 hover:underline"><i class="bi bi-chat"></i></button>
                </div>

                <div class="flex items-center mb-4 border-t border-slate-300 py-2 relative ps-12">
                    <img src="../img/profile.avif" alt="Profile Image"
                        class="w-10 h-10 rounded-full mr-2 absolute top-2 left-0">
                    <div>
                        <div class="flex items-center">
                            <h2 class="text-gray-700 font-semibold mr-2">John Doe</h2>
                            <p class="text-gray-600 text-sm">2 hours ago</p>
                        </div>
                        <p class="text-gray-700">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit
                            distinctio dolores consectetur, non natus beatae nisi! Repellendus, quam pariatur autem
                            laboriosam eveniet corporis deserunt tempora odio.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- <div class="backdrop-blur bg-white bg-opacity-60 p-8 rounded-md shadow-md w-full sm:w-96 mx-4 sm:mx-0"></div> -->
</body>

</html>
