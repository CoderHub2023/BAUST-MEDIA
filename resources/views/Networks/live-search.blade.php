@extends('template')

@section('title', 'Search')
@include('layouts.public-nav')

@section('content')
<div class="w-full flex">
    <div class="w-1/6 h-screen  p-4 text-white hidden md:block shadow-lg">
        <ul class="space-y-2 overflow-y-auto" style="max-height: 80vh;">
            <a href="/my-network" class="block hover:text-blue-500">
                <li class="flex items-center space-x-2 p-2">
                    <p class="text-sm p-2 text-black dark:text-white">Home</p>
                </li>
            </a>

            <a href="/search-network" class="block hover:text-blue-500 bg-slate-400">
                <li class="flex items-center space-x-2 p-2">
                    <p class="text-sm p-2 text-black dark:text-white">Search</p>
                </li>
            </a>

            <a href="/following" class="block hover:text-blue-500 ">
                <li class="flex items-center space-x-2 p-2">
                    <p class="text-sm p-2 text-black dark:text-white">Following</p>
                </li>
            </a>

            <a href="/followers" class="block hover:text-blue-500">
                <li class="flex items-center space-x-2 p-2 rounded-lg">
                    <p class="text-sm p-2 text-black dark:text-white">Followers</p>
                </li>
            </a>
        </ul>
    </div>
    <!-- Mobile bar -->
    <div class="xl:w-3/4 2xl:w-4/5 w-full mx-auto">
        <div class="px-4 sm:px-6 md:px-8 lg:px-10 py-4 md:py-7">
            <div class="flex flex-wrap items-center justify-between">
                <div>
                    <div class=" lg:hidden xl:hidden 2xl:hidden text-sm breadcrumbs text-black">
                        <ul>
                            <li>
                                <a href="/my-network">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 stroke-current">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                                    </svg>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="/search-network" class="underline">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 stroke-current">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                                    </svg>
                                    Search
                                </a>
                            </li>
                            <li>
                                <a href="/following">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 stroke-current">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                                    </svg>
                                    Following
                                </a>
                            </li>
                            <li>
                                <a href="/followers">
                                    <span class="inline-flex gap-2 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 stroke-current">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                                        </svg>
                                        Followers
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <!-- Pagination -->
                </div>
            </div>
        </div>
        <div>

        </div>

        <div>
            <form action="{{ route('searching') }}" method="post">
                @csrf
                <p class="text-black dark:text-white text-center">Search</p>
                <input id="searchInput" name="query" class="px-4 py-2 dark:bg-gray-700 bg-slate-400 border rounded-l-md dark:text-white text-black placeholder:text-black focus:outline-none" type="text" placeholder="Search..." />
                <button id="searchButton" type="submit" class="px-4 py-2 bg-sky-600 dark:bg-gray-600 border rounded-r-md dark:text-white text-black hover:bg-gray-700 focus:outline-none">Search</button>
            </form>
            @if(!$users->total() > 0)
            <div>
                <p class="text-red-700">No result found</p>
            </div>
            @else
            <div class="bg-white dark:bg-gray-900 px-4 sm:px-6 md:px-8 pb-5">
            <div class="overflow-x-auto">
                <table class="w-full whitespace-nowrap">
                    <tbody>
                        <!-- Row start -->
                        @foreach($users as $user)
                        <tr tabindex="0" class="focus:outline-none text-sm leading-none text-gray-600 dark:text-gray-200 h-16">
                            <td class="w-full sm:w-1/2">
                                <div class="flex items-center">
                                    <div class="w-20 h-20 sm:w-40 sm:h-20 flex items-center justify-center">
                                        <img class="h-20 w-20 sm:w-40 object-cover mr-4 sm:mr-10" src="{{ $user->profile_picture }}" alt="Current profile photo" />
                                    </div>
                                    <div class="pl-2">
                                        <p class="text-sm font-medium leading-none text-gray-800 dark:text-white">{{ $user->name }}</p>
                                        <p class="text-xs leading-3 text-gray-600 dark:text-gray-200 mt-1 sm:mt-2">{{ $user->headlines }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="pl-4 sm:pl-16">
                                <button type="submit" class="btn btn-sm btn-secondary"><a href="{{ url('/add-network/'.$user->id) }}">Follow</a></button>
                                <!-- <button type="submit" class="btn btn-disabled btn-sm">Request Send</button> -->
                            </td>
                        </tr>
                        @endforeach
                        <!-- Row End -->
                    </tbody>
                </table>
            </div>
        </div>
        {{ $users->links() }}
        </div>
    </div>
    @endif
</div>
@endsection