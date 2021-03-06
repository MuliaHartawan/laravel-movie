@extends('layouts.main')

@section('content')
    <div class="movie-info border-p border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'] }}" alt="poster" class="w-26 lg:w-96">
            </div>
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{ $movie['title'] }}</h2>
                    <div class="flex flex-wrap items-center text-gray-400 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 fill-current text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                        <span class="ml-1">{{ $movie['vote_average'] }}</span>
                        <span class="mx-2">|</span>
                        <span class="">{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                        <span class="mx-2">|</span>
                        <span class="">
                            @foreach ($movie['genres'] as $genre )
                            {{ $genre['name'] }}
                            @if (!$loop->last)
                            ,
                            @endif
                        @endforeach</span>
                    </div>

                    <p class="text-gray-300 mt-8">
                        {{ $movie['overview'] }}
                    </p>

                    <div class="mt-12">
                        <h4 class="text-white font-semibold">Featured Cast</h4>
                        <div class="flex mt-4">
                            @foreach ($movie['credits']['crew'] as $crew)
                            @if ($loop->index < 2)
                            <div class="mr-8">
                                <div>{{ $crew['name'] }}</div>
                                <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    @if (count($movie['videos']['results']) > 0)
                        <div class="mt-12">
                            <a href="https://www.youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}" class="flex inline-flex items-center bg-yellow-500 text-gray-900
                            rounded font-semibold px-5 py-4 hover:bg-yellow-600 transition
                            ease-in-out duration-150 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="ml-2">Play Trailer</span>
                             </a>
                        </div>
                    @endif
            </div>
        </div>
    </div>
    {{-- end movie info --}}

    <div class="movie-cast border-t border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-7 gap-8">
                @foreach ($movie['credits']['cast'] as $cast)
                    @if ($loop->index < 14)
                        <div class="mt-8">
                                <a href="#">
                                    <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $cast['profile_path'] }}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                                </a>
                                <div class="mt-2">
                                    <a href="#" class="text-lg mt-2 hover:text-gray:300">{{ $cast['original_name'] }}</a>
                                    <div class="flex items-center text-gray-400 text-sm">
                                        <span class="">{{ $cast['character'] }}</span>
                                    </div>
                                </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    {{--  end cast info  --}}

    <div class="movie-cast border-t border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                @foreach ($movie['images']['backdrops'] as $image)
                    @if ($loop->index < 9)
                        <div class="mt-8">
                            <a href="#">
                                <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $image['file_path'] }}" alt="images" class="hover:opacity-75 transition ease-in-out duration-150 rounded-lg">
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

@endsection
