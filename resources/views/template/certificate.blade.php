@extends('layout.layouttwo')
@section('nav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>certificate </title>
</head>
<body>


<div class="flex m-14 mx-32 justify-between">

    <form action="{{ route('certificateroute') }}"  method="POST">
        @csrf
        <div id="area" class="border border-gray-500 rounded-md w-[250px] h-[280px] ">
            <h1 class="font-sans font-bold mb-6 mt-3 ml-6 text-gray-700">drag and drop the items:</h1>

                <div class="bg-blue-300/75 rounded-lg px-6 w-fit cursor-pointer" id="movename" draggable="true" style="position: absolute;">name</div>
                <div class="bg-blue-300/75 rounded-lg px-6 w-fit cursor-pointer" id="movetitle" draggable="true" style="position: absolute; ">title</div>
                <div class="bg-blue-300/75 rounded-lg px-6 w-fit cursor-pointer" id="movedate" draggable="true" style="position: absolute; ">date</div>
                <div class="flex">
                    <input class="mt-56 border " id="name_position" name="name_position">
                    <input class="mt-56 border "  id="title_postion" name="title_position">
                    <input class="mt-56 border " id="date_postion" name="date_position">
                </div>

        </div>
        <div class="m-8 flex flex-col gap-2">
            <button class="bg-purple-200 hover:bg-purple-100 p-2 px-5 rounded-md font-sans font-bold" type="submit">Save</button>
            <button class="bg-gray-200 hover:bg-gray-300 p-2 px-5 rounded-md font-sans font-bold"><a href="{{route('userdash')}}">Return</a></button>

        </div>
    </form>

    <div>
        <img src="{{URL('storage/certificate.jpeg')}}" class="w-full h-[400px]">
    </div>
</div>

<script>
    function drag_start(event) {
        var style = window.getComputedStyle(event.target, null);
        event.dataTransfer.setData("text/plain",
            (parseInt(style.getPropertyValue("left"),10) - event.clientX) + ',' + (parseInt(style.getPropertyValue("top"),10) - event.clientY));
    }
    function drag_over(event) {
        event.preventDefault();
        return false;
    }
    function drop(event) {
        var offset = event.dataTransfer.getData("text/plain").split(',');
        var dm = document.getElementById('movename');
        dm.style.left = (event.clientX + parseInt(offset[0],10)) + 'px';
        dm.style.top = (event.clientY + parseInt(offset[1],10)) + 'px';
        var value = 'left:' + dm.style.left+'; '+'top:'+ dm.style.top;
        document.getElementById('name_position').value = value;
        console.log('left', dm.style.left);
        console.log('top', dm.style.top);
        event.preventDefault();
        return false;
    }
    var dm = document.getElementById('movename');
    dm.addEventListener('dragstart',drag_start,false);
    document.body.addEventListener('dragover',drag_over,false);
    document.body.addEventListener('drop',drop,false);

    //
    //this is for title
    //this is for title
    //this is for title
    //
    function drag_start_title(event) {
        var style = window.getComputedStyle(event.target, null);
        event.dataTransfer.setData("text/plainn",
            (parseInt(style.getPropertyValue("left"),10) - event.clientX) + ',' + (parseInt(style.getPropertyValue("top"),10) - event.clientY));
    }
    function drag_over_title(event) {
        event.preventDefault();
        return false;
    }
    function drop_title(event) {
        var offset = event.dataTransfer.getData("text/plainn").split(',');
        var dm = document.getElementById('movetitle');
        dm.style.left = (event.clientX + parseInt(offset[0],10)) + 'px';
        dm.style.top = (event.clientY + parseInt(offset[1],10)) + 'px';
        var value = 'left:' + dm.style.left+'; '+'top:'+ dm.style.top;
        document.getElementById('title_postion').value = value;
        console.log('left', dm.style.left);
        console.log('top', dm.style.top);
        event.preventDefault();
        return false;
    }
    var dm = document.getElementById('movetitle');
    dm.addEventListener('dragstart',drag_start_title,false);
    document.body.addEventListener('dragover',drag_over_title,false);
    document.body.addEventListener('drop',drop_title,false);


    //
    //this is for date
    //this is for date
    //this is for date
    //
    function drag_start_date(event) {
        var style = window.getComputedStyle(event.target, null);
        event.dataTransfer.setData("text/plainnn",
            (parseInt(style.getPropertyValue("left"),10) - event.clientX) + ',' + (parseInt(style.getPropertyValue("top"),10) - event.clientY));
    }
    function drag_over_date(event) {
        event.preventDefault();
        return false;
    }
    function drop_date(event) {
        var offset = event.dataTransfer.getData("text/plainnn").split(',');
        var dm = document.getElementById('movedate');
        dm.style.left = (event.clientX + parseInt(offset[0],10)) + 'px';
        dm.style.top = (event.clientY + parseInt(offset[1],10)) + 'px';
        var value = 'left:' + dm.style.left+'; '+'top:'+ dm.style.top;
        document.getElementById('date_postion').value = value;
        console.log('left', dm.style.left);
        console.log('top', dm.style.top);
        event.preventDefault();
        return false;
    }
    var dm = document.getElementById('movedate');
    dm.addEventListener('dragstart',drag_start_date,false);
    document.body.addEventListener('dragover',drag_over_date,false);
    document.body.addEventListener('drop',drop_date,false);


</script>

</body>
</html>
@endsection
