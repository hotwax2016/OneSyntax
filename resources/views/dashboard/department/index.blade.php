@extends('layouts.app')

@section('title')
Department | System Management
@endsection

@section('main')
<div class="pb-5">
  <div class="w-2/3 mx-auto">
    <form method="GET" action="/departments">
      <input class="w-full px-4 py-2 text-gray-500 rounded-full" name="department" type="text" placeholder="Enter department name to search">
    </form>
  </div>
  <div class="mt-10 mx-auto">
    <a class="px-2 py-3 bg-blue-500 text-blue-200 font-semibold tracking-wide rounded-md hover:bg-blue-600 hover:text-blue-100" href="/departments/create">Add Department</a>
  </div>
  <div class="flex justify-center mx-auto bg-white px-4 pb-4 mt-4 border rounded-md shadow">
    <table class="w-full">
      <thead>
        <tr>
          <th class="py-4 text-left text-gray-500">ID</th>
          <th class="py-4 text-left text-gray-500">Name</th>
          <th class="py-4 text-left text-gray-500">Created at</th>
          <th class="py-4 text-left text-gray-500">Updated at</th>
          <th class="py-4 text-left text-gray-500">Deleted at</th>
          <th class="py-4 text-left text-gray-500" colspan="2">Actions</th>
        </tr>
      </thead>
      <tbody  class="divide-y">
        @forelse ($departments as $department)
          <tr>
            <td class="py-3 text-left text-gray-500">{{ $department->id }}</td>
            <td class="py-3 text-left text-gray-500">{{ $department->name }}</td>
            <td class="py-3 text-left text-gray-500">{{ $department->created_at ? $department->created_at->format('Y-m-d') : '' }}</td>
          <td class="py-3 text-left text-gray-500">{{ $department->updated_at ? $department->updated_at->format('Y-m-d') : '' }}</td>
          <td class="py-3 text-center text-gray-500">{{ $department->deleted_at ? $department->deleted_at->format('Y-m-d') : 'never' }}</td>
            <td class="flex justify-center items-center py-3 text-blue-500">
              <a href="/departments/{{ $department->id }}/edit">
                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                </svg>
              </a>
            </td>
            <td class="py-3 text-blue-500">
                <form method="POST" action="/departments/{{$department->id}}">
                  @csrf
                  @method('DELETE')
                  <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                  </button>
                </form>
            </td>
          </tr>
            @empty
            @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection