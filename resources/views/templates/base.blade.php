<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="ie=edge" http-equiv="X-UA-Compatible">
	<link href="favicon.svg" rel="icon">

	<title>Digiton Tenologia</title>

	@vite('resources/css/app.css')
</head>

<body class=" text-secondary-700 flex justify-center flex-col bg-gradient-to-tl from-primary-900 to-primary-800">

	<main class="flex-1 relative min-h-screen text-primary-100  bg-repeat" style="background-image: url(/images/texture.svg)">
		@include('components.nav')

		<div class="mb-64 mx-auto my-16 px-5 flex flex-wrap" style="max-width: 1200px">
			@yield('main')
		</div>

		{{-- <div class="hidden bg-red-800 bg-blue-800"></div>
			<div class="absolute bottom-12 right-8 py-4 px-8 shadow rounded {{ category | category_color }}">
			</div> --}}

		@include('components.footer')
	</main>

	@vite('resources/js/app.js')
	</div>
</body>

</html>
