@extends('template')
@section('title','Settings')

@section('content')
<div class="mx-auto max-w-xl px-4 sm:px-6 md:px-8 bg-white dark:bg-gray-800 shadow sm:rounded-md p-4 mt-4 mb-4">
    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
         <!-- Roll/ID field -->
         <div>
            <x-input-label for="roll" :value="__('ID')" />
            <x-text-input readonly id="roll"  name="roll" type="text" class="h-10 p-2 mt-1 block w-full disabled opacity-50" :value="old('roll', $user->roll)" required autofocus autocomplete="roll"/>
        </div>
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full h-10 p-2" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        <!-- Headlines of the user -->
        <div>
            <x-input-label for="headlines" :value="__('Headline')" />
            <x-text-input id="headlines" name="headlines" type="text" class="mt-1 block w-full h-10 p-2" :value="old('headlines', $user->headlines)" required autocomplete="headlines" autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('headlines')" />
        </div>
        
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full h-10 p-2" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>
        

        <!-- Mobile field -->
        <div>
            <x-input-label for="mobile" :value="__('Mobile')" />
            <x-text-input id="mobile" name="mobile" type="text" class="h-10 p-2 mt-1 block w-full" :value="old('mobile', $user->mobile)" required autofocus autocomplete="mobile" />
            <x-input-error class="mt-2" :messages="$errors->get('mobile')" />
        </div>
        <!-- Address -->
        <div>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" name="address" type="text" class="mt-1 block w-full h-10 p-2" :value="old('address', $user->address)" required autocomplete="address" autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>

        <div class="flex flex-col items-center md:flex-row md:items-center justify-between gap-4">
            <x-primary-button class="w-full md:w-auto">{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-700 dark:text-green-500"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</div>

    @include('profile.partials.update-password-form')

    @include('profile.partials.delete-user-form')
@endsection
