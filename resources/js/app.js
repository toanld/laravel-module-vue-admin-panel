import '../css/main.css';

import { createPinia } from 'pinia'
import { useStyleStore } from '@/Stores/style.js'
import { useLayoutStore } from '@/Stores/layout.js'

import { darkModeKey, styleKey } from '@/config.js'

import { createApp, h } from 'vue';
import { createInertiaApp, router } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

const pinia = createPinia()

createInertiaApp({
    progress: {
      color: '#4B5563',
    },
    title: (title) => `${title} - ${appName}`,
    //resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    resolve: (name) => {
        let page = null;

        let isModule = name.split("::");

        if (isModule.length > 1) {
            // let a =   import.meta.glob('@modules/Admin/Resources/Pages/Index.vue')['/modules/Admin/Resources/Pages/Index.vue']();
            let module = isModule[0];
            let pathTo = isModule[1];
            //console.log(module, pathTo);//Admin Resources/Pages/Index
            let key = `/Modules/${module}/${pathTo}.vue`;
            console.log('module');
            //let value = import.meta.glob('@modules/*/Resources/Pages/**/*.vue');
            let value = import.meta.glob('@modules/*/Resources/Pages/**/*.vue');
            page = resolvePageComponent(key, value);

        } else {
            page = resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue'));
        }
        return page;
    },
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(pinia)
            .use(ZiggyVue, Ziggy)
            .mount(el);
    },
});

const styleStore = useStyleStore(pinia)
const layoutStore = useLayoutStore(pinia)

/* App style */
styleStore.setStyle(localStorage[styleKey] ?? 'basic')

/* Dark mode */
if ((!localStorage[darkModeKey] && window.matchMedia('(prefers-color-scheme: dark)').matches) || localStorage[darkModeKey] === '1') {
  styleStore.setDarkMode(true)
}

/* Collapse mobile aside menu on route change */
router.on('navigate', (event) => {
  layoutStore.isAsideMobileExpanded = false
  layoutStore.isAsideLgActive = false
})
