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
          <tr tabindex="0" class="focus:outline-none text-sm leading-none text-gray-600 dark:text-gray-200 h-16">
            <td class="w-full sm:w-1/2">
              <div class="flex items-center">
                <div class="w-10 h-10 bg-gray-700 rounded-sm flex items-center justify-center">
                  <p class="text-xs font-bold leading-3 text-white">FIG</p>
                </div>
                <div class="pl-2">
                  <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">Fonts.fig</p>
                  <p class="text-xs leading-3 text-gray-600 dark:text-gray-200 mt-2">Shared by Ashley Wilson</p>
                </div>
              </div>
            </td>
            <td class="pl-4 sm:pl-16">
              <p class="sm:hidden">#designer</p>
              <p class="hidden sm:block">#designer</p>
            </td>
            <td class="pl-4 sm:pl-16">
              <p class="sm:hidden">3.7gb</p>
              <p class="hidden sm:block pl-16">3.7gb</p>
            </td>
            <td class="pl-4 sm:pl-16">
              <p class="sm:hidden">4 members</p>
              <p class="hidden sm:block pl-16">4 members</p>
            </td>
            <td class="pl-4 sm:pl-16">
              <p class="sm:hidden">Shared on 21 Februray 2020</p>
              <p class="hidden sm:block pl-16">Shared on 21 Februray 2020</p>
            </td>
          </tr>
          <!-- Row End -->



          <!-- Row Start -->
          <tr tabindex="0" class="focus:outline-none text-sm leading-none text-gray-600 dark:text-gray-200 h-16">
            <td class="w-full sm:w-1/2">
              <div class="flex items-center">
                <div class="w-10 h-10 bg-gray-700 rounded-sm flex items-center justify-center">
                  <p class="text-xs font-bold leading-3 text-white">FIG</p>
                </div>
                <div class="pl-2">
                  <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">Fonts.fig</p>
                  <p class="text-xs leading-3 text-gray-600 dark:text-gray-200 mt-2">Shared by Ashley Wilson</p>
                </div>
              </div>
            </td>
            <td class="pl-4 sm:pl-16">
              <p class="sm:hidden">#designer</p>
              <p class="hidden sm:block">#designer</p>
            </td>
            <td class="pl-4 sm:pl-16">
              <p class="sm:hidden">3.7gb</p>
              <p class="hidden sm:block pl-16">3.7gb</p>
            </td>
            <td class="pl-4 sm:pl-16">
              <p class="sm:hidden">4 members</p>
              <p class="hidden sm:block pl-16">4 members</p>
            </td>
            <td class="pl-4 sm:pl-16">
              <p class="sm:hidden">Shared on 21 Februray 2020</p>
              <p class="hidden sm:block pl-16">Shared on 21 Februray 2020</p>
            </td>
          </tr>
          <!-- Row End -->


        </tbody>
      </table>
    </div>
  </div>
</div>


@endsection