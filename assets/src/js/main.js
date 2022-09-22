/* eslint-disable */

import CalculateHeight from './helpers/_calculateHeight';
import Utils from './helpers/_utils';

const App = {
	/**
	 * App.init
	 */
	init() {
		// Swup Scripts

		function init() {
			// Utils Scripts
			const calculateHeight = new CalculateHeight();
			const utils = new Utils();
		}
		init();
	},
};

document.addEventListener('DOMContentLoaded', () => {
	App.init();
});
