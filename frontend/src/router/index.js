import { createWebHistory, createRouter } from "vue-router";
import Register from "@/views/register";
import Home from "@/views/Home";
import Connection from "@/views/connection";
import Admin from "@/views/Admin";

const routes = [
    {
        path: "/",
        name: "Register",
        component: Register,
    },
    {
        path: "/register",
        name: "Register",
        component: Register,
    },
    {
        path: "/home",
        name: "Home",
        component: Home,
    },
    {
        path: "/connection",
        name: "Connection",
        component: Connection,
    },
    {
        path: "/admin",
        name: "Admin",
        component: Admin,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;