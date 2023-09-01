@extends('layouts.main')
@include('layouts.navbar')

@section('container')
    <main class="w-full flex justify-center mt-5">
        <div class="backdrop-blur bg-white bg-opacity-60 p-5 rounded-md shadow-md w-full sm:w-96 mx-4 sm:mx-0">
            <h1 class="text-2xl font-semibold mb-4">Buat Postingan</h1>
            <form action="/post/store" method="post">
                @csrf
                <div class="mb-2">
                    <textarea id="name" cols="30" rows="5" name="content"
                        class="mt-1 p-2 w-full border-2 border-cyan-600 rounded-md focus:outline-none focus:ring ring-cyan-600"
                        spellcheck="false" required></textarea>
                </div>
                <button type="submit"
                    class="w-full bg-cyan-600 text-white py-2 rounded-md hover:bg-cyan-700 focus:outline-none focus:ring focus:ring-cyan-200">Posting</button>
            </form>
        </div>
    </main>
@endsection
