import { createRouter, createWebHistory } from "vue-router"

import DefaultLayout from "./layouts/DefaultLayout.vue"

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
        path:'/',
        redirect: to => {
            return {path: '/login'}
        }
    },
    
    {
        name: 'UsersIndex',
        component: UsersIndex,
        path: '/users',
        meta: { layout: DefaultLayout },
        children: [
            {
                name: 'UsersCreate',
                component: UsersCreate,
                path: 'create',
                meta: { layout: DefaultLayout },
                
            },
            {
                name: 'UsersEdit',
                component: UsersEdit,
                path: ':id/edit',
                meta: { layout: DefaultLayout },
            },
        ]
    },

    {
        name: 'ObjectsIndex',
        component: ObjectsIndex,
        path: '/objects',
        meta: { layout: DefaultLayout },
        children: [
            {
                name: 'ObjectsCreate',
                component: ObjectsCreate,
                path: 'create',
                meta: { layout: DefaultLayout },
                
            },
            {
                name: 'ObjectsEdit',
                component: ObjectsEdit,
                path: ':id/edit',
                meta: { layout: DefaultLayout },
            },
        ]
    },

    {
        name: 'RulesIndex',
        component: RulesIndex,
        path: '/rules',
        meta: { layout: DefaultLayout },
        children: [
            {
                name: 'RulesCreate',
                component: RulesCreate,
                path: 'create',
                meta: { layout: DefaultLayout },
                
            },
            {
                name: 'RulesEdit',
                component: RulesEdit,
                path: ':id/edit',
                meta: { layout: DefaultLayout },
            },
        ]
    },

    {
        name: 'QuestionIndex',
        component: QuestionIndex,
        path: '/questions',
        meta: { layout: DefaultLayout },
        children: [
            {
                name: 'QuestionCreate',
                component: QuestionCreate,
                path: 'create',
                meta: { layout: DefaultLayout },
                
            },
            {
                name: 'QuestionEdit',
                component: QuestionEdit,
                path: ':id/edit',
                meta: { layout: DefaultLayout },
            },
        ]
    },
    
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router