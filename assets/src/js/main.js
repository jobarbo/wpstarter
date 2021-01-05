import '@babel/polyfill';

import Scripts from './_generalScripts';

const App = {
	/**
	 * App.init
	 */
	init() {
		// General scripts
		const scripts = new Scripts('Hello World');

		scripts.init();
	},
};

document.addEventListener('DOMContentLoaded', () => {
	App.init();
});
