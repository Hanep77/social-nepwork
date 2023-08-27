<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Search</title>
</head>

<body class="bg-gradient-to-r from-indigo-500 via-sky-600 to-emerald-700">
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky top-0 z-20">
        <nav class="backdrop-blur bg-white bg-opacity-80 shadow-md px-4 sm:px h-16 flex items-center">
            <div class="container max-w-xl mx-auto">
                <form action="">
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
            <div class="backdrop-blur bg-white bg-opacity-80 shadow-md rounded-md px-4 py-2 mb-2">
                <div class="flex items-center">
                    <img src="img/profile.avif" alt="Profile Image" class="w-10 h-10 rounded-full mr-2">
                    <h2 class="text-gray-700 font-semibold">John Doe</h2>
                </div>
            </div>
            <div class="backdrop-blur bg-white bg-opacity-80 shadow-md rounded-md px-4 py-2 mb-2">
                <div class="flex items-center">
                    <img src="img/profile.avif" alt="Profile Image" class="w-10 h-10 rounded-full mr-2">
                    <h2 class="text-gray-700 font-semibold">John Doe</h2>
                </div>
            </div>
            <div class="backdrop-blur bg-white bg-opacity-80 shadow-md rounded-md px-4 py-2 mb-2">
                <div class="flex items-center">
                    <img src="img/profile.avif" alt="Profile Image" class="w-10 h-10 rounded-full mr-2">
                    <h2 class="text-gray-700 font-semibold">John Doe</h2>
                </div>
            </div>
        </div>
    </main>
    <!-- <div class="backdrop-blur bg-white bg-opacity-60 p-8 rounded-md shadow-md w-full sm:w-96 mx-4 sm:mx-0"></div> -->
</body>

</html>
