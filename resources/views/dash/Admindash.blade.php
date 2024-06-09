<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
    @vite('resources/css/app.css')
</head>
<body class="from-indigo-500/50 from-10% to-sky-500/50 to-90% font-mono">
<div class="navbar bg-purple-100">
    <div class="flex-none">
        <button class="btn btn-square btn-ghost">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>

        </button>
    </div>
    <div class="flex-1">
        <a href="{{route('welcomeview')}}" class="btn btn-ghost text-xl">cvBuilder</a>
    </div>
    <div class="flex justify-center">
        <ul class="menu menu-vertical lg:menu-horizontal  rounded-box">
            <li><a href="{{route('aboutyou')}}">about you</a></li>
            <li><a href="{{route('edecation')}}">edecation</a></li>
            <li ><a href="{{route('skill')}}">skill</a></li>
            <li><a href="{{route('work')}}" >work experience</a></li>
            <li><a href="{{route('contact')}}">contact</a></li>
            <li><a href="{{route('theCV')}}"> the cv</a></li>
            <li><a href="{{route('certificate')}}"> certificate</a></li>


        </ul>
    </div>
    <div class="flex-none">
        <button class="btn btn-square btn-ghost">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
        </button>
    </div>

</div>

