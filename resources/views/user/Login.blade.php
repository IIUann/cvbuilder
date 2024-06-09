@extends('layout.layout')
@section('home')
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    @vite('resources/css/app.css')
</head>

<body class=" grid-cols-2 justify-items-center bg-gray-200">
<div class="flex justify-center p-12">
<div class="main bg-white rounded-lg shadow-md p-10
    transition-transform w-96 text-center ">

    <h1 class="text-2xl">
        login
    </h1>
    <form action="{{route('loginroute')}}" method="POST">
@csrf

        <h1  class="block mt-4 mb-2 text-gray-700 font-bold text-left">email:</h1>

        <input type="text" name="email" placeholder="Enter your email"
               class="block w-full mb-6 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-purple-400">





        <h1 for="password" class="block mb-2 text-left text-gray-700 font-bold">Password:</h1>

        <input type="password" name="password"  placeholder="Enter your Password"
               class="block w-full mb-6 px-4 py-2 border border-gray-300 rounded-md focus:outline-none
                 focus:border-purple-400">


        <div class="flex justify-center items-center">
            <button type="submit"
                    class="bg-purple-300 text-purple-950 py-3 px-6 rounded
                    -md cursor-pointer transition-colors
                    duration-300 hover:bg-purple-500">
                Submit
            </button>
        </div>
    </form>
    <p class="mt-4">Not registered?
        <a href="{{route('register')}}" class="text-purple-800
            hover:underline">Create an account</a>
    </p>
</div>
</div>
</body>

</html>
@endsection

