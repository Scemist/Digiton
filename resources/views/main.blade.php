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

	<div class="py-9 md:py-7 px-3 md:px-7 overflow-hidden w-full lg:w-6/12">
		<div class="flex flex-nowrap animate-paginate" style="width: 200%">
			<section class="flex justify-center w-full px-2 md:px-10">
				<div class="text-primary-800 bg-primary-50 rounded-t-xl w-full h-56 md:h-72 pb-3 shadow-lg shadow-primary-900">
					<div class="py-3 px-6 flex justify-between">
						<p><span class="font-extrabold">Seu site</span> <span>como quiser</span></p>
						<div class="bg-primary-300 opacity-50 w-8 mx-1 h-5 rounded-lg"></div>
					</div>
					<div class="border-t border-primary-800 flex gap-3 pt-4 px-6">
						<div class="bg-primary-300 opacity-50 w-4/12 h-10 md:h-16 rounded-lg"></div>
						<div class="bg-primary-300 opacity-50 w-4/12 h-10 md:h-16 rounded-lg"></div>
						<div class="bg-primary-300 opacity-50 w-4/12 h-10 md:h-16 rounded-lg"></div>
					</div>
					<div class="px-6 pt-6">
						<div class="bg-primary-300 opacity-50 w-7/12 h-4 md:h-6 rounded-lg"></div>
						<div class="mt-3 bg-primary-300 opacity-50 w-10/12 h-4 md:h-6 rounded-lg"></div>
						<div class="mt-3 bg-primary-300 opacity-50 w-5/12 h-4 md:h-6 rounded-lg"></div>
					</div>
				</div>
			</section>

			<section class="flex justify-center w-full px-10">
				<div class="text-primary-800 bg-primary-50 rounded-t-xl pb-3 shadow-lg shadow-primary-900 w-44">
					<div class="py-2 px-6 flex justify-between">
						<div class="flex">
							<div class="bg-primary-300 opacity-50 w-3 mx-1 h-3 rounded-lg"></div>
							<div class="bg-primary-300 opacity-50 w-3 mx-1 h-3 rounded-lg"></div>
						</div>
						<div class="bg-primary-300 opacity-50 w-3 mx-1 h-3 rounded-lg"></div>
					</div>
					<div class="border-t border-primary-800 flex flex-wrap gap-3 pt-2 px-2">
						<p class="w-full"><span class="font-extrabold">Seu App </span> também</p>
						<div class="bg-primary-300 opacity-50 w-full h-16 rounded-lg"></div>
					</div>
					<div class="px-2 pt-4">
						<div class="mt-3 bg-primary-300 opacity-50 w-4/12 h-4 rounded-lg"></div>
						<div class="mt-3 bg-primary-300 opacity-50 w-9/12 h-4 rounded-lg"></div>
						<div class="mt-3 bg-primary-300 opacity-50 w-7/12 h-4 rounded-lg"></div>
					</div>
				</div>
			</section>
		</div>
	</div>

	<section class="flex gap-6 mt-0 lg:mt-16 bg-primary-600 bg-opacity-70 rounded-2xl py-8 px-4 md:px-12">
		<div class="hidden md:flex md:w-4/12">
			<img alt="" class="w-full h-full object-cover rounded-2xl shadow shadow-primary-600" src="https://images.unsplash.com/photo-1527689368864-3a821dbccc34?w=1200">
		</div>
		<div class="w-full md:w-8/12 py-4 px-4 leading-loose text-primary-50 opacity-95">
			<h2 class="font-semibold text-3xl mb-8">Como ter o seu próprio WebSite?</h2>
			<ul class="">
				<li class="mb-6 border-l-2 border-primary-200 pl-4">
					<h3 class="font-semibold flex gap-2 items-center">
						<i data-lucide="messages-square"></i>ENTRE EM CONTATO
					</h3>
					<p class="text-primary-100 opacity-70">
						Entrando em contato, podemos tirar suas dúvidas e entender o que você deseja.
					</p>
				</li>
				<li class="mb-6 border-l-2 border-primary-200 pl-4">
					<h3 class="font-semibold flex gap-2 items-center">
						<i data-lucide="shield-question"></i>ORÇAMENTO
					</h3>
					<p class="text-primary-100 opacity-70">
						Te daremos um valor do quanto isto levará para nós.
					</p>
				</li>
				<li class="mb-6 border-l-2 border-primary-200 pl-4">
					<h3 class="font-semibold flex gap-2 items-center">
						<i data-lucide="blocks"></i>DESENVOLVIMENTO
					</h3>
					<p class="text-primary-100 opacity-70">
						Se você estiver de acordo, te daremos um prazo de até 2 semanas para mostrar como andam as coisas.
					</p>
				</li>
				<li class="mb-6 border-l-2 border-primary-200 pl-4">
					<h3 class="font-semibold flex gap-2 items-center">
						<i data-lucide="laugh"></i>PAGAMENTO
					</h3>
					<p class="text-primary-100 opacity-70">
						Somente após ver a primeira fase do desenvolvimento é que você decide se quer continuar, e só agora realizar parte do pagamento.
					</p>
				</li>
				<li class="mb-6 border-l-2 border-primary-200 pl-4">
					<h3 class="font-semibold flex gap-2 items-center">
						<i data-lucide="monitor-check"></i>ENTREGA
					</h3>
					<p class="text-primary-100 opacity-70">
						Somente quando o processo de desenvolvimento terminar, e o website já estiver disponível, é que o restante é cobrado.
					</p>
				</li>
			</ul>
		</div>
		{{-- <img class="w-1/4 h-56 object-cover rounded-2xl shadow-lg shadow-primary-900" src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=700" alt=""> --}}
	</section>

	<section class="mt-16 md:mt-28 w-full">
		<h2 class="font text-5xl mb-8" id="como-falar-com-a-gente">Como Falar com a Gente?</h2>

		<div class="flex flex-col gap-10 items-center">
			<div class="flex flex-col justify-center items-center gap-y-9 mt-2 bg-gradient-to-br from-primary-50 to-primary-100 text-primary-800 opacity-80 rounded-3xl py-8 px-10">
				<div class="flex flex-col items-center p-1">
					<h4>WhatsApp</h4>
					
					<a class="flex gap-2 p-1 items-center mt-2 text-xl text-primary-500 hover:text-secondary-700 transition font-semibold" href="tel:(17) 98816-0142">
						<svg class="bi bi-whatsapp w-6 h-7" fill="currentColor" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
							<path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
						</svg>
						(17) 98816-0142
					</a>
				</div>

				<div class="flex flex-col items-center p-1">
					<h4>E-mail</h4>
					<a class="flex gap-2 p-1 items-center mt-2 text-xl text-primary-500 hover:text-secondary-700 transition font-semibold" href="mailto:contato.digiton.tech@gmail.com">
						<i class="text-xs" data-lucide="mail"></i>
						contato.digiton.tech@gmail.com
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="mt-16 md:mt-28 w-full">
		<h2 class="font text-5xl mb-8">Quem Somos?</h2>

		<div class="flex flex-wrap gap-4 justify-evenly">
			<div class="pt-8 w-72 mt-2 flex items-center justify-between flex-col bg-gradient-to-br from-primary-50 to-primary-100 text-primary-800 opacity-80 rounded-3xl">
				<img alt="" class="h-36 w-36 object-cover rounded-full shadow-sm" src="/images/time-augusto.jpeg">

				<div class="flex flex-col pt-8 items-center py-2 px-5">
					<h3 class="text-2xl font-semibold text-center mb-2">Augusto Magalhães</h3>
					<h4>Product Specialist</h4>
					<div class="flex mt-2">
						<a class="hover:bg-primary-500 hover:text-primary-50 transition rounded p-2" href=""><i class="text-xs" data-lucide="instagram"></i></a>
						<a class="hover:bg-primary-500 hover:text-primary-50 transition rounded p-2" href=""><i class="text-xs" data-lucide="facebook"></i></a>
					</div>
				</div>

				<p class="px-7 py-7 mt-3 leading-6 text-sm bg-primary-800 text-primary-50 rounded-b-2xl">
					Especializado nas necessidades do cliente e levantamento de soluções pelo uso da tecnologia.
				</p>
			</div>

			<div class="pt-8 w-72 mt-2 flex items-center justify-between flex-col bg-gradient-to-br from-primary-50 to-primary-100 text-primary-800 opacity-80 rounded-3xl">
				<img alt="" class="h-36 w-36 object-cover rounded-full shadow-sm" src="/images/time-lucas.png">

				<div class="flex flex-col items-center py-2 px-5">
					<h3 class="text-2xl font-semibold text-center mb-2">Lucas Scemist</h3>
					<h4>Software Architect</h4>
					<div class="flex mt-2">
						<a class="hover:bg-primary-500 hover:text-primary-50 transition rounded p-2" href="https://linkedin.com/in/Scemist"><i class="text-xs" data-lucide="linkedin"></i></a>
						<a class="hover:bg-primary-500 hover:text-primary-50 transition rounded p-2" href="https://github.com/Scemist" target="_blank"><i class="text-xs" data-lucide="github"></i></a>
					</div>
				</div>

				<p class="px-7 py-7 mt-3 leading-6 text-sm bg-primary-800 text-primary-50 rounded-b-2xl">
					Experiente na aplicação de tecnologias modernas e estáveis com performance.
				</p>
			</div>
		</div>
	</section>
@endsection
