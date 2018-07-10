
import 'jquery-ui/ui/widgets/autocomplete';
import 'jquery-ui/ui/widgets/menu';
import 'jquery-ui/ui/widgets/selectable';
import 'jquery-ui/ui/widgets/mouse';
import 'jquery-ui/ui/widgets/slider';
import 'jquery-ui/ui/widgets/tooltip';
import 'jquery-ui/ui/widgets/selectmenu';
import 'jquery-ui/ui/widgets/tabs';



import 'jquery-ui/themes/base/core.css';
import 'jquery-ui/themes/base/autocomplete.css';
import 'jquery-ui/themes/base/theme.css';
import 'jquery-ui/themes/base/menu.css';
import 'jquery-ui/themes/base/dialog.css';
import 'jquery-ui/themes/base/spinner.css';
import 'jquery-ui/themes/base/sortable.css';
import 'jquery-ui/themes/base/controlgroup.css';
import 'jquery-ui/themes/base/base.css';
import 'jquery-ui/themes/base/selectmenu.css';
import 'jquery-ui/themes/base/accordion.css';
import 'jquery-ui/themes/base/button.css';
import 'jquery-ui/themes/base/datepicker.css';
import 'jquery-ui/themes/base/draggable.css';
import 'jquery-ui/themes/base/progressbar.css';
import 'jquery-ui/themes/base/resizable.css';
import 'jquery-ui/themes/base/slider.css';
import 'jquery-ui/themes/base/tabs.css';
import 'jquery-ui/themes/base/tooltip.css';

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

