@extends('layouts.app')

@section('content')
	<div class="flex justify-center">
		<div class="w-8/12 bg-white p-6 rounded-lg">
			@if($balances->count())
				<div class="mb-4 font-bold">Total Saldo :{{ $sum }}</div>
				<div class="mb-4 font-bold">Pemasukan:</div>
				@foreach($groups as $group)
					<div class="mb-4">
					    <a href="">{{ $group->category }}</a> <span class="text-gray-600 text-sm">{{ $group->value }}</span>
					</div>
				@endforeach
				<div class="mb-4 font-bold">Pengeluaran:</div>
				@foreach($groups2 as $group2)
					<div class="mb-4">
					    <a href="">{{ $group2->category }}</a> <span class="text-gray-600 text-sm">{{ $group2->value }}</span>
					</div>
				@endforeach
				<div class="mb-4 font-bold"> Belum diverifikasi</div>
				@foreach($balances as $balance)
					<div class="mb-4">
					    <a href="">{{ $balance->category }}</a> <span class="text-gray-600 text-sm">{{ $balance->value }}</span>
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