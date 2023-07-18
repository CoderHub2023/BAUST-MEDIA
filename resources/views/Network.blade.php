@extends('template')

@section('title','Network')

@include('layouts.public-nav')

@section('content')

<div class="xl:w-3/4 2xl:w-4/5 w-full mx-auto">
  <div class="px-4 sm:px-6 md:px-8 lg:px-10 py-4 md:py-7">
    <div class="flex flex-wrap items-center justify-between">
      <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800 dark:text-white w-full sm:w-auto">Connect With People </p>
    </div>
  </div>
  <div class="bg-white dark:bg-gray-900 px-4 sm:px-6 md:px-8 pb-5">
    <div class="overflow-x-auto">
      <table class="w-full whitespace-nowrap">
        <tbody>
        <!-- Row start -->
            @foreach($GetAllUsersData as $GetAllUserData)
              <tr tabindex="0" class="focus:outline-none text-sm leading-none text-gray-600 dark:text-gray-200 h-16">
                <td class="w-full sm:w-1/2">
                  <div class="flex items-center">
                    <div class="w-40 h-20 flex items-center justify-center">
                      <img class="h-20 w-20  object-cover  mr-10" src="{{ $GetAllUserData->profile_picture }}" alt="Current profile photo" />
                    </div>
                    <div class="pl-2">
                      <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">{{ $GetAllUserData->name }}</p>
                      <p class="text-xs leading-3 text-gray-600 dark:text-gray-200 mt-2">{{ $GetAllUserData->headlines }}</p>
                    </div>
                  </div>
                </td>
                <td class="pl-4 sm:pl-16">
                  <form action="{{ url('/add-network/'.$GetAllUserData->id) }}" method="post" enctype="multipart/form-data">
                  @csrf    
                  <input type="text" class="hidden" name="network-id" value="{{ $GetAllUserData->id }}" id="">
                  <button type="submit" class="btn btn-success btn-sm">Send Request</button>
                  <!-- <button type="submit" class="btn btn-disabled btn-sm">Request Send</button> -->
                  </form>
                </td>
              </tr>
              @endforeach
          <!-- Row End -->





        </tbody>
      </table>
    </div>
  </div>
</div>


@endsection