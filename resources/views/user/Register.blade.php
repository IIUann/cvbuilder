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

        <h1 class="text-2xl mb-4">
            CreateAccount
        </h1>
        <form action="{{route('register')}}" method="POST">
@csrf
            <div class="grid grid-cols-2 gap-12 justify-items-center">

                <div>
                    <h1 class="block mb-2 text-left text-gray-700 font-bold">first name:</h1>
                    <input name="firstname" type="text" class="block w-full mb-6 px-4 py-2 border border-gray-300 rounded-md focus:outline-none
                 focus:border-purple-400" placeholder="first name">
                </div>

                <div>
                    <h1 class="block mb-2 text-left text-gray-700 font-bold">last name:</h1>
                    <input name="lastname" type="text"  class="block w-full mb-6 px-4 py-2 border border-gray-300 rounded-md focus:outline-none
                 focus:border-purple-400"  placeholder="last name">
                </div>

            </div>

            <h1 class="block mb-2 text-left text-gray-700 font-bold">email:</h1>

            <input type="email" name="email"  placeholder="example@gmail.com"
                   class="block w-full mb-6 px-4 py-2 border border-gray-300 rounded-md focus:outline-none
                 focus:border-purple-400">




            <h1 class="block mb-2 text-left text-gray-700 font-bold">phone:</h1>

            <input type="text" name="phone"  placeholder="05xxxxxxxx"
                   class="block w-full mb-6 px-4 py-2 border border-gray-300 rounded-md focus:outline-none
                 focus:border-purple-400">




            <h1 class="block mb-2 text-left text-gray-700 font-bold">Password:</h1>

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

            <p class="mt-4">have an account?
                <a href="{{route('login')}}" class="text-purple-800
            hover:underline">login</a>
            </p>
        </form>

    </div>
</div>
</body>

</html>
@endsection
