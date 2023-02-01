/* eslint-disable */

import CalculateHeight from './helpers/_calculateHeight';
import Utils from './helpers/_utils';
import Scroll from './helpers/_scroll';

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
			const scroll = new Scroll();
			console.log(scroll);
		}
		init();
	},
};

document.addEventListener('DOMContentLoaded', () => {
	App.init();
});
