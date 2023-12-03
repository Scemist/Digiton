@extends('templates.base')

@section('main')
	<section class="flex justify-center w-full lg:w-6/12">
		<h1 class="font-bold text-3xl md:text-5xl leading-normal md:leading-normal">
			<span class="opacity-60">O que </span>
			<span class="bg-primary-400 px-3 py-1 rounded-xl">VOCÊ </span>
			<span class="opacity-60 whitespace-nowrap">precisa construir no</span>
			<span class="bg-primary-400 px-3 py-1 rounded-xl whitespace-nowrap animate-wiggle inline-block">MUNDO DIGITAL?</span>
		</h1>
	</section>

	<div class="py-9 md:py-7 px-7 overflow-hidden w-full lg:w-6/12">
		<div class="flex flex-nowrap animate-paginate" style="width: 200%">
			<section class="flex justify-center w-full px-10">
				<div class="text-primary-800 bg-primary-50 rounded-t-xl w-full pb-3 shadow-lg shadow-primary-900">
					<div class="py-3 px-6">
						<span class="font-extrabold">Seu site</span> do jeito que quiser
					</div>
					<div class="border-t border-primary-800 flex gap-3 py-4 px-6">
						<div class="bg-primary-300 opacity-50 w-3/12 h-12 rounded-lg"></div>
						<div class="bg-primary-300 opacity-50 w-3/12 h-12 rounded-lg"></div>
						<div class="bg-primary-300 opacity-50 w-3/12 h-12 rounded-lg"></div>
						<div class="bg-primary-300 opacity-50 w-3/12 h-12 rounded-lg"></div>
					</div>
					<div class="p-4">
						<div class="mt-3 bg-primary-300 opacity-50 w-3/12 h-6 rounded-lg"></div>
						<div class="mt-3 bg-primary-300 opacity-50 w-8/12 h-6 rounded-lg"></div>
						<div class="mt-3 bg-primary-300 opacity-50 w-5/12 h-6 rounded-lg"></div>
					</div>
				</div>
			</section>

			<section class="flex justify-center w-full px-10">
				<div class="text-primary-800 bg-primary-50 rounded-t-xl pb-3 shadow-lg shadow-primary-900 w-64">
					<div class="py-1 px-6">
						<span class="font-extrabold">Seu App </span> também
					</div>
					<div class="border-t border-primary-800 flex flex-wrap gap-3 py-4 px-6">
						<div class="bg-primary-300 opacity-50 w-5/12 h-12 rounded-lg"></div>
						<div class="bg-primary-300 opacity-50 w-5/12 h-12 rounded-lg"></div>
					</div>
					<div class="p-4">
						<div class="mt-3 bg-primary-300 opacity-50 w-4/12 h-6 rounded-lg"></div>
						<div class="mt-3 bg-primary-300 opacity-50 w-9/12 h-6 rounded-lg"></div>
						<div class="mt-3 bg-primary-300 opacity-50 w-7/12 h-6 rounded-lg"></div>
					</div>
				</div>
			</section>
		</div>
	</div>

	<section class="flex gap-6 mt-0 lg:mt-16 bg-primary-600 opacity-80 rounded-2xl py-8 px-4 md:px-12">
		<div class="hidden md:flex md:w-4/12">
			<img alt="" class="w-full h-full object-cover rounded-2xl shadow shadow-primary-600" src="https://images.unsplash.com/photo-1527689368864-3a821dbccc34?w=1200">
		</div>
		<div class="w-full md:w-8/12 py-4 px-4 leading-loose text-primary-50">
			<h2 class="font-semibold text-3xl mb-8">Como ter o seu próprio WebSite?</h2>
			<ul class="">
				<li class="mb-6 border-l-2 border-primary-200 pl-4">
					<h3 class="font-semibold flex gap-2 items-center">
						<i data-lucide="messages-square"></i>ENTRE EM CONTATO
					</h3>
					<p class="text-primary-200">
						Entrando em contato, podemos tirar suas dúvidas e entender o que você deseja.
					</p>
				</li>
				<li class="mb-6 border-l-2 border-primary-200 pl-4">
					<h3 class="font-semibold flex gap-2 items-center">
						<i data-lucide="shield-question"></i>ORÇAMENTO
					</h3>
					<p class="text-primary-200">
						Te daremos um valor do quanto isto levará para nós.
					</p>
				</li>
				<li class="mb-6 border-l-2 border-primary-200 pl-4">
					<h3 class="font-semibold flex gap-2 items-center">
						<i data-lucide="blocks"></i>DESENVOLVIMENTO
					</h3>
					<p class="text-primary-200">
						Se você estiver de acordo, te daremos um prazo de até 2 semanas para mostrar como andam as coisas.
					</p>
				</li>
				<li class="mb-6 border-l-2 border-primary-200 pl-4">
					<h3 class="font-semibold flex gap-2 items-center">
						<i data-lucide="laugh"></i>PAGAMENTO
					</h3>
					<p class="text-primary-200">
						Somente após ver a primeira fase do desenvolvimento é que você decide se quer continuar, e só agora realizar parte do pagamento.
					</p>
				</li>
				<li class="mb-6 border-l-2 border-primary-200 pl-4">
					<h3 class="font-semibold flex gap-2 items-center">
						<i data-lucide="monitor-check"></i>ENTREGA
					</h3>
					<p class="text-primary-200">
						Somente quando o processo de desenvolvimento terminar, e o website já estiver disponível, é que o restante é cobrado.
					</p>
				</li>
			</ul>
		</div>
		{{-- <img class="w-1/4 h-56 object-cover rounded-2xl shadow-lg shadow-primary-900" src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=700" alt=""> --}}
	</section>

	<section class="mt-16 md:mt-28 w-full">
		<h2 class="font-semibold text-3xl mb-8">Como falar a gente?</h2>

		<div class="flex flex-wrap gap-4 justify-evenly">
			<div class="flex flex-col justify-center items-center gap-y-4 mt-2 bg-gradient-to-br from-primary-50 to-primary-100 text-primary-800 opacity-80 rounded-3xl py-8 px-12">
				<img alt="" class="h-36 w-36 object-cover rounded-full shadow-sm" src="https://i.pravatar.cc/300">

				<div class="flex flex-col items-center">
					<h3 class="text-2xl font-semibold">Augusto Magalhães</h3>
					<h4>Gerente de Contas</h4>

					<p class="mt-6">(17) 98816-0142</p>
					<p>contato@digiton.tech</p>
				</div>

				<button class="bg-primary-800 text-primary-50 font-semibold mt-4 px-10 py-3 rounded-full">
					Whatsapp
				</button>
			</div>

			<div class="flex flex-col justify-center items-center gap-y-4 mt-2 bg-gradient-to-br from-primary-50 to-primary-100 text-primary-800 opacity-80 rounded-3xl py-8 px-12">
				<img alt="" class="h-36 w-36 object-cover rounded-full shadow-sm" src="https://i.pravatar.cc/300">

				<div class="flex flex-col items-center">
					<h3 class="text-2xl font-semibold">Augusto Magalhães</h3>
					<h4>Gerente de Contas</h4>

					<p class="mt-6">(17) 98816-0142</p>
					<p>contato@digiton.tech</p>
				</div>

				<button class="bg-primary-800 text-primary-50 font-semibold mt-4 px-10 py-3 rounded-full">
					Whatsapp
				</button>
			</div>
		</div>
		</div>
	@endsection
