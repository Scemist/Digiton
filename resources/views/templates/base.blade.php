<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="ie=edge" http-equiv="X-UA-Compatible">
	<link href="favicon.svg" rel="icon">

	<meta content="index, follow" name="robots">

	<title>Digiton Tecnologia</title>
	<meta content="Desenvolvimento de Sites, Sistemas e APPs" name="description">
	<meta content="http://digiton.tech/images/full-logo.svg" name="image">

	<meta content="Digiton Tecnologia" property="og:title">
	<meta content="Desenvolvimento de Sites, Sistemas e APPs" property="og:description">
	<meta content="https://digiton.tech" property="og:url">
	<meta content="http://digiton.tech/images/full-logo.svg" property="og:image">
	<meta content="website" property="og:type">

	@vite('resources/css/app.css')
</head>

<body class=" text-secondary-700 flex justify-center flex-col bg-gradient-to-tl from-primary-900 to-primary-800">

	<main class="flex-1 relative min-h-screen text-primary-100  bg-repeat" style="background-image: url(/images/texture.svg)">
		@include('layout.nav')

		<div class="mb-64 mx-auto my-16 px-5 flex flex-wrap" style="max-width: 1200px">
			@yield('main')
		</div>

		@include('layout.footer')
	</main>

	@vite('resources/js/app.js')

	@include('components.modal')
	</div>
</body>

</html>
