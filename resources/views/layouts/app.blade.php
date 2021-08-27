<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<title>Website Test</title> 
	</head>
	<body class="bg-gray-300">
		<nav class="p-6 bg-white flex justify-between mb-6">
			<ul class="flex items-center">
				<li>
					<a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
				</li>
				<li>
					<a href="{{ route('balances.pemasukan') }}" class="p-3">Pemasukan</a>
				</li>
				<li>
					<a href="{{ route('balances.pengeluaran') }}" class="p-3">Pengeluaran</a>
				</li>
			</ul>
			<ul class="flex items-center">
				@auth
					<li>
						<a href="" class="p-3">{{ auth()->user()->username }}</a>
					</li>
					<li>
						<form action="{{ route('logout') }}" class="p-3 inline" method="post">
							@csrf
							<button type="submit">Logout</button>
						</form>
					</li>
				@endauth
				@guest
					<li>
						<a href="{{ route('login') }}" class="p-3">Login</a>
					</li>
					<li>
						<a href="{{ route('register') }}" class="p-3">Register</a>
					</li>
				@endguest
			</ul>
		</nav>
		@yield('content')
	</body>
</html>