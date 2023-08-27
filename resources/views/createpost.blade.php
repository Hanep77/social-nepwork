<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Post Page</title>
</head>

<body class="h-screen bg-gradient-to-br from-indigo-500 via-sky-600 to-emerald-700 flex justify-center items-center">
    <div class="backdrop-blur bg-white bg-opacity-60 p-8 rounded-md shadow-md w-full sm:w-96 mx-4 sm:mx-0">
        <h1 class="text-2xl font-semibold mb-4">Buat Postingan</h1>
        <form>
            <div class="mb-2">
                <textarea id="name" cols="30" rows="5" name="name"
                    class="mt-1 p-2 w-full border-2 border-cyan-600 rounded-md focus:outline-none focus:ring ring-cyan-600" required></textarea>
            </div>
            <button type="submit"
                class="w-full bg-cyan-600 text-white py-2 rounded-md hover:bg-cyan-700 focus:outline-none focus:ring focus:ring-cyan-200">Posting</button>
        </form>
    </div>
</body>

</html>
