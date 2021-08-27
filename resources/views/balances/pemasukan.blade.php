@extends('layouts.app')

@section('content')
	<div class="flex justify-center">
		<div class="w-8/12 bg-white p-6 rounded-lg">
			<form action="{{ route('balances.pemasukan') }}" method="post" class="mb-4">
				@csrf
				<div class="mb-4">
					<label for="value" class="sr-only">Value</label>
					<input type="number" min="0" name="value" id="value" placeholder="Your value" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('value') border-red-500 @enderror" value="{{ old('value') }}">

					@error('value')
						<div class="text-red-500 mt-2 text-sm">
							{{ $message }}
						</div>
					@enderror
				</div>
				<div class="mb-4">
					<select name="category" id="category" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
						<option value="Gaji">Gaji</option>
						<option value="Dividen">Dividen</option>
						<option value="Bunga">Bunga</option>
						<option value="Pemberian">Pemberian</option>
					</select>
				</div>
				<div class="mb-4">
					<label for="desc" class="sr-only">Description</label>
					<input type="text" name="desc" id="desc" placeholder="Your desc" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('desc') border-red-500 @enderror" value="{{ old('desc') }}">

					@error('desc')
						<div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
					@enderror
				</div>
				<div>
					<button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Submit</button>
				</div>
			</form>
		</div>
	</div>
@endsection