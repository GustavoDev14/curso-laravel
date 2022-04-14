require("./bootstrap");

// Scripts Site
import jQuery from "jquery";
window.$ = window.jQuery = jQuery;

import "bootstrap";
//import value from "./partials/value";

(($) => {
    $(() => {
        // Jquery Functions
    });
})(jQuery);

import Vue from "vue";
import axios from "axios";

Vue.prototype.$http = axios.create({ baseURL: window.baseURL });

const app = new Vue({
    el: "#app",
    components: {},
});
