@extends('template')
<table class="min-w-full divide-y divide-gray-200 bg-transparent">
  <thead>
    <tr>
      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        Name
      </th>
      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        ID
      </th>
      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        User Type
      </th>
      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        Mobile
      </th>
      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        Profile
      </th>
      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        Email
      </th>
    </tr>
  </thead>
  <tbody class="bg-white divide-y divide-gray-200">
    @foreach($all_data as $all_data)
    <tr>
      <td class="px-6 py-4 whitespace-nowrap">
        <div class="flex items-center">
          <div class="flex-shrink-0 h-10 w-10">
            <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/40" alt="">
          </div>
          <div class="ml-4">
            <div class="text-sm font-medium text-gray-900">
              Jane Doe
            </div>
          </div>
        </div>
      </td>
      <td class="px-6 py-4 whitespace-nowrap">
        <div class="text-sm text-gray-900">{{ $all_data->roll }}</div>
      </td>
      <td class="px-6 py-4 whitespace-nowrap">
        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
        {{ $all_data->usertype }}
        </span>
      </td>
      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
        {{ $all_data->mobile }}
      </td>
      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
        <a href="#" class="text-indigo-600 hover:text-indigo-900">View</a>
      </td>
      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
      {{ $all_data->email }}
      </td>
    </tr>
    @endforeach
    <!-- More rows... -->
  </tbody>
</table>
