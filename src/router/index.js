import Vue from 'vue';
import Router from 'vue-router';

import Dashboard from '../views/Dashboard.vue';
import People from '../views/People.vue';
import Families from '../views/Families.vue';
import Events from '../views/Events.vue';

import PersonCreate from '../views/PersonCreate.vue';
import PersonEdit from '../views/PersonEdit.vue';

import FamilyCreate from '../views/FamilyCreate.vue';
import FamilyEdit from '../views/FamilyEdit.vue';

import EventCreate from '../views/EventCreate.vue';

import RelationshipCreate from '../views/RelationshipCreate.vue';

import FamilyTreeView from '../views/FamilyTree.vue';

import Import from '../views/Import.vue';

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
            path: '/people/create',
            name: 'person-create',
            component: PersonCreate
        },
        {
            path: '/people/:id/edit',
            name: 'person-edit',
            component: PersonEdit
        },
        {
            path: '/families',
            name: 'families',
            component: Families
        },
        {
            path: '/families/create',
            name: 'family-create',
            component: FamilyCreate
        },
        {
            path: '/families/:id/edit',
            name: 'family-edit',
            component: FamilyEdit
        },
        {
            path: '/events',
            name: 'events',
            component: Events
        },
        {
            path:'/events/create',
            name:'event-create',
            component:EventCreate
        },
        {
            path: '/relationships/create',
            name: 'relationship-create',
            component: RelationshipCreate
        },
        {
            path:'/tree',
            name:'family-tree',
            component:FamilyTreeView
        },
        {
            path:'/import',
            name:'import',
            component:Import
        }
    ]
});
