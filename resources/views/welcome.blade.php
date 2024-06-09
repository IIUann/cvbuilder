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
    <form method="POST">
        @csrf
    </form>
    <div class="flex-1">
        <a class="btn btn-ghost text-xl">cvBuilder</a>
    </div>
    <div class="flex-none">
        <h1 class="text-lg p-2 rounded-lg cursor-pointer hover:btn-ghost font-sans font-bold">
            <a href={{route('register')}}>register</a>
        </h1>
        <h1 class="text-lg  p-2 rounded-lg cursor-pointer hover:btn-ghost font-sans font-bold ">
            <a href={{route('login')}}>login</a>
        </h1>
        <button class="btn btn-square btn-ghost">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
        </button>

    </div>
</div>
<div class="col-span-5 h-screen flex flex-col items-start font-sans font-bold bg-base-100/20">


    <h1 class="m-6 mt-28 text-3xl">welcome to cvBuilder</h1>

    <h1 class="text-xl bg-purple-300/75 p-2 rounded-lg cursor-pointer hover:bg-purple-200/75 mt-2 m-6">
        <a href="{{ route('register')}}">create your CV</a>
    </h1>


</div>

</body>
</html>

