@extends('template')
@section('title','Settings')
@include('layouts.public-nav')
@section('content')


<div class="bg-white dark:bg-gray-900 flex justify-center items-center min-h-screen">
    <div class="rounded-lg shadow-md p-8 w-full max-w-md text-center">
        <div class="mb-4 text-xl font-semibold text-black dark:text-white">Profile Settings</div>
        <div class="mb-4 bg-gray-500 text-white">
            <div class="py-2 px-4 border rounded-md dark:bg-gray-800  cursor-pointer"><input type="checkbox" class="toggle toggle-lg" id="dark-mode-toggle" checked /></div>
            <div class="py-2 px-4 border rounded-md dark:bg-gray-800  cursor-pointer">Privacy Settings</div>
            <div class="py-2 px-4 border rounded-md dark:bg-gray-800  cursor-pointer">Notification Preferences</div>
            <div class="py-2 px-4 border rounded-md dark:bg-gray-800  cursor-pointer">Account Security</div>
            <div class="py-2 px-4 border rounded-md dark:bg-gray-800  cursor-pointer">Appearance Options</div>
        </div>
    </div>
</div>

@endsection
