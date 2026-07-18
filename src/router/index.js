import Vue from 'vue';
import Router from 'vue-router';

import Dashboard from '../views/Dashboard.vue';
import People from '../views/People.vue';
import Families from '../views/Families.vue';
import Events from '../views/Events.vue';

Vue.use(Router);

export default new Router({
    mode: 'history',

    routes: [
        {
            path: '/',
            name: 'dashboard',
            component: Dashboard
        },
        {
            path: '/people',
            name: 'people',
            component: People
        },
        {
            path: '/families',
            name: 'families',
            component: Families
        },
        {
            path: '/events',
            name: 'events',
            component: Events
        }
    ]
});
