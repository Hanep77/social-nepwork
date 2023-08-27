<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Register Page</title>
</head>

<body class="h-screen bg-gradient-to-br from-indigo-500 via-sky-600 to-emerald-700 flex justify-center items-center">
    <div class="backdrop-blur bg-white bg-opacity-60 p-8 rounded-md shadow-md w-full sm:w-96 mx-4 sm:mx-0">
        <h1 class="text-2xl font-semibold mb-4">Registrasi</h1>
        <form>
            <div class="mb-2">
                <label for="name" class="block text-sm font-medium text-gray-900">Nama</label>
                <input type="text" id="name" name="name"
                    class="mt-1 p-2 w-full border-2 border-cyan-600 rounded-md focus:outline-none focus:ring ring-cyan-600"
                    required>
            </div>
            <div class="mb-2">
                <label for="number" class="block text-sm font-medium text-gray-900">Nomor Telepon</label>
                <input type="number" id="number" name="phone_number"
                    class="mt-1 p-2 w-full border-2 border-cyan-600 rounded-md focus:outline-none focus:ring ring-cyan-600"
                    required>
            </div>
            <div class="mb-2">
                <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                <input type="password" id="password" name="password"
                    class="mt-1 p-2 w-full border-2 border-cyan-600 rounded-md focus:outline-none focus:ring ring-cyan-600"
                    required>
            </div>
            <div class="mb-4">
                <label for="password_repeat" class="block text-sm font-medium text-gray-900">Ulangi Password</label>
                <input type="password" id="password_repeat" name="password_repeat"
                    class="mt-1 p-2 w-full border-2 border-cyan-600 rounded-md focus:outline-none focus:ring ring-cyan-600"
                    required>
            </div>
            <button type="submit"
                class="w-full bg-cyan-600 text-white py-2 rounded-md hover:bg-cyan-700 focus:outline-none focus:ring focus:ring-cyan-200">Login</button>
        </form>
        <p class="text-sm text-gray-800 mt-2">Sudah punya akun? <a href="/login" class="text-blue-600">Login</a></p>
    </div>
</body>

</html>
