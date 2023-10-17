@extends('template')
@section('title', 'Sign Up')
@section('content')
<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
    @csrf
    <div class="flex justify-center items-center bg-gray-100 dark:bg-gray-900 min-h-screen gradient-box2">
        <div class="max-w-screen-sm w-full bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden gradient-box">
            <div class="px-4 py-8 sm:px-6 md:px-8">
                <div class="flex justify-center mb-4">
                    <img src="{{ ('/uploads/buastmedialogo.webp') }}" alt="" class="lg:-mt-20 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="roll" class="block font-medium text-gray-700 dark:text-gray-200">ID</label>
                    <input id="roll" name="roll" autocomplete="on" :value="old('roll')" required class="p-3 sm:p-4 form-input mt-1 block w-full rounded-md text-gray-600 dark:text-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 dark:focus:border-indigo-700 dark:border-gray-700 dark:bg-gray-800 bg-white font-normal text-sm border-gray-300 border shadow" type="text">
                    <x-input-error :messages="$errors->get('roll')" class="mt-2" />
                </div>
                <div class="mb-4">
                    <label for="name" class="block font-medium text-gray-700 dark:text-gray-200">Name</label>
                    <input id="name" name="name" autocomplete="on" :value="old('name')" required class="p-3 sm:p-4 form-input mt-1 block w-full rounded-md text-gray-600 dark:text-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 dark:focus:border-indigo-700 dark:border-gray-700 dark:bg-gray-800 bg-white font-normal text-sm border-gray-300 border shadow" type="text">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="mb-4">
                    <label for="email" class="block font-medium text-gray-700 dark:text-gray-200">Email</label>
                    <input id="email" name="email" autocomplete="on" :value="old('email')" required class="p-3 sm:p-4 form-input mt-1 block w-full rounded-md text-gray-600 dark:text-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 dark:focus:border-indigo-700 dark:border-gray-700 dark:bg-gray-800 bg-white font-normal text-sm border-gray-300 border shadow" type="email">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="mb-4">
                    <label for="mobile" class="block font-medium text-gray-700 dark:text-gray-200">Mobile</label>
                    <input id="mobile" name="mobile" autocomplete="on" :value="old('mobile')" required class="p-3 sm:p-4 form-input mt-1 block w-full rounded-md text-gray-600 dark:text-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 dark:focus:border-indigo-700 dark:border-gray-700 dark:bg-gray-800 bg-white font-normal text-sm border-gray-300 border shadow" type="tel">
                    <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
                </div>
                <div class="mb-4">
                    <label for="idcardphoto" class="block font-medium text-gray-700 dark:text-gray-200">University ID Card</label>
                    <input id="idcardphoto" name="idcardphoto" class="form-input mt-1 block w-full rounded-md bg-gray-100 dark:bg-gray-700 border-transparent focus:border-gray-500 focus:ring-0" type="file" required>
                    <x-input-error :messages="$errors->get('idcardphoto')" class="mt-2" />
                </div>
                <div class="mb-4">
                    <label for="password" class="block font-medium text-gray-700 dark:text-gray-200">Password</label>
                    <input id="password" name="password" autocomplete="off" required class="p-3 sm:p-4 form-input mt-1 block w-full rounded-md text-gray-600 dark:text-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 dark:focus:border-indigo-700 dark:border-gray-700 dark:bg-gray-800 bg-white font-normal text-sm border-gray-300 border shadow" type="password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block font-medium text-gray-700 dark:text-gray-200">Confirm Password</label>
                    <input name="password_confirmation" required id="password_confirmation" class="p-3 sm:p-4 form-input mt-1 block w-full rounded-md text-gray-600 dark:text-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 dark:focus:border-indigo-700 dark:border-gray-700 dark:bg-gray-800 bg-white font-normal text-sm border-gray-300 border shadow" type="password">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <div class="flex justify-center items-center mt-6">
                    <button type="submit" class="btn btn-success">Register</button>
                </div>
                <a class="block text-center py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>
        </div>
    </div>
</form>
@endsection
