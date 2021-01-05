export default class Scripts {
	constructor(text) {
		this.testVariable = text;
	}

	init() {
		console.log(this.testVariable);
		// for tests purposes only
	}
}
