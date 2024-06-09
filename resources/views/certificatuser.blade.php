@extends('layout.layoutthree')
@section('user')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>certificate </title>
</head>
<body>


@foreach($position as $item)
<div class="flex m-14 mx-32 justify-between">

        <div class="m-8 flex flex-col gap-2 ">
            <button class="bg-purple-200 hover:bg-purple-100 p-2 px-5 rounded-md font-sans font-bold" type="submit">Save</button>
            <button class="bg-gray-200 hover:bg-gray-300 p-2 px-5 rounded-md font-sans font-bold"><a href="{{route('userdash')}}">Return</a></button>
            <form action="{{route('install-pdf')}}" method="POST">
                <button type="submit">install pdf</button>

            </form>
        </div>
    </form>
    <div>
        <img src="{{URL('storage/certificate.jpeg')}}" class="w-full h-[400px] relative">
        <div class= "rounded-lg px-6 w-20 cursor-pointer "  style="{{$item->name_position}}; position: absolute">name</div>
        <div class=" rounded-lg px-6 w-20 cursor-pointer" style="{{$item->title_position}}; position: absolute">title</div>
        <div class="rounded-lg px-6 w-20 cursor-pointer" style="{{$item->date_position}}; position: absolute">date</div>
    </div>
</div>
@endforeach

</body>
</html>
@endsection
