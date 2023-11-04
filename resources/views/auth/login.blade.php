@extends('template')
@section('title', 'Sign in')
@section('content')
<form method="POST" action="{{ route('login') }}" >
    @csrf
<div class="min-h-screen flex flex-col items-center justify-center bg-gray-100 gradient-box2">
    <div class="max-w-md w-full ">
        <img src="{{ ('/uploads/buastmedialogo.webp') }}" alt="Logo" class="w-full h-32 mb-4">
    </div>
    <div class="max-w-md w-full  p-8 shadow-lg rounded-lg bg-gradient-to-r from-purple-950 to-sky-700">
        <h2 class="text-center text-2xl font-semibold text-white mb-6">Log in</h2>

        <!-- Email Input -->
        <div class="mb-4">
            <label for="email" class="block text-white text-sm font-semibold mb-2">Email</label>
            <input type="email" id="email" name="email" required class="p-3 sm:p-4 form-input mt-1 block w-full rounded-md text-white dark:text-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 dark:focus:border-indigo-700 dark:border-gray-700 dark:bg-gray-800 bg-transparent font-normal text-sm border-gray-300 border shadow" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-yellow-300" />
        </div>

        <!-- Forgot Password Link -->
        <div class="text-right mb-4">
            <a href="{{ route('password.request') }}" class="text-white hover:underline">Forgot your password?</a>
        </div>

        <!-- Password Input -->
        <div class="mb-4">
            <label for "password" class="block text-white text-sm font-semibold mb-2">Password</label>
            <input type="password" id="password" name="password" required class="p-3 sm:p-4 form-input mt-1 block w-full rounded-md text-white dark:text-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 dark:focus:border-indigo-700 dark:border-gray-700 dark:bg-gray-800 bg-transparent font-normal text-sm border-gray-300 border shadow "  required/>
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-yellow-300" />
        </div>

        <!-- Remember Me Checkbox -->
        <div class="mb-4">
            <label for="remember_me" class="inline-flex items-center">
                <input type="checkbox" id="remember_me" name="remember" class="text-blue-500 rounded border border-gray-300 focus:ring focus:border-blue-400">
                <span class="ml-2 text-white text-sm">{{ __('Remember me') }}</span>
            </label>
        </div>

        <!-- Login Button -->
        <div class="mb-4">
            <button type="submit" class="w-full bg-blue-800 text-white py-2 rounded hover:bg-blue-600 focus:outline-none">Log in</button>
        </div>

        <!-- Register Button -->
        <div class="text-center">
            <a href="{{ route('register') }}" class="text-white hover:underline">Register</a>
        </div>
    </div>
</div>
</form>
@endsection