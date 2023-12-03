<nav class="flex justify-between px-1">
	<div class="mx-auto flex justify-between items-center flex-1 py-2" style="max-width: 1200px">
		<a class="flex items-center" href="/">
			<img alt="" class="h-11 mx-4 my-2" src="/images/full-logo-white.svg">
		</a>

		<ul class="hidden lg:flex items-center text-primary-200 gap-x-2">
			<li><a class="py-4 px-5 hover:text-primary-50" href="#">Produtos e Serviços</a></li>
			<li><a class="py-4 px-5 hover:text-primary-50" href="#">Como Trabalhamos</a></li>
			<li><a class="py-4 px-5 hover:text-primary-50" href="#">Quem Somos</a></li>
		</ul>

		<div class="flex justify-center items-center">
			<button class="hidden md:flex rounded-full text-primary-700 mr-5 bg-primary-100 py-5 h-8 px-6 items-center font-semibold hover:bg-primary-400 hover:text-primary-950 transition" href="{#">
				Contato
			</button>

			<button class="flex lg:hidden rounded text-primary-700 bg-primary-100 py-1 h-8 px-2 mx-4 items-center font-semibold hover:bg-primary-400 hover:text-primary-950 transition" href="{#" id="navBarButton">
				<i class="h-4" data-lucide="Menu"></i>
			</button>
		</div>
	</div>
</nav>

<div class="modal hidden fixed left-0 top-0 w-full h-full overflow-auto bg-secondary-900 bg-opacity-80 z-40" id="navBarModal">
	<div class="modal-content bg-primary-50 w-10/12 md:w-3/5 rounded-lg py-5 px-7 relative mt-24 shadow mx-auto text-primary-800">
		<span class="close text-4xl absolute top-3 right-6">
			&times;
		</span>
		<div>
			<h1 class="font-semibold text-3xl mb-5">Menu </h1>
			<ul class="flex flex-col items-center text-primary-200">
				<li class="py-3"><a class="py-2 px-5 bg-primary-600 rounded-2xl" href="#">Produtos e Serviços</a></li>
				<li class="py-3"><a class="py-2 px-5 bg-primary-600 rounded-2xl" href="#">Como Trabalhamos</a></li>
				<li class="py-3"><a class="py-2 px-5 bg-primary-600 rounded-2xl" href="#">Quem Somos</a></li>
				<li class="py-3"><a class="py-2 px-5 bg-primary-600 rounded-2xl" href="#">Contato</a></li>
			</ul>
		</div>
	</div>
</div>

<script>
	
</script>
