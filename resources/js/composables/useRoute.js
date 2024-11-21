import { router } from '@inertiajs/vue3'
import { route } from 'ziggy-js'

export function useRoute() {
    return route
}

export function useRouter() {
    return router
}
