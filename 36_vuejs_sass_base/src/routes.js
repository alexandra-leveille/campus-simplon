/*jshint esversion: 6*/

import Home from "./components/pages/Home.vue";
import PageNotFound from "./components/pages/NotFound.vue";

export const routes = [
    {
        path: '/', label: "Accueil", name: "home",
        component: Home
    },
    {
        path: '/about', label: "About", name: "about",
        component: PageNotFound
    },
    {
        path: "*", label: "404", name:"404",
        component: PageNotFound
    }
];
