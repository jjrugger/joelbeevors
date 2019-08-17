@extends('_layouts.master')

@section('content')

<header class="bg-header min-h-screen flex justify-center flex-col items-center relative overflow-hidden">
    <div class="relative z-10 text-center">
        <h1 class="font-light text-6xl text-white leading-none">Joel Beevors</h1>
        <p class="text-white mt-2">Welcome</p>
        <a href="https://open.spotify.com/playlist/0njcIjDU0kMJpTSW5MVpJr?si=1u1rFdX0R5mbnG8eNKt-kA" class="text-white no-underline" target="_blank">
            <span class="sr-only">Spotify</span>
            @include('_partials.spotify', [
                'class' => 'w-8 h-8 block mx-auto mt-2'
            ])
        </a>
    </div>
    <canvas
        data-context="was @idle"
        data-module="particles"
        data-particle-color="rgba(255, 255, 255, .5)"
        data-line-color="rgba(255, 255, 255, .025)"
        class="absolute inset-0 overlay animated no-js"
    ></canvas>
</header>
<main class="bg-gray-100 min-h-screen flex justify-center flex-col items-center relative">
    <h1 class="font-light text-6xl text-gray-900 leading-none">Joel Beevors</h1>
    <p class="text-gray-800 mt-2">Joel Beevors</p>
</main>


@endsection
