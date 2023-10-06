@extends('template')
@section('title','Home')
@section('content')

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-40">
    <div class="flex justify-center items-center h-screen">
        <div class="child animate-pulse grid grid-cols-1 gap-10 space-x-4 w-4/6">
            <div>
                <div class="h-48 bg-slate-700 rounded-xl p-10 mb-5"></div>
                <div class="h-10 bg-slate-700 rounded-full w-3/5 mb-4"></div>
                <div class="h-10 bg-slate-700 rounded-full w-4/5 mb-4"></div>
                <div class="h-10 bg-slate-700 rounded-full w-2/5 mb-4"></div>
                <div class="h-10 bg-slate-700 rounded-full w-3/5 mb-4"></div>
                <div class="h-10 bg-slate-700 rounded-full w-3/5 mb-4"></div>
            </div>
        </div>
    </div>
</div>

@endsection