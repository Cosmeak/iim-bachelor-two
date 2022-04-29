import { createRouter, createWebHistory } from "vue-router"

import Login from "./views/Login.vue"

import UsersIndex from "./views/users/Index.vue"
import UsersCreate from "./views/users/Create.vue"
import UsersEdit from "./views/users/Edit.vue"

import ObjectsIndex from "./views/objects/Index.vue"
import ObjectsCreate from "./views/objects/Create.vue"
import ObjectsEdit from "./views/objects/Edit.vue"

import RulesIndex from "./views/rules/Index.vue"
import RulesCreate from "./views/rules/Create.vue"
import RulesEdit from "./views/rules/Edit.vue"

import QuestionIndex from "./views/questions/Index.vue"
import QuestionCreate from "./views/questions/Create.vue"
import QuestionEdit from "./views/questions/Edit.vue"

const routes = [
    {
        name: 'Login',
        component: Login,
        path: '/login',
    },
    
    {
        name: 'UsersIndex',
        component: UsersIndex,
        path: '/users',
    },
    {
        name: 'UsersCreate',
        component: UsersCreate,
        path: '/users/create',
    },
    {
        name: 'UsersEdit',
        component: UsersEdit,
        path: '/users/{id}/edit',
    },

    {
        name: 'ObjectsIndex',
        component: ObjectsIndex,
        path: '/objects',
    },
    {
        name: 'ObjectsCreate',
        component: ObjectsCreate,
        path: '/objects/create',
    },
    {
        name: 'ObjectsEdit',
        component: ObjectsEdit,
        path: '/objects/{id}/edit',
    },

    {
        name: 'RulesIndex',
        component: RulesIndex,
        path: '/rules',
    },
    {
        name: 'RulesCreate',
        component: RulesCreate,
        path: '/rules/create',
    },
    {
        name: 'RulesEdit',
        component: RulesEdit,
        path: '/rules/{id}/edit',
    },

    {
        name: 'QuestionIndex',
        component: QuestionIndex,
        path: '/questions',
    },
    {
        name: 'QuestionCreate',
        component: QuestionCreate,
        path: '/questions/create',
    },
    {
        name: 'QuestionEdit',
        component: QuestionEdit,
        path: '/questions/{id}/edit',
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router