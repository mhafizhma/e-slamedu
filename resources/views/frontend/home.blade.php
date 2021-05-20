@extends('layouts.myapp')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Laravel</title>

		<style>

		</style>
	</head>
	<body class="">

		@section('content')

				@if (Route::has('login'))
					<div class="fixed top-0 right-0 p-3 sm:block">
						@auth
								<a href="{{ url('/dashboard') }}" class="text-gray-700">Dashboard</a>
						@else
							<a href="{{ route('login') }}" class="text-gray-700">Log in</a>
							@if (Route::has('register'))
									<a href="{{ route('register') }}" class="ml-4 text-gray-700">Register</a>
							@endif
						@endauth
					</div>
				@endif

				<div class="flex justify-between mt-2 mx-2">
					<div class="w-2/12 bg-gray-200 p-6 text-center">Sidebar Left</div>
					<div class="w-8/12 bg-gray-200 p-6 mx-2 text-center">Main Content</div>
					<div class="w-2/12 bg-gray-200 p-6 text-center">Sidebar Right</div>
				</div>
				
		@endsection
		

	</body>
</html>