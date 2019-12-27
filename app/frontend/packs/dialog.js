export default class Dialog {
    constructor(target) {
        this.target = target;
        this.init();
    }
    
    open(id) {
        document.querySelector('#' + id).classList.add('open');
    }
    
    close(id) {
        document.querySelector('#' + id).classList.remove('open');
    }
    
    init() {
        const that = this;
        const { id } = that.target;
        
        document.querySelector('[data-dialog=' + id + ']').addEventListener('click', e => {
            e.preventDefault();
            that.open(id);
        });
    
        that.target.querySelector('.button--close').addEventListener('click', e => {
            e.preventDefault();
            that.close(id);
        });
    }
};
