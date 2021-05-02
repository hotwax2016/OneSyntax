@extends('layouts.app')

@section('title')
Edit User | User Management
@endsection

@section('main')
<div class="w-full">
    <h1 class="text-xl text-gray-600">Edit user details</h1>
	<div class="w-2/3 mx-auto bg-white p-6 border rounded-lg">
		<form method="POST" action="/users/{{$user->id}}" class="space-y-4">
			@csrf
            @method('PUT')
			<div class="flex-col">
				<label class="block pl-1 text-md text-gray-600" for="">Username</label>
				<input class="block p-2 text-gray-500 border rounded-lg shadow-sm w-2/3" type="text" name="username" value="{{$user->username}}">
				@error('username')
					<span class="text-sm text-red-400">{{ $errors->first('username') }}</span>
				@enderror
			</div>
			<div class="flex w-full">
				<div class="flex-col w-full pr-2">
					<label class="block w-full pl-1 text-md text-gray-600" for="">Firstname</label>
					<input class="block w-full mt-1 p-2 text-gray-500 border rounded-lg shadow-sm" type="text" name="firstname" value="{{$user->firstname}}">
					@error('firstname')
					<span class="text-sm text-red-400">{{ $errors->first('firstname') }}</span>
				@enderror
				</div>
				<div class="flex-col w-full pl-2">
					<label class="block w-full pl-1 text-md text-gray-600" for="">Lastname</label>
					<input class="block w-full mt-1 p-2 text-gray-500 border rounded-lg shadow-sm" type="text" name="lastname" value="{{$user->lastname}}">
					@error('lastname')
					<span class="text-sm text-red-400">{{ $errors->first('lastname') }}</span>
				@enderror
				</div>
			</div>
			<div class="flex-col">
				<label class="block pl-1 text-md text-gray-600" for="">Email</label>
				<input class="block p-2 text-gray-500 border rounded-lg shadow-sm w-2/3" type="email" name="email" value="{{$user->email}}">
				@error('email')
					<span class="text-sm text-red-400">{{ $errors->first('email') }}</span>
				@enderror
			</div>
			<div class="space-x-4">
				<button class="px-2 py-1 text-blue-200 bg-blue-500  rounded-md font-semibold tracking-wide hover:text-blue-100 hover:bg-blue-600" type="submit">Update</button>
				<button class="px-2 py-1 text-red-200 bg-red-500  rounded-md font-semibold tracking-wide hover:text-red-100 hover:bg-red-600" type="reset">Clear</button>
			</div>
		</form>
	</div>
	<h1 class="mt-8 text-xl text-gray-600">Reset passwords</h1>
	<div class="w-2/3 mx-auto bg-white p-6 border rounded-lg">
		<form method="POST" action="/change-password/{{$user->id}}" class="space-y-4">
			@csrf
            @method('PUT')
			<div class="flex-col">
				<label class="block pl-1 text-md text-gray-600" for="">Current password</label>
				<input class="block p-2 text-gray-500 border rounded-lg shadow-sm w-2/3" type="password" name="password_current">
				@error('password_current')
					<span class="text-sm text-red-400">{{ $errors->first('password_current') }}</span>
				@enderror
			</div>
			<div class="flex-col">
				<label class="block pl-1 text-md text-gray-600" for="">New password</label>
				<input class="block p-2 text-gray-500 border rounded-lg shadow-sm w-2/3" type="password" name="password">
				@error('password')
					<span class="text-sm text-red-400">{{ $errors->first('password') }}</span>
				@enderror
			</div>
			<div class="flex-col">
				<label class="block pl-1 text-md text-gray-600" for="">Re-enter password</label>
				<input class="block p-2 text-gray-500 border rounded-lg shadow-sm w-2/3" type="password" name="password_confirmation">
				@error('password_confirmation')
					<span class="text-sm text-red-400">{{ $errors->first('password_confirmation') }}</span>
				@enderror
			</div>
			<div class="space-x-4">
				<button class="px-2 py-1 text-blue-200 bg-blue-500  rounded-md font-semibold tracking-wide hover:text-blue-100 hover:bg-blue-600" type="submit">Reset</button>
				<button class="px-2 py-1 text-red-200 bg-red-500  rounded-md font-semibold tracking-wide hover:text-red-100 hover:bg-red-600" type="reset">Clear</button>
			</div>
		</form>
	</div>
</div>
@endsection