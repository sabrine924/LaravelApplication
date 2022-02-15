<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Task Catalyst - Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body class="antialiased">

        <div class="">
            <div class="px-8 py-3 text-center md:flex justify-between items-center bg-gray-700  text-gray-300">
                <h1 class="md:mb-0 font-bold uppercase text-xl">Task Catalyst</h1>
                @if (Route::has('login'))
                    <ul class="md:flex gap-4">
                        @auth
                            <li class="mt-4 mb-4 md:mt-0 md:mb-0"><a href="{{ url('/dashboard') }}" class="text-gray-900 bg-gray-200 py-1 px-4 rounded-lg hover:bg-gray-200 hover:text-gray-500 cursor-pointer focus:outline-none">Dashboard</a></li>
                        @else
                            <li class="mt-4 mb-4 md:mt-0 md:mb-0"><a href="{{ route('login') }}" class="text-gray-900 bg-gray-200 py-1 px-4 rounded-lg hover:bg-gray-200 hover:text-gray-500 cursor-pointer focus:outline-none">Log in</a></li>

                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}" class="text-gray-900 bg-gray-200 py-1 px-4 rounded-lg hover:bg-gray-200 hover:text-gray-500 cursor-pointer focus:outline-none">Register</a></li>
                            @endif
                        @endauth
                    </ul>
                @endif
            </div>
            
            <div class="grid lg:grid lg:grid-cols-3">
                <div class="lg:col-span-1 bg-red-200">
                    <img class="object-cover lg:h-full lg:w-full opacity-80" src="img/landing-img.jpeg" alt="">
                </div>
                <div class="lg:col-span-2 overflow-hidden bg-gray-200">
                    <div class="bg-gray-200 transform -skew-y-6">
                        <div class="transform skew-y-6 text-center py-16">
                            <h1 class="text-xl">Welcome to <span class="text-gray-700 text-xl font-bold uppercase">Task Catalyst</span></h1>
                            <p class="italic mt-4 text-md">Become a productivity ninja with our minimalist yet simple, effective, and easy-to-use todo list app</p>
                        </div>
                    </div>
                    <div class="bg-gray-100 -mt-20 py-40 h-full text-center">
                        <div class="mb-20">
                            <table border="0" style="width:800px; margin:50px;">
                                <tr>
                                    <td>
                                    <img src= "img/student.jpg" width="175" height="175">
                                    <a href="{{url('/student')}}"> <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Student Management</button></a>
                                    </td>
                                    <td>
                                    <img src= "img/teacher.png" width="175" height="175">
                                    <a href="{{url('/teacher')}}"> <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Teacher Management</button></a>
                                    </td>
                                    <td>
                                    <img src= "img/library.png" width="175" height="175">
                                    <a href="{{url('/student')}}"> <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Library Management</button></a>
                                    </td>
                                    <td>
                                    <img src= "img/administrator.png" width="175" height="175">
                                    <a href="{{url('/student')}}"> <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Admin Management</button></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                     
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>

