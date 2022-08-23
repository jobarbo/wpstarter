/* eslint-disable */
import CalculateHeight from './helpers/_calculateHeight';
import Wolfpack from './libraries/_wolfpack';
import Form from './modules/_form';
const App = {
	/**
	 * App.init
	 */
	init() {
		// Utils Scripts
		//const calculateHeight = new CalculateHeight();
		//// Wolfpack Scripts
		//const wolfpack = new Wolfpack();
		const form = new Form();
	},
};

document.addEventListener('DOMContentLoaded', () => {
	App.init();
});
