@extends('template')
@section('title','Settings')
@include('layouts.public-nav')
@section('content')


<div class="bg-gray-900 flex justify-center items-center min-h-screen">
    <div class="rounded-lg shadow-md p-8 w-full max-w-md text-center">
        <div class="mb-4 text-xl font-semibold">Profile Settings</div>
        <div class="mb-4">
            <div class="py-2 px-4 border rounded-md bg-gray-800 hover:bg-gray-300 cursor-pointer"><input type="checkbox" class="toggle toggle-lg" id="dark-mode-toggle" checked /></div>
            <div class="py-2 px-4 border rounded-md bg-gray-800 hover:bg-gray-300 cursor-pointer">Privacy Settings</div>
            <div class="py-2 px-4 border rounded-md bg-gray-800 hover:bg-gray-300 cursor-pointer">Notification Preferences</div>
            <div class="py-2 px-4 border rounded-md bg-gray-800 hover:bg-gray-300 cursor-pointer">Account Security</div>
            <div class="py-2 px-4 border rounded-md bg-gray-800 hover:bg-gray-300 cursor-pointer">Appearance Options</div>
        </div>
    </div>
</div>

@endsection
