import flatpickr from "flatpickr";
import "flatpickr/dist/flatpickr.min.css";
import "flatpickr/dist/themes/airbnb.css";

export default class Datepicker {
    constructor(selector, options = {}) {
        this.target = selector;
        this.options = options;
        this.init();
    }
    
    init() {
        const that = this;
        flatpickr(that.target, {
            dateFormat: that.options.dateFormat || 'd.m.Y',
            ...that.options
        });
    }
}
