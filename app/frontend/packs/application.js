import "core-js/stable";
import "regenerator-runtime/runtime";
import "../scss/application.scss";
import Toggle from "./toggle";
import Datepicker from "./datepicker";
import Dialog from "./dialog.js";
import FileUpload from "./fileUpload";
import Select from "./select";
import Tabs from "./tabs";
import Tooltip from "./tooltip";
import Header from './header';

class App {
    constructor() {
        this.bindUiEvents();
    }
    
    bindUiEvents() {
        document.querySelectorAll('.tooltip').forEach(elem => {
            new Tooltip(elem, elem.dataset.content);
        });
        
        new Header(document.querySelector('.layout--header-bottom'));
        
        new Datepicker('.datepicker');
        
        document.querySelectorAll('[data-toggle]').forEach(elem => {
            new Toggle(elem);
        });
        
        document.querySelectorAll('select:not(.flatpickr-monthDropdown-months)').forEach(elem => {
            if (elem.id === 'registrar') {
                new Select(elem, {
                    itemSelectText: '',
                    callbackOnCreateTemplates: (template) => ({
                        choice: (classNames, data) => {
                            return template(`
                                <div
                                    class="${classNames.item} ${classNames.itemChoice} ${data.disabled ? classNames.itemDisabled : classNames.itemSelectable}"
                                    data-choice ${data.disabled ? 'data-choice-disabled aria-disabled="true"' : 'data-choice-selectable'}
                                    data-id="${data.id}"
                                    data-value="${data.value}"
                                    ${data.groupId > 0 ? 'role="treeitem"' : 'role="option"'}
                                >
                                    ${data.label}
                                    ${data.customProperties ? `<div class="choices__item--custom-properties">${data.customProperties}</div>` : ''}
                                </div>
                            `);
                        }
                    }),
                });
            } else {
                new Select(elem, {
                    itemSelectText: ''
                });
            }
        });
        
        document.querySelectorAll('.dialog').forEach(elem => {
            new Dialog(elem);
        });
        
        document.querySelectorAll('.tabs').forEach(elem => {
            new Tabs(elem);
        });
        
        document.querySelectorAll('.file').forEach(elem => {
            new FileUpload(elem);
        });
    }
}

new App();
