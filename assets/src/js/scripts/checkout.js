export function initCheckout() {
	window.addEventListener('load', () => {
		if (!window.FS || !FS.Checkout) return;

		const checkout = new FS.Checkout({
			product_id: 29266,
		});

		document.querySelectorAll(".plan-button").forEach((button) => {
			button.addEventListener("click", function (e) {
				e.preventDefault();
				const planId = this.getAttribute("data-plan-id");
				checkout.open({
					plan_id: planId,
					licenses: 1,
					billing_cycle: "monthly",
				});
			});
		});
	});
}