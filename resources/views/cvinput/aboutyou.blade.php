@extends('layout.layouttwo')
@section('nav')
    <!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    @vite('resources/css/app.css')
</head>

<body class="grid-cols-2 justify-items-center bg-gray-200">
<div class="flex justify-center p-12">
    <div class="main bg-white rounded-lg shadow-md p-10 transition-transform w-96 text-center ">
        <h1 class="text-2xl mb-4">tell us about you</h1>
        <form action="{{ route('aboutyoucrate') }}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-12 justify-items-center">
                <div>
                    <h1 class="block mb-2 text-left text-gray-700 font-bold">First Name:</h1>
                    <input name="firstname" type="text" class="block w-full mb-6 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-purple-400" placeholder="First Name">
                </div>
                <div>
                    <h1 class="block mb-2 text-left text-gray-700 font-bold">Last Name:</h1>
                    <input name="lastname" type="text" class="block w-full mb-6 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-purple-400" placeholder="Last Name">
                </div>
            </div>
            <h1 class="block mb-2 text-left text-gray-700 font-bold">Email:</h1>
            <input type="email" name="email" placeholder="example@gmail.com" class="block w-full mb-6 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-purple-400">
            <h1 class="block mb-2 text-left text-gray-700 font-bold">Phone:</h1>
            <input type="text" name="phone" placeholder="05xxxxxxxx" class="block w-full mb-6 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-purple-400">
            <h1 class="block mb-2 text-left text-gray-700 font-bold">City:</h1>
            <input type="text" name="city" placeholder="ex: Jeddah" class="block w-full mb-6 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-purple-400">
            <h1 class="block mb-2 text-left text-gray-700 font-bold">Major:</h1>
            <input type="text" name="major" placeholder="ex: Nurse" class="block w-full mb-6 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-purple-400">
            <h1 class="block mb-2 text-left text-gray-700 font-bold">Summary:</h1>
            <textarea name="summary" placeholder="More about you" class="block w-full mb-6 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-purple-400"></textarea>
            <div class="flex justify-center items-center">
                <button type="submit" class="bg-purple-300 text-purple-950 py-3 px-6 rounded-md cursor-pointer transition-colors duration-300 hover:bg-purple-500">Submit</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
@endsection

