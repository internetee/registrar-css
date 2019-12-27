import tippy from 'tippy.js';
import 'tippy.js/dist/tippy.css';

export default class Tooltip {
    constructor(selector) {
        this.selector = selector;
        this.init();
    }
    
    init() {
        tippy(this.selector, {
            flipOnUpdate: true,
            trigger: 'click',
        });
    }
}
