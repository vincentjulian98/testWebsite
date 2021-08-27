@extends('layouts.app')

@section('content')
	<div class="flex justify-center">
		<div class="w-8/12 bg-white p-6 rounded-lg">
			@if($balances->count())
				@foreach($balances as $balance)
					<div class="mb-4">
					    <a href="" class="font-bold">{{ $balance->value }}</a> <span class="text-gray-600 text-sm">{{ $balance->category }}</span>
					    <div class="flex items-center">
					        @auth
					        <form action="{{ route('balances.update', $balance) }}" method="post" class="mr-1">
					        @csrf
					            <button type="submit" class="text-blue-500">Verify</button>
					        </form>
					        @endauth 
					    </div>
					</div>
				@endforeach
			@else
				<p> There are no transaction</p>
			@endif
		</div>
	</div>
@endsection