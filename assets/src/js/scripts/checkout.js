export function initCheckout() {
	window.addEventListener('load', () => {
		if (!window.FS || !FS.Checkout) return;

		const checkout = new FS.Checkout({
			product_id: 29266,
			plan_id:    48155,
		});

		document.querySelectorAll('.js-get-pro').forEach(btn => {
			btn.addEventListener('click', (e) => {
				e.preventDefault();
				checkout.open({ name: 'ClientFlow Premium' });
			});
		});
	});
}
