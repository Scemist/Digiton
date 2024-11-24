<!DOCTYPE html>
<html lang="pt-BR">

<head>
	@include('components.analytics')

	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="ie=edge" http-equiv="X-UA-Compatible">
	<link href="favicon.svg" rel="icon">

	<meta content="index, follow" name="robots">

	<title>Digiton Tecnologia</title>
	<meta content="Desenvolvimento de Sites, Sistemas e APPs." name="description">

	@include('components.metatags')

	@vite('resources/css/app.css')

	<link href="https://fonts.googleapis.com" rel="preconnect">
	<link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

</head>

<body class=" text-secondary-700 font-sans flex justify-center flex-col bg-gradient-to-tl from-secondary-900 to-primary-900">

	<main class="flex-1 relative min-h-screen text-primary-100  bg-repeat" style="background-image: url(/images/texture.svg)">
		@include('layout.nav')

		<div class="mx-auto my-4 lg:my-16 px-5 flex flex-wrap" style="max-width: 1200px">
			@yield('main')
		</div>

		@include('layout.footer')
	</main>

	@vite('resources/js/app.js')

	@include('components.modal')
</body>

</html>
