import Choices from "choices.js";
import "choices.js/public/assets/styles/choices.min.css";

export default class Select {
    constructor(target, options = {}) {
        this.target = target;
        this.options = options;
        this.init();
    }
    
    init() {
        new Choices(this.target, { ...this.options });
    }
}
