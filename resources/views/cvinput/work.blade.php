@extends('layout.layouttwo')
@section('nav')
    <!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Experience</title>
    @vite('resources/css/app.css')
</head>

<body class="grid-cols-2 justify-items-center bg-gray-200">
<div class="flex justify-center p-10">
    <div class="main bg-white rounded-lg shadow-md p-10 transition-transform w-96 text-center">
        <h1 class="text-2xl mb-4">Work Experience</h1>
        <form action="{{ route('workcrate') }}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <h1 class="block mb-2 text-left text-gray-700 font-bold">Position Title:</h1>
                    <input name="position" type="text" class="block w-full mb-4 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-purple-400" placeholder="YourPosition">
                </div>
                <div>
                    <h1 class="block mb-2 text-left text-gray-700 font-bold">Company Name:</h1>
                    <input name="company" type="text" class="block w-full mb-4 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-purple-400" placeholder="CompanyName">
                </div>
                <div>
                    <h1 class="block mb-2 text-left text-gray-700 font-bold">Start Date:</h1>
                    <input name="start" type="date" class="block w-full mb-4 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-purple-400 text-sm">
                </div>
                <div>
                    <h1 class="block mb-2 text-left text-gray-700 font-bold">End Date:</h1>
                    <input name="end" type="date" class="block w-full mb-4 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-purple-400 text-sm">
                </div>
                <div class="col-span-2">
                    <h1 class="block mb-2 text-left text-gray-700 font-bold">City:</h1>
                    <input type="text" name="city" placeholder="ex: Jeddah" class="block w-full mb-4 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-purple-400">
                </div>
                <div class="col-span-2">
                    <h1 class="block mb-2 text-left text-gray-700 font-bold">Summary:</h1>
                    <textarea name="summary" placeholder="More about your work" class="block w-full mb-4 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-purple-400"></textarea>
                </div>
            </div>
            <div class="flex justify-center">
                <button type="submit" class="bg-purple-300 text-purple-950 py-3 px-6 rounded-md cursor-pointer transition-colors duration-300 hover:bg-purple-500">Submit</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
@endsection

