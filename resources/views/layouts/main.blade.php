<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie App</title>


    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="font-sans bg-gray-900 text-white">

    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex flex-col md:flex-row items-center content-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li class="pt-2">
                    <a href="{{ route('movies.index') }}"><svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                        </svg></a>
                </li>
                <li class="md:ml-16 mt-3 md:md-mt-0">
                    <a href="" class="hover:text-gray-300">Movie</a>
                </li>
                <li class="md:ml-16 mt-3 md:md-mt-0">
                    <a href="{{ route('tv.index') }}" class="hover:text-gray-300">Tv Shows</a>
                </li>
                <li class="md:ml-16 mt-3 md:md-mt-0">
                    <a href="#" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center gap-4 lg:gap-0">
                <div class="relative mt-3 md:mt-0">
                    <input type="text"
                        class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1
                    focus:outline-none focus:shadow-outline"
                        placeholder="Search">
                </div>
                <div class="absolute top-0">
                    <svg class="fill-current mt-50 w-4 text-gray-500 mr-56 md:mr-0 md:mt-10 ml-2" viewBox="0 0 24 24"><path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"/></svg>
                </div>
                <div class="md:ml-4 md:md-mt-0">
                    <a href="#">
                        <img src="/img/avatar.jpg" alt="avatar" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer
        class="border-t-2 border-gray-800 my-16 flex flex-col items-center space-y-1 py-8 text-center text-2xs text-neutral-400">
        <p>Made using Laravel Livewire and Tailwind CSS. Hosted on Vercel.</p>
        <br>
        <p>©
            {{ date('Y') }}
            Mulia Hartawan Negara
        </p>
        Powered by <a href="https://www.themoviedb.org/documentation/api" class="underline hover:text-gray-300">TMDb
            API</a>
        <br>
        <br>
        <div class="flex items-center space-x-6">
            <a rel="me" target="_blank" data-external-link="true" href="https://github.com/MuliaHartawan"><svg
                    width="1.5em" height="1.5em" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" color="currentColor" class="h-5 w-5 hover:text-neutral-300">
                    <path
                        d="M16 22.027v-2.87a3.37 3.37 0 00-.94-2.61c3.14-.35 6.44-1.54 6.44-7a5.44 5.44 0 00-1.5-3.75 5.07 5.07 0 00-.09-3.77s-1.18-.35-3.91 1.48a13.38 13.38 0 00-7 0c-2.73-1.83-3.91-1.48-3.91-1.48A5.07 5.07 0 005 5.797a5.44 5.44 0 00-1.5 3.78c0 5.42 3.3 6.61 6.44 7a3.37 3.37 0 00-.94 2.58v2.87M9 20.027c-3 .973-5.5 0-7-3"
                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </a>
            <a rel="me" target="_blank" data-external-link="true" href="https://twitter.com/Mulia_Hartawan"><svg
                    width="1.5em" height="1.5em" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" color="currentColor" class="h-5 w-5 hover:text-neutral-300">
                    <path
                        d="M23 3.01s-2.018 1.192-3.14 1.53a4.48 4.48 0 00-7.86 3v1a10.66 10.66 0 01-9-4.53s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5 0-.278-.028-.556-.08-.83C21.94 5.674 23 3.01 23 3.01z"
                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </a>
            <a rel="me" target="_blank" data-external-link="true"
                href="hhttps://www.linkedin.com/in/mulia-hartawan-negara-b144881b7/"> <svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path
                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                </svg>
            </a>
        </div>
    </footer>
</body>

</html>
