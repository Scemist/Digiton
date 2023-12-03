<div class="modal hidden fixed left-0 top-0 w-full h-full overflow-auto bg-secondary-900 bg-opacity-70" id="myModal">
	<div class="modal-content bg-secondary-50 w-3/5 rounded-lg py-5 px-7 relative m-auto" style="margin: 15% auto">
		<span class="close text-primary-500 text-4xl absolute top-3 right-6">
			&times;
		</span>
		<div>
			<h1 class="font-semibold text-3xl mb-5">Menu </h1>
			<ul>
				<li>Cat</li>
			</ul>
		</div>
	</div>
</div>

<script>
	const modal = () => {
		const modal = document.querySelector('#myModal');
		const btn = document.querySelector('#myBtn');
		const span = document.querySelector('.close');

		btn.onclick = () => modal.classList.remove('hidden')
		span.onclick = () => modal.classList.add('hidden')

		window.onclick = (event) => {
			if (event.target == modal)
				modal.classList.add('hidden')
		}
	}

	// modal()
</script>
