import AdminHome from './components/admin/AdminHome.vue';
import CategoryList from './components/admin/category/index.vue';
export const routes = [
    { path: '/home', component:AdminHome  },
    { path: '/category-list', component:CategoryList  }
  ];
