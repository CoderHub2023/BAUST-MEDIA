@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md bg-gray-200 dark:bg-gray-700 border-transparent focus:border-gray-500  focus:ring-0']) !!}>
