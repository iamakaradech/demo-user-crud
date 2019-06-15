import Index from '../pages/IndexPage'
import Show from '../pages/ShowPage'
import Edit from '../pages/EditPage'

const routes = [
    {
        path: '/',
        component: Index
    },
    {
        path: '/users/:uuid',
        component: Show
    },
    {
        path: '/users/:uuid/edit',
        component: Edit
    },
    {
        path: '*', redirect: '/'
    }
]

export default routes

