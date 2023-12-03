<nav class="flex justify-between">
	<div class="mx-auto flex justify-between flex-1 py-2" style="max-width: 1200px">
		<a class="flex items-center" href="/">
			<img alt="" class="h-11 mx-4 my-2" src="/images/full-logo-white.svg">
		</a>

		<ul class="flex items-center text-primary-200 gap-x-2">

			<li><a class="py-4 px-5 hover:text-primary-50" href="#">Categorias</a></li>
			<li><a class="py-4 px-5 hover:text-primary-50" href="#">Sobre Nós</a></li>
			{{-- <li><a class="py-4 px-5 hover:text-primary-50" href="#">Contato</a></li> --}}

			<li>
				<button class="rounded-full text-primary-700 mr-5 bg-primary-100 py-1 h-8 px-6 flex items-center font-semibold hover:bg-primary-400 hover:text-primary-950 transition" href="{#">
					Contato
				</button>
			</li>

			<li>
			</li>
			{{-- <p class="font-semibold ml-2">{{ session['user']['displayName'] }}</p>
			<img src="{{ session['user']['photoLink'] }}" class="ms-2 rounded-full w-11 border border-gray-700" alt='{ session["user"]["displayName"] }}'> --}}
		</ul>
		<button class="rounded text-primary-700 bg-primary-100 py-1 h-8 px-2 flex items-center font-semibold hover:bg-primary-400 hover:text-primary-950 transition" href="{#">
			<i class="h-4" data-lucide="Menu"></i>
		</button>
	</div>
</nav>
