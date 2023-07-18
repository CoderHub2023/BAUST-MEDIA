@extends('template')
@section('title','Sign Up')
@section('content')
<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
    @csrf
    <div class="flex justify-center items-center bg-gray-100 dark:bg-gray-900 h-screen">
        <div class="max-w-screen-sm w-full bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
            <div class="px-6 py-8 md:px-8">
                <div class="flex justify-center mb-4">
                    <img class="h-16" src="https://brandmark.io/logo-rank/random/twitter.png" alt="Logo">
                </div>
                <div class="mb-4">
                    <label for="roll" class="block font-medium text-gray-700 dark:text-gray-200">ID</label>
                    <input id="roll" name="roll" autocomplete="on" :value="old('roll')" required class="p-4 form-input mt-1 h-8 block w-full rounded-md bg-gray-100 dark:bg-gray-700 border-transparent focus:border-gray-500  focus:ring-0" type="text">
                    <x-input-error :messages="$errors->get('roll')" class="mt-2" />
                </div>
                    <!-- Email -->
                <div class="flex flex-col lg:mr-16 pt-5">
                        <label for="email" class="text-gray-800 dark:text-gray-100 text-sm font-bold leading-tight tracking-normal mb-2">Email</label>
                        <input id="email" autocomplete="on" name="email"
                            :value="old('email')" required autofocus autocomplete="roll" 
                            class="w-full text-gray-600 dark:text-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 dark:focus:border-indigo-700 dark:border-gray-700 dark:bg-gray-800 bg-white font-normal h-10 flex items-center pl-3 text-sm border-gray-300 rounded border shadow" placeholder="Enter Email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <!-- Mobile Address -->
                <div class="flex flex-col lg:mr-16 pt-5">
                        <label for="mobile" class="text-gray-800 dark:text-gray-100 text-sm font-bold leading-tight tracking-normal mb-2">Mobile</label>
                        <input id="mobile" autocomplete="off" name="mobile"
                            :value="old('mobile')" required autofocus autocomplete="roll" 
                            class="w-full text-gray-600 dark:text-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 dark:focus:border-indigo-700 dark:border-gray-700 dark:bg-gray-800 bg-white font-normal h-10 flex items-center pl-3 text-sm border-gray-300 rounded border shadow" placeholder="Enter Mobile Number" />
                        <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="flex flex-col lg:mr-16 pt-5">
                        <label for="password" class="text-gray-800 dark:text-gray-100 text-sm font-bold leading-tight tracking-normal mb-2">Password</label>
                        <input id="password" autocomplete="off" name="password" type="password"
                            :value="old('password')" required autofocus autocomplete="password" 
                            class="w-full text-gray-600 dark:text-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 dark:focus:border-indigo-700 dark:border-gray-700 dark:bg-gray-800 bg-white font-normal h-10 flex items-center pl-3 text-sm border-gray-300 rounded border shadow" placeholder="Enter Your Password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="flex flex-col lg:mr-16 pt-5">
                        <label for="password_confirmation" class="text-gray-800 dark:text-gray-100 text-sm font-bold leading-tight tracking-normal mb-2">Confirm Password</label>
                        <input id="password_confirmation" autocomplete="off" name="password_confirmation" type="password"
                            :value="old('password_confirmation')" required autofocus autocomplete="password_confirmation" 
                            class="w-full text-gray-600 dark:text-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 dark:focus:border-indigo-700 dark:border-gray-700 dark:bg-gray-800 bg-white font-normal h-10 flex items-center pl-3 text-sm border-gray-300 rounded border shadow" placeholder="Confirm Your Password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

        </div>
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
