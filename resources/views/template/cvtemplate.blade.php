

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    @vite('resources/css/app.css')

</head>

<body class="flex justify-center content-center">

@foreach($getCv as $item)
    <!-- outer container -->
    <div class="border border-gray-300 rounded-sm shadow-lg py-10 px-10 w-4/5 mt-10 mb-10">
        <!-- header (profile) -->
        <header>
            <!-- social icons-->
            <ul class="flex flex-wrap justify-end gap-2">
                <!-- linkedin -->
                <li>
                    <a href="https://www.linkedin.com/in/layan-alzhrani-001448298"
                       class="bg-blue-600 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded"
                       target="_blank">
                        <svg class="w-5 h-5 fill-current" role="img" viewBox="0 0 256 256"
                             xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="M218.123122,218.127392 L180.191928,218.127392 L180.191928,158.724263 C180.191928,144.559023 179.939053,126.323993 160.463756,126.323993 C140.707926,126.323993 137.685284,141.757585 137.685284,157.692986 L137.685284,218.123441 L99.7540894,218.123441 L99.7540894,95.9665207 L136.168036,95.9665207 L136.168036,112.660562 L136.677736,112.660562 C144.102746,99.9650027 157.908637,92.3824528 172.605689,92.9280076 C211.050535,92.9280076 218.138927,118.216023 218.138927,151.114151 L218.123122,218.127392 Z M56.9550587,79.2685282 C44.7981969,79.2707099 34.9413443,69.4171797 34.9391618,57.260052 C34.93698,45.1029244 44.7902948,35.2458562 56.9471566,35.2436736 C69.1040185,35.2414916 78.9608713,45.0950217 78.963054,57.2521493 C78.9641017,63.090208 76.6459976,68.6895714 72.5186979,72.8184433 C68.3913982,76.9473153 62.7929898,79.26748 56.9550587,79.2685282 M75.9206558,218.127392 L37.94995,218.127392 L37.94995,95.9665207 L75.9206558,95.9665207 L75.9206558,218.127392 Z M237.033403,0.0182577091 L18.8895249,0.0182577091 C8.57959469,-0.0980923971 0.124827038,8.16056231 -0.001,18.4706066 L-0.001,237.524091 C0.120519052,247.839103 8.57460631,256.105934 18.8895249,255.9977 L237.033403,255.9977 C247.368728,256.125818 255.855922,247.859464 255.999,237.524091 L255.999,18.4548016 C255.851624,8.12438979 247.363742,-0.133792868 237.033403,0.000790807055">
                                </path>
                            </g>
                        </svg>
                    </a>
                </li>
                <li>
                    <!-- github -->

            </ul>
            <div class="flex justify-between items-center">
                <div>
                    <div class="bg-cover bg-no-repeat rounded-full h-52 w-52"
                         style="">
                    </div>
                </div>
                <div class="grid justify-items-end" dir="ltr">
                    <h1 class="text-7xl text-blue-950 font-extrabold ">{{ $item->firstname }} {{ $item->lastname }} </h1 >
                </div>
            </div>
        </header>
        <!-- detailed info -->
        <main class="flex gap-x-10 mt-10">
            <div class="w-2/6">
                <!-- contact details -->
                <strong class="text-xl font-medium">Contact Details</strong>
                <ul class="mt-2 mb-10">
                    <li class="px-2 mt-1">
                        <strong class="mr-1">Phone </strong>
                        <a href="https://wa.me/{{$item->phone}}" class="block">{{ $item->phone }}</a>
                    </li>
                    <li class="px-2 mt-1">
                        <strong class="mr-1">E-mail </strong>
                        <a href="mailto:{{$item->email}}" class="block">{{ $item->email }}</a>
                    </li>
                    <li class="px-2 mt-1">
                        <strong class="mr-1">City</strong>
                        <span class="block">{{ $item->city }}</span>
                    </li>
                    <li class="px-2 mt-1">
                        <strong class="mr-1">LinkedIn</strong>
                        <a href="https://www.linkedin.com/{{$item->linekdan}}" class="block">{{ $item->linekdan }}</a>
                    </li>
                </ul>



                <!-- skills -->
                <strong class="text-xl font-medium">Skills</strong>

                <ul class="mt-2 mb-10">
                    @foreach($getIdSkills as $item)
                        <li>{{$item->soft}}</li>
                    @endforeach
                </ul>
                @foreach($getCv as $item)
                    <strong class="text-xl font-medium">major</strong>
                    <ul class="mt-2 mb-10">
                        <li class="px-2 mt-1">{{ $item->major}} </li>
                    </ul>
                    @endforeach
                        </ul>


            </div>
            <!-- info -->
            @foreach($getCv as $item)
                <div class="w-4/6">
                    <section>
                        <!-- about me -->
                        <h2 class="text-2xl pb-1 border-b font-semibold">About</h2>
                        <p class="mt-4 text-xs">{{ $item->summary}}</p>

                    </section>
                    @endforeach
                    <!-- work experiences -->
                    @foreach($getwork as $item)
                        <h2 class="text-2xl mt-6 pb-1 border-b font-semibold">Work Experiences</h2>
                        <ul class="mt-2">
                            <li class="pt-2">
                                <p class="flex justify-between text-sm"><strong class="text-base">{{ $item->company_name }}</strong>{{ $item->start_date }}</p>
                                <p class="flex justify-between text-base">{{$item->position}}<small>{{ $item->city }}</small></p>
                                <p class="text-justify text-xs">
                                    {{ $item->summary }}
                                </p>
                            </li>
 </ul>
                        @endforeach

                        <!-- education -->
                    @foreach($geteducation as $item)
                        <h2 class="text-2xl mt-6 pb-1 border-b font-semibold">Education</h2>
                        <ul class="mt-2">
                            <li class="pt-2">
                                <p class="flex justify-between text-sm"><strong class="text-base">
                                      {{$item->university_name}}</strong></p>
                                <p class="flex justify-between text-sm">{{ $item->major}}<small>GPA 4.0</small></p>
                            </li>

                        </ul>
                        </section>
                    @endforeach
                </div>
        </main>

    </div>
@endforeach
</body>


</html>

