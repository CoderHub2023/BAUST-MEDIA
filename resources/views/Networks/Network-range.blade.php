@extends('template')

@section('title','Network')


@section('content')

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-5">
    <div class="shadow-2xl rounded-md bg-white dark:bg-gray-900 px-6 py-8 sm:py-10 lg:py-12">
        
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            
            @foreach ( $friends as $friend)
            <div class="flex items-center space-x-4 bg-white p-4 shadow-md rounded-md">
                <img src="{{ $friend->profile_picture }}" alt="Friend 1" class="w-16 h-16 rounded-full">
                <div class="flex-grow">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="font-semibold text-xs md:text-xl">{{ $friend->name }}</p>
                            <p class="text-gray-500 text-sm md:text-base">{{ $friend->headlines }}</p>
                        </div>
                        <a href="{{ url('/remove-network/'.$friend->id) }}"><button class="bg-red-500 text-white px-3 py-1 rounded-md text-sm md:text-base">Unfollow</button></a>         
                    </div>
                </div>
            </div>
            @endforeach
    </div>



    </div>
</div>



@endsection