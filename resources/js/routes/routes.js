// Dashboard Show
import Dashboard from "../components/backend/Dashboard";

//Categories
import Manage from "../components/backend/category/Manage";
import Create from "../components/backend/category/Create";

export const routes = [
    { path:'/home', component: Dashboard },

    // Categories
    { path:'/categories', component: Manage },
    { path:'/add-category', component: Create },
];
