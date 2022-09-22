/* eslint-disable */

import CalculateHeight from './helpers/_calculateHeight';
import Utils from './helpers/_utils';
import LocomotiveScroll from 'locomotive-scroll';

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
			const scroll = new LocomotiveScroll();
			console.log(scroll);
		}
		init();
	},
};

document.addEventListener('DOMContentLoaded', () => {
	App.init();
});
