@extends('layouts.app')

@section('title')
User Management
@endsection

@section('main')
<div class="pb-5">
  <div>
    <h2 class="text-lg">User search goes here</h2>
  </div>
  <div class="mt-16">
    <a class="px-2 py-3 bg-purple-500 text-purple-200 font-semibold tracking-wide rounded-md hover:bg-purple-600 hover:text-purple-100" href="/users/create">New User</a>
  </div>
  <div class="flex justify-center w-full mt-3">
    <table class="w-full">
      <thead>
        <tr>
          <th class="py-4 text-left text-gray-500">Username</th>
          <th class="py-4 text-left text-gray-500">Lastname</th>
          <th class="py-4 text-left text-gray-500">Firstname</th>
          <th class="py-4 text-left text-gray-500">Email</th>
          <th class="py-4 text-left text-gray-500">Created At</th>
          <th class="py-4 text-left text-gray-500">Updated At</th>
          <th class="py-4 text-left text-gray-500">Deleted At</th>
          <th class="py-4 text-left text-gray-500" colspan="2">Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($users as $user)
          <tr class="divide-y">
            <td class="py-3 text-left text-purple-500 font-semibold">{{ $user->username }}</td>
            <td class="py-3 text-left text-gray-500">{{ $user->lastname }}</td>
            <td class="py-3 text-left text-gray-500">{{ $user->firstname }}</td>
            <td class="py-3 text-left text-gray-500">{{ $user->email }}</td>
            <td class="py-3 text-left text-gray-500">{{ $user->created_at }}</td>
            <td class="py-3 text-left text-gray-500">{{ $user->updated_at }}</td>
            <td class="py-3 text-left text-gray-500">{{ $user->deleted_at }}</td>
            <td class="flex justify-center items-center py-3 text-purple-500">
              <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
              </svg>
            </td>
            <td class="py-3 text-purple-500">
              <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
              </svg>
            </td>
          </tr>
            @empty
              No users found
            @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection