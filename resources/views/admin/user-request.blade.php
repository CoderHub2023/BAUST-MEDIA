@extends('template')
<div class="w-full overflow-x-auto">
  <table class="mt-4 w-full bg-slate-600 border-collapse">
    <thead>
      <tr class="text-left text-white border-b border-gray-700">
        <th class="py-3 px-4 font-semibold"></th>
        <th class="py-3 px-4 font-semibold">Email</th>
        <th class="py-3 px-4 font-semibold">User Type</th>
        <th class="py-3 px-4 font-semibold">Mobile</th>
        <th class="py-3 px-4 font-semibold">Profile View</th>
      </tr>
    </thead>
    <tbody class="bg-slate-600 text-white divide-y divide-gray-200">
    @foreach($all_data as $all_data)
    <form action="{{ route('admin.post_user_request') }}" method="post">
    @csrf
      <tr>
        <td class="py-3 px-4">
        {{ $all_data->roll }}
        </td>
        <td class="py-3 px-4">
        {{ $all_data->email }}
        </td>
        <td class="py-3 px-4">
        <input type="submit" value="{{ $all_data->usertype }}">
        </td>
        <td class="py-3 px-4">
        {{ $all_data->mobile }}
        </td>
        <td class="py-3 px-4">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            View
          </button>
        </td>
      </tr>
      </form>
    @endforeach
    </tbody>
  </table>
</div>
