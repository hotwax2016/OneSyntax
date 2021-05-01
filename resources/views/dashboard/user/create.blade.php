@extends('layouts.app')

@section('title')
Add New User | User Management
@endsection

@section('main')
<div class="text-gray-500 text-lg text-center">Create New User</div>
<div class="flex-col bg-red-400">
	<div class="w-2/3">
		<div class="text-gray-600 font-semibold">Username</div>
		<div><input class="w-2/3 px-2 py-2 mt-1 text-gray-700 shadow-sm rounded-md border border-gray-300" type="text" name="username"></div>
	</div>
	<div class="w-2/3">
		<div class="text-gray-600 font-semibold">Username</div>
		<div><input class="w-2/3 px-2 py-2 mt-1 text-gray-700 shadow-sm rounded-md border border-gray-300" type="text" name="username"></div>
	</div>
</div>
</div>
@endsection