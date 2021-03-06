@extends('layouts.app')

@section('title')
Add city | System Management
@endsection

@section('main')
<div class="w-full">
	<h1 class="text-xl text-gray-600">Add new city</h1>
	<div class="w-2/3 mt-16 mx-auto bg-white p-6 border rounded-lg">
		<form method="POST" action="/cities" class="space-y-4">
			@csrf
			<div class="flex w-full">
				<div class="flex-col w-full pr-2">
					<label class="block w-full pl-1 text-md text-gray-600" for="">State</label>
					<select class="w-full px-2 py-2 border rounded-md bg-white text-gray-600" name="state">
						<option value="" disabled selected>*Choose State</option>
						@forelse ($states as $state)
						<option value="{{ $state->id }}">
							{{ $state->name }}
						  </option>
						@empty
						@endforelse
					</select>
					@error('state')
					<span class="text-sm text-red-400">{{ $errors->first('state') }}</span>
				@enderror
				</div>
				<div class="flex-col w-full pl-2">
					<label class="block w-full pl-1 text-md text-gray-600" for="">*Name</label>
					<input class="block w-full mt-1 p-2 text-gray-500 border rounded-lg shadow-sm" type="text" name="name" value="{{old('name')}}">
					@error('name')
					<span class="text-sm text-red-400">{{ $errors->first('name') }}</span>
				@enderror
				</div>
			</div>
			<div class="space-x-4">
				<button class="px-2 py-1 text-blue-200 bg-blue-500  rounded-md font-semibold tracking-wide hover:text-blue-100 hover:bg-blue-600" type="submit">Create</button>
				<button class="px-2 py-1 text-red-200 bg-red-500  rounded-md font-semibold tracking-wide hover:text-red-100 hover:bg-red-600" type="reset">Clear</button>
			</div>
		</form>
	</div>
</div>
@endsection