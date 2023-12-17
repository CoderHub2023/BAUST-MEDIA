@extends('template')
@section('title', 'Notifications')
@include('layouts.public-nav')
@section('content')
<div class="overflow-x-auto">
  <table class="table">
    <!-- head -->
    <tbody>
      <!-- row 1 -->
      @foreach($Activeusers as $user)
      @if(Cache::has('user-is-online-' . $user->id))
      <tr>
       <td>
       <div class="w-3 h-3 bg-green-500 rounded-full"></div>
       </td>
        <td>
          <div class="flex items-center gap-3">
            <div class="avatar">
              <div class="mask mask-squircle w-12 h-12">
              <img src="{{ $user->profile_picture }}" />
              </div>
            </div>
            <div>
              <div class="font-bold">
              <a href="{{ url('/messages/'.$user->id) }}" class="text-sm text-blue-500 hover:underline">{{ $user->name }}</a>
              </div>
              <div class="text-sm opacity-50">{{ $user->headlines  }}</div>
            </div>
          </div>
          <br/>
        </td>
        <th>
        <a href="{{ url('/messages/'.$user->id) }}" class="text-sm text-blue-500 hover:underline">
          <button class="btn btn-info btn-xs">Message</button>
        </a>
        </th>
      </tr>
      @endif
      @endforeach
    </tbody>
  </table>
  {{ $Activeusers->links() }}
</div>

@endsection
