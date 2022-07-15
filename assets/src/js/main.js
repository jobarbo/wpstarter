/* eslint-disable */

import CalculateHeight from "./helpers/_calculateHeight";
import Utils from "./helpers/_utils";

const App = {
	/**
	 * App.init
	 */
	init() {
		// Swup Scripts
		const swup = new Swup({
			plugins: [new SwupBodyClassPlugin()],
		});
		function init() {
			// Utils Scripts
			const calculateHeight = new CalculateHeight();
			const utils = new Utils();
		}
		init();
		swup.on("contentReplaced", init);
	},
};

document.addEventListener("DOMContentLoaded", () => {
	App.init();
});
