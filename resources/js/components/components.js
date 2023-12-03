const navBarModal = () => {
	const modal = document.querySelector('#navBarModal');
	const btn = document.querySelector('#navBarButton');
	const span = document.querySelector('.close');

	btn.onclick = () => modal.classList.remove('hidden')
	span.onclick = () => modal.classList.add('hidden')

	window.onclick = (event) => {
		if (event.target == modal)
			modal.classList.add('hidden')
	}
}

window.navBarModal = navBarModal()