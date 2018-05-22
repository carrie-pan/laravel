import VueRouter from 'vue-router';

const routes = [
  {
    path: '/',
    component: require('./components/Index')
  },
  {
    path: '/create',
    component: require('./components/Create')
  },
  {
    path: '/:id',
    component: require('./components/Show')
  },
  {
    path: '/:id/edit',
    component: require('./components/Edit')
  }
];

const router = new VueRouter({ routes });
export default router;