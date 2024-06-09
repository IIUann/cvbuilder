@extends('layout.layouttwo')
@section('nav')
    <!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education</title>
    @vite('resources/css/app.css')
</head>

<body class="grid-cols-2 justify-items-center bg-gray-200">
<div class="flex justify-center p-10">
    <div class="main bg-white rounded-lg shadow-md p-10 transition-transform w-96 text-center">
        <h1 class="text-2xl mb-4">Education</h1>
        <form action="{{ route('edecationcrate') }}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label  class="block mb-2 text-left text-gray-700 font-bold">University Name:</label>
                    <input name="university"  type="text" class="block w-full mb-4 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-purple-400" placeholder="Name">
                </div>
                <div>
                    <label  class="block mb-2 text-left text-gray-700 font-bold">University Location:</label>
                    <input name="location"  type="text" class="block w-full mb-4 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-purple-400" placeholder="Location">
                </div>
                <div>
                    <label class="block mb-2 text-left text-gray-700 font-bold">Start Date:</label>
                    <input name="startdate"  type="date" class="block w-full mb-4 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-purple-400 text-sm" placeholder="Start Date">
                </div>
                <div>
                    <label  class="block mb-2 text-left text-gray-700 font-bold">End Date:</label>
                    <input name="enddate"  type="date" class="block w-full mb-4 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-purple-400 text-sm" placeholder="End Date">
                </div>
                <div>
                    <label  class="block mb-2 text-left text-gray-700 font-bold">Degree:</label>
                    <input name="degree"  type="text" class="block w-full mb-4 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-purple-400" placeholder="Degree">
                </div>
                <div>
                    <label  class="block mb-2 text-left text-gray-700 font-bold">Field of Study:</label>
                    <input name="field" type="text" class="block w-full mb-4 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-purple-400" placeholder="FieldofStudy">
                </div>
            </div>
            <div class="flex justify-center">
                <button type="submit" class="bg-purple-300 text-purple-950 py-3 px-6 rounded-md cursor-pointer transition-colors duration-300 hover:bg-purple-500">Next</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
@endsection



