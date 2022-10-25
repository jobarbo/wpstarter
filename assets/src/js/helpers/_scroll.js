import LocomotiveScroll from 'locomotive-scroll';

export default class Scroll {
	constructor() {
		this.scroll = new LocomotiveScroll({
			el: document.querySelector('[data-scroll-container]'),
			smooth: true,
		});
		this.manageEvents();
	}

	manageEvents() {
		setTimeout(() => {
			this.scroll.update();
		}, 500);
	}
}
