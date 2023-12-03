@extends('templates.base')

@section('main')
	<section class="flex justify-center w-6/12">
		<h1 class="font-bold text-5xl leading-normal">
			<span class="opacity-60">O que </span>
			<span class="bg-primary-400 px-3 py-1 rounded-xl">VOCÊ </span>
			<span class="opacity-60 whitespace-nowrap">precisa construir no</span>
			<span class="bg-primary-400 px-3 py-1 rounded-xl whitespace-nowrap animate-wiggle inline-block">MUNDO DIGITAL?</span>
		</h1>
	</section>

	<div class="py-7 px-7 overflow-hidden w-6/12">
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

	<section class="flex gap-6 mt-16 bg-primary-400 opacity-80 rounded-2xl py-8 px-12">
		<div class="w-4/12">
			<img class="w-full h-full object-cover rounded-2xl shadow shadow-primary-600" src="https://images.unsplash.com/photo-1527689368864-3a821dbccc34?w=1200" alt="">
		</div>
		<div class="w-8/12 py-4 px-4 leading-loose text-primary-800">
			<h2 class="font-semibold text-3xl mb-8">Como ter o seu próprio WebSite?</h2>
			<ul class="">
				<li class="mb-6 border-l-2 border-primary-700 pl-4">
					<h3 class="font-semibold flex gap-2 items-center">
						<i data-lucide="messages-square"></i>ENTRE EM CONTATO
					</h3>
					<p class="text-primary-700">
						Entrando em contato, podemos tirar suas dúvidas e entender o que você deseja.
					</p>
				</li>
				<li class="mb-6 border-l-2 border-primary-700 pl-4">
					<h3 class="font-semibold flex gap-2 items-center">
						<i data-lucide="shield-question"></i>ORÇAMENTO
					</h3>
					<p class="text-primary-700">
						Te daremos um valor do quanto isto levará para nós.
					</p>
				</li>
				<li class="mb-6 border-l-2 border-primary-700 pl-4">
					<h3 class="font-semibold flex gap-2 items-center">
						<i data-lucide="blocks"></i>DESENVOLVIMENTO
					</h3>
					<p class="text-primary-700">
						Se você estiver de acordo, te daremos um prazo de até 2 semanas para mostrar como andam as coisas.
					</p>
				</li>
				<li class="mb-6 border-l-2 border-primary-700 pl-4">
					<h3 class="font-semibold flex gap-2 items-center">
						<i data-lucide="laugh"></i>PAGAMENTO
					</h3>
					<p class="text-primary-700">
						Somente após ver a primeira fase do desenvolvimento é que você decide se quer continuar, e só agora realizar parte do pagamento.
					</p>
				</li>
				<li class="mb-6 border-l-2 border-primary-700 pl-4">
					<h3 class="font-semibold flex gap-2 items-center">
						<i data-lucide="monitor-check"></i>ENTREGA
					</h3>
					<p class="text-primary-700">
						Somente quando o processo de desenvolvimento terminar, e o website já estiver disponível, é que o restante é cobrado.
					</p>
				</li>



				{{-- <li class="border-l-2 border-primary-700 pl-4">Orçamento</li>
				<li class="border-l-2 border-primary-700 pl-4">Desenvolvemos</li>
				<li class="border-l-2 border-primary-700 pl-4">Entrega</li> --}}
			</ul>
			{{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt laudantium consectetur, quos odit, magnam delectus sint quisquam quis corrupti, dolorem et dolor eos? Dolor cumque quod ab, aspernatur tempora atque quibusdam, facilis quo ut praesentium assumenda iste exercitationem beatae veniam nisi aliquam! Exercitationem omnis impedit expedita libero totam eos quasi. Quasi soluta tempore odit dicta pariatur? Debitis quasi ipsum dolorum, dignissimos explicabo sequi totam provident, cum placeat deserunt magni. Ipsam velit fugit explicabo, doloremque magnam provident quo eveniet. --}}
		</div>
		{{-- <img class="w-1/4 h-56 object-cover rounded-2xl shadow-lg shadow-primary-900" src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=700" alt="">
		<img class="w-1/4 h-56 object-cover rounded-2xl shadow-lg shadow-primary-900" src="https://images.unsplash.com/photo-1487014679447-9f8336841d58?w=700" alt="">
		<img class="w-1/4 h-56 object-cover rounded-2xl shadow-lg shadow-primary-900" src="https://images.unsplash.com/photo-1481487196290-c152efe083f5?w=700" alt="">
		<img class="w-1/4 h-56 object-cover rounded-2xl shadow-lg shadow-primary-900" src="https://images.unsplash.com/photo-1522199755839-a2bacb67c546?w=700" alt=""> --}}
	</section>

	<section class="mt-28">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt laudantium consectetur, quos odit, magnam delectus sint quisquam quis corrupti, dolorem et dolor eos? Dolor cumque quod ab, aspernatur tempora atque quibusdam, facilis quo ut praesentium assumenda iste exercitationem beatae veniam nisi aliquam! Exercitationem omnis impedit expedita libero totam eos quasi. Quasi soluta tempore odit dicta pariatur? Debitis quasi ipsum dolorum, dignissimos explicabo sequi totam provident, cum placeat deserunt magni. Ipsam velit fugit explicabo, doloremque magnam provident quo eveniet. Sit neque sunt pariatur officia odio aut, deleniti assumenda, nulla reprehenderit ab facere, at explicabo tempore repellendus dolorum! Voluptatibus illum officiis nobis quibusdam, itaque cupiditate omnis eligendi id magnam atque eveniet blanditiis porro impedit delectus non illo! Quo dignissimos non laboriosam nemo nam, tenetur molestiae laudantium temporibus numquam totam odio et voluptatem ipsum aliquid libero soluta ad quas, reprehenderit perspiciatis velit veniam? A accusamus fugit debitis ea ab odit perferendis velit, deleniti dolores, porro distinctio praesentium error quisquam consequuntur odio dolor quos laudantium, illo assumenda tenetur magnam quasi libero voluptates atque! Incidunt sit molestias hic, facere repellendus, dolorum consequuntur sapiente omnis tenetur sed accusantium blanditiis illum perferendis repudiandae ex. Laudantium animi, exercitationem sint distinctio ex veniam accusamus. Amet neque reprehenderit enim eveniet.
	</section>
	<section class="mt-6">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt laudantium consectetur, quos odit, magnam delectus sint quisquam quis corrupti, dolorem et dolor eos? Dolor cumque quod ab, aspernatur tempora atque quibusdam, facilis quo ut praesentium assumenda iste exercitationem beatae veniam nisi aliquam! Exercitationem omnis impedit expedita libero totam eos quasi. Quasi soluta tempore odit dicta pariatur? Debitis quasi ipsum dolorum, dignissimos explicabo sequi totam provident, cum placeat deserunt magni. Ipsam velit fugit explicabo, doloremque magnam provident quo eveniet. Sit neque sunt pariatur officia odio aut, deleniti assumenda, nulla reprehenderit ab facere, at explicabo tempore repellendus dolorum! Voluptatibus illum officiis nobis quibusdam, itaque cupiditate omnis eligendi id magnam atque eveniet blanditiis porro impedit delectus non illo! Quo dignissimos non laboriosam nemo nam, tenetur molestiae laudantium temporibus numquam totam odio et voluptatem ipsum aliquid libero soluta ad quas, reprehenderit perspiciatis velit veniam? A accusamus fugit debitis ea ab odit perferendis velit, deleniti dolores, porro distinctio praesentium error quisquam consequuntur odio dolor quos laudantium, illo assumenda tenetur magnam quasi libero voluptates atque! Incidunt sit molestias hic, facere repellendus, dolorum consequuntur sapiente omnis tenetur sed accusantium blanditiis illum perferendis repudiandae ex. Laudantium animi, exercitationem sint distinctio ex veniam accusamus. Amet neque reprehenderit enim eveniet.
	</section>
	<section class="mt-6">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt laudantium consectetur, quos odit, magnam delectus sint quisquam quis corrupti, dolorem et dolor eos? Dolor cumque quod ab, aspernatur tempora atque quibusdam, facilis quo ut praesentium assumenda iste exercitationem beatae veniam nisi aliquam! Exercitationem omnis impedit expedita libero totam eos quasi. Quasi soluta tempore odit dicta pariatur? Debitis quasi ipsum dolorum, dignissimos explicabo sequi totam provident, cum placeat deserunt magni. Ipsam velit fugit explicabo, doloremque magnam provident quo eveniet. Sit neque sunt pariatur officia odio aut, deleniti assumenda, nulla reprehenderit ab facere, at explicabo tempore repellendus dolorum! Voluptatibus illum officiis nobis quibusdam, itaque cupiditate omnis eligendi id magnam atque eveniet blanditiis porro impedit delectus non illo! Quo dignissimos non laboriosam nemo nam, tenetur molestiae laudantium temporibus numquam totam odio et voluptatem ipsum aliquid libero soluta ad quas, reprehenderit perspiciatis velit veniam? A accusamus fugit debitis ea ab odit perferendis velit, deleniti dolores, porro distinctio praesentium error quisquam consequuntur odio dolor quos laudantium, illo assumenda tenetur magnam quasi libero voluptates atque! Incidunt sit molestias hic, facere repellendus, dolorum consequuntur sapiente omnis tenetur sed accusantium blanditiis illum perferendis repudiandae ex. Laudantium animi, exercitationem sint distinctio ex veniam accusamus. Amet neque reprehenderit enim eveniet.
	</section>
	<section class="mt-6">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt laudantium consectetur, quos odit, magnam delectus sint quisquam quis corrupti, dolorem et dolor eos? Dolor cumque quod ab, aspernatur tempora atque quibusdam, facilis quo ut praesentium assumenda iste exercitationem beatae veniam nisi aliquam! Exercitationem omnis impedit expedita libero totam eos quasi. Quasi soluta tempore odit dicta pariatur? Debitis quasi ipsum dolorum, dignissimos explicabo sequi totam provident, cum placeat deserunt magni. Ipsam velit fugit explicabo, doloremque magnam provident quo eveniet. Sit neque sunt pariatur officia odio aut, deleniti assumenda, nulla reprehenderit ab facere, at explicabo tempore repellendus dolorum! Voluptatibus illum officiis nobis quibusdam, itaque cupiditate omnis eligendi id magnam atque eveniet blanditiis porro impedit delectus non illo! Quo dignissimos non laboriosam nemo nam, tenetur molestiae laudantium temporibus numquam totam odio et voluptatem ipsum aliquid libero soluta ad quas, reprehenderit perspiciatis velit veniam? A accusamus fugit debitis ea ab odit perferendis velit, deleniti dolores, porro distinctio praesentium error quisquam consequuntur odio dolor quos laudantium, illo assumenda tenetur magnam quasi libero voluptates atque! Incidunt sit molestias hic, facere repellendus, dolorum consequuntur sapiente omnis tenetur sed accusantium blanditiis illum perferendis repudiandae ex. Laudantium animi, exercitationem sint distinctio ex veniam accusamus. Amet neque reprehenderit enim eveniet.
	</section>
	<section class="mt-6">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt laudantium consectetur, quos odit, magnam delectus sint quisquam quis corrupti, dolorem et dolor eos? Dolor cumque quod ab, aspernatur tempora atque quibusdam, facilis quo ut praesentium assumenda iste exercitationem beatae veniam nisi aliquam! Exercitationem omnis impedit expedita libero totam eos quasi. Quasi soluta tempore odit dicta pariatur? Debitis quasi ipsum dolorum, dignissimos explicabo sequi totam provident, cum placeat deserunt magni. Ipsam velit fugit explicabo, doloremque magnam provident quo eveniet. Sit neque sunt pariatur officia odio aut, deleniti assumenda, nulla reprehenderit ab facere, at explicabo tempore repellendus dolorum! Voluptatibus illum officiis nobis quibusdam, itaque cupiditate omnis eligendi id magnam atque eveniet blanditiis porro impedit delectus non illo! Quo dignissimos non laboriosam nemo nam, tenetur molestiae laudantium temporibus numquam totam odio et voluptatem ipsum aliquid libero soluta ad quas, reprehenderit perspiciatis velit veniam? A accusamus fugit debitis ea ab odit perferendis velit, deleniti dolores, porro distinctio praesentium error quisquam consequuntur odio dolor quos laudantium, illo assumenda tenetur magnam quasi libero voluptates atque! Incidunt sit molestias hic, facere repellendus, dolorum consequuntur sapiente omnis tenetur sed accusantium blanditiis illum perferendis repudiandae ex. Laudantium animi, exercitationem sint distinctio ex veniam accusamus. Amet neque reprehenderit enim eveniet.
	</section>
	<section class="mt-6">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt laudantium consectetur, quos odit, magnam delectus sint quisquam quis corrupti, dolorem et dolor eos? Dolor cumque quod ab, aspernatur tempora atque quibusdam, facilis quo ut praesentium assumenda iste exercitationem beatae veniam nisi aliquam! Exercitationem omnis impedit expedita libero totam eos quasi. Quasi soluta tempore odit dicta pariatur? Debitis quasi ipsum dolorum, dignissimos explicabo sequi totam provident, cum placeat deserunt magni. Ipsam velit fugit explicabo, doloremque magnam provident quo eveniet. Sit neque sunt pariatur officia odio aut, deleniti assumenda, nulla reprehenderit ab facere, at explicabo tempore repellendus dolorum! Voluptatibus illum officiis nobis quibusdam, itaque cupiditate omnis eligendi id magnam atque eveniet blanditiis porro impedit delectus non illo! Quo dignissimos non laboriosam nemo nam, tenetur molestiae laudantium temporibus numquam totam odio et voluptatem ipsum aliquid libero soluta ad quas, reprehenderit perspiciatis velit veniam? A accusamus fugit debitis ea ab odit perferendis velit, deleniti dolores, porro distinctio praesentium error quisquam consequuntur odio dolor quos laudantium, illo assumenda tenetur magnam quasi libero voluptates atque! Incidunt sit molestias hic, facere repellendus, dolorum consequuntur sapiente omnis tenetur sed accusantium blanditiis illum perferendis repudiandae ex. Laudantium animi, exercitationem sint distinctio ex veniam accusamus. Amet neque reprehenderit enim eveniet.
	</section>
	<section class="mt-6">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt laudantium consectetur, quos odit, magnam delectus sint quisquam quis corrupti, dolorem et dolor eos? Dolor cumque quod ab, aspernatur tempora atque quibusdam, facilis quo ut praesentium assumenda iste exercitationem beatae veniam nisi aliquam! Exercitationem omnis impedit expedita libero totam eos quasi. Quasi soluta tempore odit dicta pariatur? Debitis quasi ipsum dolorum, dignissimos explicabo sequi totam provident, cum placeat deserunt magni. Ipsam velit fugit explicabo, doloremque magnam provident quo eveniet. Sit neque sunt pariatur officia odio aut, deleniti assumenda, nulla reprehenderit ab facere, at explicabo tempore repellendus dolorum! Voluptatibus illum officiis nobis quibusdam, itaque cupiditate omnis eligendi id magnam atque eveniet blanditiis porro impedit delectus non illo! Quo dignissimos non laboriosam nemo nam, tenetur molestiae laudantium temporibus numquam totam odio et voluptatem ipsum aliquid libero soluta ad quas, reprehenderit perspiciatis velit veniam? A accusamus fugit debitis ea ab odit perferendis velit, deleniti dolores, porro distinctio praesentium error quisquam consequuntur odio dolor quos laudantium, illo assumenda tenetur magnam quasi libero voluptates atque! Incidunt sit molestias hic, facere repellendus, dolorum consequuntur sapiente omnis tenetur sed accusantium blanditiis illum perferendis repudiandae ex. Laudantium animi, exercitationem sint distinctio ex veniam accusamus. Amet neque reprehenderit enim eveniet.
	</section>
@endsection
