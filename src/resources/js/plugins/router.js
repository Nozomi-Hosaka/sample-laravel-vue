import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

let routes = [];

import top from "../routes/top";

routes = routes.concat(top.routes);

import test from "../routes/test";

routes = routes.concat(test.routes);

import demo from "../routes/demo";

routes = routes.concat(demo.routes);

export default new VueRouter({
    mode: 'history',
    routes
});
