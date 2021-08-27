@extends('layouts.app')

@section('content')
	<div class="flex justify-center">
		<div class="w-8/12 bg-white p-6 rounded-lg">
			<form action="{{ route('balances.pengeluaran') }}" method="post" class="mb-4">
				@csrf
				<div class="mb-4">
					<label for="value" class="sr-only">Value</label>
					<input type="number" name="value" id="value" placeholder="Your value" oninput="this.value = Math.abs(this.value) *-1" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('value') border-red-500 @enderror" value="{{ old('value') }}">

					@error('value')
						<div class="text-red-500 mt-2 text-sm">
							{{ $message }}
						</div>
					@enderror
				</div>
				<div class="mb-4">
					<select name="category" id="category" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
						<option value="Makan">Makan</option>
						<option value="Pajak">Pajak</option>
						<option value="Denda">Denda</option>
						<option value="Belanja">Belanja</option>
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